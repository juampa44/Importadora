<?	
	$destino = "ventas@importadoralvarez.com";
	$contenido = 
	"\n-------------------DATOS DEL CLIENTE".
	"\nNombre: ".$nombre.
	"\nEmail: ".$email.
	"\nTelefono: ".$telefono.
	"\n-------------------DATOS DEL VEHICULO".
	"\nLote: ".$lote.
	"\nCliente: ".$cliente.
	"\nCarro: ".$tamano."    $".$precioc."    Q".$carro.
	"\nTramite: ".$tramitef."    $".$tramite."    Q".$tramiteq.
	"\nImpuestos: ".$impuestos."    $".$impuestosd."    Q".$impuestosq.
	"\n******Total carro******   $".$tcarrod."    Q".$tcarroq.	
	"\nStorage: ".$storage."Dias    $".$tstoraged."    Q".$tstorageq.
	"\nTitulo: ".$titulo."    $".$titulop."    Q".$titulopq.
	"\nPago tarde: ".$pagotarde."    $".$tpagotarded."    Q".$tpagotardeq.
	"\n******Total extras******    $".$textrasd."    Q".$textrasq.	
	"\nBarco: ".$destinobd."    $".$barcod."    Q".$barcoq.
	"\nGrua: ".$yardabd."    $".$preciobd."    Q".$preciobdq.
	"\nTacuacina:    $".$tamanod."    Q".$tamanoq.
	"\n******Total traida******    $".$ttraidad."    Q".$ttraidaq.			
	"\nTraspaso:    $".$traspasod."   Q".$traspaso.		
	"\nComision:    $".$comisiond."    Q".$comision.		
	"\nFactura:    $".$facturad."    Q".$factura.		
	"\nOtros:    $".$otrosd."    Q".$otros.
	"\n******Total tramites******    $".$ttramitesd."    Q".$ttramitesq.
	"\nTotal:    $".$totald."    Q".$totalq;
	mail($destino,"Cotizacion",$contenido);
?>