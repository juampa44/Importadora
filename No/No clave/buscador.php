<?
include("coneccion.php");
$rs=mysql_query("select yarda,precio,id from barcosbd order by yarda asc"); 
?>
<html>
<head>
<title>Buscador Importadora Alvarez</title>
</head>
<link href="efectos/enlaces.css" type=text/css rel=stylesheet>
<style type="text/css">
#input{outline:none;border-radius:10px 10px 10px 10px;}
#busqueda{background:#ffffff;color:#000;}
#cdr{padding:5px;width:220px;border-radius:10px 0px 0px 10px;}
#tab{background:#CCC;border-radius:10px 10px 10px 10px;}
</style>
<script type='text/javascript'>
/*Mensaje que puedes personalizar*/ var mensajeerror = "Se original ¡Gracias por visitar Importadora Alvarez!"; if(document.layers) window.captureEvents(Event.MOUSEDOWN); function bloquear(e){
if (navigator.appName == 'Netscape' && ( e.which == 2 || e.which == 3)) { alert(mensajeerror);return false; }
if (navigator.appName == 'Microsoft Internet Explorer' && (event.button == 2 || event.button == 3)) {
alert(mensajeerror);return false; }} window.onmousedown=bloquear; document.onmousedown=bloquear;  </script>
<body>
<center>
<img src="Logo importadora.jpg" width="369" height="189" />
<br>
<h3>Busqueda de Grua</h3>
<table id="tab">
	<tr>
    	<td>Busca por lista</td>
    	<td>
        <form name="form1" method="post" action="buscador.php" id="cdr" >
        <select name="tamano">
      		<option value="Pequeño">Peque&ntilde;o</option>
      		<option value="Mediano">Mediano</option>
            <option value="Grande">Grande</option>
            <option value="Extra Grande">Extra Grande</option>
            <option value="Motocicleta">Motocicleta</option>
    	</select><select name="busca">
        <option value="">Seleccion grua</option>
		<? 
		while (list($yarda)=mysql_fetch_array($rs)) 
		{ 
		echo "<option value='$yarda' selected>$yarda</option>"; 
		} 
		?> 
		</select> 
        <input type="submit" name="Submit" value="buscar" />
      	</form>
        </td>
        <td>Busca por nombre</td>
        <td>
        <form name="form1" method="post" action="buscador.php" id="cdr" >
        <select name="tamano">
      		<option value="Pequeño">Peque&ntilde;o</option>
      		<option value="Mediano">Mediano</option>
            <option value="Grande">Grande</option>
            <option value="Extra Grande">Extra Grande</option>
            <option value="Motocicleta">Motocicleta</option>
    	</select>
        <input name="busca"  type="text" id="busqueda">
        <input type="submit" name="Submit" value="buscar" />
        </form>
        </td>
    </tr>
</table>
<?
$busca="";
$busca=$_POST['busca'];
if($busca!=""){
$busqueda=mysql_query("SELECT * FROM barcosbd WHERE yarda LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
?>
<br>
<table width="730" border="1" id="tab">
   <tr>
     <td width="30"><b>Id</b></td>
     <td width="200"><b>Yarda</b></td>
     <td width="100"><b>Precio Grua</b></td>
     <td width="200"><b>Destino</b></td>
     <td width="100"><b>Precio Barco</b></td>
     <td width="100"><b><font color="#000099">Total</font></b></td>
     
     <!--<td>Borrar</td>
     <td>Modificar</td>-->
   </tr> 
<?
while($f=mysql_fetch_array($busqueda)){
$dolar = 8;
$quetzal = $f['precio'];
$precioq = $dolar * $quetzal;
echo '<tr>';
echo '<td width="30">'.$f['id'].'</td>';
echo '<td width="200">'.$f['yarda'].'</td>';
echo '<td width="150" align="right">$'.number_format($f['precio'],2).'<br>Q'.number_format($precioq,2).'</td>';
echo '<td width="200">'.$f['destino'].'</td>';
$tamano = $_POST['tamano'];
/*1*/if ($tamano == "Pequeño"){
if ($f['destino'] == "California"){
$preciod = 1000;
$precioqq = $dolar * $preciod;
echo '<td width="100" align="right">$1,000.00 <br>Q'.number_format($precioqq,2).'</td>';
}
elseif ($f['destino'] == "Houston"){
$preciod = 725;
$precioqq = $dolar * $preciod;
echo '<td width="100" align="right">$725.00 <br>Q'.number_format($precioqq,2).'</td>';
}
if ($f['destino'] == "Lauderdale"){
$preciod = 620;
$precioqq = $dolar * $preciod;
echo '<td width="100" align="right">$620.00 <br>Q'.number_format($precioqq,2).'</td>';
}
if ($f['destino'] == "Delaware"){
$preciod = 775;
$precioqq = $dolar * $preciod;
echo '<td width="100" align="right">$775.00 <br>Q'.number_format($precioqq,2).'</td>';
}
}
/*1*/else {
	/*2*/if ($tamano == "Mediano"){
	if ($f['destino'] == "California"){
	$preciod = 1100;
	$precioqq = $dolar * $preciod;
	echo '<td width="100" align="right">$1,100.00 <br>Q'.number_format($precioqq,2).'</td>';
	}
	elseif ($f['destino'] == "Houston"){
	$preciod = 800;
	$precioqq = $dolar * $preciod;
	echo '<td width="100" align="right">$800.00 <br>Q'.number_format($precioqq,2).'</td>';
	}
	if ($f['destino'] == "Lauderdale"){
	$preciod = 620;
	$precioqq = $dolar * $preciod;
	echo '<td width="100" align="right">$620.00 <br>Q'.number_format($precioqq,2).'</td>';
	}
	if ($f['destino'] == "Delaware"){
	$preciod = 855;
	$precioqq = $dolar * $preciod;
	echo '<td width="100" align="right">$855.00 <br>Q'.number_format($precioqq,2).'</td>';
	}
	}
	else {
		/*3*/if ($tamano == "Grande"){
		if ($f['destino'] == "California"){
		$preciod = 1550;
		$precioqq = $dolar * $preciod;
		echo '<td width="100" align="right">$1,550.00 <br>Q'.number_format($precioqq,2).'</td>';
		}
		elseif ($f['destino'] == "Houston"){
		$preciod = 1090;
		$precioqq = $dolar * $preciod;
		echo '<td width="100" align="right">$1,090.00 <br>Q'.number_format($precioqq,2).'</td>';
		}
		if ($f['destino'] == "Lauderdale"){
		$preciod = 930;
		$precioqq = $dolar * $preciod;
		echo '<td width="100" align="right">$930.00 <br>Q'.number_format($precioqq,2).'</td>';
		}
		if ($f['destino'] == "Delaware"){
		$preciod = 1650;
		$precioqq = $dolar * $preciod;
		echo '<td width="100" align="right">$1,650.00 <br>Q'.number_format($precioqq,2).'</td>';
		}
		}
		/*3*/else{
			/*4*/if($tamano == "Extra Grande"){
			if ($f['destino'] == "California"){
			$preciod = 2000;
			$precioqq = $dolar * $preciod;
			echo '<td width="100" align="right">$2,000.00 <br>Q'.number_format($precioqq,2).'</td>';
			}
			elseif ($f['destino'] == "Houston"){
			$preciod = 1450;
			$precioqq = $dolar * $preciod;
			echo '<td width="100" align="right">$1,450.00 <br>Q'.number_format($precioqq,2).'</td>';
			}
			if ($f['destino'] == "Lauderdale"){
			$preciod = 1240;
			$precioqq = $dolar * $preciod;
			echo '<td width="100" align="right">$1,240.00 <br>Q'.number_format($precioqq,2).'</td>';
			}
			if ($f['destino'] == "Delaware"){
			$preciod = 1550;
			$precioqq = $dolar * $preciod;
			echo '<td width="100" align="right">$1,550.00 <br>Q'.number_format($precioqq,2).'</td>';
			}
			}
			/*4*/else{
				/*5*/if($tamano == "Motocicleta"){
				if ($f['destino'] == "California"){
				$preciod = 430;
				$precioqq = $dolar * $preciod;
				echo '<td width="100" align="right">$430.00 <br>Q'.number_format($precioqq,2).'</td>';
				}
				elseif ($f['destino'] == "Houston"){
				$preciod = 365;
				$precioqq = $dolar * $preciod;
				echo '<td width="100" align="right">$365.00 <br>Q'.number_format($precioqq,2).'</td>';
				}
				if ($f['destino'] == "Lauderdale"){
				$preciod = 345;
				$precioqq = $dolar * $preciod;
				echo '<td width="100" align="right">$345.00 <br>Q'.number_format($precioqq,2).'</td>';
				}
				if ($f['destino'] == "Delaware"){
				$preciod = 390;
				$precioqq = $dolar * $preciod;
				echo '<td width="100" align="right">$390.00 <br>Q'.number_format($precioqq,2).'</td>';
				}
				}
				/*5*/else{
				echo "No";
				}
			}
		}
	} 
}
$totald = $quetzal + $preciod;
$totalq = $precioq + $precioqq;
echo '<td width="100" align="right"><b><font color="#000099">$'.number_format($totald,2).'<br>Q'.number_format($totalq,2).'</font></b></td>';
/*echo  '<td>'.'<input type="button" onclick="Borra('.$f['id'].')" value="Borrar Grua">'.'</td>';
echo '<td>'.'<a href="#">'.'Modificar'.'</a>'.'</td>';
echo '</tr>';*/
//onclick="return confirm('¿Realmente deseas eliminar este articulo?')";
//cambiar los nombres de los campos de busqueda
}
}
?>
</table>
<p>
<input type="button" value="Imprimir" name="imprimir"/>
<input type="button" value="Inicio" name="inicio" onClick="location.href='index.php'"/>
</p>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1163183160414534',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</center>
</body>
</html>