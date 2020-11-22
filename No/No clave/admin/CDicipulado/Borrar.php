<?
session_start();
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
<h1>Borrar estudiante</h1>
<?
  if (session_is_registered("valid_user"))
  {
?>
<form action="Rborrar.php" method="post" >
<table>
	<tr>
	 	<td>Elige Tipo de Búsqueda:</td>
    	<td><select name="tipobusqueda">
      		<option value="nombre">Nombre
      		<option value="mail">E-mail
      		<option value="nickn">Usuario
			<option value="password">Password
    		</select></td>
	</tr>
	<tr>
		<td>Escribe Término Búsqueda:</td>
		<td><input name="terminobusqueda" type="text" size="20"></td>
	</tr>
	<tr>
		<td><input type=submit value="Borrar"></td>
<?
  echo "<td><a href=\"Panel.php\" class=\"barra\"><strong>Volver al menu</strong></a></td>";
  echo "<td><a href='Salir.php' class=\"barra\" ><strong>Desconectar</strong></a></td>";  
  echo "</tr>";
  echo "</table>";
  echo "</form>"; 
  }
  else
  {
    echo "<br>No intentes no tendras acceso<br><br>";
    echo "<a href='../index.html' class='barra'><strong>Volver al formulario</strong></a>"; 
  }
?>
</center>
</body>
</html>