<div class="card">
    <div class="card-header">
        <a href="<?=base_url('wakaf/create')?>" class="btn btn-success">Tambah Wakaf</a>
    </div>
    <div class="card-body table-responsive" id='untuk-print'>
        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Wakaf</th>
            <th>Tujuan Wakaf</th>
            <th>Kategori</th>
            <th>Besaran</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php $no = 0?>
            <?php foreach($wakaf_wakaf->result() as $wakaf):?>
                <tr>
                    <td><?=++$no?></td>
                    <td><?=$wakaf->nama?></td>
                    <td><?=$wakaf->tujuan_wakaf?></td>
                    <td><?=$wakaf->kategori?></td>
                    <td><?=$wakaf->besaran?></td>
                    <td><?=$wakaf->keterangan?></td>
                    <td>
                        <a href="<?=base_url('wakaf/show/'.$wakaf->id_wakaf)?>" class="btn btn-info">Lihat</a>
                        <a href="<?=base_url('wakaf/edit/'.$wakaf->id_wakaf)?>" class="btn btn-primary">Ubah</a>
                        <a href="<?=base_url('wakaf/destroy/'.$wakaf->id_wakaf)?>" class="btn btn-danger">Hapus</a>
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

