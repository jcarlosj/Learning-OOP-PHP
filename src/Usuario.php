<?php
    namespace MetodosMagicos;

    use MetodosMagicos\Models\Model;

    class Usuario extends Model {

        /* Propiedades (Atributos)*/
        private $claveBaseDatos = 'secreto';        # Un atributo de este tipo no debería ir aquí, pero es parte del ejemplo

        /* Método Dinámico */
        public function getNombreAtributo( $valor ) {

            return strtoupper( $valor );        # Retorma el valor en mayúsculas
        }
    }
