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

            # Valida que se recibe al menos un argumento
            if( ! isset( $args[ 0 ] ) ) {
                # Si no recibe dicho argumento crea una Excepción (Personaliza mensaje)
                throw new \Exception( "Olvidó pasar el valor al atributo {$metodo} ", 1 );
            }

            $this -> attributes[ $metodo ] = $args[ 0 ];

            return $this;        # Escencial para crear Interfaces Fluidas
        }

        public static function __callStatic( $metodo, array $args = [] ) {

            /* Valida si los argumentos han sido pasados */
            $content = isset( $args[ 0 ] ) ? $args[ 0 ] : null ;
            $attributes = isset( $args[ 1 ] ) ? $args[ 1 ] : [] ;

            return new NodoHTML( $metodo, $content, $attributes );
        }
        /* Convierte un objeto en una cadena */
        public function __toString() {
            
            return "[NodoHtml]";
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
