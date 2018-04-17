<?php
    namespace MetodosMagicos;

    use MetodosMagicos\Models\Model;

    class Usuario {
        /* Propiedades (Atributos) */
        protected $atributos = [];

        /* Constructor */
        public function __construct( array $atributos = [] ) {
            $this -> setAtributos( $atributos );
        }

        /* Obtiene todos las propiedades de la clase */
        public function getAtributos() {
            return $this -> atributos;
        }
        /* Fija todos las propiedadas de la clase a través de un 'Array' */
        public function setAtributos( array $atributos = [] ) {
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
        /* Fija el valor de una propiedad */
        public function setAtributo( $nombre_propiedad, $valor ) {

            return $this -> atributos[ $nombre_propiedad ] = $valor;
        }

        /* Métodos Mágicos de PHP */
        public function __get( $nombre_propiedad ) {

            return $this -> getAtributo( $nombre_propiedad );
        }

        public function __set( $nombre_propiedad, $valor ) {

            return $this -> setAtributo( $nombre_propiedad, $valor );
        }
        /* NOTA: Es una buena práctica extraer la lógica de los métodos mágicos
                 y delegarsela a un método corriente. Todos los métodos mágicos
                 de PHP van precedidos de __ (dos guiones bajos)*/
    }
