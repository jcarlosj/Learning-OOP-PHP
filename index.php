<?php
  /* Programación orientada a objetos */

  # Clase
  class Persona {
    /* Atributos */
    private $nombre,                # Encapsula al cambiar el modificador de acceso
            $apellido;

    /* Constructor */
    public function __construct( $nombre, $apellido ) {
      $this -> nombre = $nombre;
      $this -> apellido = $apellido;
    }

    /* Método */
    public function nombreCompleto() {
      return "$this->nombre $this->apellido";
    }

    /* Getters */
    public function getPrimerNombre() {
      return $this -> nombre;
    }

    public function getPrimerApellido() {
      return $this -> apellido;
    }
  }

  # Instancias
  $persona1 = new Persona( 'Melisa', 'Sánchez' );
  $persona2 = new Persona( 'Juan', 'Herrera' );

  # Mensaje
  echo "{$persona1->getPrimerNombre()} {$persona1->getPrimerApellido()} es amiga de {$persona2 -> nombreCompleto()}";

  /* NOTA: En el mensaje podemos acceder las propiedades o atributos del objeto
          'persona1' haciendo uso de los Getters, métodos que permiten acceder al
          valor contenido en una propiedad de la clase */
?>
