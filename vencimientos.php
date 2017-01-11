<?php 
date_default_timezone_set('America/Monterrey');
include("conexion.php");
include ("seguridad.php");
$mes=date("m");
$dia=date("d");
$anio=date("y");
//$fecha=date("j-n-Y")
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"> 
<head>
 <script>
function mostrarTotal(str)
{ var cuota=document.getElementById("cuota").value;
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","totalcuota.php?cuota="+cuota+"&&q="+str,true);
xmlhttp.send();
}
</script>
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
									<li class="current"><a href="vencimientos.php">Vencidos</a></li>
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
								 
								  
								   
  <table  align="center" class="tableGrey">
 
  <thead>
														<tr>
																<th colspan="1">Numero</th>
																<th colspan="1">Nombre</th>
                                                                <th colspan="1">Cuota</th>
                                                                <th>Baja</th>
														</tr>
												</thead>
  
  
 
<?php

$ver=mysql_query("select * from socios where (anio< $anio) ||((anio=$anio)&& mes<$mes)||((anio=$anio&&mes=$mes)&&(dia<$dia))");

while($row = mysql_fetch_assoc($ver))

{if($row['estatus']!="baja"){
	
	
	


	
?>
<tr class="tab"><td class="tab"><?php echo $row['numero']; ?></td><td class="tab"><?php echo $row['nombre'];?> </td><td class="tab"><?php echo $row['cuota'];?></td><td><form action="bajas.php" method="post"><input type="submit" value="Baja" name="Baja"><input type="hidden" name="numero" value="<? echo $row['numero']; ?>"></form></td></tr>

<?php	
	
}



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
