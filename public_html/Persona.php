<?php
    /* Programación orientada a objetos */
    namespace MetodosMagicos;

    use MetodosMagicos\NodoHTML;

    # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
    require '../vendor/autoload.php';

    class Persona {
      public $nombre;
      public $enlinea = false;
      public $id;

      public function __construct( $nombre ) {
          $this -> nombre = $nombre;
      }

      public function is( $otraPersona ) {

          return $this -> id == $otraPersona -> id;
      }
    }

    # Objetos que representan a una entidad (No 'Value Objects')
    $elisa = new Persona( 'Elisa' );            # Instancia 1
    $elisa -> enlinea = true;                   # Estado
    $elisa -> id = 1;                           # ID del objeto

    $elisa2 = new Persona( 'Elisa' );           # Instancia 2
    $elisa2 -> id = 1;                           # ID del objeto

    # En este caso las validaciones hay que hacerlas a las propiedades más relevantes del objeto y no entre los simples objetos entre sí
    echo $elisa -> is( $elisa2 ) ? 'VERDADERO' : 'FALSO';
