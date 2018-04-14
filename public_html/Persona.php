<?php

/**
 *  Clase Tradicional
 */
class Persona {
    /* Propiedades (Atributos) */
    protected $nombre;

    /* Constructor */
    public function __construct( $nombre ) {
        $this -> nombre = $nombre;
    }

    /* Getters */
    public function getNombre() {
        return $this -> nombre;
    }

}

/* Instancias */
$melisa = new Persona( 'Melisa' );
$alejandro = new Persona( 'Alejandro' );

echo "<p>{$melisa->getNombre()} y {$alejandro->getNombre()}</p>";
