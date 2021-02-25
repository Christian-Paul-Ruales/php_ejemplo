<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './../util/usuarioUtil.php';
include './../config/constantes.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center> Iniciar Sesion
        <form action="login.php" method="post">
        <input type="text" name="usuUsuario" id="usuUsuario" placeholder="Usuario"/><br/>
        <input type="text" name="usuPassword" id="usuUsuario" placeholder="Contraseña"/><br/>
        <input type="submit" value="Iniciar Session" name="btnLogin">
    </form>
    </center>
    
        <?php
            if(isset($_POST["btnLogin"])){
                $usuario = $_POST["usuUsuario"];
                $password = $_POST["usuPassword"];
                $usuarioUtil = new usuarioUtil();
                $inicioSesion = $usuarioUtil->login($usuario, $password);
                if($inicioSesion){
                    echo "Sesion iniciada con exito";
                    header("location: ".URL_PROYECTO."vista/principal.php");
                }else{
                    echo "ha ocurrido un error";
                }
                
            }
        ?>
    </body>
</html>