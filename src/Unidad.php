<?php
  namespace Juego;

  use Juego\Armaduras\SinArmadura;
  use Juego\Armaduras\ArmaduraBronce;
  use Juego\Armas\EspadaBasica;

  /* Clase Padre
     Como esta clase es en sí un concepto genérico de lo que se desea representar.
     No representa nada concreto entonces la declaramos como una clase abstracta,
     de manera que no podrá ser instanciada si no a través de las clases hijas  */
  class Unidad {
    /* Propiedades (Atributos) */
    const DANIO_MAXIMO = 100;

    protected $puntosVida = 40,
              $nombre,
              $armadura,
              $arma;

    /* Constructor */
    public function __construct( $nombre, Arma $arma ) {
      $this -> nombre = $nombre;
      $this -> arma = $arma;
      $this -> armadura = new SinArmadura;        # 'SinArmadura' es como un objeto que actua como un 'placeholder' también se le conoce como 'Null Object'

      /* NOTA: En este caso apesar de que estamos obligando a que cada instancia de Unidad instancie en su propiedad armadura un mismo objetos
               no representa una mala práctica ya que el método 'setArmadura' nos da la flexibilidad para cambiar dicha instancia  */
    }

    /* Getter */
    public function getNombre() {
      return $this -> nombre;
    }

    public function getPuntos() {
      return $this -> puntosVida;
    }

    # Setter
    protected function setPuntos( $danio ) {
        if( $danio > static :: DANIO_MAXIMO ) {
          $danio = static :: DANIO_MAXIMO;          # Máximo daño que puede recibir una unidad por ataque
        }

        $this -> puntosVida = $this -> puntosVida - $danio;
    }

    # Asignar una Armadura
    public function setArmadura( Armadura $armadura = null ) {
      $this -> armadura = $armadura;

      return $this;    # Importante retornar la referencia del objeto al implementar la Interfaz Fluida
    }

    # Crear soldado (Método Factory)
    public static function crearSoldado( $nombre ) {
        $soldado = new Unidad( $nombre, new EspadaBasica );
        $soldado -> setArmadura( new ArmaduraBronce );

        return $soldado;
    }

    # Asignar un Arma
    public function setArma( Arma $arma ) {
      $this -> arma = $arma;

      return $this;    # Importante retornar la referencia del objeto al implementar la Interfaz Fluida
    }

    # Asignar un Escudo
    public function setEscudo() {

      return $this;    # Importante retornar la referencia del objeto al implementar la Interfaz Fluida
    }

    /* Métodos (Acciones) */
    public function mover( $direccion ) {
      Log :: info( "$this->nombre avanza hacia el $direccion" );
    }

    public function atacar( Unidad $oponente ) {
      $ataque = $this -> arma -> crearAtaque();
      Log :: info( $ataque -> getDescripcion( $this, $oponente ) );
      $oponente -> danoOcasionado( $ataque  );
    }

    public function danoOcasionado( Ataque $ataque ) {

      # Fija el valor de puntos después de un ataque
      $this -> setPuntos( $this -> armadura -> absorberDanio( $ataque ) );
      Log :: info( "$this->nombre ahora tiene $this->puntosVida puntos de vida" );

       # Valida si el oponente aún tiene puntos
       if( $this -> puntosVida <= 0 ) {
          $this -> muere();
       }
    }

    public function muere() {
      Log :: info( "$this->nombre muere" );
      exit();
    }
    # NOTA: Las clases no deben imprimir mensajes, pero lo haremos para realizar el ejemplo
  }
