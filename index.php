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

    /* Setters */
    public function setPrimerNombre( $nombre ) {
      $this -> nombre = $nombre;
    }

    public function setPrimerApellido( $apellido ) {
      $this -> apellido = $apellido;
    }

  }

  # Instancias
  $persona1 = new Persona( 'Melisa', 'Sánchez' );
  $persona2 = new Persona( 'Juan', 'Herrera' );

  # Mensaje
  echo "{$persona1->getPrimerNombre()} {$persona1->getPrimerApellido()} es amiga de {$persona2 -> nombreCompleto()} <br />";

  # Cambia Nombre y Apellido del objeto 'persona1'
  $persona1 -> setPrimerNombre( 'Bryan' );
  $persona1 -> setPrimerApellido( 'Muñoz' );

  /* NOTA: Podemos modificar las propiedades o atributos del objeto 'persona1'
           haciendo uso de los Setters, métodos que permiten cambiar el valor
           contenido en una propiedad de la clase */

   # Mensaje
   echo "{$persona1->getPrimerNombre()} {$persona1->getPrimerApellido()} es amigo de {$persona2 -> nombreCompleto()}";
?>
