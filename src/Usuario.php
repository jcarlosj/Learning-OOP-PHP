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

        /* */
        public function come() {

            /* NOTA: Es importante dejar las validaciones y/o Excepciones en la primera parte de cada método que la requiera */
            if( $this -> almuerzo -> isEmpty() ) {
                throw new \Exception( "{$this->getAtributo('nombre')} no tiene nada para comer :( ", 1);
            }

            /* Despúes Lógica */
            echo "<p>{$this->getAtributo('nombre')} almuerza {$this -> almuerzo -> consumir()}</p>";

        }
    }
