<?php
include("seguridad.php");
include("conexion.php");
$numero=$_POST['numero'];
$nombre=$_POST['nombre'];
date_default_timezone_set('America/Monterrey');
//$mes=date("m");
//$dia=date("d");
//$anio=date("y");
$hora=date("H:i");
$fecha=date("d-m-Y");
$dias=mysql_query("select * from registro where fecha ='$fecha' && numero='$numero'");
if(mysql_num_rows($dias))
header("location: index.php");
else{



$query=mysql_query("insert into registro(fecha, numero,nombre,hora) values ('$fecha', '$numero', '$nombre','$hora')");
if($query)
header("location: index.php");
else 
echo "error ".mysql_error();
}