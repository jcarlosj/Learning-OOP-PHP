<?php
  /* Programación orientada a objetos */

  # Clase
  class Persona {
    /* Atributos */
    private $nombre,                # Encapsula al cambiar el modificador de acceso
            $apellido,
            $nickname,
            $changedNickname = 0;

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

    public function getNickname() {
      # Siempre devuelte los apodos en minúsculas
      return strtolower( $this -> nickname );
    }

    /* Setters */
    public function setPrimerNombre( $nombre ) {
      $this -> nombre = $nombre;
    }

    public function setPrimerApellido( $apellido ) {
      $this -> apellido = $apellido;
    }

    public function setNickname( $nickname ) {
      # Valida si el nickname ha sido modificado más de dos veces
      if( $this -> changedNickname >= 2 ) {
        # Agrega una Excepción o Validación (Mensajes al programador para que evite cometer errores)
        throw new Exception( 'No puede cambiar el nombre más de 2 veces' );
      }

      $this -> nickname = $nickname;
      $this -> changedNickname++;
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

  /* NOTA: La ventaja de usar modificadores de acceso de tipo 'private' y/o 'protected'
           y tener que usar 'Getters' y 'Setters' es que podemos agregarles comportamientos */

   # Mensaje
   echo "{$persona1->getPrimerNombre()} {$persona1->getPrimerApellido()} es amigo de {$persona2 -> nombreCompleto()} <br /><br />";

   # Agregamos el Nickname para el objeto 'persona1'
   $persona1 -> setNickName( 'Bro' );
   echo "El apodo de {$persona1->getPrimerNombre()} es {$persona1 -> getNickname()} <br />";
   $persona1 -> setNickName( 'Menor' );
   echo "El apodo de {$persona1->getPrimerNombre()} es {$persona1 -> getNickname()} <br />";
   $persona1 -> setNickName( 'El Papi' );     # Este último cambio no se realiza, ERROR silencioso ya que no advertimos de que solo se puede cambiar 2 veces
   echo "El apodo de {$persona1->getPrimerNombre()} es {$persona1 -> getNickname()} <br />";

?>
