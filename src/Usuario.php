<?php
    namespace MetodosMagicos;

    use MetodosMagicos\Models\Model;

    class Usuario extends Model {

        /* Propiedades (Atributos)*/
        protected $almuerzo;

        /* Asigna el almuerzo a un usuario */
        public function setAlmuerzo( $almuerzo ) {
            $this -> almuerzo = $almuerzo;
        }

        /* */
        public function come() {

            /* NOTA: Es importante dejar las validaciones y/o Excepciones en la primera parte de cada método que la requiera */
            if( empty( $this -> almuerzo ) ) {
                throw new \Exception( "{$this->getAtributo('nombre')} no tiene nada para comer :( ", 1);
            }

            /* Despúes Lógica */
            $comida = array_shift( $this -> almuerzo );                        # 'array_shift' función de PHP para extraer y eliminar el primer elemento de un 'Array'
            echo "<p>{$this->getAtributo('nombre')} almuerza {$comida}</p>";

        }
    }
