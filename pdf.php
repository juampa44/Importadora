<? 
	require_once('pdf/lib/mpdf.php');
	$html = '	';
	$mpdf = new mPDF('A4');
	$mpdf->writeHTML($html);
	$mpdf->output('orden.pdf');
?>