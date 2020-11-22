<?
include("../coneccion.php");
$rs=mysqli_query($link,"select yarda,precio,id from barcosbd order by yarda asc"); 
?>
<html>
<head>
<title>Importadora Alvarez</title>
<link rel="stylesheet" href="../css/buscador.css">
</head>
<body>
<center>
<img src="../imagenes/logo.jpg" width="369" height="189" />
<?
include("../chat.php");
include("eslogan.php");
?>
<br>
<h3>Busqueda de Grua</h3>
<table class="tab">
	<tr>
    	<td>Busca por lista</td>
    	<td>
        <form name="form1" method="post" action="buscador.php" class="cdr" >
        <select name="tamano">
      		<option value="Pequeño">Peque&ntilde;o</option>
      		<option value="Mediano">Mediano</option>
            <option value="Grande">Grande</option>
            <option value="Extra Grande">Extra Grande</option>
            <option value="Motocicleta">Motocicleta</option>
    	</select><select name="busca">
        <option value="">Seleccion grua</option>
		<? 
		while (list($yarda)=mysqli_fetch_array($rs)) 
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
        <form name="form1" method="post" action="buscador.php" class="cdr" >
        <select name="tamano">
      		<option value="Pequeño">Peque&ntilde;o</option>
      		<option value="Mediano">Mediano</option>
            <option value="Grande">Grande</option>
            <option value="Extra Grande">Extra Grande</option>
            <option value="Motocicleta">Motocicleta</option>
    	</select>
        <input name="busca"  type="text" class="busqueda">
        <input type="submit" name="Submit" value="buscar" />
        </form>
        </td>
    </tr>
</table>
<?
$busca="";
$busca=$_POST['busca'];
if($busca!=""){
$busqueda=mysqli_query($link,"SELECT * FROM barcosbd WHERE yarda LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
?>
<br>
<table width="730" border="1" class="tab">
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
while($f=mysqli_fetch_array($busqueda)){
$rs=mysqli_query($link,"select taza from tazadolar");
	while (list($taza)=mysqli_fetch_array($rs)) 
	{ 
		$dolar = "$taza"; 
	} 
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
$preciod = 1020;
$precioqq = $dolar * $preciod;
echo '<td width="100" align="right">$1,020.00 <br>Q'.number_format($precioqq,2).'</td>';
}
elseif ($f['destino'] == "Houston"){
$preciod = 785;
$precioqq = $dolar * $preciod;
echo '<td width="100" align="right">$785.00 <br>Q'.number_format($precioqq,2).'</td>';
}
if ($f['destino'] == "Lauderdale"){
$preciod = 680;
$precioqq = $dolar * $preciod;
echo '<td width="100" align="right">$680.00 <br>Q'.number_format($precioqq,2).'</td>';
}
if ($f['destino'] == "Delaware"){
$preciod = 785;
$precioqq = $dolar * $preciod;
echo '<td width="100" align="right">$785.00 <br>Q'.number_format($precioqq,2).'</td>';
}
}
/*1*/else {
	/*2*/if ($tamano == "Mediano"){
	if ($f['destino'] == "California"){
	$preciod = 1120;
	$precioqq = $dolar * $preciod;
	echo '<td width="100" align="right">$1,120.00 <br>Q'.number_format($precioqq,2).'</td>';
	}
	elseif ($f['destino'] == "Houston"){
	$preciod = 820;
	$precioqq = $dolar * $preciod;
	echo '<td width="100" align="right">$820.00 <br>Q'.number_format($precioqq,2).'</td>';
	}
	if ($f['destino'] == "Lauderdale"){
	$preciod = 725;
	$precioqq = $dolar * $preciod;
	echo '<td width="100" align="right">$725.00 <br>Q'.number_format($precioqq,2).'</td>';
	}
	if ($f['destino'] == "Delaware"){
	$preciod = 870;
	$precioqq = $dolar * $preciod;
	echo '<td width="100" align="right">$870.00 <br>Q'.number_format($precioqq,2).'</td>';
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
		$preciod = 1100;
		$precioqq = $dolar * $preciod;
		echo '<td width="100" align="right">$1,100.00 <br>Q'.number_format($precioqq,2).'</td>';
		}
		if ($f['destino'] == "Lauderdale"){
		$preciod = 1050;
		$precioqq = $dolar * $preciod;
		echo '<td width="100" align="right">$1050.00 <br>Q'.number_format($precioqq,2).'</td>';
		}
		if ($f['destino'] == "Delaware"){
		$preciod = 1650;
		$precioqq = $dolar * $preciod;
		echo '<td width="100" align="right">$1,1650.00 <br>Q'.number_format($precioqq,2).'</td>';
		}
		}
		/*3*/else{
			/*4*/if($tamano == "Extra Grande"){
			if ($f['destino'] == "California"){
			$preciod = 2040;
			$precioqq = $dolar * $preciod;
			echo '<td width="100" align="right">$2,040.00 <br>Q'.number_format($precioqq,2).'</td>';
			}
			elseif ($f['destino'] == "Houston"){
			$preciod = 1490;
			$precioqq = $dolar * $preciod;
			echo '<td width="100" align="right">$1,490.00 <br>Q'.number_format($precioqq,2).'</td>';
			}
			if ($f['destino'] == "Lauderdale"){
			$preciod = 1280;
			$precioqq = $dolar * $preciod;
			echo '<td width="100" align="right">$1,280.00 <br>Q'.number_format($precioqq,2).'</td>';
			}
			if ($f['destino'] == "Delaware"){
			$preciod = 1590;
			$precioqq = $dolar * $preciod;
			echo '<td width="100" align="right">$1,590.00 <br>Q'.number_format($precioqq,2).'</td>';
			}
			}
			/*4*/else{
				/*5*/if($tamano == "Motocicleta"){
				if ($f['destino'] == "California"){
				$preciod = 430;
				$precioqq = $dolar * $preciod;
				echo '<td width="100" align="right">$440.00 <br>Q'.number_format($precioqq,2).'</td>';
				}
				elseif ($f['destino'] == "Houston"){
				$preciod = 365;
				$precioqq = $dolar * $preciod;
				echo '<td width="100" align="right">$375.00 <br>Q'.number_format($precioqq,2).'</td>';
				}
				if ($f['destino'] == "Lauderdale"){
				$preciod = 345;
				$precioqq = $dolar * $preciod;
				echo '<td width="100" align="right">$355.00 <br>Q'.number_format($precioqq,2).'</td>';
				}
				if ($f['destino'] == "Delaware"){
				$preciod = 390;
				$precioqq = $dolar * $preciod;
				echo '<td width="100" align="right">$400.00 <br>Q'.number_format($precioqq,2).'</td>';
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
<input name="button" type="button" onclick="window.close();" value="Cerrar esta ventana" /> 
</p>
</center>
</body>
</html>