<?php
    namespace paquete_externo;

    use Closure;
    use BadMethodCallException;

    trait Macroable {
        protected static $macros = [];            # Contendrá la parte lógica o funcional de los métodos o macros creados de forma encapsulada

        /* Crea una macro: Es un concepto de Laravel en la que se pueden crear métodos o
                           agregar métodos de forma dinámica a una clase */
        public static function macro( $nombre_metodo, Closure $macro ) {
            static :: $macros[ $nombre_metodo ] = $macro;
        }

        /* Permite determinar si la clase tiene o no una macro */
        public function hasMacro( $nombre_metodo ) {

            return isset( static :: $macros[ $nombre_metodo ] );
        }

        /* Métodos Mágicos */
        public function __call( $nombre_metodo, array $argumentos ) {            # Nombre del método que se intenta llamar pero no existe
            # Valida si existe una macro por su nombre
            if( static :: hasMacro( $nombre_metodo ) ) {
                # Retorna el llamado o ejecución del MACRO almacenado en nuestra colección o 'Array' de macros disponibles
                return call_user_func_array( static :: $macros[ $nombre_metodo ], $argumentos );
            }

            # Esta excepción se utiliza para indicar que se intentó llamar a un método que no existe o que no es valido
            throw new BadMethodCallException( "El método {$nombre_metodo} no existe " );
        }
        /* NOTA: Este método permitirá que el método creado dinámicamente esté disponible */
    }
