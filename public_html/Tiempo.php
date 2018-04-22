<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  use MetodosMagicos\NodoHTML;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  class Tiempo {
    /* Propiedades (Atributos) */
    protected $tiempo = null;

    /* Constructor */
    public function __construct( $tiempo = null ) {
        $this -> tiempo = $tiempo ?: time();
    }

    /* Método mágico: Convierte el tiempo en una cadena */
    public function __toString() {

        return date( 'd/m/Y H:i:s', $this -> tiempo );
    }

    public function tomorrow() {
        # Retorna un nuevo objeto de la misma clase para evitar que se modifique el objeto original
        return new Tiempo( $this -> tiempo + 24*60*60 );    # Sumamos 1 día
    }

    public function yesterday() {
        # Retorna un nuevo objeto de la misma clase para evitar que se modifique el objeto original
        return new Tiempo( $this -> tiempo - 24*60*60 );    # Restamos 1 día
    }

  }

  # Instancia

   $tiempo = new Tiempo();
   $tiempo2 = $tiempo;
   $tiempo3 = new Tiempo();
   $tiempo4 = new Tiempo( time() + 60 );    // El tiempo actual más 60 segundos

   echo "<h2>Objetos \$tiempo, \$tiempo2, \$tiempo3 \$tiempo4</h2>";
   echo '<pre style="color:blue;"><b>\$tiempo </b>'; var_dump( $tiempo ); echo '</pre>';
   echo '<pre style="color:orange;"><b>\$tiempo2 </b>'; var_dump( $tiempo2 ); echo '</pre>';
   echo '<pre style="color:green;"><b>\$tiempo3 </b>'; var_dump( $tiempo3 ); echo '</pre>';
   echo '<pre style="color:red;"><b>\$tiempo4 </b>'; var_dump( $tiempo3 ); echo '</pre>';

   echo "<h2>Comparación básica </h2>";
   echo "<p>\$tiempo == \$tiempo2<b> - ";
   echo ( $tiempo == $tiempo2 ) ? 'VERDADERO' : 'FALSO'; echo '</b></p>';

   echo "<p>\$tiempo == \$tiempo3<b> - ";
   echo ( $tiempo == $tiempo3 ) ? 'VERDADERO' : 'FALSO'; echo '</b></p>';

   echo "<p>\$tiempo3 == \$tiempo4<b> - ";
   echo ( $tiempo3 == $tiempo4 ) ? 'VERDADERO' : 'FALSO'; echo '</b></p>';

   echo "<h2>Comparación estricta </h2>";
   echo "<p>\$tiempo === \$tiempo2<b> - ";
   echo ( $tiempo === $tiempo2 ) ? 'VERDADERO' : 'FALSO'; echo '</b></p>';

   echo "<p>\$tiempo2 === \$tiempo3<b> - ";
   echo ( $tiempo === $tiempo3 ) ? 'VERDADERO' : 'FALSO'; echo '</b></p>';

   echo "<p>\$tiempo3 === \$tiempo4<b> - ";
   echo ( $tiempo3 === $tiempo4 ) ? 'VERDADERO' : 'FALSO'; echo '</b></p>';
