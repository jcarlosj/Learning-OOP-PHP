<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  use MetodosMagicos\Usuario;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  $usuario = new Usuario([
      # Crea 2 propiedades y asigna el valor
      'primer_apellido'  => 'Giraldo',
      'segundo_apellido' => ''
  ]);

  echo "<p>Hola, {$usuario->primer_nombre} {$usuario->segundo_nombre} {$usuario->primer_apellido} {$usuario->segundo_apellido} Bienvenida!</p>";        # Despliega el valor de la propiedad creada dinámicamente
