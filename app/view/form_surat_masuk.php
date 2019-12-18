<?php
    include_once 'app/module/surat masuk/surat_masuk.php';
?>

<div class="card">
    <div class="card-header">
        <strong>Kelola Surat Masuk</strong>
    </div>
    <div class="card-body card-block">
        <form action="<?= BASE_URL."app/module/surat masuk/action.php" ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
        <?php
        if($url1 == "Edit"){
        ?>
                <input type="hidden" name="id" value="<?= $id ?>">
        <?php
            }
        ?>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="nomor_surat" class=" form-control-label">Nomor Surat</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="nomor_surat" name="nomor_surat" placeholder="Masukan Nomor Surat" class="form-control" value="<?= $no_surat ?>">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="perihal" class=" form-control-label">Perihal</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="perihal" name="perihal" placeholder="Masukan Perihal Surat" class="form-control" value="<?= $perihal ?>">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label class=" form-control-label">Sifat</label>
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
                    <label for="asal_surat" class=" form-control-label">Asal Surat</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="asal_surat" name="asal_surat" placeholder="Masukan Asal Surat" class="form-control" value="<?= $asal_surat ?>">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="tgl_surat" class=" form-control-label">Tanggal Surat</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" id="tgl_surat" name="tgl_surat" class="form-control" value="<?= $tgl_surat ?>">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file_surat" class=" form-control-label">File Surat</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="file_surat" name="file_surat" class="form-control-file" <?= $file_surat ?> >
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="keterangan" class=" form-control-label">Ketrangan Surat</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="keterangan" id="keterangan" rows="9" placeholder="Masukan Ketrangan Surat" class="form-control"><?= $keterangan ?></textarea>
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