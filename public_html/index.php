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
  }

  trait PuedeMontarCaballo {
      public function move() {
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
  }

  class ArqueroMontaCaballo {
      use AccionesBasicas, PuedeMontarCaballo;            # Estos dos 'Traits' implementan el mismo método 'move'
      use PuedeDispararFlechas;
  }

  /* Instancias */
  $arquero = new Arquero;
  $arquero -> move();
  $arquero -> dispararFlecha();
  $arquero -> move();
  echo '<hr />';

  $arqueroACaballo = new ArqueroMontaCaballo;
  $arqueroACaballo -> dispararFlecha();
  $arqueroACaballo -> move();
  echo '<hr />';

/* NOTA: Al comentar la implementación del 'Trait' en la clase 'ArqueroMontaCaballo'
         queda en evidencia que la funcionalidad del 'Trait' reescribe la funcionalidad
         de la clase padre en este caso 'Unidad', ya que al no usarla la que se despliega
         es esta última */
