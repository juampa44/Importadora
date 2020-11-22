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
	<h2>Registro de usuario</h2>
	<form action="rregistrar.php" method="post">
				<label for="nombre">Nombres:</label>
				<input type="text" id="nombre" name="nombre" placeholder="Escriva el nombre" required autofocus>
				
				<label for="apellido">Apellidos:</label>
				<input type="text" id="apellido" name="apellido" placeholder="Escriva el apellido" required autofocus>
				
				<label for="user">Usuario:</label>
				<input type="text" size="20" id="user" name="user" placeholder="Escriba el usario" required autofocus>

				<label for="pass">Clave:</label>
				<input type="text" id="pass" name="pass" placeholder="Escriva la clave" required autofocus>
				
				<label for="email">E-mail:</label>
				<input type="text" id="email" name="email" placeholder="Escriva el E-mail" required autofocus>
				
				<label for="telefono">Telefono:</label>
				<input type="text" id="telefono" name="telefono" placeholder="Escriva el telefono" required autofocus>
				
				<label for="nivel">Nivel:</label>
				<select name="nivel">
      				<option value="administrador">Administrador</option>
      				<option value="usuario">Usuario</option>
    			</select>
    			<br>
    			<input type="submit" value="Registrar" name="Registrar" class="btn btn-primary">
				<input type="reset" value="Limpiar" class="btn btn-primary">
	</form>
	<hr size="10">
	<table>
		<tr>
			<td align="center" width="150"><a href="buscar.php"><img src="../imagenes/buscar.png" width="50"></a></td>
			<td align="center" width="150"><a href="modificar.php"><img src="../imagenes/modificar.png" width="50"></a></td>
			<td align="center" width="150"><a href="borrar.php"><img src="../imagenes/borrar.png" width="50"></a></td>
			<td align="center" width="150"><a href="panelusua.php"><img src="../imagenes/regresar.png" width="50"></a></td>
			<td align="center" width="150"><a href="logout.php"><img src="../imagenes/salir.png" width="50"></a></td>
		</tr>
		<tr>
			<td align="center" width="150"><a href="buscar.php">Buscar</a></td>
			<td align="center" width="150"><a href="modificar.php">Modificar</a></td>
			<td align="center" width="150"><a href="borrar.php">Borrar</a></td>
			<td align="center" width="150"><a href="panelusua.php">Regresar</a></td>
			<td align="center" width="150"><a href="logout.php">Salir</a></td>
		</tr>
	</table>
	<br><br>
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