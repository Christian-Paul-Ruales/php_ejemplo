<?php
include './../config/database.php';

class clasificacionInstrumentoUtil {
private $database;
    public function __construct() {
        $this->database = new database();
    }       
    public function ClasificacionesInstrumentos() {
        $sql = "SELECT * FROM `clasificacion_instrumentos`";
        return mysqli_query($this->database->conectar(), $sql);
    }
}
?>