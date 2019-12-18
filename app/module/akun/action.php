<?php

include_once "../../function/function.php";
session_start();

$nama = $_POST["nama"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = isset($_POST["password"]) ? $_POST["password"] : false;
$jabatan = isset($_POST["jabatan"]) ? $_POST["jabatan"] : false;
$posisi = isset($_POST["posisi"]) ? $_POST["posisi"] : false;
$button = $_POST["button"];
$seleksi = isset($_GET["seleksi"]) ? $_GET["seleksi"] : false;

if($seleksi == "ketua"){
	if($button == "Tambah"){
		$insert_akun = mysqli_query($koneksi, "INSERT INTO akun VALUES ('', '$nama', '$email', '$username', '$password')");
		$select = query("SELECT id_akun FROM akun ORDER BY id_akun DESC LIMIT 1");
		foreach($select as $row){
			$id_akun = $row['id_akun']; 
		}
		$insert_jabatan = mysqli_query($koneksi, "INSERT INTO jabatan VALUES ('', '$id_akun', '$jabatan')");
		if(!$insert_jabatan){
			$_SESSION["alert"] = "gagal di tambahkan.";
		}else{
			$_SESSION["alert"] = "berhasil di tambahkan.";
		}
	}elseif($button == "Edit"){
		$id = $_POST["id"];
		$update_akun = mysqli_query($koneksi, "UPDATE akun SET nama='$nama', email='$email', username='$username' WHERE id_akun='$id'");
		if(!$update_akun){
			$_SESSION["alert"] = "gagal di edit.";
		}else{
			$_SESSION["alert"] = "berhasil di edit.";
		}

	}

	echo "<script>
	document.location.href='" . BASE_URL . "akun/". $seleksi ."';
	</script>";
}elseif($seleksi == "staff"){
	if($button == "Tambah"){
		$insert_akun = mysqli_query($koneksi, "INSERT INTO `akun` VALUES ('','$nama','$email','$username','$password')");
		$select = query("SELECT id_akun FROM akun ORDER BY id_akun DESC LIMIT 1");
		foreach($select as $row){
			$id_akun = $row['id_akun']; 
		}
		$insert_jabatan = mysqli_query($koneksi, "INSERT INTO posisi VALUES ('', '$id_akun', '$posisi')");	
		if(!$insert_akun){
			$_SESSION["alert"] = "gagal di tambahkan.";
		}else{
			$_SESSION["alert"] = "berhasil di tambahkan.";
		}
	}elseif($button == "Edit"){
		$id = $_POST["id"];
		$update_akun = mysqli_query($koneksi, "UPDATE akun SET nama='$nama', email='$email', username='$username' WHERE id_akun='$id'");
		$update_posisi = mysqli_query($koneksi, "UPDATE posisi SET id_jabatan='$posisi' WHERE id_akun='$id'");
		if(!$update_posisi){
			$_SESSION["alert"] = "gagal di edit.";
		}else{
			$_SESSION["alert"] = "berhasil di edit.";
		}
	}

	echo "<script>
	document.location.href='" . BASE_URL . "akun/". $seleksi ."';
	</script>";
}
