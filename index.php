<?php
  /* Programación orientada a objetos */

  /* Clase Padre
     Como esta clase es en sí un concepto genérico de lo que se desea representar.
     No representa nada concreto entonces la declaramos como una clase abstracta,
     de manera que no podrá ser instanciada si no a través de las clases hijas  */
  abstract class Unidad {
    /* Propiedades (Atributos) */
    protected $vivo = true,
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
       echo "<p>$this->nombre ataca a $oponente</p>";
    }
    # NOTA: Las clases no deben imprimir mensajes, pero lo haremos para realizar el ejemplo
  }

  # Clase Hijo hereda de la clase 'Unidad'
  class Soldado extends Unidad {
    /* Métodos (Acciones) */
    public function atacar( $oponente ) {
       echo "<p>$this->nombre corta a $oponente en dos</p>";
    }
  }

  # Clase Hijo hereda de la clase 'Unidad'
  class Arquero extends Unidad {
    /* Métodos (Acciones) */
    public function atacar( $oponente ) {
       echo "<p>$this->nombre dispara una flecha a $oponente</p>";
    }
  }

  # Instancia con la nueva clase 'Soldado'
  $bryan = new Soldado( 'Muñoz' );

  # Instancia con la clase Padre 'Unidad'
  $jhonny = new Arquero( 'Cortes' );
  #$jhonny -> mover( 'norte' );
  $jhonny -> atacar( $bryan -> getNombre() );

  $bryan -> atacar( $jhonny -> getNombre() );

  # Al instanciar una clase abstracta se generará un error
  $juan = new Unidad( 'Herrera' );

?>
