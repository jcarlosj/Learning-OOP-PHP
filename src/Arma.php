<?php
    /* NOTA: A diferencia de las 'Armaduras' que se desarrollaron con una 'Interface'
       las 'Armas' se desarrollarán usando una clase abstracta, depende de lo que escoja
       el desarrollador, sin embargo se usa para mostrar otra alternativa y ejemplificarla */
    namespace Juego;

    abstract class Arma {
        /* Propiedades (Atributos) */
        protected $danio = 0,
                  $magico = false;

        /* Método */
        public function crearAtaque() {
            # Implementación del Patrón Factory (Fabrica)
            #   La lógica que nos permitió entender que esté patrón podría implementarse es entender que un Arma es capaz de producir múltiples ataques
            #   Lo que no forza a la instancia a limitar la funcionalidad, si no al contrario a ampliarla
            return new Ataque( $this -> danio, $this -> magico, $this -> getDescripcionID() );
        }

        protected function getDescripcionID() {
            # Retorna 'Ataque' y el nombre de la clase.
            return str_replace(
                'Juego\Armas\\',
                '',
                'Ataque' .get_class( $this )
            ); # Retornará AtaqueArcoBasico, AtaqueArcoDeFuego, AtaqueBallesta, AtaqueEspadaBasica (dependiendo de el ID selecionado)

            /* NOTA: Con str_replace elimina el 'namespace' obtenido de 'Ataque'.get_class($this) que retorna
                     Juego\Armas\ArcoBasico (por ejemplo) */
        }

        /* NOTA: El objeto que se genera a través de esta instancia es lo que se denomina como un 'Value Object' son pequeños objetos que se usan para
                 agrupar propiedades que tienen sentido o relación, pero no tienen sentido sueltas. Se usan comunmente para representar rangos de fecha,
                 dinero, coordenadas entre otras

                    Dinero (Cantidad y tipo de moneda):
                        new Moneda( 50, 'USD' );

                    Coordenadas (Latitud y Longitud):
                        new Coordenadas( '38.54545N', '78.90234W' );

                    Fecha (Año, Mes y Día):
                         new Date( 206, 07, 21 );
                 */
    }
