<?
include("../coneccion.php");
$rs=mysqli_query($link,"select yarda,precio,id from barcosbd order by yarda desc"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Importadora Alvarez</title>
    <link rel="stylesheet" href="css/marcador.css">
</head>
<body>
<center>
<img src="../imagenes/logo.jpg" width="369" height="189" />
<?
include("../chat.php");
include("eslogan.php");
?>
<br>
<h1>Cotizador</h1>
<p class="texto">Asistencia en l&iacute;nea (Chat en l&iacute;nea) para dudas sobre funcionamiento del COTIZAROR</p>
<hr size="10">
<form action="rcotizador.php" method="post" >
<center><h2>Datos del cliente</h2></center>
<table border="0">
  <tr>
    <td>Nombre:</td>
    <td><input type="text" id="nombre" name="nombre" size="20" placeholder="Nombres" required autofocus></td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><input type="email" id="email" name="email" size="20" placeholder="Correo" required></td>
  <tr>
    <td>Telefono:</td>
    <td><input type="telefono" id="telefono" name="telefono" size="20" placeholder="Telfono" required pattern="[0-9]{8}" title="Su número debe contener 8 dígitos."/></td>
  </tr>  
</table>
<center><h2>Datos del Vehiculo</h2></center>
<table border="0">
	  <tr>
    	<td>Cliente:</td>
        <td><select name="cliente">
          <option value="Facturado">Facturado</option>
          <option value="Facturadoreciente">Facturado Reciente</option>
          <option value="Refacturado">Refacturado</option>
          <option value="Refacturadoreciente">Refacturado Reciente</option>
        </select></td>
      <td></td>
    </tr>
  <tr>
      <td>Carro:</td>
      <td><select name="tamano">
          <option value="Peque&ntilde;o">Peque&ntilde;o</option>
          <option value="Mediano">Mediano</option>
            <option value="Grande">Grande</option>
            <option value="Extra Grande">Extra Grande</option>
            <option value="Motocicleta">Motocicleta</option>
            <option value="Camioneta">Camioneta</option>
        </select></td>
      <td>$.<input type="text" id="precioc" name="precioc" size="4" placeholder="Precio" required autofocus></td>
  </tr>
  <tr>
      <td>Tramite:</td>
      <td><select name="tramite">
          <option value="Copart">Copart</option>
          <option value="IA">IA</option>
            </select></td>
      <td>#.<input type="text" id="lote" name="lote" size="4" placeholder="Lote" required pattern="[0-9]{8}" title="El lote debe contener 8 dígitos."></td>
  </tr>
    <tr>
      <td>Impuestos:</td>
      <td><select name="impuestos">
          <option value="Sencillo">Sencillo</option>
          <option value="Doble">Doble</option>
            <option value="Microbus">Microbus</option>
            </select></td>
            <td></td>
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
      <td>Titulo Pendiente:</td>
      <td><select name="titulo">
        <option value="No">No</option>
        <option value="Si">Si</option>
      </select></td>
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
    while (list($yarda)=mysqli_fetch_array($rs)) 
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
    </tr>
    <tr>
      <td>Transacciones:</td>
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
<hr size="10">
<input name="button" type="button" onclick="window.close();" value="Cerrar esta ventana" /> 
<input type="reset" value="Limpiar">
<input type="submit" value="Cotizar">
</form>
<br>
</center>	
</body>
</html>