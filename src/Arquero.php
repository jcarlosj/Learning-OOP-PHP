<?php
  namespace Juego;

  use Juego\Armas\Arco;

  # Clase Hijo hereda de la clase 'Unidad'
  class Arquero extends Unidad {
      /* Constructor */
      public function __construct( $nombre, Arco $arma ) {
        parent :: __construct( $nombre, $arma );
      }
  }
