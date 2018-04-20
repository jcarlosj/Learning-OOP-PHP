<?php
    namespace MetodosMagicos;

    use MetodosMagicos\Models\Model;

    class Usuario extends Model {

        /* Propiedades (Atributos)*/
        protected $almuerzo;

        /* Constructor */
        public function __construct( array $atributos = [] ) {
            parent :: __construct( $atributos );        # Invoca al constructor de la clase padre (Model)

            $this -> almuerzo = new Lonchera();         # Instancia el objeto 'Null Object'
        }

        /* Asigna el almuerzo a un usuario */
        public function setAlmuerzo( Lonchera $almuerzo ) {
            $this -> almuerzo = $almuerzo;
        }

        /* Extrae un solo 'Alimento' (valor) de la 'Lonchera' (Objeto que contiene un array) */
        public function come() {

            /* NOTA: Es importante dejar las validaciones y/o Excepciones en la primera parte de cada método que la requiera */
            if( $this -> almuerzo -> isEmpty() ) {
                throw new \Exception( "{$this->getAtributo('nombre')} no tiene nada para comer :( ", 1);
            }

            /* Despúes Lógica */
            echo "<p>{$this->getAtributo('nombre')} come {$this -> almuerzo -> consumir()}</p>";

        }

        /* Extrae todos los 'Alimentos' (valores) de la 'Lonchera' (Objeto contiene un array) */
        public function comeTodo() {

            // echo '<pre><b>Lonchera: </b><br /> '; var_dump( $this -> almuerzo ); echo '</pre>';

            # Valida que la 'Lonchera' no se encuentre vacía
            if( $this -> almuerzo -> isEmpty() ) {
                throw new \Exception( "{$this->getAtributo('nombre')} no tiene nada para comer :( ", 1);
            }

            # Filtro al que se le pasa un CallBack para filtrar los alimentos que NO son bebidas
            $alimentos = $this -> almuerzo -> filtro( function( $alimento ) {
                return ! $alimento -> bebida;
            });
            //echo '<pre><b>Alimentos:</b><br /> '; var_dump( $alimentos ); echo '</pre>';

            # Filtro al que se le pasa un CallBack para filtrar los alimentos que son bebidas
            $bebidas = $this -> almuerzo -> filtro( function( $alimento ) {
                return $alimento -> bebida;
            });
            //echo '<pre><b>Bebidas:</b><br /> '; var_dump( $bebidas ); echo '</pre>';

            echo "<p>
                    Hay {$this->almuerzo->count()} alimentos en la lonchera
                    <br />{$this->getAtributo('nombre')} tiene: {$alimentos->count()}
                    alimentos, {$bebidas->count()} bebidas
                 </p>";

            echo '<ul>';
                # Recorre los alimentos que NO son bebidas
                foreach ( $alimentos as $key => $alimento ) {
                    echo "<li>{$this->getAtributo('nombre')} come {$alimento->nombre}</li>";
                }

                # Recorre los alimentos que son bebidas
                foreach ( $bebidas as $key => $bebida ) {
                    echo "<li>{$this->getAtributo('nombre')} bebe {$bebida->nombre}</li>";
                }
            echo '</ul>';

        }
    }
