<html>
<head>
	<title>Importadora Alvarez</title>
	<link rel="stylesheet" href="css/formulario.css">
	<?
	include("media.php");
	?>
</head>
<body>
	<div class="contenedor">
	<?
	include("cabecera.php")
	?>
	<div class="imagen">
		<section class="main3">
			<article>
				<img class="imagen" src="imagenes/fondo.jpg">
			</article>
		</section>
	</div>
	<div class="secundario">
			<br>
			<?
			include("eslogan.php");
			?>
	<section class="main">
		<section class="articles">
			<article>
			<article>
				<center><h2>Dios los bendiga</h2></center>
			</article>
			<center>
				<?
				include("galeria/galeria.php");
				?>
			</center>
			</article>
		</section>
		<?
		include("link.php");
		?>
	</section>
	<?
	include("pie.php");
	?>
	</div>
</div>	
</body>
</html>