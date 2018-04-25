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
      public function caminar() {
          echo "<p>Camina</p>";
      }
  }

  class ArqueroMontaCaballo {
      public function dispararFlecha() {
          echo "<p>Dispara una flecha</p>";
      }
      public function cabalgar() {
          echo "<p>Cabalga</p>";
      }
  }

  /* Instancias */
  $caballero = new Caballero();
  $caballero -> atacarEspada();
  $caballero -> cabalgar();                        # Esta acción es la misma que realiza el 'Arquero que monta a caballo'
  echo '<hr />';

  $arquero = new Arquero;
  $arquero -> dispararFlecha();                    # Esta acción es la misma que realiza el 'Arquero que monta a caballo'
  $arquero -> caminar();
  echo '<hr />';

  $arqueroACaballo = new ArqueroMontaCaballo;
  $arqueroACaballo -> dispararFlecha();            # Esta acción es la misma que realiza el 'Arquero'
  $arqueroACaballo -> cabalgar();                  # Esta acción es la misma que realiza el 'Caballero'
  echo '<hr />';

/* NOTA: Una forma de solucionar este problema es implementando la herencia en PHP
         ya que lo que pretende la POO es no repetir acciones (o métodos) en diferentes
         partes del código si estos van a realizar la misma funcionalidad */
