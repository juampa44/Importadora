<?

session_start();
if (isset($_SESSION["user"])) {
  header("location:index.php");
}

?>
<html>
<head>
	<title>Importadora Alvarez</title>
	<link rel="stylesheet" href="../css/formulario.css">
	<script src="../js/jquery-1.12.3.min.js" charset="utf-8"></script>
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
				<img class="imagen" src="../imagenes/fondo.jpg">
			</article>
		</section>
	</div>
	<div class="secundario">
	<br>
	<?
	include("../eslogan.php");
	?>
	<section class="main">
		<section class="articles">
			<article class="efecto">
			<center>
			<span id="result"></span>
		    <form method="post">
         
              <label for="user">Usuario o email</label>
              <input type="text" name="user" id="user" class="form-control">
            
              <label for="pass">Password</label>
              <input type="password" name="pass" id="pass" class="form-control">

              <br><br>
              <input type="button" name="login" id="login" value="Login" class="btn btn-primary">
          </form>
				<h2>¡Solicite su usuario!</h2>
			</center>
			</article>
		</section>
		<aside class="sec2">
			<article>
			<center>
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fimportadoralvarez%2F&tabs=timeline&width=340&height=450&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</center>
			<br>
			</article>
		</aside>
	</section>
	<?
	include("../pie.php");
	?>
	</div>
</div>	
</body>
</html>
<script>
  $(document).ready(function() {
    $('#login').click(function(){
      var user = $('#user').val();
      var pass = $('#pass').val();
      if($.trim(user).length > 0 && $.trim(pass).length > 0){
        $.ajax({
          url:"logueame.php",
          method:"POST",
          data:{user:user, pass:pass},
          cache:"false",
          beforeSend:function() {
            $('#login').val("Conectando...");
          },
          success:function(data) {
            $('#login').val("Login");
            if (data=="1") {
              $(location).attr('href','index.php');
            } else {
              $("#result").html("<div class='alert alert-dismissible alert-danger'><h2><font color=red><strong>¡Error!</strong> El usuario o clave son incorrectas.</font></h2></div>");
            }
          }
        });
      };
    });
  });
</script>