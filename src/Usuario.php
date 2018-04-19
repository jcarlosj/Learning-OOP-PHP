<?php
    namespace MetodosMagicos;

    use MetodosMagicos\Models\Model;

    class Usuario extends Model {

        /* Propiedades (Atributos)*/
        private $claveBaseDatos = 'secreto';        # Un atributo de este tipo no debería ir aquí, pero es parte del ejemplo
        private $nombreBaseDatos = 'DB_TiendaVirtual';

        /* Métodos mágicos */
        public function __sleep() {
            /* Esta función mágica, se ejecuta luego de la serialización */
            echo '<p style="color: blue;">Serializando...</p>';

            return [ 'atributos' ];        # Retorna solo las propiedades que se desean visualizar ($atributos es una propiedad de la clase padre)
        }
        public function __wakeup() {
            /* Esta función mágica, se ejecuta luego de la deserialización */
            echo '<p style="color: blue;">Deserializando...</p>';

            echo '<h2 style="color:red;">Objeto deserializado</h2>';
            echo '<pre>'; var_dump( $this ); echo '</pre>';

            echo '<h2 style="color:red;">Imprime valores del objeto</h2>';
            echo '<p><b>Nombre:</b> '. $this -> getAtributo( 'nombre' ). '<br /><b>Correo:</b> ' .$this -> getAtributo( 'email' ). '</p>';
        }
        /* NOTA: Eloquent usa esta técnica usando los métodos mágicos: __sleep(), __wakeup()
                 serializando/deserializando exclusivamente el ID */

        /* Método Dinámico */
        public function getNombreAtributo( $valor ) {

            return strtoupper( $valor );        # Retorma el valor en mayúsculas
        }
    }
