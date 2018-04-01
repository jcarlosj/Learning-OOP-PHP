<?php
  /* Programación orientada a objetos */

  # Clase
  class Persona {
    /* Atributos */
    var $nombre,
        $apellido;

    /* Función */
    function nombreCompleto() {
      return "$this->nombre $this->apellido";
    }
  }

  # Instancias
  $persona1 = new Persona;
  $persona1 -> nombre = 'Melisa';
  $persona1 -> apellido = 'Sánchez';

  $persona2 = new Persona;
  $persona2 -> nombre = 'Juan';
  $persona2 -> apellido = 'Herrera';

  # Mensaje
  echo "{$persona1 -> nombreCompleto()} es amiga de {$persona2 -> nombreCompleto()}";
?>
