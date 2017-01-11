<?php 
date_default_timezone_set('America/Monterrey');
include("conexion.php");

$numero=$_POST['numero'];

$query=mysql_query("update socios set estatus = 'baja' where numero='$numero'");
if($query)
echo "<meta http-equiv=\"refresh\" content=\"0;URL=vencimientos.php\">"; 