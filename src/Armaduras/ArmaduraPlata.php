<?php
  namespace Juego\Armaduras;

  use Juego\Armadura;
  use Juego\Ataque;

  # Clase 'Armadura de Plata' (mas alto nivel de protección que la armadura de Bronce, absorbe la 2/3 del daño) que implementa la interface de una Armadura
  class ArmaduraPlata implements Armadura {
    /* Métodos (Acciones) */
    public function absorberDanio( Ataque $ataque ) {

      # Valida si el tipo de ataque es 'físico' o 'mágico'
      if( $ataque -> isFisico() ) {
        return $ataque -> getDanio() / 3;
      }
      else {
        return $ataque -> getDanio();
      }

    }

  }
