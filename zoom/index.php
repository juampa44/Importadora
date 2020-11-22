<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<title>Ejemplo 1</title>
	
	<?
	include("lib.php");
	?>

</head>

<body>
	<h2>Imagen Individual</h2>
	<a class="single-image" href="imgs/1.jpg" title="Ubuntu Computer"><img src="imgs/1.jpg" alt=""/></a>
	
	<h2>Galeria</h2>
	<a class="gallery-image" rel="gallery" href="imgs/2.jpg" title="titulo imagen"><img src="imgs/2.jpg" alt=""/></a>
	<a class="gallery-image" rel="gallery" href="imgs/3.jpg" title="titulo imagen"><img src="imgs/3.jpg" alt=""/></a>
	<a class="gallery-image" rel="gallery" href="imgs/4.jpg" title="titulo imagen"><img src="imgs/4.jpg" alt=""/></a>
	<a class="gallery-image" rel="gallery" href="imgs/5.jpg" title="titulo imagen"><img src="imgs/5.jpg" alt=""/></a>
	
	<h2>Iframe</h2>
	<a class="fancyOther" data-fancybox-type="iframe" href="iframe.php">Abrir Iframe</a>
	<a class="fancyOther" data-fancybox-type="iframe" href="index.php">Abrir Index</a>
	
	<h2>Inline</h2>
	<div id="inline" style="display:none;width:500px;">
			<h2>Lorem ipsum dolor sit amet</h2>

			<p>
				<a href="javascript:$.fancybox.close();">Close</a>
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			</p>
	</div>
	<a class="fancyOther" href="#inline">Abrir Inline</a><br/>
	<a class="fancyOther2">Abrir Inline2</a><br/>
	
	<a class="fancyOther" href="/data/non_existing_image.jpg">Non-existing url</a><br/>
	
	<h2>InlineMedia</h2>
	
	<a class="fancyMedia" data-fancybox-type="iframe" href="https://www.youtube.com/watch?v=B7akYNZBAKQ">Abrir Vídeo Youtube</a><br/>
	
	<a class="fancyMediaMapa" data-fancybox-type="iframe" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12212.92000267421!2d-2.1371673179077013!3d40.070281430064014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5d6741369751c3%3A0x6e81ab6ed08cd292!2sCuenca!5e0!3m2!1ses!2ses!4v1430095038086">Abrir Mapa</a><br/>

	

</body>

</html>
