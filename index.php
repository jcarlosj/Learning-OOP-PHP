<?php
  /* Programación estructurada (Código spaguetti) */
  function nombreCompleto( $nombre, $apellido ) {
    return "$nombre $apellido";
  }

  $nombrePersona1 = 'Melisa';
  $apellidoPersona1 = 'Sánchez';

  $nombrePersona2 = 'Juan';
  $apellidoPersona2 = 'Herrera';

  echo nombreCompleto( $nombrePersona1, $apellidoPersona1 ) ." es amiga de ". nombreCompleto( $nombrePersona2, $apellidoPersona2 );
?>
