<?php
    /* NOTA: A diferencia de las 'Armaduras' que se desarrollaron con una 'Interface' 
       las 'Armas' se desarrollarán usando una clase abstracta, depende de lo que escoja 
       el desarrollador, sin embargo se usa para mostrar otra alternativa y ejemplificarla */
    namespace Juego;

    abstract class Arma {
        /* Propiedades (Atributos) */ 
        protected $danio = 0;
    
        /* Método */
        public function getDanio() {
            return $this -> danio;
        } 

        abstract public function getDescripcion( Unidad $atacante, Unidad $oponente );
    }
