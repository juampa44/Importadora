<?
include("coneccion.php");
?>
<html>
<head>
<title>Importadora Alvarez</title>
</head>
<link href="efectos/enlaces.css" type=text/css rel=stylesheet>
<script type='text/javascript'>
/*Mensaje que puedes personalizar*/ var mensajeerror = "Se original ¡Gracias por visitar Importadora Alvarez!"; if(document.layers) window.captureEvents(Event.MOUSEDOWN); function bloquear(e){
if (navigator.appName == 'Netscape' && ( e.which == 2 || e.which == 3)) { alert(mensajeerror);return false; }
if (navigator.appName == 'Microsoft Internet Explorer' && (event.button == 2 || event.button == 3)) {
alert(mensajeerror);return false; }} window.onmousedown=bloquear; document.onmousedown=bloquear;  </script>
<body>
<center>
<img src="Logo importadora.jpg" width="369" height="189" />
<br>
<?
$query = "select * from usuariosbd where usuario='$usuario' and clave='$clave'";
$result = mysql_query($query); 
$row = mysql_fetch_array($result);
if (mysql_num_rows($result)!=0){ 
   $valid_user = $row;
   session_register("valid_user", "usuario", "clave");
   echo "<center> Esta conectado como "; 
   echo "<b>".stripslashes($valid_user["nombre"])." ".stripslashes($valid_user["apellido"])."</b>";
?>
<p>Cotizador en linea</p>
<p>
<input type="submit" value="Cotizador" onclick = "location='cotizador.php'"/> 
<input type="submit" value="Buscador" onclick = "location='buscador.php'"/>
<input type="submit" value="Consulta" onclick = "location='consulta.php'"/>
</p> 
<p>
<input type="submit" value="Salir" onclick = "location='salir.php'"/>
</p>
<?
}
else { 
    echo "<br><br><br><br>";
	echo "Usted no esta conectado<br><br>";
	echo "<a href='index.html' class='barra'><strong>Intentar de nuevo</strong></a><br><br>";
} 
?>
</center>
</body>
</html>

