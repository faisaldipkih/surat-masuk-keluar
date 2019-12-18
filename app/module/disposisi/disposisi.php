<?php

$url1 = isset($url[1]) ? $url[1] : false;
$id_login = isset($_SESSION['id']) ? $_SESSION['id'] : false;
$alert = isset($_SESSION["alert"]) ? $_SESSION["alert"] : false;
var_dump($jabatan_login);

$id_surat_masuk = '';
$id_disposisi = '';
$id_akun = '';
$no_index = '';
$tgl_penyelesaian = '';
$intruksi = '';

$teruskan_ke = query("SELECT id_akun, jabatan FROM jabatan WHERE jabatan NOT LIKE 'Kepala Dinas Pendidikan'");

if($jabatan_login == "Kepala Dinas Pendidikan" || $jabatan_login == "SUBBAG Umum & Kepegawaian" || $jabatan_login == "admin"){
	$disposisi = query("SELECT disposisi.*, surat_masuk.file_surat, jabatan.jabatan FROM disposisi JOIN surat_masuk ON disposisi.id_surat_masuk=surat_masuk.id_surat_masuk JOIN akun ON disposisi.id_akun=akun.id_akun JOIN jabatan ON akun.id_akun=jabatan.id_akun");
}else{
	$disposisi = query("SELECT disposisi.*, surat_masuk.file_surat, jabatan.jabatan FROM disposisi JOIN surat_masuk ON disposisi.id_surat_masuk=surat_masuk.id_surat_masuk JOIN akun ON disposisi.id_akun=akun.id_akun JOIN jabatan ON akun.id_akun=jabatan.id_akun WHERE akun.id_akun='$id_login'");
}

if($url1 == "Tambah"){
	$id_surat_masuk = isset($url[2]) ? $url[2] : false;

	$file_surat_masuk = query("SELECT file_surat FROM surat_masuk WHERE id_surat_masuk='$id_surat_masuk'");
	foreach($file_surat_masuk as $row){
		$file = $row;
	}
}elseif($url1 == "Edit"){
	$url_id = isset($url[2]) ? $url[2] : false;

	$update_disposisi = query("SELECT * FROM disposisi WHERE id_disposisi='$url_id'");
	foreach($update_disposisi as $row){
		$id_disposisi = $row['id_disposisi'];
		$id_surat_masuk = $row['id_surat_masuk'];
		$id_akun = $row['id_akun'];
		$no_index = $row['no_index'];
		$tgl_penyelesaian = $row['tgl_penyelesaian'];
		$intruksi = $row['intruksi'];
	}
	
	$file_surat_masuk = query("SELECT file_surat FROM surat_masuk WHERE id_surat_masuk='$id_surat_masuk'");
	foreach($file_surat_masuk as $row){
		$file = $row;
	}
}
