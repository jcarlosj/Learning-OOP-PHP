<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  use MetodosMagicos\Usuario;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  $usuario = new Usuario([
      'nombre_completo' => 'Juan Carlos Jiménez Gutiérrez'             # Crea la propiedad 'nombre_completo' y asigna el valor
  ]);

  echo "<p>Hola, {$usuario->nombre_completo}. Bienvenido!</p>";        # Despliega el valor de la propiedad creada dinámicamente
