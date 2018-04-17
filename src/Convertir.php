<?php
    namespace MetodosMagicos;

    class Convertir {

        public static function camelCase( $cadena ) {
            # $cadena = primer_nombre, la convierte en: PrimerNombre
            $resultado = ucwords( str_replace( '_', ' ', $cadena ) );

            return str_replace( ' ', '', $resultado );
        }
    }
