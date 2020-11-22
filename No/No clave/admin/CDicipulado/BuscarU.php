<?
include("../Login.php");
?>
<html>
<head>
<title>Technology</title>
</head>
<link href="../../Efectos/scroler.css" type=text/css rel=stylesheet>
<link href="../../Efectos/enlaces.css" type=text/css rel=stylesheet>
<link href="../../Efectos/web.css" type=text/css rel=stylesheet>
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
		<td><a href="Buscar.php"><img src="../../Index/Buscar.png" border="0" alt="Buscar" width="75" height="75"></a></td>
		<td><a href="../../Pdf/Estdispulado.php" class="barra"><img src="../../Index/Impresora.png" border="0"></a></td>

		<td><a href="../Administrador.php"><img src="../../Index/Regresar.png" border="0" alt="Regresar" width="75" height="75"></a></td>
		<td><a href="Salir.php"><img src="../../Index/Salir.png" border="0" alt="Salir" width="75" height="75"></a></td>
	</tr>
	<tr>
		<td align="center"><a href="Buscar.php" class="barra"><strong>Buscar</strong></a></td>
		<td align="center"><a href="../../Pdf/Estdispulado.php" class="barra"><strong>Imprimir</strong></a></td>
		<td align="center"><a href="../Administrador.php" class="barra"><strong>Regresar</strong></a></td>
		<td align="center"><a href="Salir.php" class="barra"><strong>Salir</strong></a></td>
	</tr>
</table>
</center>
<?
}
else { 
    echo "<br>No intentes no tendras acceso<br><br>";
    echo "<a href='../index.html' class='barra'><strong>Volver al formulario</strong></a>"; 
} 
?>
</center>
</body>
</html>
