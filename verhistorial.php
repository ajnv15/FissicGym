<?php
include("conexion.php");
$numero=$_GET['numero'];

$nombre=mysql_query("select nombre from socios where numero = '$numero'");
 $fecha=mysql_query("SELECT * FROM  `pagos`  WHERE numero = '$numero' order by id desc");
 $nombre=mysql_fetch_assoc($nombre);
 $nombre1=$nombre['nombre'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"> 
<head>
<title>Fissic GYM</title>
<link href="./css/style.css" rel="stylesheet" type="text/css" />	
<link rel="stylesheet" type="text/css" href="./css/superfish.css" media="screen">
		<script>
gooeymenu.setup({id:'gooeymenu4', snapdelay:500})
</script>
<script type="text/javascript" src="jqueryprincipal.js"></script>
<script>
gooeymenu.setup({id:'gooeymenu4', snapdelay:500})
  </script>

<script src="gooeymenu.js"></script>
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/hoverIntent.js"></script>
<script type="text/javascript" src="./js/superfish.js"></script>
<script type="text/javascript" src="./js/placeholder.js"></script>
<script type="text/javascript">
// Initialise menu plugin
jQuery(function(){
	jQuery('ul.sf-menu').superfish();
});
</script>
       
<meta charset="UTF-8"></head>

<body>

<div id="container">

		<!--Header begins-->
		<div id="headerContainer">
			
				<a class="logo" href="./index.html" title="Health Care Theme">Health Care Theme</a>
		
				<!--Personal File begins-->
				
				<!--Personal File ends-->
				
				<div class="clear"></div>
	
		</div>
		<!--Header ends-->
		
		<div id="contentContainer">
				
					<!--Menu begins-->
					<div id="menubarborder">
					<div id="menubar">
					
							<ul class="sf-menu">
									<li><a href="./index.php">Principal</a></li>
									<li><a href="nuevomiembro.php">Socio Nuevo</a></li>
									<li><a href="pagos.php">Pagos</a></li>
									<li><a href="vencimientos.php">Vencidos</a></li>
									<li><a href="record.php">Registro X Dia</a></li>
									<li class="current"><a href="versocios.php">Ver Socios</a>
                                                               <li><a href="verpagos.php">Ver Pagos</a></li>				
                                                               <li><a href="admin.php">Administrativo</a></li>							
															</ul>
													</li>
											</ul>
									</li>
									
							</ul>
							
					</div>
					</div>
					<!--Menu ends-->
						
				<!--Content begins-->		
				<div id="content">
						
						<!--Middle part begins-->
						<div id="middlePart">
						
								<!--Page styles begins-->
								<div id="middleFullWidth"> <!--Info Boxes begins-->
								 
								  
								   
  <table  align="center" class="tableGrey"> <thead><th>Numero</th><th>Nombre</th><th>Fecha</th></thead>
 <?

 while($row = mysql_fetch_assoc($fecha))
 {
 ?>
 <tr><td><? echo $nombre1;?></td><td><? echo $numero;?></td><td><? echo $row['fecha'];?></td></tr>
 <? }?>
 </table
 ></div>
 