<?php

$akunDepan = query("SELECT * FROM akun");
$jumlahAkun = count($akunDepan);

$suratMasukDepan = query("SELECT * FROM surat_masuk");
$jumlahSuratMasukDepan = count($suratMasukDepan);

$disposisiDepan = query("SELECT * FROM disposisi");
$jumlahDisposisiDepan = count($disposisiDepan);

$suratKeluarDepan = query("SELECT no_urut FROM surat_rekomendasi UNION SELECT no_urut FROM surat_perintah_tugas UNION SELECT no_urut FROM surat_izin_penelitian ORDER BY no_urut DESC LIMIT 1");
$jumlahSuratKeluarDepan = count($suratKeluarDepan);