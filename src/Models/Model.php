<?php
    namespace MetodosMagicos\Models;

    abstract class Model {

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
                # Obtener el valor contenido dentro del 'Array' de propiedades de la clase
                $valor =  $this -> atributos[ $nombre_propiedad ];
            }
            else {
                $valor = null;
            }

            return $valor;
        }
        /* Fija el valor de una propiedad */
        public function setAtributo( $nombre_propiedad, $valor ) {

            return $this -> atributos[ $nombre_propiedad ] = $valor;
        }
        /* Valida si está definida una propiedad mágica específica */
        public function hasAtributo( $nombre_propiedad ) {

            # Valida si está definida una propiedad mágica
            return isset( $this -> atributos[ $nombre_propiedad ] );
        }

        /* Métodos Mágicos de PHP */
        public function __get( $nombre_propiedad ) {

            return $this -> getAtributo( $nombre_propiedad );
        }

        public function __set( $nombre_propiedad, $valor ) {

            return $this -> setAtributo( $nombre_propiedad, $valor );
        }

        public function __isset( $nombre_propiedad ) {

            return $this -> hasAtributo( $nombre_propiedad );
        }

        public function __unset( $nombre_propiedad ) {
            # Eliminar propiedades mágicas específicas
            unset( $this -> atributos[ $nombre_propiedad ] );
        }
        /* NOTA: Es una buena práctica extraer la lógica de los métodos mágicos
                 y delegarsela a un método corriente. Todos los métodos mágicos
                 de PHP van precedidos de __ (dos guiones bajos)*/

    }
