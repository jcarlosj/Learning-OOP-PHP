<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  use MetodosMagicos\NodoHTML;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  # Hermanos
  $juliana = new Usuario([ 'nombre' => 'Juliana' ]);
  $paulaAndrea = new Usuario([ 'nombre' => 'Paula Andrea' ]);

  # Lonchera es ahora una instancia
  $lonchera = new Lonchera([ 'emparedado' ]);

  # Asigna el almuerzo de la lonchera a los Hermanos (la misma lonchera)
  $juliana -> setAlmuerzo( $lonchera );
  $paulaAndrea -> setAlmuerzo( $lonchera );

  # Las Alumnas comen el almuerzo
  $juliana -> come();
  $paulaAndrea -> come();
