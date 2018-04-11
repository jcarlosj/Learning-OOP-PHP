<?php
  namespace Juego\Armaduras;

  use Juego\Armadura;
  use Juego\Ataque;

  # Clase 'Armadura de Bronce' (básica de bajo nivel de protección, absorbe la 1/2 del daño) hereda de la clase Armadura
  class ArmaduraBronce extends Armadura {
    /* Métodos (Acciones) */
    public function absorberDanio( Ataque $ataque ) {
      return $ataque -> getDanio() / 2;
    }

  }
