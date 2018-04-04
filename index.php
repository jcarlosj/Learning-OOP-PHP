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
      $this -> puntosVida = $this -> puntosVida - $this -> absorberDanio( $puntosDanio );
      show( "$this->nombre ahora tiene $this->puntosVida puntos de vida" );

       # Valida si el oponente aún tiene puntos
       if( $this -> puntosVida <= 0 ) {
          $this -> muere();
       }
    }

    protected function absorberDanio( $danio ) {

        return $danio;
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

    protected function absorberDanio( $danio ) {
        # Valida si el soldado tiene una Armadura
        if( $this -> armadura ) {
          $danio = $this -> armadura -> absorberDanio( $danio );
        }

        return $danio;
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
  }

  # Clase 'Armadura de Bronce' (básica de bajo nivel de protección, absorbe la 1/2 del daño) que implementa la interface de una Armadura
  class ArmaduraBronce implements Armadura {
    /* Métodos (Acciones) */
    public function absorberDanio( $danio ) {
      return $danio / 2;
    }

  }

  # Interface Armadura 
  interface Armadura {
    public function absorberDanio( $danio );
  }
  /* NOTA: Las interfaces no poseen ningún tipo de lógica, son como contratos donde 
           se le indica que cosas debe hacer de forma estricta, en este caso cualquier
           clase que implemente esta interface debe definir los atributos y métodos que 
           esta posea. Las Interfaces no pueden ser instanciadas. Las clases pueden 
           implementar una o mas interfaces */

  # Instancia con la nueva clase 'ArmaduraBronce'
  $armadura = new ArmaduraBronce;
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
