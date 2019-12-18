<?php
    include_once 'app/module/disposisi/disposisi.php';
?>

<div class="card">
    <div class="card-header">
        <strong>Kelola disposisi</strong>
    </div>
    <div class="card-body card-block">
        <form action="<?= BASE_URL."app/module/disposisi/action.php" ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
        <?php
        if($url1 == "Edit"){
        ?>
                <input type="hidden" name="id_disposisi" value="<?= $id_disposisi ?>">
        <?php
            }
        ?>
            <input type="hidden" name="id_surat_masuk" value="<?= $id_surat_masuk ?>">

            <div class="row form-group">
                <div class="col col-md-3">
                    <label class=" form-control-label">File Surat Masuk</label>
                </div>
                <div class="col-12 col-md-9">
                    <a class="btn btn-primary btn-sm" href="<?= BASE_URL."app/dir/surat masuk/$file[file_surat]" ?>" target="_blank">Lihat</a>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="no_index" class=" form-control-label">Nomor Index</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="no_index" name="no_index" placeholder="Masukan Nomor Surat" class="form-control" value="<?= $no_index ?>">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="tgl_penyelesaian" class=" form-control-label">Tanggal Penyelesaian</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" id="tgl_penyelesaian" name="tgl_penyelesaian" class="form-control" value="<?= $tgl_penyelesaian ?>">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="intruksi" class=" form-control-label">Intruksi</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="intruksi" id="intruksi" rows="9" placeholder="Masukan Ketrangan Surat" class="form-control"><?= $intruksi ?></textarea>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="teruskan" class=" form-control-label">Diteruskan</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="teruskan" id="teruskan" class="form-control">
                        <option disabled selected>Teruskan ke</option>
                <?php
                    foreach($teruskan_ke as $row){
                ?>
                        <option value="<?= $row['id_akun'] ?>" <?php if($row['id_akun'] == $id_akun){ ?> selected <?php } ?> ><?= $row['jabatan'] ?></option>
                <?php
                    }
                ?>
                    </select>
                </div>
            </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm" name="button" value="<?= $url1 ?>">
            <i class="fa fa-dot-circle-o"></i> <?= $url1 ?>
        </button>
        </form>
    </div>
</div>