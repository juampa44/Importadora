<?php
include("../coneccion.php"); 
$user=$_POST['user'];
mysqli_query($link, "DELETE FROM usuario WHERE user = '$user'");

session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}

if($_SESSION["nivel"]=="administrador"){ 

include("../coneccion.php");
$rs=mysqli_query($link,"select user,id,nombre,apellido,pass,email,telefono,nivel from usuario order by user desc");
$rs2=mysqli_query($link,"select distinct user from iniciousuario order by user desc");           
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
	<h2>Borrar Usuario</h2>
	<br><br>
	<h2><font color=red>El usuario fue borrado con exitos.</font></h2>
	<form action="rborrar.php" method="post">
		Usuario:
		<select name="user">
		<? 
		while (list($user)=mysqli_fetch_array($rs)) 
		{ 
		echo "<option value='$user' selected>$user</option>"; 
		} 
		?> 
		</select>
    	<br>
    	<input type="submit" value="Borrar" name="Borrar" class="btn btn-primary">
		<input type="reset" value="Limpiar" class="btn btn-primary">
	</form>
	<hr size="10"> 
	<h2>Borrar inicios de sesion</h2>
	<form action="rrborrar.php" method="post">
		Usuario:
		<select name="user">
		<? 
		while (list($user)=mysqli_fetch_array($rs2)) 
		{ 
		echo "<option value='$user' selected>$user</option>"; 
		} 
		?> 
		</select><br>
        <input type="submit" value="Borrar" name="Borrar" class="btn btn-primary">
        <input type="reset" value="Limpiar" class="btn btn-primary">
    </form>
	<hr size="10">
	<table>
		<tr>
			<td align="center" width="150"><a href="registrar.php"><img src="../imagenes/registrar.png" width="50"></a></td>
			<td align="center" width="150"><a href="buscar.php"><img src="../imagenes/buscar.png" width="50"></a></td>
			<td align="center" width="150"><a href="modificar.php"><img src="../imagenes/modificar.png" width="50"></a></td>
			<td align="center" width="150"><a href="panelusua.php"><img src="../imagenes/regresar.png" width="50"></a></td>
			<td align="center" width="150"><a href="logout.php"><img src="../imagenes/salir.png" width="50"></a></td>
		</tr>
		<tr>
			<td align="center" width="150"><a href="registrar.php">Registrar</a></td>
			<td align="center" width="150"><a href="buscar.php">Buscar</a></td>
			<td align="center" width="150"><a href="modificar.php">Modificar</a></td>
			<td align="center" width="150"><a href="panelusua.php">Regresar</a></td>
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