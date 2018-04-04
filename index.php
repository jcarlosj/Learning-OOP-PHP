<?php
  /* Programación orientada a objetos */
  require 'src/helpers.php';

  require 'src/Unidad.php';
  require 'src/Soldado.php';
  require 'src/Arquero.php';
  require 'src/Armadura.php';
  require 'src/ArmaduraBronce.php';
  require 'src/ArmaduraPlata.php';
  require 'src/ArmaduraMaldita.php';


  # Instancia con la nueva clase 'Soldado' e inyecta una dependiencia (el objeto armadura)
  $bryan = new Soldado( 'Muñoz' ); # Sin Armadura
  /* Pasar como parámetro un objeto a otro se le llama Inyección de dependencias e indica que 
     la clase 'Soldado' depende de la clase 'Armadura' (para protegerse de un ataque) */

  # Instancia con la clase Padre 'Unidad'
  $jhonny = new Arquero( 'Cortes' );
  $jhonny -> atacar( $bryan );

  $bryan -> setArmadura( new ArmaduraMaldita ); # Con Armadura (Después del primer ataque el soldado recibe una armadura)

  $jhonny -> atacar( $bryan );
  $bryan -> atacar( $jhonny );
