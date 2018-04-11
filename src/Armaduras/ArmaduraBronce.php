<?php
  namespace Juego\Armaduras;

  use Juego\Armadura;
  use Juego\Ataque;

  # Clase 'Armadura de Bronce' (básica de bajo nivel de protección, absorbe la 1/2 del daño) que implementa la interface de una Armadura
  class ArmaduraBronce implements Armadura {
    /* Métodos (Acciones) */
    public function absorberDanio( Ataque $ataque ) {
      return $ataque -> getDanio() / 2;
    }

  }
