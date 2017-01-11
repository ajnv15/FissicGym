<head><style type="text/css">
#apDiv1 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 376px;
	top: 149px;
}
</style>
<script language="javascript">
function vku_parpadeo(otro) {
var el = document.getElementById(otro);
if ( el.style.visibility != 'hidden' ) {
el.style.visibility = 'hidden';
}
else {
el.style.visibility = 'visible';
}
} 
</script>
<script type="text/javascript">
       window.onload=function(){
            window.setTimeout('document.insertar.submit()', 9000)        }
    </script>

<link href="./css/style.css" rel="stylesheet" type="text/css" />	
<link rel="stylesheet" type="text/css" href="./css/superfish.css" media="screen">
<link rel="stylesheet" type="text/css" href="./css/style_nivo.css" media="screen">
</head>


<?php
include("seguridad.php");
include("conexion.php");
date_default_timezone_set('America/Monterrey');
$mes1=date("m");
$dia=date("d");
$anio=date("y");
$estatus="Vigente";
$numero=$_POST['numero'];
$ver=mysql_query("select * from socios where numero='$numero' || nombre='$numero'");


$resultado=mysql_num_rows($ver);
if($resultado<1)
header("location:index.php");
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



?>


<div id="apDiv1">
<form name="insertar" action="ingresodiario.php" method="post">
<table width="800">
  <tr><th align="center">Numero</td>
    <td><input type="text" name="numero" value="<?php echo $ver['numero'];?>" readonly>
    </tr>
   <tr><th align="center">Nombre</td>
      <td><input type="text" name="nombre" value="<?php echo $ver['nombre'];?>" readonly></td>
    </tr>
    <tr><th align="center">Estatus</td>
      <td> <?php 
	  if($estatus=="Vigente"){ ?>
	 <h1 style="animation-timing-function:ease-out; font-family:'Times New Roman', Times, serif; font-style:inherit; text-shadow:#F00; color: #090">VIGENTE</h1>
      <?php
	  }
	  else if($estatus=="Vencido"){?>
     <script>setInterval('vku_parpadeo("asocia1")',100);</script>
<div id="asocia1" style="color: red; text-align: center;">
<p style="color:#F00; font-size:35px; font-weight:700">VENCIDO</p></div>
     <audio autoplay="autoplay" preload="auto" loop="loop" volume=200%>  
    <source src="4799.mp3" />  
</audio> 
      <?php
	  }?>
	  </td>
    </tr>
    <tr><th align="center">Vencimiento</td>
      <td><p style="font-size:26px; color:#333" align="center"><?php echo $ver['dia']." ".$mes[$ver['mes']-1]." ".$ver['anio'];?><tr>
      <td colspan="2" align="center"><input type="submit" value="Registrar" /><input type="reset" value="Cancelar" onclick="history.go(-1)" /> </td>
      
    </tr>
  </table>
  </form>
</div>
</body>