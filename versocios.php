
<?php
date_default_timezone_set('America/Monterrey');
include("seguridad.php");
include("conexion.php");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"> 
<head>
 <script type="text/javascript" src="jqueryprincipal.js"></script>

<script src="gooeymenu.js">

/*** x********************************************
* Gooey Menu Script (c) Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

</script>



<script>
function showUser(str)
{
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
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}
</script>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 185px;
	top: 301px;
}
</style>
<title>Fissic GYM</title>
<link href="./css/style.css" rel="stylesheet" type="text/css" />	
<link rel="stylesheet" type="text/css" href="./css/superfish.css" media="screen">
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
<script type="text/javascript" src="epoch_classes.js"></script>
<script type="text/javascript" src="jqueryprincipal.js"></script>
</script>

<script src="gooeymenu.js"></script>

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
<form action="otrodia.php" method="post">

</form>

<script type="text/javascript"> 
   Calendar.setup({ 
    inputField     :    "ingreso",     // id del campo de texto 
     ifFormat     :     "%d-%m-%Y",     // formato de la fecha que se escriba en el campo de texto 
     button     :    "lanzador"     // el id del botón que lanzará el calendario 
}); 
</script>


<div id="container">

		<!--Header begins-->
		<div id="headerContainer">
			
				<a class="logo" href="./index.php" title="Health Care Theme">Health Care Theme</a>
		
				<!--Personal File begins-->
				<div id="filenrContainer">
						<img src="images/icon_quickSearch.png" width="81" height="78">
						<h4>Registrar Entrada</h4>
						<h4>&nbsp;</h4>
						<h4>SOCIO</h4>
						<span>Escriba su identificador como socio</span>
		          <div class="clear"></div>
						<form action="registrodias.php" method="post">
                        <input type="text" size="30" value="" id="inputString" onKeyUp="lookup(this.value);" onBlur="fill();"  autofocus="autofocus" autocomplete="off" name="numero" />
							
								<input type="submit" value="" name="submit-search">
						</form>
				</div>
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
								 
								  
		
<script type="text/javascript"> 
   Calendar.setup({ 
    inputField     :    "ingreso",     // id del campo de texto 
     ifFormat     :     "%d-%m-%Y",     // formato de la fecha que se escriba en el campo de texto 
     button     :    "lanzador"     // el id del botón que lanzará el calendario 
}); 
</script>  	
<script>
gooeymenu.setup({id:'gooeymenu4', snapdelay:500})
</script>
			  
<br> 
  <table  align="center" class="tableGrey">
 
  <thead>
														<tr>
																<th colspan="1">Datos</th>
																
                                                                
														</tr>
												</thead>
  




<tr>
<th><form>
<select name="users" autofocus onChange="showUser(this.value)">
<option value="full">Selecciona un Numero:</option>
<?php
$ver=mysql_query("select * from socios order by numero asc");
while ($row = mysql_fetch_row($ver))
{
	echo "\t<option value=\"" . $row[5] . "\">" . $row[5] . "</option>\n";
}

?>


</select>

</form></th>
</tr>

</table>

								  
										<!--Tables ends-->
										
										<!--List styles begins-->
								  <h3>&nbsp;</h3>
										<div id="txtHint"></div>
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
