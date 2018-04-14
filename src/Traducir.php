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
            if( ! isset( static :: $mensajes[ $id_mensaje ] ) ) {
                return "[ $id_mensaje ]";
            }

            # Existe mensaje
            $mensaje = static :: $mensajes[ $id_mensaje ];    # Asigna mensaje a una variable temporal local al método

            # Recorre los paŕametros para reemplazar para uno por su valor
            foreach ( $parametros as $key => $value ) {
                $mensaje = str_replace( ":$key", $value, $mensaje );
            }

            return $mensaje;
        }
    }
