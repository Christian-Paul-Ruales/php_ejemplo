<?php
include './../config/database.php';
include './../model/usuario.php';

class usuarioUtil{
    private $database;
    public function __construct() {
        $this->database = new database();
    }
    function login($usuario,$clave){
        $sql = "SELECT * FROM usuario WHERE usu_usuario='".$usuario."' and usu_password ='". $clave."'";

        $result = mysqli_query($this->database->conectar(), $sql);
        $fila = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $numeroUsuarios = mysqli_num_rows($result);
        echo "numero de filas".$numeroUsuarios;
        if($numeroUsuarios == 1){
            $usuario = new usuario($fila['usu_id'], $fila['usu_nombre'], $fila['usu_usuario'], $fila['usu_password']);
            $this->crearSession($usuario);
            return true;
            //header()
        }else{
            return false;
        }
        
    }
    
    function encriptar($encriptar){
        return md5($encriptar);
    }
    
    function crearSession($usuario){
        session_start();
        $_SESSION["usuario"] = $usuario;
    }
    
}

?>
