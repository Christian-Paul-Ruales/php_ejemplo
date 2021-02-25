<!DOCTYPE html>
<?php
include '../util/detalleInstrumentoUtil.php';
include '../util/clasificacionInstrumentoUtil.php';

$detalleInstrumento = new detalleInstrumento();
$clasificacionInstrumentoUtil = new clasificacionInstrumentoUtil();

$resultPiano = $detalleInstrumento->obtenerDetallesPorCategoria(1);
$resultClasificacionInstrumentoUtil = $clasificacionInstrumentoUtil->ClasificacionesInstrumentos();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>
        <h1>Agregar Instrumento</h1>
        <form action="agregarInstrumento.php" method="post">
            <input type="text" name="insNombre" id="insNombre" placeholder="Nombre" maxlength="255" required/><br>
            <input type="text" name="insMaterialConstruccion" id="insMaterialConstruccion" placeholder="Material de construcción" maxlength="255" required/><br>
            <input type="number" name="insCostoEstimado" id="insCostoEstimado" placeholder="Costo" maxlength="255" required/><br>
            <input type="number" name="cliT" id="insCostoEstimado" placeholder="Costo" maxlength="255" required/><br>
            Tipo de instrumento: <select name="cliTipoInstrumento">
                <?php
                while ($row = mysqli_fetch_assoc($resultClasificacionInstrumentoUtil)) {
                    echo "<option value='".$row["cli_id"]."'>".$row['cli_nombre']."</option>";
                }
                ?>
            </select>
            <h1>Para instrumentos de cuerda</h1>
            <input type="radio" name="insElectrico" id="insElectrico" value="1" maxlength="255" required/>Si<br/><br>
            <input type="radio" name="insElectrico" id="insElectrico" value="0" maxlength="255" required/>No<br/><br>
            <br>
            Tipo de piano: <select name="deiTipoPiano">
                <?php
                while ($row = mysqli_fetch_assoc($resultPiano)) {
                    echo "<option value='".$row["dei_id"]."'>".$row['dei_nombre']."</option>";
                }
                ?>
            </select>
            <h1>Para instrumentos de viento</h1>
            <input type="submit" name="btnGuardarInstrumento" value="Guardar Instrumento"/>
        </form>
    </center>
        <?php
        if(isset($_POST["btnGuardarInstrumento"])){
            
        }
        // put your code here
        ?>
    </body>
</html>
