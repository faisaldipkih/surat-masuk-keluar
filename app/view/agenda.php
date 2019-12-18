<?php
    include_once 'app/module/agenda/agenda.php'
?>

<div class="row">
    <div class="col-md-12">
        <h3 class="title-5 m-b-35">Agenda</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table id="data" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Jabatan</th>
                    <th>Kegiatan</th>
                    <th>Tanggal Pelaksanaan</th>
                    <th>Pembukaan</th>
                    <th>Tempat Pelaksanaan</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($agenda as $row){
            ?>
                    <tr>
                        <td><?= $row["nama"] ?></td>
                        <td><?= $row["NIP"] ?></td>
                        <td><?= $row["jabatan"] ?></td>
                        <td><?= $row["untuk"] ?></td>
                        <td><?= $row["tgl_pelaksanaan"] ?></td>
                        <td><?= $row["pembukaan"] ?></td>
                        <td><?= $row["tempat_pelaksanaan"] ?></td>
                    </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</div>