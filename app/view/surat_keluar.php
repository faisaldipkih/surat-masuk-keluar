<?php
	include_once "app/module/surat keluar/surat_keluar.php";

if($url1 == "rekomendasi"){
?>
	<div class="row">
	    <div class="col-md-12">
	        <h3 class="title-5 m-b-35">Data Surat Keluar Rekomendasi</h3>
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	        <a class="au-btn au-btn-icon au-btn--green au-btn--small m-b-35" href="<?= BASE_URL."form_surat_keluar/rekomendasi/Tambah" ?>">
	            <i class="zmdi zmdi-plus"></i>tambah data
	        </a>
	     </div>
	</div>
	<?php
	if($alert == "berhasil di tambahkan." || $alert == "berhasil di edit."){
	?>
	<div class="row">
	    <div class="col-md-12">
	        <div class="alert alert-success alert-dismissible fade show" role="alert">
	            Data <?= $_SESSION["alert"] ?>
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	            </button>
	        </div>
	    </div>
	</div>
	<?php
	unset($_SESSION["alert"]);
	}elseif($alert == "gagal di tambahkan." || $alert == "gagal di edit."){
	?>
	<div class="row">
	    <div class="col-md-12">
	        <div class="alert alert-danger alert-dismissible fade show" role="alert">
	            Data <?= $_SESSION["alert"] ?>
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	            </button>
	        </div>
	    </div>
	</div>
	<?php
	unset($_SESSION["alert"]);
	}
	?>
	<div class="row">
	    <div class="col-md-12">
	        <table id="data" class="table table-striped table-bordered" style="width:100%">
	            <thead>
	                <tr>
	                    <th>No Klasifikasi</th>
	                    <th>No Urut</th>
	                    <th>Sifat</th>
	                    <th>Lampiran</th>
	                    <th>Kepada</th>
	                    <th>Tanggal Surat</th>
	                    <th>File Surat</th>
	                    <th>Action</th>
	                </tr>
	            </thead>
	            <tbody>
	            <?php
	                foreach($surat_rekomendasi as $row){
	            ?>
	                    <tr>
	                        <td><?= $row["no_klasifikasi"] ?></td>
	                        <td><?= $row["no_urut"] ?></td>
	                        <td><?= $row["sifat"] ?></td>
	                        <td><?= $row["lampiran"] ?></td>
	                        <td><?= $row["kepada"] ?></td>
	                        <td><?= $row["tgl_surat"] ?></td>
	                        <td><a class="btn btn-primary btn-sm" target="_blank" href="<?= BASE_URL."app/module/surat keluar/printRekomendasi.php?id=$row[id_rekomendasi]" ?>"><i class="fas fa-eye"></i></a></td>
	                        <td><a class="btn btn-primary btn-sm" href="<?= BASE_URL."form_surat_keluar/rekomendasi/Edit/$row[id_rekomendasi]" ?>">Edit</a></td>
	                    </tr>
	            <?php
	                }
	            ?>
	            </tbody>
	        </table>
	    </div>
	</div>
<?php
}elseif($url1 == "izin_penelitian"){
?>
	<div class="row">
	    <div class="col-md-12">
	        <h3 class="title-5 m-b-35">Data Surat Keluar Izin Penelitian</h3>
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	        <a class="au-btn au-btn-icon au-btn--green au-btn--small m-b-35" href="<?= BASE_URL."form_surat_keluar/izin_penelitian/Tambah" ?>">
	            <i class="zmdi zmdi-plus"></i>tambah data
	        </a>
	     </div>
	</div>
	<?php
	if($alert == "berhasil di tambahkan." || $alert == "berhasil di edit."){
	?>
	<div class="row">
	    <div class="col-md-12">
	        <div class="alert alert-success alert-dismissible fade show" role="alert">
	            Data <?= $_SESSION["alert"] ?>
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	            </button>
	        </div>
	    </div>
	</div>
	<?php
	unset($_SESSION["alert"]);
	}elseif($alert == "gagal di tambahkan." || $alert == "gagal di edit."){
	?>
	<div class="row">
	    <div class="col-md-12">
	        <div class="alert alert-danger alert-dismissible fade show" role="alert">
	            Data <?= $_SESSION["alert"] ?>
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	            </button>
	        </div>
	    </div>
	</div>
	<?php
	unset($_SESSION["alert"]);
	}
	?>
	<div class="row">
	    <div class="col-md-12">
	        <table id="data" class="table table-striped table-bordered" style="width:100%">
	            <thead>
	                <tr>
	                    <th>No Klasifikasi</th>
	                    <th>No Urut</th>
	                    <th>Lampiran</th>
	                    <th>Kepada</th>
	                    <th>Tanggal Surat</th>
	                    <th>File Surat</th>
	                    <th>Action</th>
	                </tr>
	            </thead>
	            <tbody>
	            <?php
	                foreach($surat_izin_penelitian as $row){
	            ?>
	                    <tr>
	                        <td><?= $row["no_klasifikasi"] ?></td>
	                        <td><?= $row["no_urut"] ?></td>
	                        <td><?= $row["lampiran"] ?></td>
	                        <td><?= $row["kepada"] ?></td>
	                        <td><?= $row["tgl_surat"] ?></td>
	                        <td><a class="btn btn-primary btn-sm" target="_blank" href="#"><i class="fas fa-eye"></i></a></td>
	                        <td><a class="btn btn-primary btn-sm" href="<?= BASE_URL."form_surat_keluar/izin_penelitian/Edit/$row[id_izin_penelitian]" ?>">Edit</a></td>
	                    </tr>
	            <?php
	                }
	            ?>
	            </tbody>
	        </table>
	    </div>
	</div>
<?php
}elseif($url1 == "perintah_tugas"){
?>
	<div class="row">
	    <div class="col-md-12">
	        <h3 class="title-5 m-b-35">Data Surat Keluar Izin Penelitian</h3>
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	        <a class="au-btn au-btn-icon au-btn--green au-btn--small m-b-35" href="<?= BASE_URL."form_surat_keluar/perintah_tugas/Tambah" ?>">
	            <i class="zmdi zmdi-plus"></i>tambah data
	        </a>
	     </div>
	</div>
	<?php
	if($alert == "berhasil di tambahkan." || $alert == "berhasil di edit."){
	?>
	<div class="row">
	    <div class="col-md-12">
	        <div class="alert alert-success alert-dismissible fade show" role="alert">
	            Data <?= $_SESSION["alert"] ?>
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	            </button>
	        </div>
	    </div>
	</div>
	<?php
	unset($_SESSION["alert"]);
	}elseif($alert == "gagal di tambahkan." || $alert == "gagal di edit."){
	?>
	<div class="row">
	    <div class="col-md-12">
	        <div class="alert alert-danger alert-dismissible fade show" role="alert">
	            Data <?= $_SESSION["alert"] ?>
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	            </button>
	        </div>
	    </div>
	</div>
	<?php
	unset($_SESSION["alert"]);
	}
	?>
	<div class="row">
	    <div class="col-md-12">
	        <table id="data" class="table table-responsive table-striped table-bordered" style="width:100%">
	            <thead>
	                <tr>
	                    <th>No Klasifikasi</th>
	                    <th>No Urut</th>
	                    <th>Nama</th>
	                    <th>NIP</th>
	                    <th>Jabatan</th>
	                    <th>Untuk</th>
	                    <th>Tanggal Pelaksanaan</th>
	                    <th>Pembukaan</th>
	                    <th>Tempat Pelaksanaan</th>
	                    <th>Tanggal Surat</th>
	                    <th>File surat</th>
	                    <th>Action</th>
	                </tr>
	            </thead>
	            <tbody>
	            <?php
	                foreach($surat_perintah_tugas as $row){
	            ?>
	                    <tr>
	                        <td><?= $row["no_klasifikasi"] ?></td>
	                        <td><?= $row["no_urut"] ?></td>
	                        <td><?= $row["nama"] ?></td>
	                        <td><?= $row["NIP"] ?></td>
	                        <td><?= $row["jabatan"] ?></td>
	                        <td><?= $row["untuk"] ?></td>
	                        <td><?= $row["tgl_pelaksanaan"] ?></td>
	                        <td><?= $row["pembukaan"] ?></td>
	                        <td><?= $row["tempat_pelaksanaan"] ?></td>
	                        <td><?= $row["tgl_surat"] ?></td>
	                        <td><a class="btn btn-primary btn-sm" target="_blank" href="#"><i class="fas fa-eye"></i></a></td>
	                        <td><a class="btn btn-primary btn-sm" href="<?= BASE_URL."form_surat_keluar/perintah_tugas/Edit/$row[id_perintah_tugas]" ?>">Edit</a></td>
	                    </tr>
	            <?php
	                }
	            ?>
	            </tbody>
	        </table>
	    </div>
	</div>
<?php
}elseif($url1 == "nota_dinas"){
?>
	<div class="row">
	    <div class="col-md-12">
	        <h3 class="title-5 m-b-35">Data Surat Keluar Nota Dinas</h3>
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	        <a class="au-btn au-btn-icon au-btn--green au-btn--small m-b-35" href="<?= BASE_URL."form_surat_keluar/nota_dinas/Tambah" ?>">
	            <i class="zmdi zmdi-plus"></i>tambah data
	        </a>
	     </div>
	</div>
	<?php
	if($alert == "berhasil di tambahkan." || $alert == "berhasil di edit."){
	?>
	<div class="row">
	    <div class="col-md-12">
	        <div class="alert alert-success alert-dismissible fade show" role="alert">
	            Data <?= $_SESSION["alert"] ?>
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	            </button>
	        </div>
	    </div>
	</div>
	<?php
	unset($_SESSION["alert"]);
	}elseif($alert == "gagal di tambahkan." || $alert == "gagal di edit."){
	?>
	<div class="row">
	    <div class="col-md-12">
	        <div class="alert alert-danger alert-dismissible fade show" role="alert">
	            Data <?= $_SESSION["alert"] ?>
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	            </button>
	        </div>
	    </div>
	</div>
	<?php
	unset($_SESSION["alert"]);
	}
	?>
	<div class="row">
	    <div class="col-md-12">
	        <table id="data" class="table table-striped table-bordered" style="width:100%">
	            <thead>
	                <tr>
	                    <th>No Klasifikasi</th>
	                    <th>No Urut</th>
	                    <th>Kepada</th>
	                    <th>dari</th>
	                    <th>Tanggal Surat</th>
	                    <th>Perihal</th>
	                    <th>File Surat</th>
	                    <th>Action</th>
	                </tr>
	            </thead>
	            <tbody>
	            <?php
	                foreach($surat_nota_dinas as $row){
	            ?>
	                    <tr>
	                        <td><?= $row["no_klasifikasi"] ?></td>
	                        <td><?= $row["no_urut"] ?></td>
	                        <td><?= $row["kepada"] ?></td>
	                        <td><?= $row["dari"] ?></td>
	                        <td><?= $row["tgl_surat"] ?></td>
	                        <td><?= $row["perihal"] ?></td>
	                        <td><a class="btn btn-primary btn-sm" target="_blank" href="#"><i class="fas fa-eye"></i></a></td>
	                        <td><a class="btn btn-primary btn-sm" href="<?= BASE_URL."form_surat_keluar/nota_dinas/Edit/$row[id_nota_dinas]" ?>">Edit</a></td>
	                    </tr>
	            <?php
	                }
	            ?>
	            </tbody>
	        </table>
	    </div>
	</div>
<?php
}
?>