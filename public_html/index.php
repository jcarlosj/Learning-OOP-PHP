<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';
  require '../vendor/paquete_externo/Macroable.php';        # Por ahora no lo incluimos en el 'autoload' con Composer
  require '../vendor/paquete_externo/HTMLBuilder.php';        # Por ahora no lo incluimos en el 'autoload' con Composer

  use paquete_externo\HTMLBuilder;

  # Agrega un método de forma dinámica (Crea una macro)
  HTMLBuilder :: macro( 'success', function( $message ) {

      return "<p style='background-color: #DFF0D8; border-color: #D0E9C6; color: #3C763D; padding: 10px;'>{$message}</p>" . $this -> hr();
  });
  /* NOTA: En Laravel este concepto de crear métodos de forma dinámica se le conoce como MACROS
           En Laravel estas macros puede agregarsele al constructor de HTML, al de formularios,
           Las colecciones del Frameworks, etc. */

  $html = new HTMLBuilder();
  echo $html -> success( 'Todo salió bien!' );        # Aquí se hace el llamado al método dinámico (o macro creada)
