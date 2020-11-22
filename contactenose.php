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
	<center>
	<section class="main">
		<section class="articles">
			<article class="efecto">
			<h2>¡Ponte en contacto para poderte ayudar!</h2>
			<?
			$destino = "ventas@importadoralvarez.com";
			$nombre = $_POST["nombre"];
			$apellido = $_POST["apellido"];
			$correo = $_POST["email"];
			$telefono = $_POST["telefono"];
			$asunto = $_POST["asunto"];
			$mensaje = $_POST["mensaje"];
			$contenido = "Nombre: ".$nombre."\nApellido: ".$apellido."\nCorreo: ".$correo."\nTelefono: ".$telefono."\nAsunto: ".$asunto."\nMensaje: ".$mensaje;
			mail($destino,"Contacto",$contenido);
			echo "<h2><font color=red>Mensaje enviado</font></h2>";
			?>
				<form action="contactenose.php" method="post">
				<label for="nombre">Nombre:</label>
				<input type="text" id="nombre" name="nombre" placeholder="Escriba su nombre completo" required autofocus>

				<label for="apellido">Apellido:</label>
				<input type="text" id="apellido" name="apellido" placeholder="Escriba su apellido completo" required autofocus>

				<label for="email">Email:</label>
				<input type="email" id="email" name="email" placeholder="ejemplo@mail.com" required>

				<label for="telefono">Telefono:</label>
				<input type="telefono" id="telefono" name="telefono" placeholder="Ej. 56565656" required pattern="[0-9]{8}" title="Su número debe contener 8 dígitos."/>

				<label for="asunto">Asunto</label>
				<input type="text" id="asunto" name="asunto" placeholder="Escribe su asunto" required autofocus>

				<label for="mesanje">Mensaje:</label>
				<textarea id="mensaje" name="mensaje" placeholder="Escribe su mensaje" required autofocus></textarea>

				<input type="submit" name="Enviar" class="btn btn-primary">
				<input type="reset" value="Limpiar" class="btn btn-primary">
				</form>
			</article>
		</section>
		<aside class="sec2">
			<article class="fb">
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fimportadoralvarez%2F&tabs=timeline&width=340&height=450&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
				<span class="espacio"><br><br><br><br><br><br><br><br><br></span>
			</article>
		</aside>
<!--
	</section>
<table>
		<tr>
			<td align="center">
				<article class="efecto">
					<h3>IMPORTADORA ALVAREZ EN GUATEMALA</h3>
				</article>
				<br>2a. Calle 2-73 Zona 4 de Mixco Colonia Monte Verde
				<br>Guatemala, Guatemala, C. A.
				<br>TEL: 2219-7430 y 4426-2956
				<br><b><a class="hvr-underline-from-center" href="https://api.whatsapp.com/send?phone=50244262956" target="_blank">Whatsapp</a>
				<br><a class="hvr-underline-from-center" href="mailto:ventas@importadoralavarez.com">ventas@importadoralavarez.com</a>&nbsp;&nbsp;&nbsp;&nbsp;<br>     
				<a class="hvr-underline-from-center" href="htttp://www.importadoralvarez.com">www.importadoralvarez.com</a></b>
			</td>
			<td align="center">
				<article class="efecto">
					<h3>IMPORTADORA ALVAREZ EN NEW YORK (ESTDOS UNIDOS)</h3>
				</article>
				<br>16 high street Garnerville
				<br>New York, Estados Unidos, A. N.
				<br>TEL: (845) 200-0455
				<br><b><a class="hvr-underline-from-center" href="https://api.whatsapp.com/send?phone=18452000455" target="_blank">Whatsapp</a>
				<br><a class="hvr-underline-from-center" href="mailto:ventas@importadoralavarez.com">ventas@importadoralavarez.com</a>&nbsp;&nbsp;&nbsp;&nbsp;<br>      
				<a class="hvr-underline-from-center" href="htttp://www.importadoralvarez.com">www.importadoralvarez.com</a></b>
			</td>
		</tr>
		<tr>
			<td align="center">
				<?
				include("mapag.php");
				?>
			</td>
			<td align="center">
				<?
				include("mapae.php");
				?>
			</td>
		</tr>
	</table>
-->
	</center>
	<?
	include("pie.php");
	?>
	</div>
</div>	
</body>
</html>