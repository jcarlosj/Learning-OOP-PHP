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

        /* Métodos 'Interface' Iterator para PHP 7 */
        public function rewind() {
            echo "<pre><b>Rebobinando...</b><br/>"; var_dump( __METHOD__ ); echo "</pre>";
            $this -> position = 0;
        }

        public function current() {
            echo "<pre><b>Actual: {$this->comida[$this->position]} </b><br/>"; var_dump( __METHOD__ ); echo "</pre>";
            return $this -> comida[ $this -> position ];
        }

        public function key() {
            echo "<pre><b>Ítem: {$this->position} </b><br/>"; var_dump( __METHOD__ ); echo "</pre>";
            return $this -> position;
        }

        public function next() {
            ++ $this -> position;
            echo "<pre><b>Siguiente: {$this->position}  </b><br/>"; var_dump( __METHOD__ ); echo "</pre>";
        }

        public function valid() {
            $valido = isset( $this -> comida[ $this -> position ] )
                        ? true
                        : false;
            echo "<pre><b>Valido? {$valido} </b><br/>"; var_dump( __METHOD__ ); echo "</pre>";
            return isset( $this -> comida[ $this -> position ] );
        }

    }
