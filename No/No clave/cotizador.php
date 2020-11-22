<?
include("coneccion.php");
$rs=mysql_query("select yarda,precio,id from barcosbd order by yarda desc"); 
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
<h1>Cotizador</h1>
<form action="rcotizador.php" method="post" >
<table width="400" border="0">
	<tr>
    	<td>Dolar:</td>
        <td><select name="dolar">
      		<option value="7.8">7.8</option>
      		<option value="7.85">7.85</option>
    		</select></td>
        <td></td>
    </tr>
    <tr>
    	<td>Cliente:</td>
        <td><select name="cliente">
      		<option value="Facturado">Facturado</option>
      		<option value="Refacturado">Refacturado</option>
    		</select></td>
    	<td></td>
    </tr>
	<tr>
    	<td>Carro:</td>
    	<td><select name="tamano">
      		<option value="Pequeño">Peque&ntilde;o</option>
      		<option value="Mediano">Mediano</option>
            <option value="Grande">Grande</option>
            <option value="Extra Grande">Extra Grande</option>
            <option value="Motocicleta">Motocicleta</option>
            <option value="Camioneta">Camioneta</option>
    		</select></td>
    	<td>$.<input type="text" name="precioc" size="4" placeholder="Precio" /></td>
	</tr>
	<tr>
  		<td>Tramite:</td>
    	<td><select name="tramite">
      		<option value="Copart">Copart</option>
      		<option value="IA">IA</option>
            </select></td>
    	<td></td>
	</tr>
  	<tr>
  		<td>Impuestos:</td>
    	<td><select name="impuestos">
      		<option value="Sencillo">Sencillo</option>
      		<option value="Doble">Doble</option>
            <option value="Microbus">Microbus</option>
            </select></td>
  	</tr>
<!--Total del carro-->
	<tr>
    	<td>Storage:</td>
        <td><select name="storage">
      		<option value="0">0 D&iacute;as</option>
      		<option value="1">1 D&iacute;as</option>
            <option value="2">2 D&iacute;as</option>
            <option value="3">3 D&iacute;as</option>
            <option value="4">4 D&iacute;as</option>
            <option value="5">5 D&iacute;as</option>
            <option value="6">6 D&iacute;as</option>
            <option value="7">7 D&iacute;as</option>
            <option value="8">8 D&iacute;as</option>
            <option value="9">9 D&iacute;as</option>
            <option value="10">10 D&iacute;as</option>
            </select></td>
        <td></td>
    </tr>
    <tr>
    	<td>Pago Tarde:</td>
        <td><select name="pagotarde">
      		<option value="No">No</option>
      		<option value="Si">Si</option>
            </select></td>
		<td></td>
    </tr>
<!--Total Extras-->
	<!--<tr>
  		<td>Barco:</td>
    	<td></td>
    	<td></td>
  	</tr>-->
  	<tr>
    	<td>Grua:</td>
    	<td>
        <select name="busca">
        <option value=""></option>
		<? 
		while (list($yarda)=mysql_fetch_array($rs)) 
		{ 
		echo "<option value='$yarda' selected>$yarda</option>"; 
		} 
		?> 
		</select> 
        </td>
     	<td></td>
	</tr>
	<!--<tr>
    	<td>Tacuacina:</td>
        <td></td>
        <td></td>
    </tr>-->
<!--Total Traida-->
	<!--<tr>
    	<td>Tramites:</td>
        <td></td>
        <td></td>
    </tr>-->
    <tr>
    	<!--<td>Transacciones:</td>
        <td></td>
        <td></td>
    </tr>-->
    <tr>
    	<td>Placas y traspaso:</td>
        <td></td>
        <td>Q.<input type="text" name="traspaso" size="4" placeholder="Traspaso" /></td>
    </tr>
    <tr>
    	<td>Comision:</td>
        <td></td>
        <td>Q.<input type="text" name="comision" size="4" placeholder="Comision" /></td>
    </tr>
    <tr>
    	<td>Factura:</td>
        <td></td>
        <td>Q.<input type="text" name="factura" size="4" placeholder="Factura" /></td>
    </tr>
    <tr>
    	<td>Otros:</td>
        <td></td>
        <td>Q.<input type="text" name="otros" size="4" placeholder="Otros" /></td>
    </tr>
</table>
<!--Total Tramites-->
<p>
<input type="submit" value="Cotizar"/>
<input type="button" value="Inicio" name="inicio" onClick="location.href='index.php'"/>
</p>
</form>
</center>
</body>
</html>
