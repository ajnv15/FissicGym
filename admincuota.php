<?php
date_default_timezone_set('America/Monterrey');
include("conexion.php");
$monto=$_POST['monto'];
$meses=$_POST['meses'];
$tipo=$_POST['concepto'];
$query=mysql_query("update couta set monto = '$monto' where cuota='$tipo' && meses='$meses'");
if($query)
echo "<meta http-equiv=\"refresh\" content=\"0;URL=cuotas.php\">"; 