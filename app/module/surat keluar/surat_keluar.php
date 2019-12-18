<?php

$url1 = isset($url[1]) ? $url[1] : false;
$url2 = isset($url[2]) ? $url[2] : false;
$id_login = isset($_SESSION['id']) ? $_SESSION['id'] : false;
var_dump($id_login);
$alert = isset($_SESSION['alert']) ? $_SESSION['alert'] : false;
$tanggal_surat = date("Y-m-d");

$autoNoUrut = query("SELECT no_urut FROM surat_rekomendasi UNION SELECT no_urut FROM surat_perintah_tugas UNION SELECT no_urut FROM surat_izin_penelitian ORDER BY no_urut DESC LIMIT 1");

if(count($autoNoUrut) == 0){
	$isi_no_urut = 1;
}else{
	foreach($autoNoUrut as $row){
		$isi_no_urut = $row['no_urut'] + 1;
	}
}


if($url1 == "rekomendasi"){
	$id_rekomendasi = '';
	$id_seleksi = '';
	$no_klasifikasi = '';
	$no_urut = '';
	$sifat = '';
	$lampiran = '';
	$kepada = '';
	$tgl_surat = '';
	$isi_surat = '';
	
	if($jabatan_login == "admin" || $jabatan_login == "Kepala Dinas Pendidikan" || $jabatan_login == "SUBBAG Umum & Kepegawaian" ){
		$surat_rekomendasi = query("SELECT * FROM surat_rekomendasi");
	}else{
		$surat_rekomendasi = query("SELECT * FROM surat_rekomendasi WHERE id_jabatan='$id_login'");
	}

	if($url2 == "Edit"){
		$url_id = isset($url[3]) ? $url[3] : false;
		$edit_rekomendasi = query("SELECT * FROM surat_rekomendasi WHERE id_rekomendasi='$url_id'");

		foreach($edit_rekomendasi as $row){
			$id_rekomendasi = $row['id_rekomendasi'];
			$id_seleksi = $row['id_jabatan'];
			$no_klasifikasi = $row['no_klasifikasi'];
			$no_urut = $row['no_urut'];
			$sifat = $row['sifat'];
			$lampiran = $row['lampiran'];
			$kepada = $row['kepada'];
			$tgl_surat = $row['tgl_surat'];
			$isi_surat = $row['isi_surat'];
		}
	}
}elseif($url1 == "izin_penelitian"){
	$id_izin_penelitian = '';
	$id_seleksi = '';
	$no_klasifikasi = '';
	$no_urut = '';
	$lampiran = '';
	$kepada = '';
	$tgl_surat = '';
	$isi_surat = '';
	
	if($jabatan_login == "admin" || $jabatan_login == "Kepala Dinas Pendidikan" || $jabatan_login == "SUBBAG Umum & Kepegawaian" ){
		$surat_izin_penelitian = query("SELECT * FROM surat_izin_penelitian");
	}else{
		$surat_izin_penelitian = query("SELECT * FROM surat_izin_penelitian WHERE id_jabatan='$id_login'");
	}

	if($url2 == "Edit"){
		$url_id = isset($url[3]) ? $url[3] : false;
		$edit_izin_penelitian = query("SELECT * FROM surat_izin_penelitian WHERE id_izin_penelitian='$url_id'");

		foreach($edit_izin_penelitian as $row){
			$id_izin_penelitian = $row['id_izin_penelitian'];
			$id_seleksi = $row['id_jabatan'];
			$no_klasifikasi = $row['no_klasifikasi'];
			$no_urut = $row['no_urut'];
			$lampiran = $row['lampiran'];
			$kepada = $row['kepada'];
			$tgl_surat = $row['tgl_surat'];
			$isi_surat = $row['isi_surat'];
		}
	}
}elseif($url1 == "perintah_tugas"){
	$no_klasifikasi = '';
	$no_urut = '';
	$dasar = '';
	$nama = '';
	$nip = '';
	$pangkat = '';
	$jabatan = '';
	$untuk = '';
	$hari = '';
	$tgl_pelaksanaan = '';
	$pembukaan = '';
	$tempat = '';
	$tgl_surat = '';

	if($jabatan_login == "admin" || $jabatan_login == "Kepala Dinas Pendidikan" || $jabatan_login == "SUBBAG Umum & Kepegawaian" ){
		$surat_perintah_tugas = query("SELECT * FROM surat_perintah_tugas");
	}else{
		$surat_perintah_tugas = query("SELECT * FROM surat_perintah_tugas WHERE id_jabatan='$id_login'");
	}
	if($url2 == "Edit"){
		$url_id = isset($url[3]) ? $url[3] : false;
		$edit_izin_penelitian = query("SELECT * FROM surat_perintah_tugas WHERE id_perintah_tugas='$url_id'");

		foreach($edit_izin_penelitian as $row){
			$id_perintah_tugas = $row['id_perintah_tugas'];
			$id_seleksi = $row['id_jabatan'];
			$no_klasifikasi = $row['no_klasifikasi'];
			$no_urut = $row['no_urut'];
			$dasar = $row['dasar'];
			$nama = $row['nama'];
			$nip = $row['NIP'];
			$pangkat = $row['pangkat_gol'];
			$jabatan = $row['jabatan'];
			$untuk = $row['untuk'];
			$hari = $row['hari_pelaksanaan'];
			$tgl_pelaksanaan = $row['tgl_pelaksanaan'];
			$pembukaan = $row['pembukaan'];
			$tempat = $row['tempat_pelaksanaan'];
			$tgl_surat = $row['tgl_surat'];
		}
	}
}elseif($url1 == "nota_dinas"){
	$id_nota_dinas = '';
	$id_seleksi = '';
	$no_klasifikasi = '';
	$no_urut = '';
	$kepada = '';
	$dari = '';
	$tgl_surat = '';
	$perihal = '';
	$isi_surat = '';
	
	if($jabatan_login == "admin" || $jabatan_login == "Kepala Dinas Pendidikan" || $jabatan_login == "SUBBAG Umum & Kepegawaian" ){
		$surat_nota_dinas = query("SELECT * FROM surat_nota_dinas");
	}else{
		$surat_nota_dinas = query("SELECT * FROM surat_nota_dinas WHERE id_jabatan='$id_login'");
	}

	if($url2 == "Edit"){
		$url_id = isset($url[3]) ? $url[3] : false;
		$edit_nota_dinas = query("SELECT * FROM surat_nota_dinas WHERE id_nota_dinas='$url_id'");

		foreach($edit_nota_dinas as $row){
			$id_nota_dinas = $row['id_nota_dinas'];
			$id_seleksi = $row['id_jabatan'];
			$no_klasifikasi = $row['no_klasifikasi'];
			$no_urut = $row['no_urut'];
			$kepada = $row['kepada'];
			$dari = $row['dari'];
			$tgl_surat = $row['tgl_surat'];
			$perihal = $row['perihal'];
			$isi_surat = $row['isi_surat'];
		}
	}
}