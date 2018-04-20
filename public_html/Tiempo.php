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
        $this -> tiempo += 24*60*60;    # Sumamos 1 día

        return $this;
    }

    public function yesterday() {
        $this -> tiempo -= 24*60*60;    # Restamos 1 día

        return $this;
    }

  }

  # Instancia

 $tiempo = new Tiempo();
 echo "<p>Hoy es {$tiempo}</p>";

 echo "<p>Mañana será {$tiempo->tomorrow()}</p>";
 echo "<p>Ayer fue {$tiempo->yesterday()}</p>";
