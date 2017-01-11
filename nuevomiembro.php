<?php
date_default_timezone_set('America/Monterrey');
include("conexion.php");

$mes=date("m");
$dia=date("d");
$anio=date("Y");
 ?>
<?
include("seguridad.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>

<title>Fissic GYM</title>
<link href="./css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="./css/superfish.css" media="screen">
<style type="text/css">
#apDiv1 {
	position: relative;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 200px;
	top: -60px;
}
</style>
<script>
gooeymenu.setup({id:'gooeymenu4', snapdelay:500})
</script>
<script type="text/javascript" src="jqueryprincipal.js"></script>

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
									<li class="current"><a href="nuevomiembro.php">Socio Nuevo</a></li>
									<li><a href="pagos.php">Pagos</a></li>
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
								  <div id="apDiv1">
								  <div class="twoColumn">
									<table class="tableGrey">
                                    <form action="insertarmiembro.php" method="post">
												<thead>
														<tr>
																<th colspan="2">SOCIO NUEVO</th>

														</tr>
												</thead>
												<tbody>
														<tr>
																<td>NOMBRE</td>
																<td colspan="2"><input type="text" name="nombre"  size="50" autofocus  autocomplete="off"></td>
														</tr>
														<tr>
																<td>No. SOCIO</td>
																<td colspan="2"><input type="text" name="numero"  autocomplete="off"></td>
														</tr>
														<tr>
																<td>CUOTA</td>
<?
$tipo=mysql_query("select * from couta");


?>																<td colspan="2" style="font-size-adjust:inherit"><select name="cuota">

    <option value=""></option>
    <? while($row=mysql_fetch_assoc($tipo)){?>
		<option value="<? echo $row['cuota'];?>"><? echo $row['cuota'];?></option><? } ?>


</td>
														</tr>
														<tr>
																<td>VENCIMIENTO</td>
																<td colspan="2"><table><tr><td>
    <select name="mes">
    <option value="0"></option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option></select>
    </td><td>
    <select name="dia">
    <option value="0"></option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option></select>
    </td>
    <td>
<?php
$avalue=str_replace("20","",$anio);

?>

    <select name="anio">
    <option value="12">2012</option>
    <option value="13" >2013</option>
    <option value="14">2014</option>
    <option value="15">2015</option>
    <option value="<?php echo $avalue;?>" selected><?php echo $anio;?></option>
	</select></td></tr>
    <tr>
      <td>Mes</td>
      <td>Dia</td><td>a&ntilde;o</td></tr></table></td>
														</tr>
														<tr>
														  <td>&nbsp;</td>
														  <td colspan="2"><input type="submit" value="Aceptar" style="font-size:24px; font-weight:500">
														    <input type="reset" value="Cancelar"  style="font-size:24px; font-weight:500"></td>
												  </tr>
														<tr>
														  <td>&nbsp;</td>
														  <td colspan="2">&nbsp;</td>
												  </tr>
												</tbody>
                                      </form>
									</table>
                                    </div>
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
