<?php
    namespace MetodosMagicos;

    use MetodosMagicos\Models\Model;

    class Usuario {
        /* Constructor */
        public function __construct( array $atributos = [] ) {

            /* Recorre el 'Array' para crear propiedades de forma dinámica en la clase */
            foreach ( $atributos as $key => $value ) {
                $this -> $key = $value;
            }
        }
    }
