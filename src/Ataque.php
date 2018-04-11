<?php
    namespace Juego;

    class Ataque {
        /* Propiedades (Atributos) */
        protected $danio,
                  $magico,
                  $descripcion;

        /* Constructor */
        public function __construct( $danio, $magico, $descripcion ) {
          $this -> danio = $danio;
          $this -> magico = $magico;
          $this -> descripcion = $descripcion;
        }

        /* Getters */
        public function getDanio() {
            return $this -> danio;
        }

        public function getDescripcion( Unidad $atacante, Unidad $oponente ) {
            # Retorna los nombres del atacante y el oponente reemplazando los 'placeholder' encontrados en la cadena
            return str_replace(
                [ ':unidad', ':oponente' ],
                [ $atacante -> getNombre(), $oponente -> getNombre() ],
                $this -> descripcion
            );


        }

        /* Métodos */
        public function isMagico() {
            return $this -> magico;
        }

        public function isFisico() {
            return ! $this -> magico;
        }
    }
