<?
include("conexion.php");
$cuota=$_POST['nueva'];
$monto=$_POST['monto'];
$meses=$_POST['mes'];


$query=mysql_query("insert into couta (cuota,monto,meses) values('$cuota','$monto','$meses')");
if($query)
echo "<meta http-equiv=\"refresh\" content=\"0;URL=cuotas.php\">"; 