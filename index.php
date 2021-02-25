<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    include './config/constantes.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
            if(isset($_SESSION["usuario"])){
                header("location: ".URL_PROYECTO."vista/principal.php");
            }else{
                header("location: ".URL_PROYECTO."vista/login.php");   

            }
        ?>
    </body>
</html>
