<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="<?= BASE_URL."css/font-face.css" ?>" rel="stylesheet" media="all">
    <link href="<?= BASE_URL."vendor/font-awesome-4.7/css/font-awesome.min.css" ?>" rel="stylesheet" media="all">
    <link href="<?= BASE_URL."vendor/font-awesome-5/css/fontawesome-all.min.css" ?>" rel="stylesheet" media="all">
    <link href="<?= BASE_URL."vendor/mdi-font/css/material-design-iconic-font.min.css" ?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= BASE_URL."vendor/bootstrap-4.1/bootstrap.min.css" ?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= BASE_URL."vendor/animsition/animsition.min.css" ?>" rel="stylesheet" media="all">
    <link href="<?= BASE_URL."vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" ?>" rel="stylesheet" media="all">
    <link href="<?= BASE_URL."vendor/wow/animate.css" ?>" rel="stylesheet" media="all">
    <link href="<?= BASE_URL."vendor/css-hamburgers/hamburgers.min.css" ?>" rel="stylesheet" media="all">
    <link href="<?= BASE_URL."vendor/slick/slick.css" ?>" rel="stylesheet" media="all">
    <link href="<?= BASE_URL."vendor/select2/select2.min.css" ?>" rel="stylesheet" media="all">
    <link href="<?= BASE_URL."vendor/perfect-scrollbar/perfect-scrollbar.css" ?>" rel="stylesheet" media="all">
    <link href="<?= BASE_URL."asset/DataTables/css/dataTables.bootstrap4.min.css" ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= BASE_URL."css/theme.css" ?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
<?php 
    if(isset($_SESSION["jabatan"])) {
?>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?= BASE_URL."images/icon/garut.png" ?>" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="<?= BASE_URL."beranda" ?>">
                                <i class="fas fa-clipboard-list"></i>Dashboard</a>
                        </li>
                <?php
                    if($jabatan_login == "admin"){
                ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user-plus"></i>Akun</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?= BASE_URL."akun/ketua" ?>"><i class="fas fa-plus"></i>Ketua</a>
                                </li>
                                <li>
                                    <a href="<?= BASE_URL."akun/staff" ?>"><i class="fas fa-plus"></i>Staff</a>
                                </li>
                            </ul>
                        </li>
                <?php
                    }
                ?>
                <?php
                    if($jabatan_login == "SUBBAG Umum & Kepegawaian" || $jabatan_login == "Kepala Dinas Pendidikan"){
                ?>
                        <li>
                            <a href="<?= BASE_URL."surat_masuk" ?>">
                                <i class="far fa-envelope-open"></i>Surat Masuk</a>
                        </li>
                <?php
                    }
                    if($jabatan_login != "admin"){
                ?>
                        <li>
                            <a href="<?= BASE_URL."disposisi" ?>">
                                <i class="fas fa-clipboard-list"></i>Disposisi</a>
                        </li>
                <?php
                    }
                    if($jabatan_login != "admin" || $jabatan_login != "Kepala Dinas Pendidikan"){
                ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-envelope"></i>Surat Keluar</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?= BASE_URL."surat_keluar/rekomendasi" ?>"><i class="fas fa-plus"></i>Rekomendasi</a>
                                </li>
                                <li>
                                    <a href="<?= BASE_URL."surat_keluar/izin_penelitian" ?>"><i class="fas fa-plus"></i>Izin Penelitian</a>
                                </li>
                                <li>
                                    <a href="<?= BASE_URL."surat_keluar/perintah_tugas" ?>"><i class="fas fa-plus"></i>Perintah Tugas</a>
                                </li><li>
                                    <a href="<?= BASE_URL."surat_keluar/nota_dinas" ?>"><i class="fas fa-plus"></i>Nota Dinas</a>
                                </li>
                            </ul>
                        </li>
                <?php
                    }
                ?>
                        <li>
                            <a href="<?= BASE_URL."agenda" ?>">
                                <i class="fas fa-map-marker-alt"></i>Agenda</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?= BASE_URL."images/icon/garut.png" ?>" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="<?= BASE_URL."beranda" ?>">
                                <i class="fas fa-clipboard-list"></i>Dashboard</a>
                        </li>
                <?php
                    if($jabatan_login == "admin"){
                ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user-plus"></i>Akun</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?= BASE_URL."akun/ketua" ?>"><i class="fas fa-plus"></i>Ketua</a>
                                </li>
                                <li>
                                    <a href="<?= BASE_URL."akun/staff" ?>"><i class="fas fa-plus"></i>Staff</a>
                                </li>
                            </ul>
                        </li>
                <?php
                    }
                ?>
                <?php
                    if($jabatan_login == "SUBBAG Umum & Kepegawaian" || $jabatan_login == "Kepala Dinas Pendidikan"){
                ?>
                        <li>
                            <a href="<?= BASE_URL."surat_masuk" ?>">
                                <i class="far fa-envelope-open"></i>Surat Masuk</a>
                        </li>
                <?php
                    }
                    if($jabatan_login != "admin"){
                ?>
                        <li>
                            <a href="<?= BASE_URL."disposisi" ?>">
                                <i class="fas fa-clipboard-list"></i>Disposisi</a>
                        </li>
                <?php
                    }
                    if($jabatan_login != "admin" && $jabatan_login != "Kepala Dinas Pendidikan"){
                ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-envelope"></i>Surat Keluar</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?= BASE_URL."surat_keluar/rekomendasi" ?>"><i class="fas fa-plus"></i>Rekomendasi</a>
                                </li>
                                <li>
                                    <a href="<?= BASE_URL."surat_keluar/izin_penelitian" ?>"><i class="fas fa-plus"></i>Izin Penelitian</a>
                                </li>
                                <li>
                                    <a href="<?= BASE_URL."surat_keluar/perintah_tugas" ?>"><i class="fas fa-plus"></i>Perintah Tugas</a>
                                </li><li>
                                    <a href="<?= BASE_URL."surat_keluar/nota_dinas" ?>"><i class="fas fa-plus"></i>Nota Dinas</a>
                                </li>
                            </ul>
                        </li>
                <?php
                    }
                ?>
                        <li>
                            <a href="<?= BASE_URL."agenda" ?>">
                                <i class="fas fa-map-marker-alt"></i>Agenda</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap float-right">
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?= BASE_URL."app/function/logout.php" ?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
<?php
    }
?>