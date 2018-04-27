<?php
    namespace MetodosMagicos;

    class HTMLBuilder extends \paquete_externo\HTMLBuilder {

        /* Métodos para generar etiquetas HTML desde nuestra clase usando la funcionalidad de un pequete externo desarrollado por terceros */
        public function success( $message ) {

            return "<p style='background-color: #DFF0D8; border-color: #D0E9C6; color: #3C763D; padding: 10px;'>{$message}</p>";
        }

    }
