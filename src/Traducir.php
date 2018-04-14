<?php
    namespace Juego;

    class Traducir {
        /* Propiedades (Atributos) */
        protected static $mensajes = [];

        # Función estática para fijar mensajes
        public static function set( array $mensajes ) {
            static :: $mensajes = $mensajes;
        }

        # Función estática para obtener mensajes
        public static function get( $id_mensaje, array $parametros = array() ) {

            # Valida si el mensaje NO existe
            if( ! static :: has( $id_mensaje ) ) {
                return "[ $id_mensaje ]";
            }

            return static :: reemplazarParametros( static :: $mensajes[ $id_mensaje ], $parametros );
        }

         # Función estática que Valida si el mensaje NO existe un mensaje
         private static function has( $id_mensaje ) {
             return isset( static :: $mensajes[ $id_mensaje ] );
         }

         # Función que reeemplaza los Parámetros del mensaje
         private static function reemplazarParametros( $mensaje, array $parametros ) {

             # Recorre los paŕametros para reemplazar para uno por su valor
             foreach ( $parametros as $key => $value ) {
                 $mensaje = str_replace( ":$key", $value, $mensaje );
             }

             return $mensaje;
         }
    }
