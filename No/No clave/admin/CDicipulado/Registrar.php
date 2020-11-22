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
<h1>Registrar Estudiante</h1>
<?

  if (session_is_registered("valid_user"))
  {
?>
 <form action="Rregistrar.php" method="post">
    <table border=0>
      <tr>
	<td>Nombre:</td>
	<td><input name="nombre" type="text" size="20"></td>
	<td>E-mail:</td>
	<td><input name="mail" type="text" size="20"></td>
      </tr>
      <tr>
      	<td>Nickname:</td>
      	<td><input name="nickn" type="text" size="20"><br></td>
      	<td>Password:</td>
      	<td><input name="password" type="password" size="20" ><br></td>
      </tr>
      <tr>
      	<td><input value="Registrar" type="submit"></td>
<?
    echo "<td align='center'><a href=\"Panel.php\" class=\"barra\"><strong>Volver al menu</strong></a></td>";
   echo "<td align='center'><a href='Salir.php' class=\"barra\" ><strong>Desconectar</strong></a></td>";
echo "</tr>";
echo "</table>";
echo "</form>";
  }
  else
  {
    echo "<br>No intentes no tendras acceso<br><br>";
    echo "<a href='../s' class='barra'><strong>Volver al formulario</strong></a>"; 
  }
?>
</center>
</body>
</html>