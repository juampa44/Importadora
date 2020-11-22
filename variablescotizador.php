<?
	include("coneccion.php");
	$rs=mysqli_query($link,"select taza from tazadolar");
	while (list($taza)=mysqli_fetch_array($rs)) 
	{ 
		$dolar = "$taza"; 
	} 
	$nombre =$_POST['nombre'];
	$email =$_POST['email'];
	$telefono =$_POST['telefono'];
	$cliente = $_POST['cliente'];		
	$tamano = $_POST['tamano'];
	$precioc = $_POST['precioc'];	
	$tramite = $_POST['tramite'];
	$lote = $_POST['lote'];		
	$impuestos = $_POST['impuestos'];	
	$storage = $_POST['storage'];
	$titulo = $_POST['titulo'];
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

