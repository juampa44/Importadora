<?

session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}

if($_SESSION["nivel"]=="administrador"){ 
            
?>
<html>
<head>
	<title>Importadora Alvarez</title>
	<link rel="stylesheet" href="../css/marcador.css">
  	<link rel="stylesheet" href="../css/cotizador.css">
	<?
	include("media.php");
	?>
</head>
<body>
  <div class="contenedor">
	<?
	include("cabecera.php");
	?>
	<div class="imagen">
		<section class="main3">
		<section class="articles3">
			<article>
				<img class="imagen" src="../imagenes/fondo.jpg">
			</article>
		</section>
		</section>
	</div>
	<div class="secundario">
	<br>
	<?
	include("../eslogan.php");
	?>
	<center>
	<br><br>
	<p class="titulo">Bienvenido <? echo $_SESSION["nombre"]." ".$_SESSION["apellido"]." ".$_SESSION["nivel"]; ?></p>
	<hr size="10">
	<h2>Menu clientes</h2><br><br>
	<table>
		<tr>
			<td align="center" width="150"><a href="registrar.php"><img src="../imagenes/registrar.png" width="50"></a></td>
			<td align="center" width="150"><a href="buscar.php"><img src="../imagenes/buscar.png" width="50"></a></td>
			<td align="center" width="150"><a href="modificar.php"><img src="../imagenes/modificar.png" width="50"></a></td>
			<td align="center" width="150"><a href="borrar.php"><img src="../imagenes/borrar.png" width="50"></a></td>
			<td align="center" width="150"><a href="inicioadmin.php"><img src="../imagenes/regresar.png" width="50"></a></td>
			<td align="center" width="150"><a href="logout.php"><img src="../imagenes/salir.png" width="50"></a></td>
		</tr>
		<tr>
			<td align="center" width="150"><a href="registrar.php">Registrar</a></td>
			<td align="center" width="150"><a href="buscar.php">Buscar</a></td>
			<td align="center" width="150"><a href="modificar.php">Modificar</a></td>
			<td align="center" width="150"><a href="borrar.php">Borrar</a></td>
			<td align="center" width="150"><a href="inicioadmin.php">Regresar</a></td>
			<td align="center" width="150"><a href="logout.php">Salir</a></td>
		</tr>
	</table>
	<br><br>
	<img src="../imagenes/aro.png"><img src="../imagenes/aro.png">
	</center>
	<?
	include("../pie.php");
	?>
  </div>
</div>	
</body>
</html>
<?
}else{header("refresh:0.1 ;url=iniciousu.php"); //si el NivelUsuario es mayor o diferente a 1 va la pagina inicio del usuario normal
}
?>