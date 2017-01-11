<?PHP
  
  
  
   $connect=mysql_connect('localhost','root','')or die('Not connected:'.mysql_error($connect));
   
   $bd="fissic";
   $select=mysql_select_db($bd);
   
   //en la primer varibles esta el nombre del host que siempre es localhost, nombre de usuario y la contraseña despues la variable define al nombre de la basededatos y ´por ultimo se selecciona esa bd
?>