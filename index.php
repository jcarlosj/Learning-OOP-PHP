<?php
  /* Programación orientada a objetos */

  # Clase
  class Persona {
    /* Atributos */
    public $nombre,
           $apellido;

    /* Constructor */
    public function __construct( $nombre, $apellido ) {
      $this -> nombre = $nombre;
      $this -> apellido = $apellido;
    }

    /* Función */
    public function nombreCompleto() {
      return "$this->nombre $this->apellido";
    }
  }

  # Instancias
  $persona1 = new Persona( 'Melisa', 'Sánchez' );
  $persona2 = new Persona( 'Juan', 'Herrera' );

  # Mensaje
  echo "{$persona1 -> nombreCompleto()} es amiga de {$persona2 -> nombreCompleto()}";
?>
