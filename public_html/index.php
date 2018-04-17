<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  use MetodosMagicos\Usuario;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  $usuario = new Usuario([
      # Crea 4 propiedades y asigna el valor
      'primer_nombre'    => 'Juan',
      'segundo_nombre'   => 'Carlos',
      'primer_apellido'  => 'Jiménez',
      'segundo_apellido' => 'Gutiérrez'
  ]);

  echo "<p>Hola, {$usuario->primer_nombre} {$usuario->segundo_nombre} {$usuario->primer_apellido} {$usuario->segundo_apellido}. Bienvenido!</p>";        # Despliega el valor de la propiedad creada dinámicamente
