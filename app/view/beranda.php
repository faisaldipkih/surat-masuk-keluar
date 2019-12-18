<?php

	include_once "app/module/beranda/beranda.php";
	var_dump($jabatan_login);

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">overview</h2>
            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c1">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <h2><?= $jumlahAkun ?></h2>
                            <span>Jumlah Pengguna</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c2">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="far fa-envelope-open"></i>
                        </div>
                        <div class="text">
                            <h2><?= $jumlahSuratMasukDepan ?></h2>
                            <span>Jumlah Surat Masuk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c4">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <div class="text">
                            <h2><?= $jumlahDisposisiDepan ?></h2>
                            <span>Jumlah Disposisi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c1">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="text">
                            <h2><?= $jumlahSuratKeluarDepan ?></h2>
                            <span>Jumlah Surat Keluar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>