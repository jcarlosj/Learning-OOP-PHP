<?php
  /* Programación orientada a objetos */

  /* Clase Padre
     Como esta clase es en sí un concepto genérico de lo que se desea representar.
     No representa nada concreto entonces la declaramos como una clase abstracta,
     de manera que no podrá ser instanciada si no a través de las clases hijas  */
  abstract class Unidad {
    /* Propiedades (Atributos) */
    protected $puntosVida = 40,
              $nombre;

    /* Constructor */
    public function __construct( $nombre ) {
      $this -> nombre = $nombre;
    }

    /* Getter */
    public function getNombre() {
      return $this -> nombre;
    }

    public function getPuntos() {
      return $this -> puntosVida;
    }

    private function setPuntos( $puntosVida ) {
      $this -> puntosVida = $puntosVida;
      show( "$this->nombre ahora tiene $this->puntosVida puntos de vida" );
    }

    /* Métodos (Acciones) */
    public function mover( $direccion ) {
      show( "$this->nombre avanza hacia el $direccion" );
    }

    /* Hacemos que el método sea genérico, es decir, le indicamos que como 'Unidad'
      debe realizar un ataque pero no especificamos que tipo de ataque. Esto obliga
      a que el comportamiento sea definido en las clases hijas */
    abstract public function atacar( Unidad $oponente );

    public function danoOcasionado( $puntosDanio ) {

       # Fija el valor de puntos después de un ataque
       $this -> setPuntos( $this -> puntosVida - $puntosDanio );

       # Valida si el oponente aún tiene puntos
       if( $this -> puntosVida <= 0 ) {
          $this -> muere();
       }
    }

    public function muere() {
      show( "$this->nombre muere" );
      exit();
    }
    # NOTA: Las clases no deben imprimir mensajes, pero lo haremos para realizar el ejemplo
  }

  # Clase Hijo hereda de la clase 'Unidad'
  class Soldado extends Unidad {
    /* Propiedades (Atributos) */
    private $puntosDanio = 40,
            $armadura;

    /* Constructor */
    public function __construct( $nombre ) {
      parent :: __construct( $nombre );
    }

    /* Métodos (Acciones) */
    public function atacar( Unidad $oponente ) {
       show( "$this->nombre ataca con la espada a {$oponente->getNombre()}" );

       $oponente -> danoOcasionado( $this -> puntosDanio );

    }
    
    public function danoOcasionado( $puntosDanio ) {

      # Valida si el soldado tiene una Armadura
      if( $this -> armadura ) {
        $puntosDanio = $this -> armadura -> absorberDanio( $puntosDanio );
      }

      # Retorna el resultado del método 'danoOcasionado' de la clase padre (para eso se usa parent :: ) y como es un 'Soldado' pasamos la mitad del daño
      return parent :: danoOcasionado( $puntosDanio );
    }

    /* NOTA: Basado en el 1er Principio de la POO se le indica al objeto que hacer, a través de un comando o instrucción
             evitando crear cadenas de condicionales donde se pregunte por una información obtenida y se actue de acuerdo 
             a esta haciendo uso de lo que llamamos 'Procedimientos estructurados' */

    # Setter
    # Asignar una Armadura al Soldado
    public function setArmadura( Armadura $armadura = null ) {
      $this -> armadura = $armadura;
    }         
  }

  # Clase Hijo hereda de la clase 'Unidad'
  class Arquero extends Unidad {
    /* Propiedades (Atributos) */
    private $puntosDanio = 20;

    /* Métodos (Acciones) */
    public function atacar( Unidad $oponente ) {
       show( "$this->nombre dispara una flecha a {$oponente->getNombre()}" );

       $oponente -> danoOcasionado( $this -> puntosDanio );

    }

    public function danoOcasionado( $puntosDanio ) {
      # Valida si es verdadero 1, o falso 0, lo que le permite repeler el daño aleatoriamente y sobrevivir
      if( rand( 0, 1 ) ) {
        # Retorna el resultado del método 'danoOcasionado' de la clase padre (para eso se usa parent :: )
        return parent :: danoOcasionado( $puntosDanio );
      }

      show( "$this->nombre pudo repeler el ataque" );

    }
  }

  # Clase 
  class Armadura {
    /* Métodos (Acciones) */
    public function absorberDanio( $danio ) {
      return $danio / 2;
    }

  }

  # Instancia con la nueva clase 'Armadura'
  $armadura = new Armadura;
  # Instancia con la nueva clase 'Soldado' e inyecta una dependiencia (el objeto armadura)
  $bryan = new Soldado( 'Muñoz' ); # Sin Armadura
  /* Pasar como parámetro un objeto a otro se le llama Inyección de dependencias e indica que 
     la clase 'Soldado' depende de la clase 'Armadura' (para protegerse de un ataque) */

  # Instancia con la clase Padre 'Unidad'
  $jhonny = new Arquero( 'Cortes' );
  $jhonny -> atacar( $bryan );

  $bryan -> setArmadura( $armadura ); # Con Armadura (Después del primer ataque el soldado recibe una armadura)

  $jhonny -> atacar( $bryan );
  $bryan -> atacar( $jhonny );

  # Función para evitar la duplicación del código (definición de los tags de párrafo y el echo)
  function show( $mensaje ) {
    echo "<p>$mensaje</p>";
  }

?>
