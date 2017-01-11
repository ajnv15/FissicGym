<?php
$user=$_POST['user'];
$pass=md5($_POST['pass']);
if($user==NULL || $pass==NULL){
header ("Location: index.php");

}
else{
include("conexion.php");

$select=mysql_query("select pass from admin where nombre = '$user'");
$select=mysql_fetch_row($select);
if($select[0] == $pass)
{session_start(); 
    $_SESSION["autentificado"]= "SI";
header("Location: index.php");
	
	
 }
	 else
	 header("Location: index.php");
}