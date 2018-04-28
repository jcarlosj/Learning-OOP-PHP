<?php
    namespace MetodosMagicos;

    use MetodosMagicos\Models\Model;
    use Carbon\Carbon;

    class Usuario extends Model {

        /**/
        public function getEdadAtributo() {
            echo '<pre>'; var_dump( Carbon :: createFromFormat( 'd/m/Y', $this -> birthday ) ); echo '</pre>';        # Espeficicamos el formato de la fecha
            exit();
        }

    }
