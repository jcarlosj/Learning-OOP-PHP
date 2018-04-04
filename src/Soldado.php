<?php
  namespace Juego;

  use Warcraft\Armadura;

  # Clase Hijo hereda de la clase 'Unidad'
  class Soldado extends Unidad {
    /* Propiedades (Atributos) */
    private $puntosDanio = 40,
            $armadura;

    /* Constructor */
    public function __construct( $nombre ) {
      parent :: __construct( $nombre );
    }

    /* Métodos (Acciones) */
    public function atacar( Unidad $oponente ) {
       show( "$this->nombre ataca con la espada a {$oponente->getNombre()}" );

       $oponente -> danoOcasionado( $this -> puntosDanio );

    }

    protected function absorberDanio( $danio ) {
        # Valida si el soldado tiene una Armadura
        if( $this -> armadura ) {
          $danio = $this -> armadura -> absorberDanio( $danio );
        }

        return $danio;
    }

    /* NOTA: Basado en el 1er Principio de la POO se le indica al objeto que hacer, a través de un comando o instrucción
             evitando crear cadenas de condicionales donde se pregunte por una información obtenida y se actue de acuerdo 
             a esta haciendo uso de lo que llamamos 'Procedimientos estructurados' */

    # Setter
    # Asignar una Armadura al Soldado
    public function setArmadura( Armadura $armadura = null ) {
      $this -> armadura = $armadura;
    }         
  }