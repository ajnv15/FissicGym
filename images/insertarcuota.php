<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 414px;
	top: 165px;
}
</style>

<link href="./css/style.css" rel="stylesheet" type="text/css" />	
<link rel="stylesheet" type="text/css" href="./css/superfish.css" media="screen">
<link rel="stylesheet" type="text/css" href="./css/style_nivo.css" media="screen">

<div id="apDiv1">
<form method="post" action="actualizarcuota.php">
<table><tr><td colspan="2">Este socio aun no cuenta con una cuota por favor seleccione una</td></tr>
<tr><td>Numero</td><td><input type="text" name="numero" readonly value="<?php echo $_GET["numero"];?>"></tr><tr><td>Couta</td><td>
<select name="cuota" style="font-size:26px;">
    <option value="normal">Normal</option>
    <option value="estudiante">Estudiante</option>
    <option value="combinado">Combinado</option></select>
</td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Aceptar" /><input type="reset" value="Cancelar" onclick="history.go(-1)" />
</table>
</form>
</div>
<?php
