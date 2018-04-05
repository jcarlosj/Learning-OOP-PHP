<?php
  namespace Juego;

  # Clase Hijo hereda de la clase 'Unidad'
  class Soldado extends Unidad {
    /* Propiedades (Atributos) */
    private $puntosDanio = 40;

    /* Métodos (Acciones) */
    public function atacar( Unidad $oponente ) {
       show( "$this->nombre ataca con la espada a {$oponente->getNombre()}" );

       $oponente -> danoOcasionado( $this -> puntosDanio );

    }

    /* NOTA: Basado en el 1er Principio de la POO se le indica al objeto que hacer, a través de un comando o instrucción
             evitando crear cadenas de condicionales donde se pregunte por una información obtenida y se actue de acuerdo 
             a esta haciendo uso de lo que llamamos 'Procedimientos estructurados' */
        
  }