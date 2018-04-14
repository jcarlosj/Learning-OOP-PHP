<?php

/**
 *  Clase Tradicional
 */
class Persona {
    /* Propiedades (Atributos) */
    protected $nombre;
    public static $database = 'mysql';       # Supuesto nombre de la base de datos
    public static $db_table = 'personas';    # Supuesto nombre de tabla en la base de datos
    /* NOTA: al declararla estática para asumir que todas las personas se registrarán en la misma tabla,
             al igual que una base de datos */

    /* Constructor */
    public function __construct( $nombre ) {
        $this -> nombre = $nombre;
    }

    /* Getters */
    public function getNombre() {
        return $this -> nombre;
    }

    public function save() {
        echo "<p>{$this->getNombre()} se ha guardado en la tabla <b>'" .static::$db_table. "'</b> de la base de datos <b>'" .static::$database. "'</b></p>";
    }

}

/* Instancias */
$melisa = new Persona( 'Melisa' );
$melisa -> save();

$alejandro = new Persona( 'Alejandro' );
$alejandro -> save();

$juan_david = new Persona( 'Juan David' );
Persona :: $db_table = 'desarrolladores';
$juan_david -> save();

/* NOTA: Esto pasa por que la propiedad 'nombre' ya no está disponible como parte de cada instancia de cada objeto.
         Ahora es parte global de la clase como tal, no de las instancias de cada objeto que se pueda crear */
