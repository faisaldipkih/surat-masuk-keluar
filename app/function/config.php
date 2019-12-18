<?php
	define("BASE_URL", "http://localhost/surat-masuk-keluar/");
	
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "surat_masuk_keluar";

	$koneksi = mysqli_connect($server,$username,$password,$database) or die("koneksi ke database gagal");