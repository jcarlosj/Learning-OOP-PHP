/<?php
  /* Programación orientada a objetos */

  # Clase
  class Persona {
    /* Atributos */
    private $nombre,
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
  echo "{$persona1->nombre $persona1->apellido} es amiga de {$persona2 -> nombreCompleto()}";

  /* NOTA: En el mensaje NO podemos acceder las propiedades o atributos del objeto
          'persona1' debido a que los mismos tienen un modificador de acceso
          (ámbito) privado. Genera un ERROR, pero nos protege de accederlo o cambiarlo
          directamente. */
?>
