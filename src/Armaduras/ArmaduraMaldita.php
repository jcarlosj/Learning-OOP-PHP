<?php
  namespace Juego\Armaduras;

  use Juego\Armadura;
  use Juego\Ataque;

  # Clase 'Armadura Maldita' (mas bajo nivel de protección que la armadura de Bronce, duplica el daño) hereda de la clase Armadura
  class ArmaduraMaldita extends Armadura {
    /* Métodos (Acciones) */
    public function absorberDanio( Ataque $ataque ) {
      return $ataque -> getDanio() * 2;
    }

  }
