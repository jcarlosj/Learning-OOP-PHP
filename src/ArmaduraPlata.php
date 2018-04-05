<?php
  namespace Juego;

  # Clase 'Armadura de Plata' (mas alto nivel de protección que la armadura de Bronce, absorbe la 2/3 del daño) que implementa la interface de una Armadura
  class ArmaduraPlata implements Armadura {
    /* Métodos (Acciones) */
    public function absorberDanio( $danio ) {
      return $danio / 3;
    }

  }