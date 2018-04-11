<?php
    namespace Juego\Armas;

    use Juego\Arma;
    use Juego\Unidad;

    class ArcoDeFuego extends Arma {
        /* Propiedades (Atributos) */
        protected $danio = 30,
                  $magico = true,
                  $descripcion = ':unidad dispara una flecha de fuego a :oponente';    # Usamos 'Placeholder' (:unidad, :oponente) al adicionar los dos puntos


        /* Ampliar la funcionalidad del Patrón 'Factory' también hace parte del modelo, por ejemplo permitir a cada
          clase hija implementar la creación de nuevos objetos o instancias de clase */
        public function crearAtaque() {
            #return new AtaqueFlechaDeFuego;        # Creando una nueva clase para que se instancie a través del patrón ampliando la funcionalidad
        }

    }
