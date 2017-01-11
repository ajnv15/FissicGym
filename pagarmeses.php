<?php
include("conexion.php");
include("seguridad.php");
$i=0;
$numero=$_POST['numero'];
$meses=$_POST['users'];
$mes=mysql_query("select * from socios where numero=$numero");
$mes=mysql_fetch_row($mes);
$pago=$mes[6]+$meses;
if($pago>12){
$pago=$pago-12;
$consulta=mysql_query("update socios set mes='$pago',anio =anio+1 where numero='$numero'");
if($cosulta)
$i=1;
}
else {
$consulta=mysql_query("update socios set mes='$pago' where numero='$numero'");
if($consulta)
$i=1;
}
if($i==1)
header("location: index.php");

else
echo "error no se pudo realizar el pago regrese e intente de nuevo";