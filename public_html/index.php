<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  # Instancia
  $elemento = ( new NodoHTML( 'textarea', 'Borre este texto' ))
              -> name( 'descripcion' )                      # Implementa interface fluida
              -> id( 'descripcion' )                        # Agrega nueva propiedad
              -> class( 'mensajes' )                        # Agrega nueva propiedad
              -> placeholder( 'Escriba un mensaje aquí' );  # Agrega nueva propiedad

# Agrega atributo 'name' al elemento HTML, invocando al método inexistente 'name'
  echo $elemento -> render();
  echo '<br /><pre>'; var_dump( $elemento ); echo '</pre>';
