<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 175px;
	top: 184px;
}
</style>
<html>
<head><title>Fissic Gym</title>
<script type="text/javascript" src="jqueryprincipal.js"></script>

<script src="gooeymenu.js">

/*** x********************************************
* Gooey Menu Script (c) Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

</script>

<link rel="stylesheet" type="text/css" href="gooeymenu.css" />
</head>
<body>
<HR />


<ul id="gooeymenu4" class="framemenu" >
<li class="selected"><a href="nuevomiembro.php">Miembro Nuevo</a></li>
<li><a href="pagos.php">Pagos</a></li>
<li><a href="vencimientos.php">Vencidos</a></li>
<li><a href="record.php">Registro X Dia</a></li>
<li><a href="index.php">Principal</a></li>

</ul>

<script>
gooeymenu.setup({id:'gooeymenu4', snapdelay:500})
</script>


<?php
include("seguridad.php");
include("conexion.php");
$mes=$_POST['mes'];
$dia=$_POST['dia'];
$query=mysql_query("select * from registro where mes= '$mes' && dia = '$dia'");
?>

<div id="apDiv1">
<table border="1">
<tr bgcolor="#0066FF"><td  align="center"><p style="color:#FFF; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" >Numero</p> </td><td><p style="color:#FFF; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif" >Nombre</p></td></tr>
<?php 
while($row=mysql_fetch_row($query))
{?>
<tr><td><?php echo $row[4];?></td><td><?php echo $row[5];?>
	<?php }?>



</table>



</div>