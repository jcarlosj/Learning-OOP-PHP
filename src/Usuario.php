<?php
    namespace MetodosMagicos;

    use MetodosMagicos\Models\Model;

    class Usuario extends Model {

        /* */
        public function getNombreAtributo( $valor ) {

            return strtoupper( $valor );        # Retorma el valor en mayúsculas
        }
    }
