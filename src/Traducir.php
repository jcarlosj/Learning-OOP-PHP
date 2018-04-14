<?php
    namespace Juego;

    class Traducir {
        /* Propiedades (Atributos) */
        protected static $mensajes = [                                          # Usamos 'Placeholder' (:unidad, :oponente) al adicionar los dos puntos
            'AtaqueArcoBasico'   => ':unidad dispara una flecha a :oponente',
            'AtaqueArcoDeFuego'  => ':unidad dispara una flecha de fuego a :oponente',
            'AtaqueBallesta'     => ':unidad lanza una ballesta a :oponente',
            'AtaqueEspadaBasica' => ':unidad ataca con la espada a :oponente'
        ];

        public static function get( $id_mensaje, array $parametros = array() ) {

            # Valida si el mensaje NO existe
            if( ! static :: has( $id_mensaje ) ) {
                return "[ $id_mensaje ]";
            }

            return static :: reemplazarParametros( static :: $mensajes[ $id_mensaje ], $parametros );
        }

         # Función que Valida si el mensaje NO existe un mensaje
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
