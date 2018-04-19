<?php
    namespace MetodosMagicos;

    class Lonchera {
        /* Propiedades (Atributos) */
        protected $comida = [];

        /* Constructor */
        public function __construct( array $comida = [] ) {
            $this -> comida = $comida;
        }

        public function consumir() {

            return array_shift( $this -> comida );
        }

        public function isEmpty() {

            return empty( $this -> comida );
        }
    }
