<?php
    namespace Juego\Armas;

    use Juego\Arma;
    use Juego\Unidad;

    class ArcoBasico extends Arma {
        /* Propiedades (Atributos) */
        protected $danio = 20;

        /* Métodos */
        public function getDescripcion( Unidad $atacante, Unidad $oponente ) {
            return "{$atacante->getNombre()} dispara una flecha a {$oponente->getNombre()}";
        }
    }
