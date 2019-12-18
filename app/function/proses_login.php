<?php
	
	include_once "../function/config.php";

	$username = $_POST["username"];
	$password = $_POST["password"];

	$akun_ketua = mysqli_query($koneksi, "SELECT akun.id_akun, akun.username, akun.password, jabatan.id_jabatan, jabatan.jabatan FROM akun JOIN jabatan ON akun.id_akun=jabatan.id_akun WHERE akun.username='$username' AND akun.password='$password'");
	$akun_staff = mysqli_query($koneksi, "SELECT akun.id_akun, akun.username, akun.password, posisi.id_jabatan, jabatan.jabatan FROM akun JOIN posisi ON akun.id_akun=posisi.id_akun JOIN jabatan ON posisi.id_jabatan=jabatan.id_jabatan WHERE akun.username='$username' AND akun.password='$password'");
	$admin = [];
	if($username == "admin" && $password == "admin"){
		$admin = ["username" => "admin", "password" => "admin", "jabatan" => "admin"];
	}

	if(mysqli_num_rows($akun_ketua) == 1 || mysqli_num_rows($akun_staff) == 1 || count($admin) > 1){
		session_start();
		$_SESSION['id'] = '';
		if(count($admin) > 1){
			$_SESSION["jabatan"] = $admin["jabatan"];
			header("Location: " . BASE_URL . "beranda");
		}elseif(mysqli_num_rows($akun_ketua) == 1){
			$rows = mysqli_fetch_assoc($akun_ketua);
			$_SESSION["id"] = $rows["id_jabatan"];
			$_SESSION["jabatan"] = $rows["jabatan"];
			header("Location: " . BASE_URL . "beranda");
		}elseif(mysqli_num_rows($akun_staff) == 1){
			$rows = mysqli_fetch_assoc($akun_staff);
			$_SESSION["id"] = $rows["id_jabatan"];
			$_SESSION["jabatan"] = $rows["jabatan"];
			header("Location: " . BASE_URL . "beranda");
		}
	}
	header("Location: " . BASE_URL . "login/error");