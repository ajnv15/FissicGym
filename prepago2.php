<?php
include("conexion.php");
include("seguridad.php");
$i=0;
$meses=$_POST['meses'];

$numero=$_POST['numero'];
$consul=mysql_query("select * from socios where numero=$numero");
$consul=mysql_fetch_row($consul);
$total=0;
if($consul[8]=="normal"){
	$total=300;
	
	}
else if($consul[8]=="estudiante"){

$total=200;
}

else if($consul[8]=="combinado")
{
	$total=500;
	
	}
	
$total=$total*$meses;

if(($meses%2)==0)
{
	$total=$total*.80;
	}
?>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 400px;
	top: 111px;
}
</style>
<div id="apDiv1">
<form action="pagarmeses.php" method="post">
  <table width="400" border="1">
    <tr>
      <td width="94"><p style="color:#06C;font: bold 14px Arial, Verdana, sans-serif; font-style: normal;">Nombre</p></td>
      <td width="290"><input type="text" value="<?php echo $consul[1];?>" size="48" readonly></td>
    </tr>
    <tr>
      <td><p style="color:#06C;font: bold 14px Arial, Verdana, sans-serif; font-style: normal;">Numero</p></td>
      <td><input type="text" name="numero" value="<?php echo $numero;?>"size="48" readonly>
      </td>
    </tr>
    <tr>
      <td><p style="color:#06C;font: bold 14px Arial, Verdana, sans-serif; font-style: normal;">Cuota</p></td>
      <td><input type="text" value="<?php echo $consul[8];?>" size="48" readonly></td>
    </tr>
    <tr>
      <td><p style="color:#06C;font: bold 19px Arial, Verdana, sans-serif; font-style: normal;">Total</p></td>
      <td><input type="text" value="<?php echo "$".$total;?>" size="48" readonly></td>
    </tr>
    <tr><td colspan="2" align="center"><input type="submit" value="Aceptar" autofocus><input type="reset" value="Cancelar" onClick="document.URL=pagos.php"></td></tr>
 <input type="hidden" value="<?php echo $meses;?>" name="meses">
  </table>
  </form>
</div>


