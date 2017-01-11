<?php
include("conexion.php");
include ("seguridad.php");
$numero=$_POST['numero'];
$cuota=$_POST['cuota'];
$actualizar=mysql_query("update socios set cuota='$cuota' where numero='$numero'");
if($actualizar)
header("location:prepago.php?numero=$numero");
