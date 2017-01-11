<?php
include("conexion.php");
$numero_original=$_POST['original'];
$nombre=$_POST['nombre'];
$numero=$_POST['numero'];
$mes=$_POST['mes'];
$dia=$_POST['dia'];
$anio=$_POST['anio'];


$mysql=mysql_query("UPDATE socios SET numero = '$numero', nombre='$nombre', mes='$mes', dia='$dia',anio='$anio' WHERE numero='$numero_original'");


if($mysql){
header("location:versocios.php");

echo "yes";
}
else{
echo "NO SE PUDO".mysql_error();
header("location:versocios.php");}
?>