<?php
    /* Ejemplo para construir etiquetas HTML */
    namespace MetodosMagicos;

    class NodoHTML {
        /* Propiedades (Atributos) */
        protected $tag;
        protected $attributes = array();

        /* Constructor */
        public function __construct( $tag, array $attributes = [] ) {
            $this -> tag = $tag;
            $this -> attributes = $attributes;
        }

        /* Devuelte el elemento HTML estructuralmente conformado */
        public function render() {
            return "<$this->tag {$this->encadenarAtributos()}>";
        }

        /* Convierte un objeto en una cadena */
        protected function encadenarAtributos() {
            $resultado = '';

            foreach ($this -> attributes as $atributo => $valor) {
                #$resultado .= '' .$atributo. '="' .$valor. '"';              // Ej: id="logo"
                $resultado .= sprintf( ' %s="%s"', $atributo, $valor );       // Ej: id="logo"   (Equivale a la línea anterior)
            }

            return $resultado;
        }

    }
