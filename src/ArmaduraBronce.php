<?php
  namespace Juego;

  use Warcraft\Armadura as ArmaduraWarcraft;
  #use GameOfThrones\Armadura as ArmaduraGameOfThrones;

  # Clase 'Armadura de Bronce' (básica de bajo nivel de protección, absorbe la 1/2 del daño) que implementa la interface de una Armadura
  class ArmaduraBronce implements ArmaduraWarcraft {
    /* Métodos (Acciones) */
    public function absorberDanio( $danio ) {
      return $danio / 2;
    }

  }