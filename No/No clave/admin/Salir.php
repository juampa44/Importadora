<?
  session_start();
  $old_user = $valid_user;  // almacenado para comprobar si ellos estuvieron logged in
  $result = session_unregister("valid_user");
  session_destroy();
?>
<html>
<head>
<title>Technology</title>
</head>
<link href="../Efectos/enlaces.css" type=text/css rel=stylesheet>
<link href="../Efectos/web.css" type=text/css rel=stylesheet>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<center>
<br><br><br><br>
<h1>Gracias por visitarnos</h1>
<?
  if (!empty($old_user))
  {
    if ($result)
    {
      // si estuvieron logged in y no están logged out
      echo "Se a desconectado ";
	  echo stripslashes($valid_user["nombre"]);
	  echo " adminstrador";
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
    echo "Usted no esta conectado.<br>";
  }
?>
<br><br>
<a href="index.html" class="barra" target="_top"><strong>Volver a intentar</strong></a><br><br>
<a href="../index.html" class="barra" target="_top"><strong>Volver a la página principal</strong></a>
</center>
</body>
</html>