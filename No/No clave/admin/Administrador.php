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
<h1>Menu Administrador</h1>
<?
if (mysql_num_rows($result)!=0){ 
   $valid_user = $row;
   session_register("valid_user", "usuario", "clave");
?>
<table>
	<tr>
		<td align="center"><a href="CDicipulado/Panel.php"><img src="../Index/Tema 1.png" border="0"></a></td>
		<td></td>
		<td align="center"><a href="CBiblia/Panel.php"><img src="../Index/Tema 2.png" border="0"></a></td>
	</tr>
	<tr>
		<td align="center"><strong><a href="CDicipulado/Panel.php" class="barra">El discipulado<br>
        cristiano</a></strong></td>
		<td></td>
		<td align="center"><strong><a href="CBiblia/Panel.php" class="barra">Introduccion a <br>
        la Biblia</a></strong></td>
	</tr>
</table>
</center>
<?
}
else { 
    echo "<br>No intentes no tendras acceso<br><br>";
    echo "<a href='index.html' class='barra' target='_top'><strong>Volver a intentar</strong></a><br><br>";
    echo "<a href='../index.html' class='barra' target='_top'><strong>Volver a la página principal</strong></a>"; 
} 
?>
</center>
</body>
</html>