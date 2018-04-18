<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  $elemento = new NodoHTML(
      'textarea',                     # Tipo de elemento
      'Escriba un mensaje aquí',      # Contenido del elemento
      [                               # 'Array' con las propiedades del elemento
          'name' => 'primer_nombre',
          'type' => 'text'
      ]
  );

  echo $elemento -> render();
  echo '<pre>'; var_dump( $elemento ); echo '</pre>';
