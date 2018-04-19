<?php
    namespace MetodosMagicos;

    use MetodosMagicos\Models\Model;

    class Usuario extends Model {

        /* Propiedades (Atributos)*/
        private $claveBaseDatos = 'secreto';        # Un atributo de este tipo no debería ir aquí, pero es parte del ejemplo
        private $nombreBaseDatos = 'DB_TiendaVirtual';

        /* Métodos mágicos */
        public function __sleep() {

            return [ 'atributos' ];        # Retorna solo las propiedades que se desean visualizar ($atributos es una propiedad de la clase padre)
        }

        /* Método Dinámico */
        public function getNombreAtributo( $valor ) {

            return strtoupper( $valor );        # Retorma el valor en mayúsculas
        }
    }
