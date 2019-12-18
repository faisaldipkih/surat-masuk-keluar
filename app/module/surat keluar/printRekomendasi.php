<?php ob_start(); ?>
<html>
	<head>
		<link rel="stylesheet" href="bootstrap.min.css"  crossorigin="anonymous">
		<link rel="stylesheet" href="../../../css/print.css" media="all">
	</head>
	<body>
		<div class="row">
			<div class="col">
				
				<img src="../../../images/icon/garut.png" alt="" style="max-width: 100px">
			</div>
			<div class="col text-center">
				<p class="judul">PEMERINTAH KABUPATEN GARUT</p>
				<p style="font-weight:normal">Jl. Raya Bandung-Sumedang KM 29 Tanjungsari-Sumedang 45362</p>
				<p style="font-weight:normal"> Telp. / Fax : (022) 87918051, E-mail: Fahutan.unwim@yahoo.co.id</p>
			</div>
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