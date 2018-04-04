<?php
  # Clase Hijo hereda de la clase 'Unidad'
  class Arquero extends Unidad {
    /* Propiedades (Atributos) */
    private $puntosDanio = 20;

    /* Métodos (Acciones) */
    public function atacar( Unidad $oponente ) {
       show( "$this->nombre dispara una flecha a {$oponente->getNombre()}" );

       $oponente -> danoOcasionado( $this -> puntosDanio );

    }
  }