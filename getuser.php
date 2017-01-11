
<?php
$q=$_GET["q"];
include("seguridad.php");
include("conexion.php");
$socio=mysql_query("select * from socios where numero='$q'");

?>
<?php
echo "<table border='1' width='50'> 
<tr><td>Numero</td>
<td align='center'>Nombre</td>
<td colspan='3'><table><tr><td colspan='3' width='50%'>Vencimiento</td></tr>
<tr><td>Dia</td><td>Mes</td><td>a&ntilde;o</td></tr></table>

<form action='actualizar.php' method='post'>";

while($row = mysql_fetch_assoc($socio))
  {?>
  <input type="hidden" value="<?php echo $row['numero'];?>" name="original"/>  <tr><td><input type="text" name="numero" value="<?php echo $row['numero'];?> " /></td><td>
  <input type="text" name="nombre" value="<?php echo $row['nombre'];?> " /></td> 
  <td><input type="text" size="2"  name="dia" value="<?php echo $row['dia'];?> " /></td>
  <td><input type="text" size="2" name="mes" value="<?php echo $row['mes'];?> " /></td>
  <td><input type="text" size="1" name="anio" value="<?php echo $row['anio'];?> " /></td></tr>
  
<tr><td>CUOTA</td> <td><select name="cuota">

    <option value="<? echo $row['cuota'];?>"><? echo $row['cuota'];?></option>
    <? $vercuotas=mysql_query("select * from couta");
	while($row1=mysql_fetch_assoc($vercuotas)){?>
		<option value="<? echo $row1['cuota'];?>"><? echo $row1['cuota'];?></option><? } ?>
        </select>
        </td><td><a  href="verhistorial.php?numero=<? echo $row['numero'];?> ">Ver Historial</a></td></tr>
        </tr>
	
	
    
    </tr>
  
  
  
    <?php }
echo "<tr><td colspan='6' align='center'><input type='submit' value='actualizar'></form></table>";

?>
