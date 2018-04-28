<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  $usuario = new Usuario([
      'nombre' => 'Elisa María',
      'birthday' => '30/04/1977'
  ]);

  echo "<p>{$usuario->nombre} tiene {$usuario->edad} años</p>";
