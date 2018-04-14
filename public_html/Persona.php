<?php

/**
 *  Clase Tradicional
 */
class Persona {
    /* Propiedades (Atributos) */
    protected static $nombre;

    /* Constructor */
    public function __construct( $nombre ) {
        static :: $nombre = $nombre;
    }

    /* Getters */
    public function getNombre() {
        return static :: $nombre;
    }

}

/* Instancias */
$melisa = new Persona( 'Melisa' );
$alejandro = new Persona( 'Alejandro' );

echo "<p>{$melisa->getNombre()} y {$alejandro->getNombre()}</p>";    // Alejandro y Alejandro

/* NOTA: Esto pasa por que la propiedad 'nombre' ya no está disponible como parte de cada instancia de cada objeto.
         Ahora es parte global de la clase como tal, no de las instancias de cada objeto que se pueda crear */
