<?php

$url1 = isset($url[1]) ? $url[1] : false;
$alert = isset($_SESSION["alert"]) ? $_SESSION["alert"] : false;

$id_surat_masuk = '';
$no_surat = '';
$perihal = '';
$sifat = '';
$asal_surat = '';
$tgl_surat = '';
$file_surat = '';
$keterangan = '';

$data_surat_masuk = query("SELECT * FROM surat_masuk");
$seleksi_disposisi = mysqli_query($koneksi, "SELECT disposisi.id_surat_masuk FROM surat_masuk JOIN disposisi ON surat_masuk.id_surat_masuk=disposisi.id_surat_masuk");

if($url1 == "Edit"){
	$id = isset($url[2]) ? $url[2] : false;
	$edit_surat_masuk = query("SELECT * FROM surat_masuk WHERE id_surat_masuk=$id");
	foreach ($edit_surat_masuk as $row) {
		$no_surat = $row['no_surat'];
		$perihal = $row['perihal'];
		$sifat = $row['sifat'];
		$asal_surat = $row['asal_surat'];
		$tgl_surat = $row['tgl_surat'];
		$file_surat = $row['file_surat'];
		$keterangan = $row['keterangan'];
	}

}