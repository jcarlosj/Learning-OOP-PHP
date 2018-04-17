<?php
    namespace MetodosMagicos\Models;

    use MetodosMagicos\Convertir;

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

            $valor = $this -> getValorAtributo( $nombre_propiedad );

            # Define el nombre del método 'Getter' dinámicamente
            $metodo = 'get' .Convertir :: camelCase( $nombre_propiedad ). 'Atributo';

            # Verifica si el método existe en las clases hijas
            if( method_exists( $this, $metodo ) ) {
                # Usamos el nombre variable $metodo para referirnos al método de la clase para llamarlo dinámicamente
                return $this -> $metodo( $valor );
            }

            return $valor;            // Si el método no existe, por que la propiedad tampoco existe retornará 'null'
        }

        protected function getValorAtributo( $nombre_propiedad ) {
            # Valida si el campo $nombre_propiedad existe en el 'Array' de atributos
            if( array_key_exists( $nombre_propiedad, $this -> atributos ) ) {
                # Obtener el valor contenido dentro del 'Array' de propiedades de la clase
                return $this -> atributos[ $nombre_propiedad ];
            }

            return null;        # O eliminarlo ya que PHP retorna por defecto NULL
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
