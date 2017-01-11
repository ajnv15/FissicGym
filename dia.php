<?php
include("seguridad.php");
include("conexion.php");

$mes=$_POST['mes'];
$query=mysql_query("select * from registro where mes= '$mes'");
?>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 240px;
	top: 172px;
}
</style>
<div id="apDiv1">
<form action="mostrar.php" method="post">
<table>
<tr>
  <td>Selecciona el Dia</td></tr>
<tr><td><select name="dia">
<?php
while($row=mysql_fetch_row($query))
{?>
	<option value="<?php echo $row[2];?>"><?php echo $row[2]; ?></option>
	
	<?php }
	?>
</select></td></tr>
<tr><td><input type="submit" value="Aceptar">
</table>
<input type="hidden" value="<?php echo $mes;?> " name="mes">
</form>
</div>