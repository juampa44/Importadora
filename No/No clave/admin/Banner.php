<?
include("Login.php");
?>
<html>
<head>
<title>Technology</title>
</head>
<link href="../Efectos/scroler.css" type=text/css rel=stylesheet>
<link href="../Efectos/enlaces.css" type=text/css rel=stylesheet>
<link href="../Efectos/web.css" type=text/css rel=stylesheet>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<center>
<?
if (mysql_num_rows($result)!=0){ 
   $valid_user = $row;
   session_register("valid_user", "usuario", "clave");
   echo "<center> Esta conectado como "; 
   echo stripslashes($row["nombre"]);
   echo " en la seccion de adminstracion de estudiantes"
?>
<table>
	<tr>
		<td><img src="../Index/Semilla.ico" width="20" height="20"></td>
		<td><a href="CDicipulado/Panel.php" class="barra" target="principal"><b>Panel Discipulado Cristiano</b></a></td>
		<td width="20"></td>
		<td><img src="../Index/Semilla.ico" width="20" height="20"></td>
		<td><a href="CBiblia/Panel.php" class="barra" target="principal"><b>Panel Introduccion a la Biblia</b></a></td>
	</tr>
	<tr>
		<td><img src="../Index/Semilla.ico" width="20" height="20"></td>
		<td><a href="../DCristiano/Curso.html" class="barra" target="principal"><b>Curso Discipulado Cristiano</b></a></td>
		<td width="20"></td>
		<td><img src="../Index/Semilla.ico" width="20" height="20"></td>
		<td><a href="../Biblia/Curso.html" class="barra" target="principal"><b>Curso Introduccion a la Biblia</b></a></td>
	</tr>
	<tr>
		<td><img src="../Index/Semilla.ico" width="20" height="20"></td>
		<td><a href="Administrador.php" class="barra" target="principal"><b>Inicio</b></a></td>
		<td width="20"></td>
		<td><img src="../Index/Semilla.ico" width="20" height="20"></td>
		<td><a href="Salir.php" class="barra" target="_top"><b>Salir</b></a></td>
	</tr>
</table>
<?
}
else { 
} 
?>
</center>
</body>
</html>
