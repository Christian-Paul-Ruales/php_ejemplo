<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author RJ
 */
class usuario {
    //put your code here
    private $usuId;
    private $usuNombre;
    private $usuUsuario;
    private $usuPassword;
    
    public function setUsuId($id){
        $this->usuId = $id;
    }
    
    public function getUsuId(){
        return $this->usuId;
    }
    
    public function setUsuNombre($nombre){
        $this->usuNombre = $nombre;
    }
    
    public function getUsuNombre(){
        return $this->usuNombre;
    }
    
    public function setUsuUsuario($usuario){
        $this->usuUsuario = $usuario;
    }
    
    public function getUsuUsuario(){
        return $this->usuUsuario;
    }
    
    public function setUsuPassword($password){
        $this->usuPassword = $password;
    }
    
    public function getUsuPassword(){
        return $this->usuPassword;
    }
    
    public function __construct($id, $nombre, $usuario, $password) {
        $this->usuId = $id;
        $this->usuNombre = $nombre;
        $this->usuUsuario = $usuario;
        $this->usuPassword = $password;

    }


}
