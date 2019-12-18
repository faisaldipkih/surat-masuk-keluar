<?php

include_once '../../function/function.php';
session_start();

$nomor_surat = $_POST['nomor_surat'];
$perihal = $_POST['perihal'];
$sifat = $_POST['radio'];
$asal_surat = $_POST['asal_surat'];
$tgl_surat = $_POST['tgl_surat'];
$keterangan = $_POST['keterangan'];
$button = $_POST['button'];
$update_file = '';

if(!empty($_FILES["file_surat"]["name"])){
	$file_surat = $_FILES["file_surat"]["name"];
	move_uploaded_file($_FILES["file_surat"]["tmp_name"], "../../dir/surat masuk/".$file_surat);

	$update_file = ", file_surat='$file_surat'";
}

if($button == "Tambah"){
	$insert = mysqli_query($koneksi, "INSERT INTO surat_masuk VALUES ('', '$nomor_surat', '$perihal', '$sifat', '$asal_surat', '$tgl_surat', '$file_surat', '$keterangan')");
	if(!$insert){
		$_SESSION["alert"] = "gagal di tambahkan.";
	}else{
		$_SESSION["alert"] = "berhasil di tambahkan.";
	}
}elseif($button == "Edit"){
	$id = $_POST['id'];
	$update = mysqli_query($koneksi, "UPDATE surat_masuk SET no_surat='$nomor_surat', perihal='$perihal', sifat='$sifat', asal_surat='$asal_surat', tgl_surat='$tgl_surat' $update_file , keterangan='$keterangan' WHERE id_surat_masuk='$id'");
	if(!$update){
		$_SESSION["alert"] = "gagal di edit.";
	}else{
		$_SESSION["alert"] = "berhasil di edit.";
	}
}
echo "<script>
	document.location.href='" . BASE_URL . "surat_masuk';
	</script>";