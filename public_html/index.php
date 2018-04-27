<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';
  require '../vendor/paquete_externo/HTMLBuilder.php';        # Por ahora no lo incluimos en el 'autoload' con Composer

  $html = new HTMLBuilder();
  echo $html -> hr();
  echo $html -> success( 'Todo salió bien!' );
