<?php
    /* Ejemplo para construir etiquetas HTML */
    namespace MetodosMagicos;

    class NodoHTML {
        /* Propiedades (Atributos) */
        protected $tag;
        protected $content;
        protected $attributes = array();

        /* Constructor */
        public function __construct( $tag, $content = null, array $attributes = [] ) {
            $this -> tag = $tag;
            $this -> content = $content;
            $this -> attributes = $attributes;
        }

        /* Métodos mágicos */
        public function __call( $metodo, array $args = array() ) {
            $this -> attributes[ $metodo ] = $args[ 0 ];

            return $this;        # Escencial para crear Interfaces Fluidas           
        }

        /* Devuelte el elemento HTML estructuralmente conformado */
        public function render() {
            $resultado = "<$this->tag {$this->encadenarAtributos()}>";

            # Valida si existe contenido (si es diferente de 'null')
            if( $this -> content != null ) {
                $resultado .= $this -> content;
                $resultado .= "</{$this->tag}>";
            }

            return $resultado;
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
