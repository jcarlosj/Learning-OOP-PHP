<?php
  /* Programación orientada a objetos */
  namespace Juego;

  use Juego\Armaduras\ArmaduraPlata;
  use Juego\Armas\EspadaBasica;

   define( 'AUTHOR', 'Juan Carlos Jiménez Gutiérrez' );

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  exit( Unidad :: PROJECT. ' ' .AUTHOR );        # Imprime y detiene la aplicación

  # Define un valor para establecer el filtro de idioma (podría capturar y filtrar una URL, variable sesión o valor de la base de datos)
  $idioma = 'es';

  # Selecciona el idioma en el que se van a desplegar los mensajes (Puede monerse a un archivo de configuración)
  switch ( $idioma ) {
       case 'en':
           # Fija los mensajes para el idioma Inglés
           Traducir :: set([                                          # Usamos 'Placeholder' (:unidad, :oponente) al adicionar los dos puntos
               'AtaqueArcoBasico'   => ':unidad shoots an arrow to :oponente',
               'AtaqueArcoDeFuego'  => ':unidad fires a fire arrow at :oponente',
               'AtaqueBallesta'     => ':unidad launches a crossbow to :oponente',
               'AtaqueEspadaBasica' => ':unidad attacks with the sword a :oponente'
           ]);
           break;
       case 'es':
           # Fija los mensajes para el idioma Español
           Traducir :: set([                                          # Usamos 'Placeholder' (:unidad, :oponente) al adicionar los dos puntos
               'AtaqueArcoBasico'   => ':unidad dispara una flecha a :oponente',
               'AtaqueArcoDeFuego'  => ':unidad dispara una flecha de fuego a :oponente',
               'AtaqueBallesta'     => ':unidad lanza una ballesta a :oponente',
               'AtaqueEspadaBasica' => ':unidad ataca con la espada a :oponente'
           ]);
           break;
       default:
           # Fija los mensajes para el idioma Español
           Traducir :: set([                                          # Usamos 'Placeholder' (:unidad, :oponente) al adicionar los dos puntos
               'AtaqueArcoBasico'   => ':unidad dispara una flecha a :oponente',
               'AtaqueArcoDeFuego'  => ':unidad dispara una flecha de fuego a :oponente',
               'AtaqueBallesta'     => ':unidad lanza una ballesta a :oponente',
               'AtaqueEspadaBasica' => ':unidad ataca con la espada a :oponente'
           ]);
           break;
   }


   # Define un valor para establecer el filtro de idioma (podría capturar y filtrar una URL, variable sesión o valor de la base de datos)
   $produccion = false;

   # Selecciona si el proyecto está en modo de producción o no (Puede monerse a un archivo de configuración)
   if( $produccion ) {
        Log :: setRegistrador( new RegistradorArchivo );         # Inyecta la dependencia al 'Facade' (Fachada)
   }
   else {
        Log :: setRegistrador( new RegistradorHTML );            # Inyecta la dependencia al 'Facade' (Fachada)
   }

  /* Además de ser un Método Factory( por que fabrica instancias), también se le
     llama 'Named Constructor' (Constructor Semántico), en este caso a través
     de un método estático */
  $bryan = Unidad :: crearSoldado( 'Muñoz' )
                  -> setArma( new EspadaBasica )                # Implementa 'Fluent Interface' (Interfaz Fluida)
                  -> setArmadura( new ArmaduraPlata )
                  -> setEscudo();

  # Instancia con la clase Padre 'Unidad'
  $jhonny = new Unidad( 'Cortes', new Armas\ArcoDeFuego );
  $jhonny -> atacar( $bryan );
  $jhonny -> atacar( $bryan );
  $bryan -> atacar( $jhonny );

  /* NOTA: Cada instancia debe hacerse colocando como prefijo el nombre del 'namespace'
           en este caso 'Juego' seguido de un 'Backslash' (Barra invertida \ ) */
