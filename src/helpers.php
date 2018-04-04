<?php

  /* Valida si la función 'show' NO existe se declara (evita que se creen funciones 
     que ya existen en otros archivos y que tienen el mismo nivel de accesibilidad,
     por ejemplo que tengamos otro archivo de helpers) También nos puede indicar gracias
     a esta validación cuando otro archivo declara a esta función, es decir que pueda
     estar llamada dos o más veces */
  if( !function_exists( 'show' ) ) {
    # Función para evitar la duplicación del código
    function show( $mensaje ) {
        echo "<p>$mensaje</p>";
    }
  }  
