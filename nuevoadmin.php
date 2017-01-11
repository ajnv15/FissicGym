<?php
include("conexion.php");
$nombre="admin";
$pass="32103210";
$pass=md5($pass);
$insert=mysql_query("insert into admin (nombre,pass) values('$nombre', '$pass')");
if($insert)
echo "succes";
else
echo "no se pudo".mysql_error();