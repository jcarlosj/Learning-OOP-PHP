<?php
    namespace Juego;

    class Log {
        /* Propiedades (Atributos) */
        protected static $registrador;

        public static function setRegistrador( $registrador ) {
            static :: $registrador = $registrador;
        }

        # Función que implementa un 'Facade' (Fachada) para utilizar: RegistradorHTML o RegistradorArchivo
        public static function info( $mensaje ){
            # Facade (Fachada)
            static :: $registrador -> info( $mensaje );     # Llama al método info del Registrador (Logger) que esté actualmente asignado
        }
    }
