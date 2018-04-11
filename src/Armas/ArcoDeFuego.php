<?php
    namespace Juego\Armas;

    use Juego\Arma;
    use Juego\Unidad;

    class ArcoDeFuego extends Arma {
        /* Propiedades (Atributos) */
        protected $danio = 30,
                  $magico = true,
                  $descripcion = ':unidad dispara una flecha de fuego a :oponente';    # Usamos 'Placeholder' (:unidad, :oponente) al adicionar los dos puntos
    }
