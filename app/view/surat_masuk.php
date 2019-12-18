<?php
    include_once 'app/module/surat masuk/surat_masuk.php'
?>

<div class="row">
    <div class="col-md-12">
        <h3 class="title-5 m-b-35">Data Surat Masuk</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <a class="au-btn au-btn-icon au-btn--green au-btn--small m-b-35" href="<?= BASE_URL."form_surat_masuk/Tambah" ?>">
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
                    <th>No Surat</th>
                    <th>Perihal</th>
                    <th>Sifat</th>
                    <th>Asal Surat</th>
                    <th>Tanggal Surat</th>
                    <th>File Surat</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($data_surat_masuk as $row){
            ?>
                    <tr>
                        <td><?= $row["no_surat"] ?></td>
                        <td><?= $row["perihal"] ?></td>
                        <td><?= $row["sifat"] ?></td>
                        <td><?= $row["asal_surat"] ?></td>
                        <td><?= $row["tgl_surat"] ?></td>
                        <td><a class="btn btn-primary btn-sm" target="_blank" href="<?= BASE_URL."app/dir/surat masuk/$row[file_surat]" ?>"><i class="fas fa-eye"></i></a></td>
                        <td><?= $row["keterangan"] ?></td>
                        <td>
                    <?php
                        if($jabatan_login == "SUBBAG Umum & Kepegawaian"){
                    ?>
                            <a class="btn btn-primary btn-sm" href="<?= BASE_URL."form_surat_masuk/Edit/$row[id_surat_masuk]" ?>">Edit</a>
                    <?php
                        }
                    ?>
                    <?php
                        if($jabatan_login == "Kepala Dinas Pendidikan"){
                            $disId = mysqli_query($koneksi, "SELECT id_surat_masuk FROM disposisi WHERE id_surat_masuk='$row[id_surat_masuk]'");
                            $numDisid = mysqli_num_rows($disId);
                            if($numDisid == 0){
                    ?>
                                <a class="btn btn-primary btn-sm" href="<?= BASE_URL."form_disposisi/Tambah/$row[id_surat_masuk]" ?>">Disposisi</a>
                    <?php
                            }
                        }
                    ?>
                        </td>
                    </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</div>