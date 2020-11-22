<html>
<head>
	<title>Importadora Alvarez</title>
	<link href="../../css/galeria.css" rel="stylesheet">
	<link href="../../css/formulario.css" rel="stylesheet">
	<?
	include("../media.php");
	?>
</head>
<body>
	<div class="contenedor">
	<?
	include("../cabecera.php")
	?>
	<div class="imagen">
		<section class="main3">
		<section class="articles3">
			<article>
				<img class="imagen" src="../../imagenes/fondo.jpg">
			</article>
		</section>
		</section>
	</div>
	<div class="secundario">
	<br>
	<?
	include("../../eslogan.php");
	?>
	<section class="main">
		<section class="articles">
			<article>
				<?
				include("fotos.php");
				?>
			</article>
		</section>
		<aside class="sec2">
			<p><article class="efecto">
				<h2>Hyundai Elantra GT 2013</h2>
				<ul>
					<li>Version GT</li>
        			<li>Motor 1.8 4 cilindros</li>
        			<li>Automatico</li>
        			<li>Vidrios y retrovisores electricos</li>
        			<li>Aire acondicionado</li>
					<li>Radio Original</li> 
					<li>Timón hidráulico y ajustable</li>
					<li>Control de crucero</li>
					<li>Cerradura central</li>
					<li>Bolsas de aire intactas</li>
					<li>4 puertas y asientos para 5</li>
					<li>Aros de magnecio</li>
					<li>Motor intacto</li>
					<li>Papelería en Orden</li>
        			<li>Frenos ABS</li>
        			<li class="precio">Q. 68,000.00</li>
        		</ul>
        			<span class="section__titulo"><a href="https://www.copart.com/lot/23747317/" id="ag" class="hvr-underline-from-center" target="_blank">Click aqui para ver detalles en Copart</a></span>
        			<br><br>
			<input type="button" value="Regresas al inventario" onClick="history.back()" class="btn btn-primary"/>
			</article></p>
		</aside>
	</section>
	<?
	include("../../pie.php");
	?>
	</div>
</div>	
</body>
</html>