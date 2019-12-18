<?php

$url1 = isset($url[1]) ? $url[1] : false;
$url2 = isset($url[2]) ? $url[2] : false;
$alert = isset($_SESSION["alert"]) ? $_SESSION["alert"] : false;

if($url1 == "ketua"){
	$id = '';
	$nama = '';
	$email = '';
	$username = '';
	$whatsapp = '';
	$jabatan = '';

	$jabatan_ket = ["Kepala Dinas Pendidikan", "Sekretaris Dinas", "Bidang Paud Dikmas", "Bidang SD", "Bidang SMP", "Bidang Data & Ketenagaan", "SUBBAG Umum & Kepegawaian", "SUBBAG Perencanaan Evaluasi & Pelaporan", "SUBBAG Keuangan & BMD", "Seksi Paud", "Seksi Dikmas", "Seksi Sarana Paud & Dikmas", "Seksi Kurikulum SD", "Seksi Kelembagaan & Kesiswaan SD", "Seksi Sarana & Prasarana SD", "Seksi Kurikulum SMP", "Seksi Kelembagaan & Kesiswaan SMP", "Seksi Sarana & Prasarana SMP", "Seksi Pembinaan Pendidikan", "Seksi Data Pendidikan & Layanan Informasi", "Seksi Bina Tenaga Kependidikan"];

	$data_akun_ket = query("SELECT akun.*, jabatan.jabatan FROM akun JOIN jabatan ON akun.id_akun=jabatan.id_akun");

	if($url2 == "Edit"){
		$url_id = isset($url[3]) ? $url[3] : false;
		$edit_akun_ket = query("SELECT akun.*, jabatan.jabatan FROM akun JOIN jabatan ON akun.id_akun=jabatan.id_akun WHERE akun.id_akun='$url_id' AND jabatan.id_akun='$url_id'");

		foreach($edit_akun_ket as $row){
			$id = $row["id_akun"];
			$nama = $row["nama"];
			$email = $row["email"];
			$username = $row["username"];
			$jabatan = $row["jabatan"];
		}
	}
}elseif($url1 == "staff"){
	$id = '';
	$nama = '';
	$email = '';
	$username = '';
	$posisi_staff = '';

	$posisi = query("SELECT id_jabatan, jabatan FROM jabatan WHERE jabatan NOT LIKE 'Kepala Dinas Pendidikan' AND jabatan NOT LIKE 'Sekretaris Dinas' AND jabatan NOT LIKE 'Bidang Paud Dikmas' AND jabatan NOT LIKE 'Bidang SD' AND jabatan NOT LIKE 'Bidang SMP' AND jabatan NOT LIKE 'Bidang Data & Ketenagaan'");

	if($url2 == "Edit"){
		$url_id = isset($url[3]) ? $url[3] : false;
		$edit_akun_ket = query("SELECT akun.id_akun, akun.nama, akun.email, akun.username, posisi.id_jabatan FROM akun JOIN posisi ON akun.id_akun=posisi.id_akun WHERE akun.id_akun='$url_id' AND posisi.id_akun='$url_id'");

		foreach($edit_akun_ket as $row){
			$id = $row["id_akun"];
			$nama = $row["nama"];
			$email = $row["email"];
			$username = $row["username"];
			$posisi_staff = $row["id_jabatan"];
		}
	}

	$data_akun_staff = query("SELECT akun.id_akun, akun.nama, akun.email, akun.username, jabatan.jabatan FROM akun JOIN posisi ON akun.id_akun=posisi.id_akun JOIN jabatan ON posisi.id_jabatan=jabatan.id_jabatan ");
}

