<?php
    namespace Juego;

    class Ataque {
        /* Propiedades (Atributos) */
        protected $danio,
                  $magico,
                  $id_mensaje;

        /* Constructor */
        public function __construct( $danio, $magico, $id_mensaje ) {
          $this -> danio = $danio;
          $this -> magico = $magico;
          $this -> id_mensaje = $id_mensaje;
        }

        /* Getters */
        public function getDanio() {
            return $this -> danio;
        }

        public function getDescripcion( Unidad $atacante, Unidad $oponente ) {

            # Retorna descripción o mensaje descriptivo del ataque
            return Traducir :: get(
                $this -> id_mensaje,     # ID del mensaje
                [                         # Parámetros
                    'unidad'   => $atacante -> getNombre(),     # Nombre de la unidad atacante
                    'oponente' => $oponente -> getNombre()      # Nombre de la unidad oponente
                ]
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
