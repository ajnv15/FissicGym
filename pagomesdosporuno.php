<?
include("conexion.php");
date_default_timezone_set('America/Monterrey');
include("seguridad.php");
$i=0;
$meses=$_POST['users'];

$numero1=$_POST['numero1'];
$numero2=$_POST['numero2'];
/*$total=mysql_query("select * from coutas where cuota='2x1'");
mysql_fetch_assoc($total);
$monto=$total['cuota'];*/
$fechapago=date("d-m-Y");
$horapago=date("H:i");
$consulta2=mysql_query("insert into pagos (numero, fecha,hora) values ('$numero1', '$fechapago','$horapago')");
$consulta2=mysql_query("insert into pagos (numero, fecha,hora) values ('$numero2', '$fechapago','$horapago')");
$mes_ac1=mysql_query("select * from socios where numero='$numero1'");
$mes_ac2=mysql_query("select * from socios where numero='$numero2'");
$mes_ac1=mysql_fetch_assoc($mes_ac1);
$mes_ac2=mysql_fetch_assoc($mes_ac2);
$actualizar1=$mes_ac1['mes'];
$actualizar2=$mes_ac2['mes'];
$actualizar1=$actualizar1+$meses;
$actualizar2=$actualizar2+$meses;
if($actualizar1>12){
$actualizar1=$actualizar1-12;
$actualizar2=$actualizar2-12;
$consulta=mysql_query("update socios set mes='$actualizar1',anio =anio+1 where numero='$numero1'");
$consulta=mysql_query("update socios set mes='$actualizar2',anio =anio+1 where numero='$numero2'");
$consulta=mysql_query("update socios set mes='$pago',anio =anio+1 where numero='$numero2'");

if($cosulta)
$i=1;
}
else {
$consulta=mysql_query("update socios set mes='$actualizar1' where numero='$numero1'");
$consulta=mysql_query("update socios set mes='$actualizar2' where numero='$numero2'");
if($consulta)
$i=1;
}


if($i==1)
header("location: index.php");

else
echo "error no se pudo realizar el pago regrese e intente de nuevo";



