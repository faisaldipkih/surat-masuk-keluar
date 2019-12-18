<?php

include_once "../../function/function.php";
session_start();

$seleksi = isset($_GET['seleksi']) ? $_GET['seleksi'] : false;
$id_seleksi = isset($_POST['id_seleksi']) ? $_POST['id_seleksi'] : false;
$no_klasifikasi = isset($_POST['no_klasifikasi']) ? $_POST['no_klasifikasi'] : false;
$no_urut = isset($_POST['no_urut']) ? $_POST['no_urut'] : false;
$sifat_surat = isset($_POST['radio']) ? $_POST['radio'] : false;
$lampiran = isset($_POST['lampiran']) ? $_POST['lampiran'] : false;
$kepada = isset($_POST['kepada']) ? $_POST['kepada'] : false;
$tgl_surat = isset($_POST['tgl_surat']) ? $_POST['tgl_surat'] : false;
$isi_surat = isset($_POST['isi_surat']) ? $_POST['isi_surat'] : false;

$button = $_POST['button'];

if($seleksi == "rekomendasi"){
	if($button == "Tambah"){
		$insert = mysqli_query($koneksi, "INSERT INTO surat_rekomendasi VALUES ('', '$id_seleksi', '$no_klasifikasi', '$no_urut', '$sifat_surat', '$lampiran', '$kepada', '$tgl_surat', '$isi_surat')");
		if(!$insert){
			$_SESSION["alert"] = "gagal di tambahkan.";
		}else{
			$_SESSION["alert"] = "berhasil di tambahkan.";
		}
	}elseif($button == "Edit"){
		$id_rekomendasi = $_POST['id_rekomendasi'];
		
		$update = mysqli_query($koneksi, "UPDATE surat_rekomendasi SET no_klasifikasi='$no_klasifikasi', no_urut='$no_urut', sifat='$sifat_surat', lampiran='$lampiran', kepada='$kepada', isi_surat='$isi_surat' WHERE id_rekomendasi='$id_rekomendasi'");
		if(!$update){
			$_SESSION["alert"] = "gagal di edit.";
		}else{
			$_SESSION["alert"] = "berhasil di edit.";
		}
	}
}elseif($seleksi == "izin_penelitian"){
	if($button == "Tambah"){
		var_dump($id_seleksi);
		$insert = mysqli_query($koneksi, "INSERT INTO surat_izin_penelitian VALUES ('', '$id_seleksi', '$no_klasifikasi', '$no_urut', '$lampiran', '$tgl_surat', '$kepada', '$isi_surat')");
		if(!$insert){
			$_SESSION["alert"] = "gagal di tambahkan.";
		}else{
			$_SESSION["alert"] = "berhasil di tambahkan.";
		}
	}elseif($button == "Edit"){
		$id_izin_penelitian = $_POST['id_izin_penelitian'];
		
		$update = mysqli_query($koneksi, "UPDATE surat_izin_penelitian SET no_klasifikasi='$no_klasifikasi', no_urut='$no_urut', lampiran='$lampiran', kepada='$kepada', isi_surat='$isi_surat' WHERE id_izin_penelitian='$id_izin_penelitian'");
		if(!$update){
			$_SESSION["alert"] = "gagal di edit.";
		}else{
			$_SESSION["alert"] = "berhasil di edit.";
		}
	}
}elseif($seleksi == "perintah_tugas"){
	$dasar = $_POST['dasar'];
	$nama = $_POST['nama'];
	$nip = $_POST['nip'];
	$pangkat = $_POST['pangkat'];
	$jabatan = $_POST['jabatan'];
	$untuk = $_POST['untuk'];
	$hari = $_POST['hari'];
	$tgl_pelaksanaan = $_POST['tgl_pelaksanaan'];
	$pembukaan = $_POST['pembukaan'];
	$tempat = $_POST['tempat'];

	if($button == "Tambah"){
		$insert = mysqli_query($koneksi, "INSERT INTO surat_perintah_tugas VALUES ('', '$id_seleksi', '$no_klasifikasi', '$no_urut', '$dasar', '$nama', '$nip', '$pangkat', '$jabatan', '$untuk', '$hari', '$tgl_pelaksanaan', '$pembukaan', '$tempat', '$tgl_surat')");
		if(!$insert){
			$_SESSION["alert"] = "gagal di tambahkan.";
		}else{
			$_SESSION["alert"] = "berhasil di tambahkan.";
		}
	}elseif($button == "Edit"){
		$id_perintah_tugas = $_POST['id_perintah_tugas'];
		var_dump($id_perintah_tugas);
		
		$update = mysqli_query($koneksi, "UPDATE surat_perintah_tugas SET `id_akun`='$id_seleksi',`no_klasifikasi`='$no_klasifikasi',`no_urut`='$no_urut',`dasar`='$dasar',`nama`='$nama',`NIP`='$nip',`pangkat_gol`='$pangkat',`jabatan`='$jabatan',`untuk`='$untuk',`hari_pelaksanaan`='$hari',`tgl_pelaksanaan`='$tgl_pelaksanaan',`pembukaan`='$pembukaan',`tempat_pelaksanaan`='$tempat' WHERE id_perintah_tugas='$id_perintah_tugas'");
		if(!$update){
			$_SESSION["alert"] = "gagal di edit.";
		}else{
			$_SESSION["alert"] = "berhasil di edit.";
		}
	}
}elseif($seleksi == "nota_dinas"){
	$dari = $_POST['dari'];
	$perihal = $_POST['perihal'];

	if($button == "Tambah"){
		$insert = mysqli_query($koneksi, "INSERT INTO surat_nota_dinas VALUES ('', '$id_seleksi', '$no_klasifikasi', '$no_urut', '$kepada', '$dari', '$tgl_surat', '$perihal', '$isi_surat')");
		if(!$insert){
			$_SESSION["alert"] = "gagal di tambahkan.";
		}else{
			$_SESSION["alert"] = "berhasil di tambahkan.";
		}
	}elseif($button == "Edit"){
		$id_nota_dinas = $_POST['id_nota_dinas'];
		
		$update = mysqli_query($koneksi, "UPDATE surat_nota_dinas SET no_klasifikasi='$no_klasifikasi', no_urut='$no_urut', dari='$dari', kepada='$kepada', perihal='$perihal', isi_surat='$isi_surat' WHERE id_nota_dinas='$id_nota_dinas'");
		if(!$update){
			$_SESSION["alert"] = "gagal di edit.";
		}else{
			$_SESSION["alert"] = "berhasil di edit.";
		}
	}
}
echo "<script>
	document.location.href='" . BASE_URL . "surat_keluar/". $seleksi ."';
	</script>";