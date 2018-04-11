<?php
    namespace Juego\Armas;

    use Juego\Arma;
    use Juego\Unidad;

    class ArcoBasico extends Arma {
        /* Propiedades (Atributos) */
        protected $danio = 20,
                  $descripcion = ':unidad dispara una flecha a :oponente';    # Usamos 'Placeholder' (:unidad, :oponente) al adicionar los dos puntos
    }
