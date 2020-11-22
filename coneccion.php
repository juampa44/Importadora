<?
$link = mysqli_connect("localhost","juampa22_db","diosamor") or die('No se pudo conectar: ' . mysqli_error());
mysqli_select_db($link,"juampa22_db") or die('No se pudo seleccionar la base de datos');
mysqli_set_charset($link,'utf8');
?>