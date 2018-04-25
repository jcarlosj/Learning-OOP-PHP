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
  }

  class ArqueroMontaCaballo {
      use AccionesBasicas, PuedeMontarCaballo {
          PuedeMontarCaballo :: move insteadof AccionesBasicas;  # Define cual es el 'Trait' y el método que se va a usar
      }    /* NOTA: 'instead of' = En lugar de (Esto obliga a que la definición sea explicita) */
      use PuedeDispararFlechas;
  }

  /* Instancias */
  $arqueroACaballo = new ArqueroMontaCaballo;
  $arqueroACaballo -> dispararFlecha();
  $arqueroACaballo -> move();
  echo '<hr />';
