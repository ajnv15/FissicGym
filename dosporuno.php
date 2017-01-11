<?
include("conexion.php");
include("seguridad.php");
$i=0;
$numero=$_POST['numero'];
if($numero==NULL){
$numero=$_GET['numero'];}
else{
//header("location:pagos.php");
}


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"> 
<head>
 <script>
function mostrarTotal(str)
{ var cuota=document.getElementById("cuota").value;
var numero=document.getElementById("numero").value;
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
xmlhttp.open("GET","totalcuota.php?numero="+numero+"&&cuota="+cuota+"&&q="+str,true);
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
									<li class="current"><a href="pagos.php">Pagos</a></li>
									<li><a href="vencimientos.php">Vencidos</a></li>
									<li><a href="record.php">Registro X Dia</a></li>
									<li><a href="versocios.php">Ver Socios</a></li>
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
								  <h3>&nbsp;</h3>
										<!--Info Boxes begins-->
										
										<!--Tables begins-->
								  <h3>&nbsp;</h3>
								  <div class="twoColumn">
									<form action="pagomesdosporuno.php" method="post" name="text">
  <table class="tableGrey">
   <thead>
														<tr>
																<th colspan="4">PREPAGOS</th>
																
														</tr>
												</thead>

												<tbody>
    <tr>
      <td width="94"><p style="color:#06C;font: bold 14px Arial, Verdana, sans-serif; font-style: normal;">Numero 1</p></td>
      <td width="290"><input name="numero1" type="text" value="<?php echo $numero;?>" size="48" readonly></td>
    </tr>
    <tr>
      <td><p style="color:#06C;font: bold 14px Arial, Verdana, sans-serif; font-style: normal;">Numero 2 </p></td>
      <td><input type="text" id="numero" name="numero2" size="48">
      </td>
    </tr>
    <tr>
      <td><p style="color:#06C;font: bold 14px Arial, Verdana, sans-serif; font-style: normal;">Cuota</p></td>
      <td><input type="text" id="cuota" value="2x1" size="48" /></td>
    </tr>
    <tr><td><p style="color:#06C;font: bold 14px Arial, Verdana, sans-serif; font-style: normal;">Meses</p></td><td align="center"><select name="users" autofocus onChange="mostrarTotal(this.value)">
<option value=""></option>
<option value="1">1</option>
<option value="2">2</option></select>

</td></tr>
    <tr>
      <td><p style="color:#06C;font: bold 19px Arial, Verdana, sans-serif; font-style: normal;">Total</p></td>
      <td><div id="txtHint"><b></b></div></td>
    </tr>
    <tr><td colspan="2" align="center"><input type="submit" value="Aceptar" autofocus><input type="reset" value="Cancelar" onclick="history.go(-1)"></td></tr>
  </table>
  </form>
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
