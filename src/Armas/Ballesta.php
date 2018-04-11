<?php
    namespace Juego\Armas;

    use Juego\Arma;
    use Juego\Unidad;

    class Ballesta extends Arma {
        /* Propiedades (Atributos) */
        protected $danio = 40,
                  $descripcion = ':unidad lanza una ballesta a :oponente';    # Usamos 'Placeholder' (:unidad, :oponente) al adicionar los dos puntos
    }
