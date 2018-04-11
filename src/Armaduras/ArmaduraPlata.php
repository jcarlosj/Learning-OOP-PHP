<?php
  namespace Juego\Armaduras;

  use Juego\Armadura;
  use Juego\Ataque;

  # Clase 'Armadura de Plata' (mas alto nivel de protección que la armadura de Bronce, absorbe la 2/3 del daño) hereda de la clase Armadura
  class ArmaduraPlata extends Armadura {
    /* Métodos (Acciones) */
    public function absorberDanio( Ataque $ataque ) {

        return $ataque -> getDanio() / 3;
    }

  }
