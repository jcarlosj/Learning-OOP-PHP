<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  use MetodosMagicos\NodoHTML;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  # Persona
  $juliana = new Usuario([ 'nombre' => 'Juliana' ]);

  # Lonchera es ahora una instancia (Objeto 1)
  $lonchera = new Lonchera([ 'emparedado', 'manzana', 'papas', 'yogurt', 'jugo de naranja' ]);

  # Asigna el almuerzo de la lonchera a los Hermanos (la misma lonchera)
  $juliana -> setAlmuerzo( $lonchera );                     # (Objeto 1): Paso parámetro por referencia (objeto original)

  # Las Alumnas comen el almuerzo
  $juliana -> come();
