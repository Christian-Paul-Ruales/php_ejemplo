<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './../util/instrumentoUtil.php';
$instrumentoUtil = new instrumentoUtil();
$instrumentos = $instrumentoUtil->instrumentosPaginados(0, 10);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>
        <h1>Instrumentos</h1>
        <table style="border: 1px solid black">
            <thead >
                
                <tr>
                    <th style="border: 1px solid black">Instrumento</th>
                    <th style="border: 1px solid black">Material</th>
                    <th style="border: 1px solid black">Costo</th>
                    <th style="border: 1px solid black">Tipo</th>
                    <th style="border: 1px solid black"><a href="./agregarInstrumento.php"> Agregar Instrumento</a></th>

                </tr>
            </thead>
            <tbody>
                <?php
                
                while ($instrumento = mysqli_fetch_assoc($instrumentos)){
                  echo '<tr>';
                        echo '<td style="border: 1px solid black">'.$instrumento['ins_nombre'].'</td>';
                        echo '<td style="border: 1px solid black">'.$instrumento['ins_material_construccion'].'</td>';
                        echo '<td style="border: 1px solid black">'.$instrumento['ins_costo_estimado'].'</td>';
                        echo '<td style="border: 1px solid black">'.$instrumento['cli_nombre'].'</td>';
                        echo '<td style="border: 1px solid black"><a>Ver</a></td>';

                    echo '</tr>';  
                }
                
                ?>
            </tbody>
        </table>
        <?php
            
        ?>
        </center>
    </body>
</html>
