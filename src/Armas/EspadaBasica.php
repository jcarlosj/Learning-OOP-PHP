<?php
    namespace Juego\Armas;

    use Juego\Arma;
    use Juego\Unidad;

    class EspadaBasica extends Arma {
        /* Propiedades (Atributos) */
        protected $danio = 40,
                  $descripcion = ':unidad ataca con la espada a :oponente';    # Usamos 'Placeholder' (:unidad, :oponente) al adicionar los dos puntos
    }
