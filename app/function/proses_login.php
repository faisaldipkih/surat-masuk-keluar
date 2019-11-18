<?php
	
	include_once "../function/config.php";

	$username = $_POST["username"];
	$password = $_POST["password"];

	$akun = mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$username' AND password='$password'");
	$bawahan = mysqli_query($koneksi, "SELECT * FROM bawahan WHERE username='$username' AND password='$password'");
	$staff = mysqli_query($koneksi, "SELECT * FROM staff WHERE username='$username' AND password='$password'");

	if(mysqli_num_rows($akun) == 1 || mysqli_num_rows($bawahan) == 1 || mysqli_num_rows($staff) == 1){
		session_start();
		if(mysqli_num_rows($akun) == 1){
			$rows = mysqli_fetch_assoc($akun);
			$_SESSION["id"] = $rows["id_akun"];
			$_SESSION["jabatan"] = $rows["jabatan"];
			header("Location: " . BASE_URL . "beranda");
		}elseif(mysqli_num_rows($bawahan) == 1){
			$rows = mysqli_fetch_assoc($bawahan);
			$_SESSION["id"] = $rows["id_bawahan"];
			$_SESSION["jabatan"] = $rows["jabatan"];
			header("Location: " . BASE_URL . "beranda");
		}elseif(mysqli_num_rows($staff) == 1){
			$rows = mysqli_fetch_assoc($staff);
			$_SESSION["id"] = $rows["id_staff"];
			$_SESSION["jabatan"] = $rows["jabatan"];
			header("Location: " . BASE_URL . "beranda");
		}
	}
	header("Location: " . BASE_URL . "login/error");