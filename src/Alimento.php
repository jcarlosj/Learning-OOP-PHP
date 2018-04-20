<?php
    namespace MetodosMagicos;

    use MetodosMagicos\Models\Model;

    class Alimento extends Model {

        /* Métodos estático */
        public function getBebidaAtributo() {

            return $this -> atributos[ 'bebida' ] ?? false;
        }
    }
