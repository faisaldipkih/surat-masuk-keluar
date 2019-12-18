<?php
    include_once 'app/module/disposisi/disposisi.php'
?>

<div class="row">
    <div class="col-md-12">
        <h3 class="title-5 m-b-35">Data Disposisi</h3>
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
                    <th>No Index</th>
                    <th>Tanggal Penyelesaian</th>
                    <th>Intruksi</th>
                    <th>Diteruskan</th>
                    <th>File Surat</th>
            <?php
                if($jabatan_login == "Kepala Dinas Pendidikan"){
            ?>
                    <th>Action</th>
            <?php
                }
            ?>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($disposisi as $row){
            ?>
                    <tr>
                        <td><?= $row["no_index"] ?></td>
                        <td><?= $row["tgl_penyelesaian"] ?></td>
                        <td><?= $row["intruksi"] ?></td>
                        <td><?= $row["jabatan"] ?></td>
                        <td><a class="btn btn-primary btn-sm" target="_blank" href="<?= BASE_URL."app/dir/surat masuk/$row[file_surat]" ?>"><i class="fas fa-eye"></i></a></td>
                <?php
                    if($jabatan_login == "Kepala Dinas Pendidikan"){
                ?>
                        <td><a class="btn btn-primary btn-sm" href="<?= BASE_URL."form_disposisi/Edit/$row[id_disposisi]" ?>">Edit</a></td>
                <?php
                    }
                ?>
                    </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</div>