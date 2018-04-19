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
    echo $elemento2;                    # Forma 1: Implementa el método mágico para que pueda imprimirse como una cadena, dejando que PHP lo haga por si mismo.
    echo '<br /><pre>'; var_dump( $elemento2 ); echo '</pre>';

    echo $elemento2 -> __toString();    # Forma 2: Llamar de forma explicita al método mágico para que pueda imprimirse como una cadena
    echo '<br /><pre>'; #var_dump( $elemento2 -> __toString() ); echo '</pre>';

    echo (string) $elemento2;                       # Forma 3: Castear el objeto
    echo '<br /><pre>'; #var_dump( (string) $elemento2 ); echo '</pre>';
    /* NOTA: Una ves el objeto se convierte en una cadena en este caso no podemos revertirla */

    echo "<p>Y el programa continua...</p>";
