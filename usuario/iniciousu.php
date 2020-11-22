<?

session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}

if($_SESSION["nivel"]=="usuario"){ 

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
	<br><br>
	<table>
		<tr>
			<td align="center" width="150"><a href="#"><img src="../imagenes/her.png" width="50"></a></td>
			<td align="center" width="150"><a href="#"><img src="../imagenes/doc.png" width="50"></a></td>
			<td align="center" width="150"><a href="logout.php"><img src="../imagenes/salir.png" width="50"></a></td>
		</tr>
		<tr>
			<td align="center" width="150"><a href="#">Hrramientas</a></td>
			<td align="center" width="150"><a href="#">Documentacion</a></td>
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
}else{header("refresh:0.1 ;url=inicioadmin.php"); //si el NivelUsuario es mayor o diferente a 1 va la pagina inicio del usuario normal
}
?>
