<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  class UnaClase {
      /* Métodos Mágicos (Sobre carga) */
      public function __call( $metodo, array $args = [] ) {
          echo '<pre>'; var_dump( $metodo, $args ); echo '</pre>';
      }

      public static function __callStatic( $metodo, array $args = [] ) {        # Este método mágico debe ser 'public' y 'static' para poder funcionar adecuadamente
          echo '<pre>'; var_dump( $metodo, $args ); echo '</pre>';
      }
  }

  $unObjeto = new UnaClase;                        # Instancia la clase
  $unObjeto -> unMetodo( 'Pasa', 'argumentos' );   # Invoca un método que no existe en la clase

  UnaClase :: unMetodoEstatico();                  # Invoca un método estático que no existe en la clase
