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
  $lonchera = new Lonchera([ 'emparedado', 'manzana' ]);    # Objeto 1:
  $lonchera2 = clone( $lonchera );

  # Asigna el almuerzo de la lonchera a los Hermanos (la misma lonchera)
  $juliana -> setAlmuerzo( clone( $lonchera ) );            # Objeto 2: Paso parámetro por valor (objeto copia del original)
  $paulaAndrea -> setAlmuerzo( clone( $lonchera2 ) );        # Objeto 3: Paso parámetro por valor (objeto copia del original)

  # Las Alumnas comen el almuerzo
  $juliana -> come();
  $juliana -> come();
  $paulaAndrea -> come();

  echo '<pre><b>Lonchera 1:</b> '; var_dump( $lonchera ); echo '</pre>';
  echo '<pre><b>Lonchera 2 (Clonada):</b> '; var_dump( $lonchera2 ); echo '</pre>';
