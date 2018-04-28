<?php
    namespace MetodosMagicos;

    use MetodosMagicos\Models\Model;
    use Carbon\Carbon;                    # Integra el paquete a la aplicación usando: NombreDesarrollo/NombreClaseIniciadora

    class Usuario extends Model {

        /* Obtiene la edad a partir del año de nacimiento */
        public function getEdadAtributo() {
            # Implementa el Paquete de 'Carbon'
            $carbon = Carbon :: createFromFormat( 'd/m/Y', $this -> birthday );         # Espeficicamos el formato de la fecha

            return $carbon -> age;
        }
        /* NOTA: La idea de utilizar componentes (o paquetes) puede ayudar a agilizar el desarrollo
                 que resolverán problemas comunes ya solucionados por otros y que nos permitirá enfocarnos
                 en desarrollar la idea que tenemos */

    }
