<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  use MetodosMagicos\NodoHTML;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  $usuario = new Usuario([ 'nombre' => 'Elisa', 'email' => 'egiraldo@correo.co' ]);

  echo '<h2>Explora el Objeto creado</h2>';
  echo '<pre>'; var_dump( $usuario ); echo '</pre>';

  # Serializa el objeto (como si se tratara de una cadena)
  $data = serialize( $usuario );                                # En este instante se ejecuta el método mágico __wakeup()
  echo '<h2>Datos serializados y guardados</h2>' .$data;

  /* Guarda los datos serializados en un archivo  */
  file_put_contents( '../storage/usuarios.txt', $data );

  echo '<p><a href="datos.php">Obtener datos</a></p>';
  /* NOTA: También se puede usar la función serializable() de PHP para serializar y deserializar datos en PHP */
