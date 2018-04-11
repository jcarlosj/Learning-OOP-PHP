<?php
    namespace Juego\Armas;

    use Juego\Unidad;

    class Ballesta extends Arco {
        /* Propiedades (Atributos) */
        protected $danio = 40;

        /* Métodos */
        public function getDescripcion( Unidad $atacante, Unidad $oponente ) {
            return "{$atacante->getNombre()} lanza una ballesta a {$oponente->getNombre()}";
        }
    }
