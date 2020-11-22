<?

session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}

if($_SESSION["nivel"]=="administrador"){ 

include("../coneccion.php");
$rs=mysqli_query($link,"select user,id,nombre,apellido,pass,email,telefono,nivel from usuario order by user desc");          
?>
<html>
<head>
	<title>Importadora Alvarez</title>
  	<link rel="stylesheet" href="../css/formulario.css">
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
	<h2>Menu herramientas</h2>
	<br>
	<ul>
		<li class="hvr-underline-from-center"><a href="cambiodolar.php">Cambio de dolar</a></li>
		<br>
		<li class="hvr-underline-from-center"><a href="https://partners.uber.com" target="_blank">Uber</a></li>
		<br>
		<li class="hvr-underline-from-center"><a href="https://www.copart.com" target="_blank">Copart</a></li>
		<br>
		<li class="hvr-underline-from-center"><a href="https://www.gsmarena.com" target="_blank">Caracteristicas cel</a></li>
		<br>
		<li class="hvr-underline-from-center"><a href="https://versus.com/es" target="_blank">Comparacion Cel</a></li>
		<br>
		<li class="hvr-underline-from-center"><a href="https://somosmovies.com" target="_blank">Somos Movies 4K</a></li>
		<br>
		<li class="hvr-underline-from-center"><a href="https://hackstore.net/" target="_blank">Hack Movies</a></li>
		<br>
		<li class="hvr-underline-from-center"><a href="http://cinecalidad.to" target="_blank">Cine Calidad</a></li>
		<br>
		<li class="hvr-underline-from-center"><a href="http://bajarpelisgratis.com" target="_blank">Bajar Pelis</a></li>
		<br>
		<li class="hvr-underline-from-center"><a href="https://www.overnightprints.com/best-business-card-sale?FBID=businesscards&code=CER2017&utm_source=facebook&utm_medium=cpc&utm_campaign=business+cards&utm_term=cerebro" target="_blank">Tarjetas</a></li>
	</ul>
	<br>
	<hr size="10"> 
	<table>
		<tr>
			<td align="center" width="150"><a href="inicioadmin.php"><img src="../imagenes/regresar.png" width="50"></a></td>
			<td align="center" width="150"><a href="logout.php"><img src="../imagenes/salir.png" width="50"></a></td>
		</tr>
		<tr>
			<td align="center" width="150"><a href="inicioadmin.php">Regresar</a></td>
			<td align="center" width="150"><a href="logout.php">Salir</a></td>
		</tr>
	</table>
	</center>
	<br><br>
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