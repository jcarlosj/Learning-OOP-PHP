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
            # Valida si esta definida la propiedad antes de retornar el valor
            return isset( $this -> atributos[ $nombre_propiedad ] )            # Propiedades Mágicas
                    ? $this -> atributos[ $nombre_propiedad ]                  # Si está definido retorna el valor
                    : null;                                                    # Si NO está definido retorna null
        }
    }
