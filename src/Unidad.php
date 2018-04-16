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
    protected $puntosVida = 40,
              $nombre,
              $armadura,
              $arma,
              $registrador;

    /* Constructor */
    public function __construct( $nombre, Arma $arma, $registrador ) {
      $this -> nombre = $nombre;
      $this -> arma = $arma;
      $this -> armadura = new SinArmadura;        # 'SinArmadura' es como un objeto que actua como un 'placeholder' también se le conoce como 'Null Object'
      $this -> registrador = $registrador;

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
    # Asignar una Armadura
    public function setArmadura( Armadura $armadura = null ) {
      $this -> armadura = $armadura;

      return $this;    # Importante retornar la referencia del objeto al implementar la Interfaz Fluida
    }

    # Crear soldado (Método Factory)
    public static function crearSoldado( $nombre, $registrador ) {
        $soldado = new Unidad( $nombre, new EspadaBasica, $registrador );
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
      $this -> registrador -> info( "$this->nombre avanza hacia el $direccion" );
    }

    public function atacar( Unidad $oponente ) {
      $ataque = $this -> arma -> crearAtaque();
      $this -> registrador -> info( $ataque -> getDescripcion( $this, $oponente ) );
      $oponente -> danoOcasionado( $ataque  );
    }

    public function danoOcasionado( Ataque $ataque ) {

      # Fija el valor de puntos después de un ataque
      $this -> puntosVida = $this -> puntosVida - $this -> armadura -> absorberDanio( $ataque );
      $this -> registrador -> info( "$this->nombre ahora tiene $this->puntosVida puntos de vida" );

       # Valida si el oponente aún tiene puntos
       if( $this -> puntosVida <= 0 ) {
          $this -> muere();
       }
    }

    public function muere() {
      $this -> registrador -> info( "$this->nombre muere" );
      exit();
    }
    # NOTA: Las clases no deben imprimir mensajes, pero lo haremos para realizar el ejemplo
  }
