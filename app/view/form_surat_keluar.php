<?php
	include_once 'app/module/surat keluar/surat_keluar.php';
if($url1 == "rekomendasi"){
?>
	<div class="card">
	    <div class="card-header">
	        <strong>Kelola surat rekomendasi</strong>
	    </div>
	    <div class="card-body card-block">
	        <form action="<?= BASE_URL."app/module/surat keluar/action.php?seleksi=$url1" ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
	        <?php
	        if($url2 == "Edit"){
	        ?>
	                <input type="hidden" name="id_rekomendasi" value="<?= $id_rekomendasi ?>">
	                <input type="hidden" name="id_seleksi" value="<?= $id_seleksi ?>">
	        <?php
	            }elseif($url2 == "Tambah"){
	        ?>
	        	<input type="hidden" name="id_seleksi" value="<?= $id_login ?>">
	        <?php
	        	}
	        ?>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="no_klasifikasi" class=" form-control-label">Nomor Klasifikasi</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="no_klasifikasi" name="no_klasifikasi" placeholder="Masukan Nomor Klasifikasi" class="form-control" value="<?= $no_klasifikasi ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="no_urut" class=" form-control-label">Nomor Urut</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="no_urut" name="no_urut" class="form-control" placeholder="Masukan Nomor Urut" value="<?= $no_urut ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label class=" form-control-label">Sifat Surat</label>
	                </div>
	                <div class="col col-md-9">
	                    <div class="form-check">
	                        <div class="radio">
	                            <label for="biasa" class="form-check-label ">
	                                <input type="radio" id="biasa" name="radio" value="Biasa" class="form-check-input" <?php if($sifat == "Biasa"){ ?> checked <?php } ?> >Biasa
	                            </label>
	                        </div>
	                        <div class="radio">
	                            <label for="penting" class="form-check-label ">
	                                <input type="radio" id="penting" name="radio" value="Penting" class="form-check-input" <?php if($sifat == "Penting"){ ?> checked <?php } ?>>Penting
	                            </label>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="lampiran" class=" form-control-label">Lampiran Surat</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="lampiran" name="lampiran" class="form-control" placeholder="Masukan lampiran surat" value="<?= $lampiran ?>">
	                    <small class="form-text text-muted">Isi dengan ( - ) jika tidak akan mengisi lampiran</small>
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="kepada" class=" form-control-label">Ditujukan Kepada</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="kepada" name="kepada" class="form-control" placeholder="Masukan surat ditujukan" value="<?= $kepada ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="tgl_surat" class=" form-control-label">Tanggal Surat</label>
	                </div>
	                <div class="col-12 col-md-9">
	            <?php
	            	if($url2 == "Tambah"){
	            ?>
	                    <input type="disable" name="tgl_surat" value="<?= $tanggal_surat ?>">
	            <?php
	            	}elseif($url2 == "Edit"){
	            ?>
	            		<p><?= $tgl_surat ?></p>
	            <?php
	            	}
	            ?>
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="isi_surat" class=" form-control-label">Isi Surat</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <textarea name="isi_surat" id="isi_surat" rows="9" placeholder="Masukan Ketrangan Surat" class="form-control"><?= $isi_surat ?></textarea>
	                </div>
	            </div>
	    </div>
	    <div class="card-footer">
	        <button type="submit" class="btn btn-primary btn-sm" name="button" value="<?= $url2 ?>">
	            <i class="fa fa-dot-circle-o"></i> <?= $url2 ?>
	        </button>
	        </form>
	    </div>
	</div>
<?php
}elseif($url1 == "izin_penelitian"){
?>
	<div class="card">
	    <div class="card-header">
	        <strong>Kelola surat izin penelitian</strong>
	    </div>
	    <div class="card-body card-block">
	        <form action="<?= BASE_URL."app/module/surat keluar/action.php?seleksi=$url1" ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
	        <?php
	        if($url2 == "Edit"){
	        ?>
	                <input type="hidden" name="id_izin_penelitian" value="<?= $id_izin_penelitian ?>">
	                <input type="hidden" name="id_seleksi" value="<?= $id_seleksi ?>">
	        <?php
	            }elseif($url2 == "Tambah"){
	        ?>
	        	<input type="hidden" name="id_seleksi" value="<?= $id_login ?>">
	        <?php
	        	}
	        ?>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="no_klasifikasi" class=" form-control-label">Nomor Klasifikasi</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="no_klasifikasi" name="no_klasifikasi" placeholder="Masukan Nomor Klasifikasi" class="form-control" value="<?= $no_klasifikasi ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="no_urut" class=" form-control-label">Nomor Urut</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="no_urut" name="no_urut" class="form-control" placeholder="Masukan Nomor Urut" value="<?= $no_urut ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="lampiran" class=" form-control-label">Lampiran Surat</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="lampiran" name="lampiran" class="form-control" placeholder="Masukan lampiran surat" value="<?= $lampiran ?>">
	                    <small class="form-text text-muted">Isi dengan ( - ) jika tidak akan mengisi lampiran</small>
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="kepada" class=" form-control-label">Ditujukan Kepada</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="kepada" name="kepada" class="form-control" placeholder="Masukan surat ditujukan" value="<?= $kepada ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="tgl_surat" class=" form-control-label">Tanggal Surat</label>
	                </div>
	                <div class="col-12 col-md-9">
	            <?php
	            	if($url2 == "Tambah"){
	            ?>
	                    <input type="disable" name="tgl_surat" value="<?= $tanggal_surat ?>">
	            <?php
	            	}elseif($url2 == "Edit"){
	            ?>
	            		<p><?= $tgl_surat ?></p>
	            <?php
	            	}
	            ?>
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="isi_surat" class=" form-control-label">Isi Surat</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <textarea name="isi_surat" id="isi_surat" rows="9" placeholder="Masukan Ketrangan Surat" class="form-control"><?= $isi_surat ?></textarea>
	                </div>
	            </div>
	    </div>
	    <div class="card-footer">
	        <button type="submit" class="btn btn-primary btn-sm" name="button" value="<?= $url2 ?>">
	            <i class="fa fa-dot-circle-o"></i> <?= $url2 ?>
	        </button>
	        </form>
	    </div>
	</div>
<?php
}elseif($url1 == "perintah_tugas"){
?>
	<div class="card">
	    <div class="card-header">
	        <strong>Kelola surat perintah tugas</strong>
	    </div>
	    <div class="card-body card-block">
	        <form action="<?= BASE_URL."app/module/surat keluar/action.php?seleksi=$url1" ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
	        <?php
	        if($url2 == "Edit"){
	        ?>
	                <input type="hidden" name="id_perintah_tugas" value="<?= $id_perintah_tugas ?>">
	                <input type="hidden" name="id_seleksi" value="<?= $id_seleksi ?>">
	        <?php
	            }elseif($url2 == "Tambah"){
	        ?>
	        	<input type="hidden" name="id_seleksi" value="<?= $id_login ?>">
	        <?php
	        	}
	        ?>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="no_klasifikasi" class=" form-control-label">Nomor Klasifikasi</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="no_klasifikasi" name="no_klasifikasi" placeholder="Masukan Nomor Klasifikasi" class="form-control" value="<?= $no_klasifikasi ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="no_urut" class=" form-control-label">Nomor Urut</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="no_urut" name="no_urut" class="form-control" placeholder="Masukan Nomor Urut" value="<?= $no_urut ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="dasar" class=" form-control-label">Dasar</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <textarea name="dasar" id="dasar" rows="9" placeholder="Masukan dasar surat" class="form-control"><?= $dasar ?></textarea>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col col-md-3 mb-3">
	            		<small class="form-text text-muted"><b>Kepada :</b></small>
	            	</div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="nama" class=" form-control-label">Nama</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan nama yang akan di beri perintah" value="<?= $nama ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="nip" class=" form-control-label">NIP</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="nip" name="nip" class="form-control" placeholder="Masukan NIP" value="<?= $nip ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="pangkat" class=" form-control-label">Pangkat / Golongan</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="pangkat" name="pangkat" class="form-control" placeholder="Masukan pangkat atau golongan" value="<?= $pangkat ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="jabatan" class=" form-control-label">Jabatan</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="jabatan" name="jabatan" class="form-control" placeholder="Masukan jabatan" value="<?= $jabatan ?>">
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col col-md-3 mb-3">
	            		<small class="form-text text-muted"><b>Untuk :</b></small>
	            	</div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="untuk" class=" form-control-label">Perintah Untuk</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <textarea name="untuk" id="untuk" rows="9" placeholder="Masukan perintah untuk" class="form-control"><?= $untuk ?></textarea>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col col-md-3 mb-3">
	            		<small class="form-text text-muted"><b>Waktu pelaksanaan :</b></small>
	            	</div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="hari" class=" form-control-label">Hari Pelaksanaan</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="hari" name="hari" class="form-control" placeholder="Masukan hari pelakasnaan" value="<?= $hari ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="tgl_pelaksanaan" class=" form-control-label">Tanggal Pelaksanaan</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="tgl_pelaksanaan" name="tgl_pelaksanaan" class="form-control" placeholder="Masukan tanggal pelakasnaan" value="<?= $tgl_pelaksanaan ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="pembukaan" class=" form-control-label">Waktu Pembukaan</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="pembukaan" name="pembukaan" class="form-control" placeholder="Masukan waktu pembukaan" value="<?= $pembukaan ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="tempat" class=" form-control-label">Tempat Pelakasanaan</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="tempat" name="tempat" class="form-control" placeholder="Masukan tempat pelakasnaan" value="<?= $tempat ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="tgl_surat" class=" form-control-label">Tanggal Surat</label>
	                </div>
	                <div class="col-12 col-md-9">
	            <?php
	            	if($url2 == "Tambah"){
	            ?>
	                    <input type="disable" name="tgl_surat" value="<?= $tanggal_surat ?>">
	            <?php
	            	}elseif($url2 == "Edit"){
	            ?>
	            		<p><?= $tgl_surat ?></p>
	            <?php
	            	}
	            ?>
	                </div>
	            </div>
	    </div>
	    <div class="card-footer">
	        <button type="submit" class="btn btn-primary btn-sm" name="button" value="<?= $url2 ?>">
	            <i class="fa fa-dot-circle-o"></i> <?= $url2 ?>
	        </button>
	        </form>
	    </div>
	</div>
<?php
}elseif($url1 == "nota_dinas"){
?>
	<div class="card">
	    <div class="card-header">
	        <strong>Kelola surat nota dinas</strong>
	    </div>
	    <div class="card-body card-block">
	        <form action="<?= BASE_URL."app/module/surat keluar/action.php?seleksi=$url1" ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
	        <?php
	        if($url2 == "Edit"){
	        ?>
	                <input type="hidden" name="id_nota_dinas" value="<?= $id_nota_dinas ?>">
	                <input type="hidden" name="id_seleksi" value="<?= $id_seleksi ?>">
	        <?php
	            }elseif($url2 == "Tambah"){
	        ?>
	        	<input type="hidden" name="id_seleksi" value="<?= $id_login ?>">
	        <?php
	        	}
	        ?>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="no_klasifikasi" class=" form-control-label">Nomor Klasifikasi</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="no_klasifikasi" name="no_klasifikasi" placeholder="Masukan Nomor Klasifikasi" class="form-control" value="<?= $no_klasifikasi ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="no_urut" class=" form-control-label">Nomor Urut</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="no_urut" name="no_urut" class="form-control" placeholder="Masukan Nomor Urut" value="<?= $no_urut ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="kepada" class=" form-control-label">Ditujukan Kepada</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="kepada" name="kepada" class="form-control" placeholder="Masukan surat ditujukan" value="<?= $kepada ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="dari" class=" form-control-label">Dari</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="dari" name="dari" class="form-control" placeholder="Masukan dari siapa" value="<?= $dari ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="tgl_surat" class=" form-control-label">Tanggal Surat</label>
	                </div>
	                <div class="col-12 col-md-9">
	            <?php
	            	if($url2 == "Tambah"){
	            ?>
	                    <input type="disable" name="tgl_surat" value="<?= $tanggal_surat ?>">
	            <?php
	            	}elseif($url2 == "Edit"){
	            ?>
	            		<p><?= $tgl_surat ?></p>
	            <?php
	            	}
	            ?>
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="perihal" class=" form-control-label">Perihal</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <input type="text" id="perihal" name="perihal" class="form-control" placeholder="Masukan perihal" value="<?= $perihal ?>">
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="isi_surat" class=" form-control-label">Isi Surat</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <textarea name="isi_surat" id="isi_surat" rows="9" placeholder="Masukan Ketrangan Surat" class="form-control"><?= $isi_surat ?></textarea>
	                </div>
	            </div>
	    </div>
	    <div class="card-footer">
	        <button type="submit" class="btn btn-primary btn-sm" name="button" value="<?= $url2 ?>">
	            <i class="fa fa-dot-circle-o"></i> <?= $url2 ?>
	        </button>
	        </form>
	    </div>
	</div>
<?php
}
?>