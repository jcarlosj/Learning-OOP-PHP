<?php
  /* Programación orientada a objetos */

  # Clase
  class Unidad {
    /* Propiedades (Atributos) */
    private $vivo = true,
            $nombre;

    /* Constructor */
    public function __construct( $nombre ) {
      $this -> nombre = $nombre;
    }

    /* Getter */
    public function getNombre() {
      return $this -> nombre;
    }

    /* Métodos (Acciones) */
    public function mover( $direccion ) {
      echo "<p>$this->nombre avanza hacia el $direccion</p>";
    }

    public function atacar( $oponente ) {
       echo "<p>$this->nombre ataca a: $oponente</p>";
    }

    # NOTA: Las clases no deben imprimir mensajes, pero lo haremos para realizar el ejemplo
  }

  # Instancias
  $bryan = new Unidad( 'Muñoz' );

  $jhonny = new Unidad( 'Cortes' );
  $jhonny -> mover( 'norte' );
  $jhonny -> atacar( $bryan -> getNombre() );

?>
