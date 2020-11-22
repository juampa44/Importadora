<?

session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}

if($_SESSION["nivel"]=="administrador"){ 

include("../coneccion.php");
$rs=mysqli_query($link,"select user,id,nombre,apellido,pass,email,telefono,nivel from usuario order by user desc");
$rs2=mysqli_query($link,"select user,id,nombre,apellido,pass,email,telefono,nivel from usuario order by user desc");          
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
	<h2>Modificacion de Usuario</h2>
	<form action="rmodificar.php" method="post">
	<table>
		<tr>
			<td>Usuario:</td>
			<td>Nivel:</td>
		</tr>
		<tr>
			<td>
				<select name="user">
				<? 
				while (list($user)=mysqli_fetch_array($rs)) 
				{ 
				echo "<option value='$user' selected>$user</option>"; 
				} 
				?> 
				</select>
			</td>
			<td>
				<select name="nivel">
				<option value="administrador">Administrador</option>
				<option value="usuario">Usuario</option>
				</select>
			</td>
		</tr>
	</table>	
		<br>
    	<input type="submit" value="Modificar" name="Modificar" class="btn btn-primary">
		<input type="reset" value="Limpiar" class="btn btn-primary">
	</form>
	<hr size="10"> 
	<form action="rmodificar.php" method="post">
	<table>
		<tr>
			<td>Usuario:</td>
			<td>Clave:</td>
		</tr>
		<tr>
			<td>
				<select name="user2">
				<? 
				while (list($user)=mysqli_fetch_array($rs2)) 
				{ 
				echo "<option value='$user' selected>$user</option>"; 
				} 
				?> 
				</select>
			</td>
			<td>
				<input type="text" id="pass" name="pass" placeholder="Escriba clave" required autofocus>
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
			<td align="center" width="150"><a href="registrar.php"><img src="../imagenes/registrar.png" width="50"></a></td>
			<td align="center" width="150"><a href="buscar.php"><img src="../imagenes/buscar.png" width="50"></a></td>
			<td align="center" width="150"><a href="borrar.php"><img src="../imagenes/borrar.png" width="50"></a></td>
			<td align="center" width="150"><a href="panelusua.php"><img src="../imagenes/regresar.png" width="50"></a></td>
			<td align="center" width="150"><a href="logout.php"><img src="../imagenes/salir.png" width="50"></a></td>
		</tr>
		<tr>
			<td align="center" width="150"><a href="registrar.php">Registrar</a></td>
			<td align="center" width="150"><a href="buscar.php">Buscar</a></td>
			<td align="center" width="150"><a href="borrar.php">Borrar</a></td>
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