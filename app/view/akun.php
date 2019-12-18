<?php

    include_once "app/module/akun/akun.php";
?>

<?php
    if($url1 == "ketua") {
?>
<div class="row">
    <div class="col-md-12">
        <h3 class="title-5 m-b-35">Data Akun <?= $url1 ?></h3>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <a class="au-btn au-btn-icon au-btn--green au-btn--small m-b-35" href="<?= BASE_URL."form_akun/ketua/Tambah" ?>">
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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Jabatan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($data_akun_ket as $row){
            ?>
                    <tr>
                        <td><?= $row["nama"] ?></td>
                        <td><?= $row["email"] ?></td>
                        <td><?= $row["username"] ?></td>
                        <td><?= $row["jabatan"] ?></td>
                        <td><a class="btn btn-primary btn-sm" href="<?= BASE_URL."form_akun/ketua/Edit/$row[id_akun]" ?>">Edit</a></td>
                    </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</div>
<?php
    }elseif($url1 == "staff") {
?>
<div class="row">
    <div class="col-md-12">
        <h3 class="title-5 m-b-35">Data Akun <?= $url1 ?></h3>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <a class="au-btn au-btn-icon au-btn--green au-btn--small m-b-35" href="<?= BASE_URL."form_akun/staff/Tambah" ?>">
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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Posisi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
        <?php
            foreach($data_akun_staff as $row){
        ?>
                <tr>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["email"] ?></td>
                    <td><?= $row["username"] ?></td>
                    <td><?= $row["jabatan"] ?></td>
                    <td><a class="btn btn-primary btn-sm" href="<?= BASE_URL."form_akun/staff/Edit/$row[id_akun]" ?>">Edit</a></td>
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