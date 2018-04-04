<?php
  namespace Juego;

  use Warcraft\Armadura;

  # Clase 'Armadura de Bronce' (básica de bajo nivel de protección, absorbe la 1/2 del daño) que implementa la interface de una Armadura
  class ArmaduraBronce implements Armadura {
    /* Métodos (Acciones) */
    public function absorberDanio( $danio ) {
      return $danio / 2;
    }

  }