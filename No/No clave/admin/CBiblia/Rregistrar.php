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
  if (!$nombre || !$mail || !$nickn || !$password)
  {
     echo "No has introducido todos los detalles requeridos.<br>"
          ."Por favor vuelve e inténtalo de nuevo.";
     exit;
  }

  $usuario = addslashes($usuario);
  $password = addslashes($password);
  
  @ $db = mysql_pconnect("mysql.webcindario.com", "technology", "diosamor");

  if (!$db)
  {
     echo "Error: No se puede conectar a la base de datos.  Por favor inténtalo de nuevo.";
     exit;
  }
  mysql_select_db("technology");
  $query = "insert into estudiantesb values ('".$nombre."', '".$mail."', '".$nickn."', '".$password."')";
  $result = mysql_query($query);
  if ($result)
      echo  mysql_affected_rows()." El estudiante fue introducido en la base de datos con exito.";
?>
<br><a href="Panel.php" class="barra"><strong>Regresar al menu</strong></a>
</center>
</body>
</html>