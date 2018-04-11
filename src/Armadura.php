<?php
  namespace Juego;

# Clase Armadura
/* NOTA: Convertimos la interfaz en una clase abstracta */
  abstract class Armadura {

    # Filtra el tipo de daño a Absorber
    public function absorberDanio( Ataque $ataque ) {

        # Valida si el ataque es Mágico
        if( $ataque -> isMagico() ) {
            return $this -> absorberDanioMagico( $ataque );
        }

        return $this -> absorberDanioFisico( $ataque );
    }

    # Absorbe daño Físico
    private function absorberDanioFisico( Ataque $ataque ) {

        return $ataque -> getDanio();
    }

    # Absorbe daño Mágico
    private function absorberDanioMagico( Ataque $ataque ) {

        return $ataque -> getDanio();
    }
  }
