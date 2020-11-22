<?

session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}

if($_SESSION["nivel"]=="administrador"){ 
            
include("../coneccion.php");
$rs=mysqli_query($link,"select distinct user from iniciousuario order by user desc");    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Importadora Alvarez</title>
	<link rel="stylesheet" href="../css/formulario.css">
	<link rel="stylesheet" href="../css/buscador.css">
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
			<article>
				<img class="imagen" src="../imagenes/fondo.jpg">
			</article>
		</section>
	</div>
	<div class="secundario">
	<br>
	<?
	include("../eslogan.php");
	?>
	<section class="main2">
		<section class="articles2">
			<article class="efecto">
				<center>
				<center>
				<br><br>
				<p class="titulo">Bienvenido <? echo $_SESSION["nombre"]." ".$_SESSION["apellido"]." ".$_SESSION["nivel"]; ?></p>
				<hr size="10">
				<h2>Busqueda de Usuario</h2>
<table class="tab">
	<tr>
    	<td>Busca por nivel:</td>
    	<td>
        <form name="form1" method="post" action="buscar.php" class="cdr" >
        <select name="busca">
        	<option value="administrador">Administrador</option>
        	<option value="usuario">Usuario</option> 
		</select><br>
        <input type="submit" name="Submit" value="Buscar" class="btn btn-primary"/>
      	</form>
        </td>
        <td>Busca por detalle:</td>
        <td>
        <form name="form1" method="post" action="buscar.php" class="cdr" >
        <input name="busca"  type="text" class="busqueda">
        <input type="submit" name="Submit" value="Buscar" class="btn btn-primary"/>
        </form>
        </td>
    </tr>
</table>
<br>
<?
$busca="";
$busca=$_POST['busca'];
if($busca!=""){
$busqueda=mysqli_query($link,"SELECT * FROM usuario WHERE nombre LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
?>
<table width="1010" border="1" class="tab">
   <tr>
     <td width="10" align="center"><b>Id</b></td>
     <td width="150" align="center"><b>Nombre</b></td>
     <td width="150" align="center"><b>Apellido</b></td>
     <td width="100" align="center"><b>Usuario</b></td>
     <td width="100" align="center"><b>Clave</b></td>
     <td width="250" align="center"><b>Correo</b></td>
     <td width="100" align="center"><b>Telefono</b></td>
     <td width="150" align="center"><b>Nivel</b></td>
   </tr> 
<?
while($f=mysqli_fetch_array($busqueda)){
echo '<tr>';
echo '<td width="10" align="center">'.$f['id'].'</td>';
echo '<td width="150" align="center">'.$f['nombre'].'</td>';
echo '<td width="150" align="center">'.$f['apellido'].'</td>';
echo '<td width="100" align="center">'.$f['user'].'</td>';
echo '<td width="100" align="center">'.$f['pass'].'</td>';
echo '<td width="250" align="center">'.$f['email'].'</td>';
echo '<td width="100" align="center">'.$f['telefono'].'</td>';
echo '<td width="150" align="center">'.$f['nivel'].'</td>';
echo '</tr>';
}
}
$busca="";
$busca=$_POST['busca'];
if($busca!=""){
$busqueda=mysqli_query($link,"SELECT * FROM usuario WHERE apellido LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
while($r=mysqli_fetch_array($busqueda)){
echo '<tr>';
echo '<td width="10" align="center">'.$r['id'].'</td>';
echo '<td width="150" align="center">'.$r['nombre'].'</td>';
echo '<td width="150" align="center">'.$r['apellido'].'</td>';
echo '<td width="100" align="center">'.$r['user'].'</td>';
echo '<td width="100" align="center">'.$r['pass'].'</td>';
echo '<td width="250" align="center">'.$r['email'].'</td>';
echo '<td width="100" align="center">'.$r['telefono'].'</td>';
echo '<td width="150" align="center">'.$r['nivel'].'</td>';
echo '</tr>';
}
}
$busca="";
$busca=$_POST['busca'];
if($busca!=""){
$busqueda=mysqli_query($link,"SELECT * FROM usuario WHERE nivel LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
while($r=mysqli_fetch_array($busqueda)){
echo '<tr>';
echo '<td width="10" align="center">'.$r['id'].'</td>';
echo '<td width="150" align="center">'.$r['nombre'].'</td>';
echo '<td width="150" align="center">'.$r['apellido'].'</td>';
echo '<td width="100" align="center">'.$r['user'].'</td>';
echo '<td width="100" align="center">'.$r['pass'].'</td>';
echo '<td width="250" align="center">'.$r['email'].'</td>';
echo '<td width="100" align="center">'.$r['telefono'].'</td>';
echo '<td width="150" align="center">'.$r['nivel'].'</td>';
echo '</tr>';
}
}
$busca="";
$busca=$_POST['busca'];
if($busca!=""){
$busqueda=mysqli_query($link,"SELECT * FROM usuario WHERE telefono LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
while($r=mysqli_fetch_array($busqueda)){
echo '<tr>';
echo '<td width="10" align="center">'.$r['id'].'</td>';
echo '<td width="150" align="center">'.$r['nombre'].'</td>';
echo '<td width="150" align="center">'.$r['apellido'].'</td>';
echo '<td width="100" align="center">'.$r['user'].'</td>';
echo '<td width="100" align="center">'.$r['pass'].'</td>';
echo '<td width="250" align="center">'.$r['email'].'</td>';
echo '<td width="100" align="center">'.$r['telefono'].'</td>';
echo '<td width="150" align="center">'.$r['nivel'].'</td>';
echo '</tr>';
}
}
$busca="";
$busca=$_POST['busca'];
if($busca!=""){
$busqueda=mysqli_query($link,"SELECT * FROM usuario WHERE email LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
while($r=mysqli_fetch_array($busqueda)){
echo '<tr>';
echo '<td width="10" align="center">'.$r['id'].'</td>';
echo '<td width="150" align="center">'.$r['nombre'].'</td>';
echo '<td width="150" align="center">'.$r['apellido'].'</td>';
echo '<td width="100" align="center">'.$r['user'].'</td>';
echo '<td width="100" align="center">'.$r['pass'].'</td>';
echo '<td width="250" align="center">'.$r['email'].'</td>';
echo '<td width="100" align="center">'.$r['telefono'].'</td>';
echo '<td width="150" align="center">'.$r['nivel'].'</td>';
echo '</tr>';
}
}
$busca="";
$busca=$_POST['busca'];
if($busca!=""){
$busqueda=mysqli_query($link,"SELECT * FROM usuario WHERE user LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
while($r=mysqli_fetch_array($busqueda)){
echo '<tr>';
echo '<td width="10" align="center">'.$r['id'].'</td>';
echo '<td width="150" align="center">'.$r['nombre'].'</td>';
echo '<td width="150" align="center">'.$r['apellido'].'</td>';
echo '<td width="100" align="center">'.$r['user'].'</td>';
echo '<td width="100" align="center">'.$r['pass'].'</td>';
echo '<td width="250" align="center">'.$r['email'].'</td>';
echo '<td width="100" align="center">'.$r['telefono'].'</td>';
echo '<td width="150" align="center">'.$r['nivel'].'</td>';
echo '</tr>';
}
}
?>
</table>
<hr size="10">
	<h2>Busquede de inicios de sesion</h2>
<table class="tab">
	<tr>
    	<td>Busca usuario:</td>
    	<td>
        <form name="form1" method="post" action="buscar.php" class="cdr" >
        <select name="busca2">
		<? 
		while (list($user)=mysqli_fetch_array($rs)) 
		{ 
		echo "<option value='$user' selected>$user</option>"; 
		} 
		?> 
		</select><br>
        <input type="submit" name="Submit" value="Buscar" class="btn btn-primary"/>
      	</form>
        </td>
        <td>Busca por detalle:</td>
        <td>
        <form name="form1" method="post" action="buscar.php" class="cdr" >
        <input name="busca2"  type="text" class="busqueda">
        <input type="submit" name="Submit" value="Buscar" class="btn btn-primary"/>
        </form>
        </td>
    </tr>
</table>
<br>
<?
$busca2="";
$busca2=$_POST['busca2'];
if($busca2!=""){
$busqueda2=mysqli_query($link,"SELECT * FROM iniciousuario WHERE user LIKE '%".$busca2."%'");//cambiar nombre de la tabla de busqueda
?>
<table width="1010" border="1" class="tab">
   <tr>
     <td width="10" align="center"><b>Id</b></td>
     <td width="100" align="center"><b>Usuario</b></td>
     <td width="100" align="center"><b>Clave</b></td>
     <td width="150" align="center"><b>Coneccion</b></td>
   </tr> 
<?
while($r=mysqli_fetch_array($busqueda2)){
echo '<tr>';
echo '<td width="10" align="center">'.$r['id'].'</td>';
echo '<td width="150" align="center">'.$r['user'].'</td>';
echo '<td width="150" align="center">'.$r['pass'].'</td>';
echo '<td width="100" align="center">'.$r['dato'].'</td>';
echo '</tr>';
}
}
?>
</table>
<hr size="10">
<tr>
<form action="">
<td><input type="reset" value="Limpiar" class="btn btn-primary"></td>
<td><input type="button" value="Imprimir" name="imprimir" class="btn btn-primary"/></td>
</form>
<hr size="10">
	<table>
		<tr>
			<td align="center" width="150"><a href="registrar.php"><img src="../imagenes/registrar.png" width="50"></a></td>
			<td align="center" width="150"><a href="modificar.php"><img src="../imagenes/modificar.png" width="50"></a></td>
			<td align="center" width="150"><a href="borrar.php"><img src="../imagenes/borrar.png" width="50"></a></td>
			<td align="center" width="150"><a href="panelusua.php"><img src="../imagenes/regresar.png" width="50"></a></td>
			<td align="center" width="150"><a href="logout.php"><img src="../imagenes/salir.png" width="50"></a></td>
		</tr>
		<tr>
			<td align="center" width="150"><a href="registrar.php">Registrar</a></td>
			<td align="center" width="150"><a href="modificar.php">Modificar</a></td>
			<td align="center" width="150"><a href="borrar.php">Borrar</a></td>
			<td align="center" width="150"><a href="panelusua.php">Regresar</a></td>
			<td align="center" width="150"><a href="logout.php">Salir</a></td>
		</tr>
	</table>
	<br><br>
</center>
			</article>
		</section>
	</section>
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