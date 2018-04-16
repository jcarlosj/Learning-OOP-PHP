<?php
    namespace Juego;

    class RegistradorHTML implements Registrador {

        # Función para evitar la duplicación del código
        public function info( $mensaje ) {
            echo "<p>$mensaje</p>";
        }
    }
