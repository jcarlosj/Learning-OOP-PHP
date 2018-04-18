<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  # Instancia
  $elemento = ( new NodoHTML(
      'textarea',                    # Tipo de elemento
      'Escriba un mensaje aquí'      # Contenido del elemento
      )
  ) -> name( 'descripcion' );        # Implementa interface fluida

# Agrega atributo 'name' al elemento HTML, invocando al método inexistente 'name'
  echo $elemento -> render();
  echo '<pre>'; var_dump( $elemento ); echo '</pre>';
