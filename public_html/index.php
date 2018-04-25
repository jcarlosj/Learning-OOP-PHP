<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  use MetodosMagicos\NodoHTML;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  /* Ejemplo: Basado en el Videojuego */

  /* Traits: Representan acciones en la mayoría de los casos */
  trait PuedeDispararFlechas {
      public function dispararFlecha() {
          echo "<p>Dispara una flecha</p>";
      }
  }

  trait PuedeMontarCaballo {
      public function cabalgar() {
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

      public function move() {
          echo "<p>Camina</p>";
      }
  }

  class ArqueroMontaCaballo {
      use PuedeMontarCaballo, PuedeDispararFlechas;
  }

  /* Instancias */
  $caballero = new Caballero();
  $caballero -> atacarEspada();
  $caballero -> cabalgar();          
  echo '<hr />';

  $arquero = new Arquero;
  $arquero -> dispararFlecha();
  $arquero -> move();
  echo '<hr />';

  $arqueroACaballo = new ArqueroMontaCaballo;
  $arqueroACaballo -> dispararFlecha();
  $arqueroACaballo -> cabalgar();
  echo '<hr />';

/* NOTA: */
