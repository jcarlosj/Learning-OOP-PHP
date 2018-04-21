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
 echo "<p>Hoy es {$tiempo}</p>";
 $tomorrow = $tiempo->tomorrow();
 echo "<p>Mañana será {$tomorrow}</p>";
 echo "<p>Pasado mañana será {$tomorrow->tomorrow()} equivale a {$tiempo->tomorrow()->tomorrow()}</p>";
 echo "<p>Ayer fue {$tiempo->yesterday()}</p>";

/* NOTA: Ahora el objeto de la clase 'Tiempo' se considera un objeto inmutable
         puesto que ninguno de sus métodos dentro del objeto permiten cambiar
         el estado de las propiedades del mismo

         Los objetos que no posean identidad deben trabajarse como objetos mutables

             Pedro != Pedro         Pedro (ID:34324324) y Pedro (ID:9343234)
             Son usuarios o personas con el mismo nombre pero con identidades distintas

         Si los objetos van a manejar excusivamente valores, cantidades únicas se
         puede trabajar con objetos inmutables

            10 USD == 10 USD
            Son equivalencias iguales

        Más explicito

            10 USD == 10 USD             Identificar el valor (Objeto inmutable)
            Serial != Serial             Identificar el billete de 10 USD (Objeto mutable)
         */
