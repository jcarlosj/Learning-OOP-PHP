<?php
  /* Programación orientada a objetos */
  namespace Juego;

  use Juego\Armaduras\ArmaduraPlata;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';
              
  Traducir :: set([                                          # Usamos 'Placeholder' (:unidad, :oponente) al adicionar los dos puntos
      'AtaqueArcoBasico'   => ':unidad dispara una flecha a :oponente',
      'AtaqueArcoDeFuego'  => ':unidad dispara una flecha de fuego a :oponente',
      'AtaqueBallesta'     => ':unidad lanza una ballesta a :oponente',
      'AtaqueEspadaBasica' => ':unidad ataca con la espada a :oponente'
  ]);

  $armadura = new ArmaduraPlata;
  # Instancia con la nueva clase 'Soldado' e inyecta una dependiencia (el objeto armadura)
  $bryan = new Unidad( 'Muñoz', new Armas\EspadaBasica ); # Sin Armadura
  #$bryan -> setArmadura( $armadura ); # Con Armadura (Después del primer ataque el soldado recibe una armadura)

  # Instancia con la clase Padre 'Unidad'
  $jhonny = new Unidad( 'Cortes', new Armas\ArcoDeFuego );
  $jhonny -> atacar( $bryan );
  $jhonny -> atacar( $bryan );
  $bryan -> atacar( $jhonny );

  /* NOTA: Cada instancia debe hacerse colocando como prefijo el nombre del 'namespace'
           en este caso 'Juego' seguigo de un 'Backslash' (Barra invertida \ ) */
