<?php
  /* Programación orientada a objetos */
  namespace Juego;

  require 'src/helpers.php';

  # Implementa el 'autoload' pasando como argumento un 'CallBack' 
  spl_autoload_register( function ( $nombreClase ) {
    # Valida si el prefijo de la clase es 'Juego' el nombre del 'namespace' 
    if( strpos( $nombreClase, 'Juego\\' ) === 0 ) {

      #Elimina el Prefijo (namespace) para pasarle solo el nombre del Archivo requerido
      $nombreClase = str_replace( 'Juego\\', '', $nombreClase );

      # Valida si el archivo existe 
      if( file_exists( "src/{$nombreClase}.php" ) ) {
        require "src/{$nombreClase}.php";                 # Importa archivo
      }

      /* NOTA: 'strpost' es una función que encuentra la posición de 
               la primera ocurrencia de un substring en un string.
               Devuelve la posición donde existe la cohincidencia
               por eso se valida === 0 */
    }

  });

  $armadura = new ArmaduraBronce;
  # Instancia con la nueva clase 'Soldado' e inyecta una dependiencia (el objeto armadura)
  $bryan = new Soldado( 'Muñoz' ); # Sin Armadura
  /* Pasar como parámetro un objeto a otro se le llama Inyección de dependencias e indica que 
     la clase 'Soldado' depende de la clase 'Armadura' (para protegerse de un ataque) */

  # Instancia con la clase Padre 'Unidad'
  $jhonny = new Arquero( 'Cortes' );
  $jhonny -> atacar( $bryan );

  $bryan -> setArmadura( $armadura ); # Con Armadura (Después del primer ataque el soldado recibe una armadura)

  $jhonny -> atacar( $bryan );
  $bryan -> atacar( $jhonny );

  /* NOTA: Cada instancia debe hacerse colocando como prefijo el nombre del 'namespace'
           en este caso 'Juego' seguigo de un 'Backslash' (Barra invertida \ ) */ 
