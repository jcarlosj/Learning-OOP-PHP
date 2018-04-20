<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  use MetodosMagicos\NodoHTML;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  # Persona
  $juliana = new Usuario([ 'nombre' => 'Juliana' ]);

  # Lonchera es ahora una instancia (Objeto 1)
  $lonchera = new Lonchera([
    new Alimento([
        'nombre' => 'Emparedado',
        'bebida' => false                 # Puede especificarse o no en caso de ser falso
    ]),
    new Alimento([
        'nombre' => 'Papas'
    ]),
    new Alimento([
        'nombre' => 'Jugo de Lulo',
        'bebida' => true                 # Puede especificarse o no en caso de ser falso
    ]),
    new Alimento([
        'nombre' => 'Manzana'
    ]),
    new Alimento([
        'nombre' => 'Agua mineral',
        'bebida' => true
    ])
  ]);

  # Asigna el almuerzo de la lonchera a los Hermanos (la misma lonchera)
  $juliana -> setAlmuerzo( $lonchera );                     # (Objeto 1): Paso parámetro por referencia (objeto original)

  # Comer todo el contenido de la  lonchera
  $juliana -> comeTodo();
