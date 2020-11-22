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
  trim ($terminobusqueda);
  if (!$tipobusqueda || !$terminobusqueda)
  {
     echo "No has introducido los detalles de la busqueda.<br>"
	     ."Por favor vuelve e inténtalo de nuevo.<br>"
		 ."<a href=\"Borrar.php\">Regresar al formulario</a>";
     exit;
  }

  $tipobusqueda = addslashes($tipobusqueda);
  $terminobusqueda = addslashes($terminobusqueda);

  @ $db = mysql_pconnect("mysql.webcindario.com", "technology", "diosamor");

  if (!$db)
  {
     echo "Error: No se ha podido conectar a la base de datos."
	     ."Por favor, pruebe de nuevo más tarde.";
     exit;
  }

  mysql_select_db("technology");
  $query = "DELETE FROM estudiantesd WHERE ".$tipobusqueda." like '%".$terminobusqueda."%'";
            //DELETE FROM estudiantesd WHERE condicion  
//$query = "DELETE FROM * usuarios WHERE nickn='$nikcn' and password='$password'";
    $result = mysql_query($query,$db);
    echo "El usuario fue borrado";
?>
<br><a href="Panel.php" class="barra"><strong>Regresar al menu</strong></a>
</center>
</body>
</html>