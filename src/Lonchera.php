<?php
    namespace MetodosMagicos;

    use Iterator;

    class Lonchera implements Iterator {        # Esta 'Interface' de PHP requiere que implementemos 5 métodos: rewind, current, next, key, valid
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

        /* Métodos 'Interface' Iterator para PHP 5 */
        public function rewind() {
            echo "<pre><b>Rebobinando...</b></pre>";
            reset( $this -> comida );
        }

        public function current() {
            $actual = current( $this -> comida );
            echo "<pre><b>Actual:</b> {$actual} </pre>";
            return $actual;
        }

        public function key() {
            $item = key( $this -> comida );
            echo "<pre><b>Ítem:</b> {$item} </pre>";
            return $item;
        }

        public function next() {
            $siguiente = next( $this -> comida );
            echo "<pre><b>Siguiente:</b> {$siguiente} </pre>";
            return $siguiente;
        }

        public function valid() {
            $clave = key( $this -> comida );
            $valido = ( $clave !== NULL && $clave !== FALSE );
            echo "<pre><b>Valido? </b> {$valido} </pre>";
            return $valido;
        }
    }
