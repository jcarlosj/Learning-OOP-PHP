<?php
    namespace Juego;

    class RegistradorHTML {

        # Función para evitar la duplicación del código
        public static function info( $mensaje ) {
            echo "<p>$mensaje</p>";
        }
    }
