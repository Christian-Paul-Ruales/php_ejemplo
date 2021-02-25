<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './../model/usuario.php';
include './../config/constantes.php';
session_start();
if(isset($_SESSION["usuario"])){
    $usuario = $_SESSION["usuario"];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1><?php echo "BIENVENIDO ".$usuario->getUsuNombre(); ?></h1>
        <a href="instrumentos.php">Ir a instrumentos</a>
    </body>
 
</html>
<?php
}else{
    header("location: ".URL_PROYECTO."vista/login.php");
}
?>