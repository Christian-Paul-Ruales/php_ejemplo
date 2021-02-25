<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database
 *
 * @author RJ
 */
class database {
    //put your code here
    private $host;
    private $user;
    private $pass;
    private $db;

    public function __construct() {
        $this->host = "localhost";
        $this->user= "root";
        $this->pass = "";
        $this->db= "casoa";
        
    }
    function conectar(){
        $conn = new mysqli($this->host, $this->user, $this->pass,$this->db);
        if($conn->connect_errno){
            echo "FALLO LA CONEXION ".$conn->connect_errno. ": ".$conn->connect_error;
        }else{
            return $conn;
        }
        
    }
    
    function ejecutarConsulta($consulta){
        if($this->conectar()){
            return mysqli_query($this->conectar(), $consulta);
        }else{
            echo "error";
        }
    }
}
