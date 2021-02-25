<?php
include './../config/database.php';
class instrumentoUtil {
    private $database;
    public function __construct() {
        $this->database = new database();
    }    
    
    public function instrumentosPaginados($startIndex, $finishIndex){
        $sql = "SELECT * FROM instrumento i ,clasificacion_instrumentos ci WHERE i.cli_tipo_instrumento = ci.cli_id  LIMIT ".$finishIndex." OFFSET ".$startIndex;
        $result = mysqli_query($this->database->conectar(), $sql);
        return $result;
    }
    
    public function guardarInstrumento($insNombre,$insMaterial, $insCosto,$insElectrico,$deiTipoPiano, $cliTipoInstrumento){
        $sql = "INSERT INTO `instrumento` "
                . "(`ins_id`, `ins_nombre`, `ins_material_construccion`, "
                . "`ins_costo_estimado`, `ins_electrico`, `ins_altura`, "
                . "`dei_tipo_piano`, `dei_tipo_altura`, `foa_afinacion`, "
                . "`cli_tipo_instrumento`, `ins_imagen`) VALUES "
                . "(NULL, \'".$insNombre."\', \'".$insMaterial."\', "
                . "\'".$insCosto."\', \'".$insElectrico."\', NULL, \'".$deiTipoPiano."\', NULL, "
                . "\'1\', \'".$cliTipoInstrumento."\', \'/daasdada\')";

    }
}
