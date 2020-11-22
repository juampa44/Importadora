<?
include("coneccion.php");
?>
<html>
<head>
<title>Cotizador Importadora Alvarez</title>
<link rel="stylesheet" type="text/css" href="efectos/enlaces.css">
<script type='text/javascript'>
/*Mensaje que puedes personalizar*/ var mensajeerror = "Se original ¡Gracias por visitar Importadora Alvarez!"; if(document.layers) window.captureEvents(Event.MOUSEDOWN); function bloquear(e){
if (navigator.appName == 'Netscape' && ( e.which == 2 || e.which == 3)) { alert(mensajeerror);return false; }
if (navigator.appName == 'Microsoft Internet Explorer' && (event.button == 2 || event.button == 3)) {
alert(mensajeerror);return false; }} window.onmousedown=bloquear; document.onmousedown=bloquear;  </script>
</head>
<body>
<center>
<img src="Logo importadora.jpg" width="369" height="189" />
<br>
<hr size="10">
<?
/*$dolar = 7.85;*/
$dolar = $_POST['dolar'];
$cliente = $_POST['cliente'];		
$tamano = $_POST['tamano'];
$precioc = $_POST['precioc'];	
$tramite = $_POST['tramite'];		
$impuestos = $_POST['impuestos'];	
$storage = $_POST['storage'];
$pagotarde = $_POST['pagotarde'];		
/*
Barco:
*/		
$yarda = $_POST['yarda'];		
$tramitef = $_POST['tramite'];		
/*
Tacuacina:				
*/		
$traspaso = $_POST['traspaso'];		
$comision = $_POST['comision'];		
$factura = $_POST['factura'];		
$otros = $_POST['otros'];
?>
<table>
	<tr>
    	<td>Cliente</td>
        <td><? echo $cliente; ?></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
    </tr>
    <tr>
    	<td>Carro:</td>
        <td><? echo $tamano; ?></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right"><? echo "$".number_format($precioc,2); ?></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right"><? 
		$carro = $precioc * $dolar;
		echo "Q".number_format($carro,2); 
		?></td>
      <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
    </tr>
    <tr>
    	<td>Tramite</td>
        <td>
		<?
        echo $tramitef;
		?>        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
        <? 
		if (($precioc >= 0) and ($precioc <= 49.99)){
		echo "$113.00";
		$tramite = 113;
		} 
		elseif (($precioc >= 50) and ($precioc <= 99.99)){
		echo "$123.00";
		$tramite = 123;
		}
		elseif (($precioc >= 100) and ($precioc <= 199.99)){
		echo "$153.00";
		$tramite=153;
		}
		elseif (($precioc >= 200) and ($precioc <= 299.99)){
		echo "$173.00";
		$tramite=173;
		}
		elseif (($precioc >= 300) and ($precioc <= 399.99)){
		echo "$193.00";
		$tramite=193;
		}
		elseif (($precioc >= 400) and ($precioc <= 499.99)){
		echo "$208.00";
		$tramite=208;
		}
		elseif (($precioc >= 500) and ($precioc <= 549.99)){
		echo "$223.00";
		$tramite=223;
		}
		elseif (($precioc >= 550) and ($precioc <= 599.99)){
		echo "$228.00";
		$tramite=228;
		}
		elseif (($precioc >= 600) and ($precioc <= 699.99)){
		echo "$248.00";
		$tramite=248;
		}
		elseif (($precioc >= 700) and ($precioc <= 799.99)){
		echo "$263.00";
		$tramite=263;
		}
		elseif (($precioc >= 800) and ($precioc <= 899.99)){
		echo "$278.00";
		$tramite=278;
		}
		elseif (($precioc >= 900) and ($precioc <= 999.99)){
		echo "$293.00";
		$tramite=293;
		}
		elseif (($precioc >= 1000) and ($precioc <= 1199.99)){
		echo "$318.00";
		$tramite=318;
		}
		elseif (($precioc >= 1200) and ($precioc <= 1399.99)){
		echo "$343.00";
		$tramite=343;
		}
		elseif (($precioc >= 1400) and ($precioc <= 1499.99)){
		echo "$368.00";
		$tramite=368;
		}
		elseif (($precioc >= 1500) and ($precioc <= 1599.99)){
		echo "$368.00";
		$tramite=368;
		}
		elseif (($precioc >= 1600) and ($precioc <= 1799.99)){
		echo "$393.00";
		$tramite=393;
		}
		elseif (($precioc >= 1800) and ($precioc <= 1999.99)){
		echo "$428.00";
		$tramite=428;
		}
		elseif (($precioc >= 2000) and ($precioc <= 2499.99)){
		echo "$453.00";
		$tramite=453;
		}
		elseif (($precioc >= 2500) and ($precioc <= 2999.99)){
		echo "$478.00";
		$tramite=478;
		}
		elseif (($precioc >= 3000) and ($precioc <= 4999.99)){
		echo "$538.00";
		$tramite=538;
		}
		elseif (($precioc >= 5000) and ($precioc <= 7999.99)){
		echo "$563.00";
		$tramite=563;
		}
		elseif (($precioc >= 7500) and ($precioc <= 9999.99)){
		echo "$588.00";
		$tramite=588;
		}
		elseif (($precioc >= 10000) and ($precioc <= 14999.99)){
		echo "$638.00";
		$tramite=638;
		}
		elseif (($precioc >= 15000) and ($precioc <= 19999.99)){
		echo "$688.00";
		$tramite=688;
		}
		elseif (($precioc >= 20000) and ($precioc <= 24999.99)){
		echo "$738.00";
		$tramite=738;
		}
		elseif (($precioc >= 25000) and ($precioc <= 29999.99)){
		echo "$788.00";
		$tramite=788;
		}
		elseif (($precioc >= 30000) and ($precioc <= 34999.99)){
		echo "$838.00";
		$tramite=838;
		}
		elseif (($precioc >= 35000) and ($precioc <= 99999.99)){
		echo "$138.02";
		$tramite=138.02;
		}
		else {
		echo "$0.00";
		$tramite = 0;
		}
		?>        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
        <?
        $tramiteq = $tramite * $dolar;
		echo "Q".number_format($tramiteq,2);
		?>        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td><td bgcolor="#CCCCCC" width="1"></td>
    </tr>
    <tr>
    	<td>Impuestos:</td>
        <td>
		<?
		echo $impuestos; 
		if ($pagotarde != "Si") {
		$tpagotarded = 0;
    	}
  		else {
		$tpagotarded = 50;
    	};
		?>        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
		<?
        $dia = 20;
		$tstoraged = $dia * $storage;
		$tcopart = $precioc + $tramite + $tstoraged + $tpagotarded;
		if ($tamano == "Motocicleta"){
		$ivaiprima = 0.22;
		$impuestosd = $tcopart * $ivaiprima;
		echo "$".number_format($impuestosd,2);
		}
		elseif ($impuestos == "Sencillo"){
		$ivaiprima = 0.32;
		$impuestosd = $tcopart * $ivaiprima;
		echo "$".$impuestosd;
		}
		elseif ($impuestos == "Doble"){
		$ivaiprima = 0.17;
		$impuestosd = $tcopart * $ivaiprima;
		echo "$".$impuestosd;
		}
		else {
		$ivaiprima = 0.27;
		$impuestosd = $tcopart * $ivaiprima;
		echo "$".$impuestosd;
		}
		?>		</td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
        <? 
		$dolari = 8;
		$impuestosq = $impuestosd * $dolari;
		echo "Q".number_format($impuestosq,2);
		?>		</td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
    </tr>
<!--Total Carro-->
<?
$tcarrod = $precioc + $tramite + $impuestosd;
$tcarroq = $carro + $tramiteq + $impuestosq;
?>
    <tr>
    	<td><b>Total Carro:</b></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
		<td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
		<td align="right"><? echo "<b>$".number_format($tcarrod,2)."</b>"; ?></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right"><? echo "<b>Q".number_format($tcarroq,2)."</b>"; ?></td>
        <td bgcolor="#CCCCCC" width="1"></td>
    </tr>
<!--Fin-->
    <tr>
    	<td><font color="#FFFFFF">.</font></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    </tr>
    <tr>
    	<td>Storage:</td>
        <td><? echo $storage." D&iacute;as"; ?></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
		<?
		$dia = 20;
		$tstoraged = $dia * $storage;
		echo "$".number_format($tstoraged,2);
		?></td>
      <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
        <?
		$tstorageq = $tstoraged * $dolar;
		echo "Q".number_format($tstorageq,2);
		?>        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
    </tr>
    <tr>
    	<td>Pago Tarde:</td>
        <td><? echo $pagotarde; ?></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
        <?
		if ($pagotarde != "Si") {
		$tpagotarded = 0;
    	echo "$0.00<br>";
  		}
  		else {
		$tpagotarded = 50;
    	echo "$50.00<br>";
  		};
		?>        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
		<? 
		$tpagotardeq = $dolar * $tpagotarded;
		echo "Q".number_format($tpagotardeq,2);
		?>        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right"></td>
        <td bgcolor="#CCCCCC" width="1"></td>
    </tr>
<!--Total Extras-->
<?
$textrasd = $tpagotarded + $tstoraged;
$textrasq = $tpagotardeq + $tstorageq;
?>
    <tr>
    	<td><b>Total Extras:</b></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right"><? echo "<b>$".number_format($textrasd,2)."</b>"; ?></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right"><? echo "<b>Q".number_format($textrasq,2)."</b>" ?></td>
        <td bgcolor="#CCCCCC" width="1"></td>
    </tr>
<!--Fin-->
    <tr>
    	<td><font color="#FFFFFF">.</font></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    </tr>
    <tr>
    	<td>Barco:</td>
        <td><?
		$busca="";
		$busca=$_POST['busca'];
		if($busca!=""){
		$busqueda=mysql_query("SELECT * FROM barcosbd WHERE yarda LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
		while($f=mysql_fetch_array($busqueda)){
		/*echo $f['id'];*/ 		
		/*echo $f['yarda'];*/	$yardabd = $f['yarda'];
		/*echo $f['precio'];*/	$preciobd = $f['precio'];
		/*echo $f['destino'];*/	$destinobd = $f['destino'];
		}
		}
		echo $destinobd;
		?></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
        <?
		/*1*/if ($tamano == "Pequeño"){
		if ($destinobd == "Delaware"){
		$barcod = 775;
		echo "$".number_format($barcod,2);
		}
		elseif ($destinobd == "Lauderdale"){
		$barcod = 620;
		echo "$".number_format($barcod,2);
		}
		elseif ($destinobd == "Houston"){
		$barcod = 725;
		echo "$".number_format($barcod,2);
		}
		else{
		$barcod = 1000;
		echo "$".number_format($barcod,2);
		}
		}
		/*1*/else{
			/*2*/if ($tamano == "Mediano"){
			if ($destinobd == "Delaware"){
			$barcod = 855;
			echo "$".number_format($barcod,2);
			}
			elseif ($destinobd == "Lauderdale"){
			$barcod = 620;
			echo "$".number_format($barcod,2);
			}
			elseif ($destinobd == "Houston"){
			$barcod = 800;
			echo "$".number_format($barcod,2);
			}
			else{
			$barcod = 1100;
			echo "$".number_format($barcod,2);
			}
			}
			/*2*/else{
				/*3*/if ($tamano == "Grande"){
				if ($destinobd == "Delaware"){
				$barcod = 1650;
				echo "$".number_format($barcod,2);
				}
				elseif ($destinobd == "Lauderdale"){
				$barcod = 930;
				echo "$".number_format($barcod,2);
				}
				elseif ($destinobd == "Houston"){
				$barcod = 1090;
				echo "$".number_format($barcod,2);
				}
				else{
				$barcod = 1550;
				echo "$".number_format($barcod,2);
				}
				}
				/*3*/else{
					/*4*/if ($tamano == "Extra Grande"){
					if ($destinobd == "Delaware"){
					$barcod = 1550;
					echo "$".number_format($barcod,2);
					}
					elseif ($destinobd == "Lauderdale"){
					$barcod = 1420;
					echo "$".number_format($barcod,2);
					}
					elseif ($destinobd == "Houston"){
					$barcod = 1450;
					echo "$".number_format($barcod,2);
					}
					else{
					$barcod = 2000;
					echo "$".number_format($barcod,2);
					}
					}
					/*4*/else{
						/*5*/if ($tamaño == "Motocicleta"){
						if ($destinobd == "Delaware"){
						$barcod = 390;
						echo "$".number_format($barcod,2);
						}
						elseif ($destinobd == "Lauderdale"){
						$barcod = 345;
						echo "$".number_format($barcod,2);
						}
						elseif ($destinobd == "Houston"){
						$barcod = 365;
						echo "$".number_format($barcod,2);
						}
						else{
						$barcod = 430;
						echo "$".number_format($barcod,2);
						}
						}
						/*5*/else{
						if ($destinobd == "Delaware"){
						$barcod = 775;
						echo "$".number_format($barcod,2);
						}
						elseif ($destinobd == "Lauderdale"){
						$barcod = 620;
						echo "$".number_format($barcod,2);
						}
						elseif ($destinobd == "Houston"){
						$barcod = 725;
						echo "$".number_format($barcod,2);
						}
						else{
						$barcod = 1000;
						echo "$".number_format($barcod,2);
						}
						}
					}
				}
			}
		}
		?>        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
        <?
		$barcoq = $barcod * $dolar;
        echo "Q".number_format($barcoq,2);
		?>        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
    </tr>
    <tr>
    	<td>Grua:</td>
        <td><? echo $yardabd; ?></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right"><? echo "$".number_format($preciobd,2); ?></td>
        
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
		<?
		$preciobdq = $preciobd * $dolar;
        echo "Q".number_format($preciobdq,2);
		?>		</td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
    </tr>
    <tr>
    	<td>Tacuacina:</td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
        <?
		if ($tamano != "Pequeño") {
		$tamanoq = 750;
    	}
  		else {
		$tamanoq = 650;
    	};
        $tamanod = $tamanoq / $dolar;
		echo "$".number_format($tamanod,2); 
		?>        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
		<?
		if ($tamano != "Pequeño") {
		$tamanoq = 750;
    	echo "Q750.00<br>";
  		}
  		else {
		$tamanoq = 650;
    	echo "Q650.00<br>";
  		};
		?>      </td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
    </tr>
<!--Total Taida-->
<?
$ttraidad = $barcod + $tamanod + $preciobd;
$ttraidaq = $barcoq + $tamanoq + $preciobdq;
?>
	<tr>
    	<td><b>Total Traida:</b></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right"><? echo "<b>$".number_format($ttraidad,2)."<b>"; ?></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right"><? echo "<b>Q".number_format($ttraidaq,2)."<b>"; ?></td>
        <td bgcolor="#CCCCCC" width="1"></td>
    </tr>
<!--Fin-->
    <tr>
    	<td><font color="#FFFFFF">.</font></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    </tr>            
    <tr>
    	<td>Tramites:</td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
		<td align="right">
        <?
		if ($cliente != "Facturado") {
		$clienteq = 2000;
    	}
  		else {
		$clienteq = 1300;
    	};
        $cliented = $clienteq / $dolar;
		echo "$".number_format($cliented,2); 
		?>        </td>
		<td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
        <?
		if ($cliente != "Facturado") {
		$clienteq = 2000;
    	echo "Q2,000.00<br>";
  		}
  		else {
		$clienteq = 1300;
    	echo "Q1,300.00<br>";
  		};
		?>        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
    </tr>
    <tr>
    	<td>Transacciones:</td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
		<td align="right">
		<?
		$transacciones = 45;
		echo "$".$transacciones.".00"; 
		?>        </td>
		<td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
        <?
        $transaccionesq = $transacciones * $dolar;
		echo "Q".number_format($transaccionesq,2);
		?>        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
    </tr>
    <tr>
    	<td>Placas y traspaso:</td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
		<td align="right">
		<?
		$traspasod = $traspaso / $dolar;
		echo "$".number_format($traspasod,2);
		?>        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
		<td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
		<? 
		if ($traspaso == 0){
		echo "Q0.00";
		}
		else{
		echo "Q".number_format($traspaso,2); 
		}
		?>
        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
    </tr>
    <tr>
    	<td>Comision:</td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
		<td align="right"><?
		$comisiont = $comision / $dolar;
		$comisiond = round($comisiont, 2);
		echo "$".number_format($comisiond,2); 
		?></td>
      <td bgcolor="#CCCCCC" width="1"></td>
		<td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
		<?
		if ($comision == 0){
		echo "Q0.00";
		}
		else{ 
		echo "Q".number_format($comision,2); 
		}
		?>
        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
    </tr>    
    <tr>
    	<td>Factura:</td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
		<td align="right">
        <?
		$facturad = $factura / $dolar;
		echo "$".number_format($facturad,2);
		?>        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
		<td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
		<? 
		if ($factura == 0){
		echo "Q0.00";
		}
		else{
		echo "Q".number_format($factura,2); 
		}
		?>
        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
    </tr>
    <tr>
    	<td>Otros:</td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
		<td align="right">
        <?
		$otrosd = $otros / $dolar;
		echo "$".number_format($otrosd,2);
		?>        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
		<td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
		<?
		if ($otros == 0){
		echo "Q0.00";
		}
		else {
		echo "Q".number_format($otros,2); 
		}
		?>
        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
    </tr>
<!--Total Tramites-->
<?
$ttramitesd = $cliented + $transacciones + $traspasod +$comisiond + $facturad + $otrosd;
$ttramitesq = $clienteq + $transaccionesq + $traspaso + $comision + $factura + $otros;
?>
    <tr>
    	<td><b>Total Tramite:</b></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
		<td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
		<td align="right"><? echo "<b>$".number_format($ttramitesd,2)."<b>"; ?></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right"><? echo "<b>Q".number_format($ttramitesq,2)."<b>"; ?></td>
        <td bgcolor="#CCCCCC" width="1"></td>
    </tr>
    <tr>
    	<td><font color="#FFFFFF">.</font></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    	<td></td>
    	<td bgcolor="#CCCCCC" width="1"></td>
    </tr>
<!--Fin-->            
    <tr>
    	<td><b><font color=#000099>Total:</font></b></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
		<? 
		$totald = $tcarrod + $textrasd + $ttraidad + $ttramitesd;
		echo "<b><font color=#000099>$".number_format($totald,2)."<font></b>"; 
		?>        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td></td>
        <td bgcolor="#CCCCCC" width="1"></td>
        <td align="right">
		<? 
		$totalq = $tcarroq + $textrasq + $ttraidaq + $ttramitesq;
		echo "<b><font color=#000099>Q".number_format($totalq,2)."<font></b>";
		?>        </td>
        <td bgcolor="#CCCCCC" width="1"></td>
    </tr>
</table>
<hr size="10">
<p>
<input type="button" value="Actualizar datos" name="actualizardatos" onClick="history.back()"/>
<input type="button" value="Imprimir" name="imprimir"/>
<input type="button" value="Inicio" name="inicio" onClick="location.href='Index.php'"/>
</p>
</center>

</body>
</html>
