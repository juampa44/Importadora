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
<h1>Buscar estudiante</h1>
<?
  trim ($terminobusqueda);
  if (!$tipobusqueda || !$terminobusqueda)
  {
     echo "No has introducido los detalles de la busqueda.<br>"
	     ."Por favor vuelve e inténtalo de nuevo.<br>"
		 ."<a href=\"Buscar.php\">Regresar al formulario</a>";
     exit;
  }

  $tipobusqueda = addslashes($tipobusqueda);
  $terminobusqueda = addslashes($terminobusqueda);

  @ $db = mysql_pconnect("mysql.webcindario.com", "technology", "diosamor");

  if (!$db)
  {
     echo "Error: No se ha podido conectar a la base de datos.  Por favor, prueba de nuevo más tarde.";
     exit;
  }

  mysql_select_db("technology");
  $consulta = "select * from estudiantesd where ".$tipobusqueda." like '%".$terminobusqueda."%'";
  $resultado = mysql_query($consulta);

  $num_resultados = mysql_num_rows($resultado);

  echo "número de estudiantesd encontrados: $num_resultados <br>";

  for ($i=0; $i <$num_resultados; $i++)
  {
     $row = mysql_fetch_array($resultado);
     echo "<strong>".($i+1).". Nombre: ";
     echo stripslashes($row["nombre"]);
     echo "</strong><br>E-mail: ";
     echo stripslashes($row["mail"]);
     echo "<br>Usuario: ";
     echo stripslashes($row["nickn"]);
     echo "<br>Password: ";
     echo stripslashes($row["password"]);
  }

?>
<br><br>
<a href="Panel.php" class="barra"><strong>Regresar al menu</strong></a>
</center>
</body>
</html>