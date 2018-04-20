<?php
    namespace MetodosMagicos;

    use IteratorAggregate;
    use ArrayIterator;
    use Countable;

    class Lonchera implements IteratorAggregate, Countable {        # Esta 'Interface' de PHP requiere que implementemos 1 método: getIterator
        /* Propiedades (Atributos) */
        protected $comida = [];                /* NOTA: Es una muy buena idea envolver un 'Array' dentro de una clase para ampliar las funcionalidades
                                                        esto nos acerca al concepto de las Colecciones en PHP */
        protected $original = true;
        protected $estado = 'Alimento para consumir';

        /* Constructor */
        public function __construct( array $comida = [] ) {
            $this -> comida = $comida;

            $this -> position = 0;
        }

        /* Método mágico */
        public function __clone() {
            /* Cuando este método detecte que va a ser clonado va a realizar
               las instrucciones o cambios que se encuentren dentro de él, y
               el objeto clonado será diferente */
            $this -> original = false;
            $this -> estado = 'Alimento vencido';
        }

        /* Métodos */
        public function consumir() {

            return array_shift( $this -> comida );
        }

        public function isEmpty() {

            return empty( $this -> comida );
        }

        /* Obtiene el 'Array' con los alimentos contenidos en el mismo */
        public function all() {

            return $this -> comida;
        }

        /* Filtra el 'Array' de items */
        public function filtro( $callback ) {

            # Regresa una nueva colección filtrada por el callback del 'Array' $this -> comida
            $alimentos = array_filter( $this -> comida, $callback );
            // echo '<pre style="color:blue;">'; var_dump( $alimentos ); echo '</pre>';

            return new static ( $alimentos );
            /* NOTA: En el caso de usar 'static' este estaría haciendo referencia
                     al nombre de la clase que está llamando el metodo 'filtro' en
                     este caso 'Usuario', por lo que la referencia estaría creandose
                     de la clase 'Lonchera' ya que es esta instancia la que la implementa

                     $this -> almuerzo = new Lonchera();                        # En el constructor de 'Usuario'
                     $this -> almuerzo -> filtro( function( $alimento ) {       # Implementa filtro en el método 'comeTodo' de 'Usuario'
                         return ! $alimento -> bebida;
                     });

                    Para abreviar el código se pueden usar estas dos opciones:

                    return new static ( array_filter( $this -> comida, $callback ) );      # Primera opción: ya que la clase 'Lonchera' no implementa herencia

                    return new Lonchera( array_filter( $this -> comida, $callback ) );     # Segunda opción: Creando una instancia del tipo que se desea regresar 'Lonchera'
            */
        }

        /* Métodos 'Interface' IteratorAggregate  */
        public function getIterator() {

            return new ArrayIterator( $this -> comida );        # 'ArrayIterator' es una clase de PHP que permite hacer la iteración sobre un 'Array'
        }

        /* Método 'Interface' Countable */
        public function count() {

            return count( $this -> comida );            // <-- Llamado a count
        }
        /* NOTA: Esta Interface permite llamar a la función 'count' dentro de un objeto */

    }
