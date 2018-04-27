<?php
    namespace MetodosMagicos;

    class HTMLBuilder {

        public function hr() {

            return "<hr/>";
        }

        /* Métodos para generar etiquetas HTML */
        public function success( $message ) {

            return "<p style='background-color: #DFF0D8; border-color: #D0E9C6; color: #3C763D; padding: 10px;'>{$message}</p>";
        }

    }
