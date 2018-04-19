<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  use MetodosMagicos\NodoHTML;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  echo '<h3>Forma 1</h3><p>Método a través de Instancia de clase e interface fluída</p>';
  # Método a través de Instancia de clase
  $elemento = ( new NodoHTML( 'textarea', 'Borre este texto' ))
              -> name( 'contenido' )                        # Corrige
              -> id( 'descripcion' )                        # Agrega nueva propiedad
              -> class( 'mensajes' )                        # Agrega nueva propiedad
              -> placeholder( 'Escriba un mensaje aquí' );  # Agrega nueva propiedad

# Agrega atributo 'name' al elemento HTML, invocando al método inexistente 'name'
  echo $elemento -> render();
  #echo '<br /><pre>'; var_dump( $elemento ); echo '</pre>';

  echo '<h3>Forma 2</h3><p>Método estático e interface fluída</p>';
  # Método estático
  $elemento2 = NodoHTML :: textarea( 'Borre este texto' )
                  -> id( 'descripcion-2' )
                  -> class( 'persona-mensaje' )
                  -> placeholder( 'Escriba una breve descripción personal' );

  # Agrega atributo 'name' al elemento HTML, invocando al método inexistente 'name'
    echo $elemento2;
    echo "<p>Y el programa continua...</p>";
    #echo '<br /><pre>'; var_dump( $elemento2 ); echo '</pre>';
