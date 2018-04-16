<?php
    namespace Juego;

    class RegistradorArchivo implements Registrador {

        # Función para evitar la duplicación del código
        public function info( $mensaje ) {
            # Guarda el contenido del mensaje en un archivo
            file_put_contents(
                __DIR__. '/../storage/log.txt',                      # Indica la ruta y la extensión del archivo que guardará los datos
                "(" .date( 'Y-m-d H:i:s' ) . ") " .$mensaje. "\n",   # Agrega la fecha y el mensaje al archivo
                FILE_APPEND                                          # Si el archivo ya existe, añade la información al fichero en vez de sobrescribirlo
            );
        }
    }
