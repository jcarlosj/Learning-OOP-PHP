<?php

/**
 *  Clase Tradicional
 */
class Persona {
    /* Propiedades (Atributos) */
    protected static $nombre = 'Melisa';

    /* Constructor */
    public function __construct( $nombre ) {
        static :: $nombre = $nombre;
    }

    /* Getter Static */
    public static function getNombre() {
        return static :: $nombre;
    }

}

exit( Persona :: getNombre() );        // Melisa
