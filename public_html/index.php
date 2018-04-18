<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  class UnaClase {}             # Crea una clase sin métodos definidos

  $unObjeto = new UnaClase;     # Instancia la clase
  $unObjeto -> unMetodo();      # Invoca un método que no existe en la clase
