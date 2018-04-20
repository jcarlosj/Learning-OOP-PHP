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
