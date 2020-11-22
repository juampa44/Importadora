<?
  session_start();
  $old_user = $valid_user;  // almacenado para comprobar si ellos estuvieron logged in
  $result = session_unregister("valid_user");
  session_destroy();
?>
<html>
<head>
<title>Importadora Alvarez</title>
<meta http-equiv="Refresh" content="2;index.html">
<link href="efectos/enlaces.css" type=text/css rel=stylesheet>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<center>
<h1><img src="Logo importadora.jpg" width="369" height="189" /></h1>

<?
  if (!empty($old_user))
  {
    if ($result)
    {
      // si estuvieron logged in y no están logged out
	  echo "<h1>Gracias por visitarnos</h1>";
	  echo "<h2>".stripslashes($valid_user["nombre"])." ".stripslashes($valid_user["apellido"])."</h2>";
	  echo "Se a desconectado ";
	  echo "<p><a href='index.html' class='barra'><strong>Volver a la pagina de inicio</strong></a></p>";
    }
    else
    {
     // Estaban logged in y no pueden  logged out
      echo "No se ha podido hacer logged out.<br>";
    }
  }
  else
  {
    // si ellos no estaban logged in pero llegan a esta página de algún modo
	echo "Usted no esta conectado<br><br>";
	echo "<a href='index.html' class='barra'><strong>Intentar de nuevo</strong></a><br><br>";
  }
?>
</center>
</body>
</html>