<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"><head>
 
<title>Fissic GYM</title>
<link href="./css/style.css" rel="stylesheet" type="text/css" />	
<link rel="stylesheet" type="text/css" href="./css/superfish.css" media="screen">
<link rel="stylesheet" type="text/css" href="epoch_styles.css" />

<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/hoverIntent.js"></script>
<script type="text/javascript" src="./js/superfish.js"></script>
<script type="text/javascript" src="./js/placeholder.js"></script>

<script type="text/javascript" src="epoch_classes.js"></script>
		<script type="text/javascript">
/*<![CDATA[*/
/*You can also place this code in a separate file and link to it like epoch_classes.js*/
	var bas_cal,dp_cal,ms_cal;      
window.onload = function () {
	bas_cal = new Epoch('epoch_basic','flat',document.getElementById('basic_container'));
	dp_cal  = new Epoch('epoch_popup','popup',document.getElementById('popup_container'));
	ms_cal  = new Epoch('epoch_multi','flat',document.getElementById('multi_container'),true);
};
/*]]>*/
</script>
<script type="text/javascript" src="jqueryprincipal.js"></script>



<style type="text/css">
#apDiv2 {
	position: absolute;
	width: 470px;
	height: 161px;
	z-index: 1;
	left: 411px;
	top: 156px;
}
#apDiv3 {
	position: absolute;
	width: 572px;
	height: 312px;
	z-index: 2;
	left: 203px;
	top: 470px;
}
#apDiv4 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 3;
	left: 40px;
	top: 141px;
}
</style>



       
<meta charset="UTF-8"></head>

<body>
<form action="otrodia.php" method="post">

</form>


<div id="container">

		<!--Header begins-->
		<div id="headerContainer">
			
				<a class="logo" href="./index.php" title="Health Care Theme">Health Care Theme</a>
		
				<!--Personal File begins-->
				
						
<form action="otrodia.php" method="post">
  <input type="text" name="ingreso" id="popup_container" readonly >
  <input type="submit" value="Aceptar" align="right"></form>

				<!--Personal File ends-->
				
				<div class="clear"></div>
	
		</div>
		<!--Header ends-->
		
		<div id="contentContainer">
				
					<!--Menu begins-->
					<div id="menubarborder">
					<div id="menubar">
					
							<ul class="sf-menu">
									<li class="current"><a href="./index.php">Principal</a></li>
									<li><a href="nuevomiembro.php">Socio Nuevo</a></li>
									<li><a href="pagos.php">Pagos</a></li>
									<li><a href="vencimientos.php">Vencidos</a></li>
									<li><a href="record.php">Registro X Dia</a></li>
									<li><a href="versocios.php">Ver Socios</a>
				
                                           <li><a href="verpagos.php">Ver Pagos</a></li>							
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
								 
								  
<?php
include("conexion.php");
$fecha=$_POST['ingreso'];
date_default_timezone_set('America/Monterrey');
$dias=mysql_query("select * from registro where fecha='$fecha'");
$i=1;
if($dias){?>			   
  <table  align="center" class="tableGrey">
 
  <thead>
														<tr>
																<th colspan="1">#</th>
																<th colspan="1">Numero</th>
                                                                <th colspan="1">Nombre</th>
                                                                 <th class="rounded-q4">Hora</th>
                                                                 <th colspan="1">Pago</th>
                                                                
														</tr>
												</thead>
  


<?php while($row=mysql_fetch_assoc($dias)){
	$num=$row['numero'];
$dias2=mysql_query("select * from socios where numero = '$num'");
$dias2=mysql_fetch_assoc($dias2);
?>
<tr class="tab">

<td class="tab"><?php echo $i;?></td>
<td class="tab"><?php echo $row['numero']; ?> </td>
<td class="tab"><?php echo $row['nombre']; ?></td>
<td class="tab"><?php echo $row['hora']; ?></td>
<td class "tab"><?php echo $dias2['dia']."/".$dias2['mes']."/".$dias2['anio']; ?></td>


</tr>


	
<?php 
	$i++;}
   }
else{
echo " Aun no hay registros para este dia";
}
?>
<tfoot class="tab"><td class="rounded-foot-left"></td><td class="tab"></td><td class="rounded-foot-right"></td></tfoot>
</table>

								  
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
