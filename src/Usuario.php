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

            echo 'Hay ' .count( $this -> almuerzo -> all() ). ' alimentos en la lonchera de ' .$this -> getAtributo( 'nombre' );
            #var_dump( $this -> almuerzo -> comida );

            # Valida que la 'Lonchera' no se encuentre vacía
            if( $this -> almuerzo -> isEmpty() ) {
                throw new \Exception( "{$this->getAtributo('nombre')} no tiene nada para comer :( ", 1);
            }

            echo '<ul>';
            # Recorre cada uno de los alimentos contenidos en la lonchera
            foreach ( $this -> almuerzo as $key => $comida ) {                  # Itera sobre el objeto directamente
                echo "<li>{$this->getAtributo('nombre')} come {$comida}</li>";
            }
            echo '</ul>';
        }
    }
