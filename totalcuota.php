<?php
include("conexion.php");
$q=$_GET["q"];
$numero=$_GET['numero'];
$cuota=$_GET['cuota'];
date_default_timezone_set('America/Monterrey');
$mes1=date("m");
$dia=date("d");
$anio=date("y");
$estatus="Vigente";

$ver=mysql_query("select * from socios where numero='$numero'");

$ver=mysql_fetch_assoc($ver);
 $socioa=$ver['anio'];
 $sociom=$ver['mes'];
 $sociod=$ver['dia'];
if($ver['mes']==0){$ver['mes']=13;}

$mes=array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre","0");
if($socioa<$anio){
$estatus="Vencido";}
if($socioa==$anio && $sociom<$mes1){
$estatus="Vencido";}
if(($socioa==$anio && $sociom==$mes1) &&($sociod<=$dia)){
	$estatus="Vencido";
	}







if($estatus=="Vencido")
{
$monto=mysql_query("select * from couta where cuota='$cuota' && meses= '$q'");
$monto=mysql_fetch_assoc($monto);
echo "$"; echo $monto['monto'];
}

else{
	$monto=mysql_query("select * from couta where cuota='$cuota' && meses= '$q'");
$descuento=mysql_query("select * from couta where cuota = 'descuento'");
$monto=mysql_fetch_assoc($monto);
$descuento=mysql_fetch_assoc($descuento);
echo "$"; echo($monto['monto'])-($descuento['monto']);
	
	
	
	
	}