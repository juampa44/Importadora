<?php
include("../coneccion.php"); 
$id=1;
$taza=$_POST['taza'];
mysqli_query($link, "UPDATE tazadolar SET taza = '$taza' WHERE id = '$id'");

session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}

if($_SESSION["nivel"]=="administrador"){ 

include("../coneccion.php");
$rs=mysqli_query($link,"select taza from tazadolar");             
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
	<h2>Modificacion de taza de dolar</h2>
	<br><br>
	<h2><font color=red>La taza fue modificado con exitos.</font></h2>
	<form action="rcambiodolar.php" method="post">
	<table>
		<tr>
			<td>Taza actual</td>
			<td>&nbsp;&nbsp;</td>
			<td>Taza nueva</td>
		</tr>
		<tr>
			<td>
				<? 
				while (list($taza)=mysqli_fetch_array($rs)) 
				{ 
				echo "Q$taza"; 
				} 
				?> 
			</td>
			<td>&nbsp;&nbsp;</td>
			<td>
				<input type="text" id="taza" name="taza" placeholder="Escriva la Taza" required autofocus>
			</td>
		</tr>
	</table>	
		<br>
    	<input type="submit" value="Modificar" name="Modificar" class="btn btn-primary">
		<input type="reset" value="Limpiar" class="btn btn-primary">
	</form>
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