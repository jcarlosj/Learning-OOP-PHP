<?php
  /* Programación orientada a objetos */
  namespace MetodosMagicos;

  use MetodosMagicos\NodoHTML;

  # Implementa el 'autoload' generado por 'Composer' (para cargar las clases del proyecto automáticamente)
  require '../vendor/autoload.php';

  /* Ejemplo: Basado en el Videojuego */

  class Caballero {
      public function atacarEspada() {
          echo "<p>Acata con la espada</p>";
      }
      public function cabalgar() {
          echo "<p>Cabalga</p>";
      }
  }

  class Arquero {
      public function dispararFlecha() {
          echo "<p>Dispara una flecha</p>";
      }
      public function move() {
          echo "<p>Camina</p>";
      }
  }

  class ArqueroMontaCaballo extends Arquero {
      public function move() {
          echo "<p>Cabalga</p>";
      }
  }

  /* Instancias */
  $caballero = new Caballero();
  $caballero -> atacarEspada();
  $caballero -> cabalgar();                        # Esta acción es la misma que realiza el 'Arquero que monta a caballo'
  echo '<hr />';

  $arquero = new Arquero;
  $arquero -> dispararFlecha();
  $arquero -> move();
  echo '<hr />';

  $arqueroACaballo = new ArqueroMontaCaballo;
  $arqueroACaballo -> dispararFlecha();
  $arqueroACaballo -> move();                      # Esta acción (Cabalgar) es la misma que realiza el 'Caballero'
  echo '<hr />';

/* NOTA: Al implementar la herencia entre las clases 'Arquero' y 'ArqueroMontaCaballo'
         podemos dar solución a las acciones entre dos de los objetos, sin embargo
         la funcionalidad compartida ya no se podrá resolver por este método ya
         que PHP no permite la herencia múltiple como si lo hacen otros lenguajes */
