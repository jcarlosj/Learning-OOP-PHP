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

        /* Obtiene el valor de una propiedad */
        public function getAtributo( $nombre_propiedad ) {

            if( array_key_exists( $nombre_propiedad, $this -> atributos ) ) {
                # En caso de existir el campo del 'Array' retornamos el valor contenido
                return $this -> atributos[ $nombre_propiedad ];
            }
            # En caso de no existir el campo del 'Array' PHP por defecto retorna null
        }

        /* Métodos Mágicos de PHP */
        public function __get( $nombre_propiedad ) {
            return $this -> getAtributo( $nombre_propiedad );
            /* NOTA: Es una buena práctica extraer la lógica de los métodos mágicos y delegarsela a un método corriente */
        }
    }
