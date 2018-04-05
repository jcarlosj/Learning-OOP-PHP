<?php
    namespace Juego\Armas;

    use Juego\Arma;
    use Juego\Unidad;

    class EspadaBasica extends Arma {
        /* Propiedades (Atributos) */
        protected $danio = 40;

        /* Métodos */
        public function getDescripcion( Unidad $atacante, Unidad $oponente ) {
            return "{$atacante->getNombre()} ataca con la espada a {$oponente->getNombre()}";
        }
    }
    