<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  use MetodosMagicos\Usuario;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  $usuario = new Usuario();
  $usuario -> setAtributos([
      # Crea 2 propiedades y asigna el valor
      'primer_nombre'    => 'Elisa',
      'primer_apellido'  => 'Giraldo'
  ]);

  $usuario -> setAtributo( 'nombre_usuario', '@egiraldo' );

  # Despliega el solo el valor de la propiedades creada dinámicamente que son validas usando el método mágico de PHP '__get()'
  echo "<p>Hola, {$usuario->primer_nombre} {$usuario->segundo_nombre} {$usuario->primer_apellido} {$usuario->segundo_apellido} Bienvenida!</p>";

  # Valida si el usuario tiene un Nickname y lo muestra en caso de tenerlo
  if( isset( $usuario -> nombre_usuario ) ) {
      # Despliega un atributo usando el método que contiene la lógica de validación para obtener el valor de una propiedad
      echo "Nickname: {$usuario->getAtributo('nombre_usuario')}";
  }
