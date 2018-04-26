<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  use MetodosMagicos\NodoHTML;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  /* Ejemplo: Basado en el Videojuego */

  /* Traits: Representan acciones en la mayoría de los casos */
  trait AccionesBasicas {
      public function move() {
          echo "<p>Camina</p>";
      }
  }

  trait PuedeDispararFlechas {
      public function dispararFlecha() {
          echo "<p>Dispara una flecha</p>";
      }

      abstract public function getCantidadFlechas();
  }

  trait PuedeMontarCaballo {
      public function move() {                    # La definición explicita hace que use este método
          echo "<p>Cabalga</p>";
      }
  }

  trait PuedeUsarEspada {
      public function atacarEspada() {
          echo "<p>Acata con la espada</p>";
      }
  }

  /* Clases */
  class Caballero {
      use PuedeMontarCaballo, PuedeUsarEspada;
  }

  class Arquero {
      use PuedeDispararFlechas;

      public function getCantidadFlechas() {

          return 30;                            # Reescribirá la cantidad de la propiedad
      }
  }

  class ArqueroMontaCaballo {
      public $cantidad = 20;            # Propiedad en la clase

      use AccionesBasicas, PuedeMontarCaballo {
          PuedeMontarCaballo :: move insteadof AccionesBasicas;         # Define cual es el 'Trait' y el método que se va a usar
          PuedeMontarCaballo :: move as cabalgar;                       # Agrega un alias al nombre del 'Trait'
          AccionesBasicas :: move as movimientoBasico;                  # Agrega un alias al nombre del 'Trait'

      }    /* NOTA: Si esta solución hay que implementarla de manera muy frecuente en el desarrollo,
                    probablemente esta no sea la mejor opción para implementar */
      use PuedeDispararFlechas;

      public function getCantidadFlechas() {

          return 100;                            # Reescribirá la cantidad de la propiedad
      }
  }

  /* Instancias */
  $arqueroACaballo = new ArqueroMontaCaballo;
  echo "Cantidad flechas: {$arqueroACaballo->getCantidadFlechas()}";
  $arqueroACaballo -> dispararFlecha();
  $arqueroACaballo -> move();                    # Por defecto será el método 'move' del 'Trait' PuedeMontarCaballo
  $arqueroACaballo -> movimientoBasico();        # Usa el alias y llama a el método 'move' del 'Trait' AccionesBasicas
  $arqueroACaballo -> cabalgar();                # Usa el alias y llama al método 'move' del  'Trait' PuedeMontarCaballo
  echo '<hr />';
