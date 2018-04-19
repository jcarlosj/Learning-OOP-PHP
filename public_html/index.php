<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  use MetodosMagicos\NodoHTML;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  $usuario = new Usuario([ 'nombre' => 'Elisa', 'email' => 'egiraldo@correo.co' ]);

  # Serializa el objeto (como si se tratara de una cadena)
  $data = serialize( $usuario );
  echo '<h2>Datos serializados y guardados</h2>' .$data;

  /* Guarda los datos serializados en un archivo  */
  file_put_contents( '../storage/usuarios.txt', $data );

  echo '<p><a href="datos.php">Obtener datos</a></p>';
