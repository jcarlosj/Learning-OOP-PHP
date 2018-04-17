<?php
    namespace MetodosMagicos;

    use MetodosMagicos\Models\Model;

    class Usuario {
        /* Propiedades (Atributos) */
        protected $atributos = [];

        /* Constructor */
        public function __construct( array $atributos = [] ) {
            $this -> atributos = $atributos;
        }

        /* Métodos Mágicos de PHP */
        public function __get( $nombre_propiedad ) {
            return $this -> atributos[ $nombre_propiedad ];            # Propiedades Mágicas
        }
    }
