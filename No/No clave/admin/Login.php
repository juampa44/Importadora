<?
session_start();
@ $db = mysql_connect("localhost", "root", ""); 
mysql_select_db("importadora",$db); 
$query = "SELECT * FROM usuariosbd WHERE usuario='$usuario' and clave='$clave'"; 
$result = mysql_query($query,$db); 
$row = mysql_fetch_array($result);
?>