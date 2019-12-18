<?php

    include_once "app/module/akun/akun.php";

?>
<?php
    if($url1 == "ketua") {
?>
<div class="card">
    <div class="card-header">
        <strong>Kelola Akun </strong><?= $url1 ?>
    </div>
    <div class="card-body card-block">
        <form action="<?= BASE_URL."app/module/akun/action.php?seleksi=$url1" ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
    <?php
        if($url2 == "Edit"){
    ?>
            <input type="hidden" name="id" value="<?= $id ?>">
    <?php
        }
    ?>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="nama" class=" form-control-label">Nama</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="nama" name="nama" placeholder="Masukan Nama" class="form-control" value="<?= $nama ?>">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email" class=" form-control-label">Email</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="email" id="email" name="email" placeholder="Masukan Email" class="form-control" value="<?= $email ?>">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="username" class=" form-control-label">Username</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="username" name="username" placeholder="Masukan Username" class="form-control" value="<?= $username ?>">
                </div>
            </div>
        <?php
            if($url2 == "Tambah"){
        ?>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="password" class=" form-control-label">Password</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="password" id="password" name="password" placeholder="Masukan Password" class="form-control">
                </div>
            </div>
        <?php
            }
        ?>
    <?php
        if($url2 == "Tambah"){
    ?>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="jabatan" class=" form-control-label">Jabatan</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="jabatan" id="jabatan" class="form-control">
                        <option disabled selected>Pilih Jabatan</option>
                <?php
                    foreach ($jabatan_ket as $jab_ket) {
                        $jabatan = mysqli_query($koneksi, "SELECT jabatan FROM jabatan WHERE jabatan='$jab_ket'");
                        $num_jab = mysqli_num_rows($jabatan);
                ?>
                            <option value="<?= $jab_ket ?>" <?php if($num_jab == 1){ ?> hidden <?php } ?> ><?= $jab_ket ?></option>
                <?php
                    }
                ?>
                    </select>
                </div>
            </div>
    <?php
        }elseif($url2 == "Edit"){
    ?>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label class=" form-control-label">Jabatan</label>
                </div>
                <div class="col-12 col-md-9">
                    <p class="form-control-static"><?= $jabatan ?></p>
                </div>
            </div>
    <?php
        }
    ?>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm" name="button" value="<?= $url2 ?>">
            <i class="fa fa-dot-circle-o"></i> <?= $url2 ?>
        </button>
    </div>
    </form>
</div>
<?php
    }elseif($url1 == "staff") {
?>
<div class="card">
    <div class="card-header">
        <strong>Kelola Akun </strong><?= $url1 ?>
    </div>
    <div class="card-body card-block">
        <form action="<?= BASE_URL."app/module/akun/action.php?seleksi=$url1" ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
        <?php
            if($url2 == "Edit"){
        ?>
                <input type="hidden" name="id" value="<?= $id ?>">
        <?php
            }
        ?>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="nama" class=" form-control-label">Nama</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="nama" name="nama" placeholder="Masukan Nama" class="form-control" value="<?= $nama ?>">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email" class=" form-control-label">Email</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="email" id="email" name="email" placeholder="Masukan Email" class="form-control" value="<?= $email ?>">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="username" class=" form-control-label">Username</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="username" name="username" placeholder="Masukan Username" class="form-control" value="<?= $username ?>">
                </div>
            </div>
    <?php
        if($url2 == "Tambah"){
    ?>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="password" class=" form-control-label">Password</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="password" id="password" name="password" placeholder="Masukan Password" class="form-control">
                </div>
            </div>
    <?php
        }
    ?>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="posisi" class=" form-control-label">Posisi</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="posisi" id="posisi" class="form-control">
                        <option disabled selected>Pilih Posisi</option>
                <?php
                    foreach ($posisi as $pos) {
                ?>
                        <option value="<?= $pos['id_jabatan'] ?>" <?php if($pos['id_jabatan'] == $posisi_staff){ ?> selected <?php } ?> ><?= $pos['jabatan'] ?></option>     
                <?php
                    }
                ?>
                    </select>
                </div>
            </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm" name="button" value="<?= $url2 ?>">
            <i class="fa fa-dot-circle-o"></i> <?= $url2 ?>
        </button>
    </div>
    </form>
</div>
<?php
    }
?>