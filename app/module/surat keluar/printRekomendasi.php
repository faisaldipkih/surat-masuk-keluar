<?php ob_start(); ?>

<html>
	<head>
		<link rel="stylesheet" href="../../../css/bootstrap-4.4.1/css/bootstrap.min.css" media="all">
		<link rel="stylesheet" href="../../../css/print.csss" media="all">
	</head>
	<body>
	<div class="row">
		<table class="table">
			<thead>
				<tr>
					<th colspan="3" style="width:10%;">
						<img src="../../../images/icon/garut.png" alt="" style="max-width: 100px">
					</th>
					<th style="width:90%">
						<p class="judul">PEMERINTAH KABUPATEN GARUT</p>
						<p style="font-weight:normal">Jl. Raya Bandung-Sumedang KM 29 Tanjungsari-Sumedang 45362</p>
						<p style="font-weight:normal"> Telp. / Fax : (022) 87918051, E-mail: Fahutan.unwim@yahoo.co.id</p>
					</th>
				</tr>
			</thead>
		</table>
	 </div>
	</body>
</html>

<?php 

$html = ob_get_clean(); 
use Dompdf\Dompdf; 
require_once '../../../asset/dompdf/autoload.inc.php'; 
$dompdf = new Dompdf(); 
$dompdf->loadHtml($html); 
$dompdf->setPaper('F4'); 
$dompdf->render(); 
$dompdf->stream(); 
?>