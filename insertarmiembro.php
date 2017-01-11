<?php
date_default_timezone_set('America/Monterrey');
include("seguridad.php");
include("conexion.php");
$nombre=$_POST['nombre'];
$socio=$_POST['numero'];
$cuota=$_POST['cuota'];
$mes=$_POST['mes'];
$dia=$_POST['dia'];
$anio=$_POST['anio'];
if($socio==""){echo '<script language="javascript">alert("Verifique el numero de socio");</script>';
echo "<html><head></head>".
"<body onload=\"javascript:history.back()\">".
"</body></html>";
}
else
{
$verifica=mysql_query("select * from socios where numero =$socio");
if((mysql_num_rows($verifica))){
// se encontraron concidencias no se realiza la query ok.
echo '<script language="javascript">alert("El numero de socio ya se encuentra registrado");</script>';
echo "<html><head></head>".
"<body onload=\"javascript:history.back()\">".
"</body></html>";
exit();
}


$insertar=mysql_query("insert into socios (nombre,numero,mes,dia,cuota,anio) values('$nombre', '$socio', '$mes', '$dia', '$cuota','$anio')");
if($insertar){
echo '<script language="javascript">alert("Miembro registrado con exito");</script>';
header ("Location: index.php");
}
else{
	echo "fallo".mysql_error();
	}

}