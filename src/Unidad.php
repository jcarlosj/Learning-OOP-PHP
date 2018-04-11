<?php
  namespace Juego;

  /* Clase Padre
     Como esta clase es en sí un concepto genérico de lo que se desea representar.
     No representa nada concreto entonces la declaramos como una clase abstracta,
     de manera que no podrá ser instanciada si no a través de las clases hijas  */
  class Unidad {
    /* Propiedades (Atributos) */
    protected $puntosVida = 40,
              $nombre,
              $armadura,
              $arma;

    /* Constructor */
    public function __construct( $nombre, Arma $arma ) {
      $this -> nombre = $nombre;
      $this -> arma = $arma;
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
    }

    # Asignar un Arma
    public function setArma( Arma $arma ) {
      $this -> arma = $arma;
    }

    /* Métodos (Acciones) */
    public function mover( $direccion ) {
      show( "$this->nombre avanza hacia el $direccion" );
    }

    public function atacar( Unidad $oponente ) {
      $ataque = $this -> arma -> crearAtaque();
      show( $ataque -> getDescripcion( $this, $oponente ) );
      $oponente -> danoOcasionado( $ataque  );
    }

    public function danoOcasionado( Ataque $ataque ) {

      # Fija el valor de puntos después de un ataque
      $this -> puntosVida = $this -> puntosVida - $this -> absorberDanio( $ataque );
      show( "$this->nombre ahora tiene $this->puntosVida puntos de vida" );

       # Valida si el oponente aún tiene puntos
       if( $this -> puntosVida <= 0 ) {
          $this -> muere();
       }
    }

    protected function absorberDanio( Ataque $ataque ) {
        # Valida si el soldado tiene una Armadura
        if( $this -> armadura ) {
          return $this -> armadura -> absorberDanio( $ataque );
        }

        return $ataque -> getDanio();
    }

    public function muere() {
      show( "$this->nombre muere" );
      exit();
    }
    # NOTA: Las clases no deben imprimir mensajes, pero lo haremos para realizar el ejemplo
  }
