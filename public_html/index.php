<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  use MetodosMagicos\NodoHTML;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  # Hermanos
  $juliana = new Usuario([ 'nombre' => 'Juliana' ]);
  $paulaAndrea = new Usuario([ 'nombre' => 'Paula Andrea' ]);

  # Lonchera
  $lonchera = [ 'emparedado' ];

  # Asigna el almuerzo de la lonchera a los Hermanos
  $juliana -> setAlmuerzo( $lonchera );
  $paulaAndrea -> setAlmuerzo( $lonchera );

  # Las Alumnas comen el almuerzo
  $juliana -> come();
  $paulaAndrea -> come();
