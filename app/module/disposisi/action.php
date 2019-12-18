<?php

include_once "../../function/function.php";
session_start();

$id_surat_masuk = $_POST['id_surat_masuk'];
$no_index = $_POST['no_index'];
$tgl_penyelesaian = $_POST['tgl_penyelesaian'];
$intruksi = $_POST['intruksi'];
$teruskan = $_POST['teruskan'];
$button = $_POST['button'];

if($button == "Tambah"){
	$insert = mysqli_query($koneksi, "INSERT INTO disposisi VALUES ('', '$id_surat_masuk', '$teruskan', '$no_index', '$tgl_penyelesaian', '$intruksi')");
	if(!$insert){
		$_SESSION["alert"] = "gagal di tambahkan.";
	}else{
		$_SESSION["alert"] = "berhasil di tambahkan.";
	}
}elseif($button == "Edit"){
	$id_disposisi = $_POST['id_disposisi'];
	$update = mysqli_query($koneksi, "UPDATE disposisi SET id_surat_masuk='$id_surat_masuk', id_akun='$teruskan', no_index='$no_index', tgl_penyelesaian='$tgl_penyelesaian', intruksi='$intruksi' WHERE id_disposisi='$id_disposisi'");
	if(!$update){
		$_SESSION["alert"] = "gagal di edit.";
	}else{
		$_SESSION["alert"] = "berhasil di edit.";
	}
}
echo "<script>
	document.location.href='" . BASE_URL . "disposisi';
	</script>";

