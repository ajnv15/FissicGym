<?php 
include("conexion.php");
include ("seguridad.php");
$mes=date("m");
$dia=date("d");
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
			
				<a class="logo" href="./index.php" title="Health Care Theme">Health Care Theme</a>
		
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
									<li class="current"><a href="pagos.php">Pagos</a></li>
									<li><a href="vencimientos.php">Vencidos</a></li>
									<li><a href="record.php">Registro X Dia</a></li>
									<li><a href="versocios.php">Ver Socios</a>
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
								  <h3>&nbsp;</h3>
										<!--Info Boxes begins-->
										
										<!--Tables begins-->
								  <h3>&nbsp;</h3>
								  <div class="twoColumn">
									<table class="tableGrey">
                                    <form action="prepago.php" method="post">
												<thead>
														<tr>
																<th colspan="4">NUMERO DE IDENTIFICACIÓN</th>
																
														</tr>
												</thead>
												<tbody>
														<tr>
																<td colspan="3"><input type="search" name="numero" autofocus /></td><td><input type="submit" value="Pagar"></td>
														</tr>
												</tbody>
                                                </form>
										</table>
										</div>
										<!--Tables ends-->
										
										<!--List styles begins-->
								  <h3>&nbsp;</h3>
										<div class="clear"></div>
										<!--List styles ends-->
										
										<!--Buttons begins-->
										<h3>&nbsp;</h3>
										<div class="oneColumn"></div>
										<div class="twoColumn">
												<p>&nbsp;</p>
										</div>
										<div class="twoColumnLast">
												<p>&nbsp;</p>
										</div>
										<!--Mark ends-->
										
								</div>
								<!--Page styles ends-->
								
						</div>
						<!--Middle part ends-->
						
						<div class="clear"></div>
						
				</div>
				<!--Content ends-->	
				
				<!--Footer begins-->	
				<div id="footerPart">
						<div class="footerLeft">
								Datos
						</div>
						<div class="footerRight"> </div>
				</div>
				<!--Footer ends-->	
				
		</div>
		<!--ContentContainer ends-->	

</div>
<!--Container ends-->	

</body>
</html>
