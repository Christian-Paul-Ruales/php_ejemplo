<?php
include './../config/database.php';


class detalleInstrumento {
    private $database;
    public function __construct() {
        $this->database = new database();
    }     
    public function obtenerDetallesPorCategoria($categoriaCodigo){
        $sql = "SELECT * FROM `detalle_instrumentos` where cai_catalogo = ".$categoriaCodigo;
        $result = mysqli_query($this->database->conectar(), $sql);
        return $result;
    }
}
