<?php
    /* NOTA: A diferencia de las 'Armaduras' que se desarrollaron con una 'Interface'
       las 'Armas' se desarrollarán usando una clase abstracta, depende de lo que escoja
       el desarrollador, sin embargo se usa para mostrar otra alternativa y ejemplificarla */
    namespace Juego;

    abstract class Arma {
        /* Propiedades (Atributos) */
        protected $danio = 0,
                  $magico = false,
                  $descripcion = ':unidad ataca a :oponente';        # Usamos 'Placeholder' (:unidad, :oponente) al adicionar los dos puntos

        /* Método */
        public function crearAtaque() {
            return new Ataque( $this -> danio, $this -> magico, $this -> descripcion );
        }

    }
