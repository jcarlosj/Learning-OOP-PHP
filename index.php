<?php
  /* Programación orientada a objetos */

  /* Función */
  function nombreCompleto( $nombre, $apellido ) {
    return "$nombre $apellido";
  }

  # Clase
  class Persona {
    /* Atributos */
    var $nombre,
        $apellido;
  }

  # Instancias
  $persona1 = new Persona;
  $persona1 -> nombre = 'Melisa';
  $persona1 -> apellido = 'Sánchez';

  $persona2 = new Persona;
  $persona2 -> nombre = 'Juan';
  $persona2 -> apellido = 'Herrera';

  # Mensaje
  echo nombreCompleto( $persona1 -> nombre, $persona1 -> apellido ) ." es amiga de ". nombreCompleto( $persona2 -> nombre, $persona2 -> apellido );
?>
