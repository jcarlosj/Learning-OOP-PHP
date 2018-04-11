<?php
    namespace Juego\Armas;

    use Juego\Unidad;

    class ArcoBasico extends Arco {
        /* Propiedades (Atributos) */
        protected $danio = 20;

        /* Métodos */
        public function getDescripcion( Unidad $atacante, Unidad $oponente ) {
            return "{$atacante->getNombre()} dispara una flecha a {$oponente->getNombre()}";
        }
    }
