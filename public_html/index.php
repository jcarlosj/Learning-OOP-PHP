<?php
  /* Programación orientada a objetos */
  namespace Juego;

  use Juego\Armaduras\ArmaduraBronce;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente) 
  require '../vendor/autoload.php';

  $armadura = new ArmaduraBronce;
  # Instancia con la nueva clase 'Soldado' e inyecta una dependiencia (el objeto armadura)
  $bryan = new Soldado( 'Muñoz' ); # Sin Armadura
  $bryan -> setArma( new Armas\EspadaBasica );

  # Instancia con la clase Padre 'Unidad'
  $jhonny = new Arquero( 'Cortes' );

  $jhonny -> atacar( $bryan );

  $bryan -> setArmadura( $armadura ); # Con Armadura (Después del primer ataque el soldado recibe una armadura)

  $jhonny -> atacar( $bryan );
  $bryan -> atacar( $jhonny );

  /* NOTA: Cada instancia debe hacerse colocando como prefijo el nombre del 'namespace'
           en este caso 'Juego' seguigo de un 'Backslash' (Barra invertida \ ) */ 
