<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  use MetodosMagicos\NodoHTML;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  # Recupera la cadena serializada del archivo
  $datos_recuperados = file_get_contents( '../storage/usuarios.txt' );
  echo '<h2>Datos serializados recuperados</h2>' .$datos_recuperados;

  # Deserializa la cadena (lo convierte en Objeto PHP)
  $usuario = unserialize( $datos_recuperados );

  echo '<h2>Objeto deserializado</h2>';
  echo '<pre>'; var_dump( $usuario ); echo '</pre>';

  echo '<h2>Imprime valores del objeto</h2>';    
  echo '<p><b>Nombre:</b> '. $usuario -> getAtributo( 'nombre' ). '<br /><b>Correo:</b> ' .$usuario -> getAtributo( 'email' ). '</p>';

  echo '<p><a href="index.php">Regresar</a></p>';
