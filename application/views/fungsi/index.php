<div class="card">
    <div class="card-header">
        <a href="<?=base_url('masjid/create')?>" class="btn btn-success">Tambah Masjid</a>
    </div>
    <div class="card-body table-responsive" id='untuk-print'>
        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Masjid</th>
            <th>Alamat Masjid</th>
            <th>Luas Masjid</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php $no = 0?>
            <?php foreach($masjid_masjid->result() as $masjid):?>
                <tr>
                    <td><?=++$no?></td>
                    <td><?=$masjid->nama_masjid?></td>
                    <td><?=$masjid->alamat_masjid?></td>
                    <td><?=$masjid->luas_masjid?></td>
                    <td>
                        <a href="<?=base_url('masjid/show/'.$masjid->id_masjid)?>" class="btn btn-info">Lihat</a>
                        <a href="<?=base_url('masjid/edit/'.$masjid->id_masjid)?>" class="btn btn-primary">Ubah</a>
                        <a href="<?=base_url('masjid/destroy/'.$masjid->id_masjid)?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach?>
        </tbody>
        </table>
    </div>
</div>



<script src="<?=base_url('assets/plugins/jquery-datatable/jquery.dataTables.js')?>"></script>
<script src="<?=base_url('assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')?>"></script>
<script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/jszip.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js')?>"></script>
<script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery-datatable.js')?>"></script>
<script src="<?=base_url('assets/js/pernikahan-report.js')?>"></script>
