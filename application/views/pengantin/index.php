<div class="card">
    <div class="card-header">
        <a href="<?=base_url('pengantin/create')?>" class="btn btn-success">Tambah Pengantin</a>
    </div>
    <div class="container">
        <div class="col-md-12">
            <h3>Saring data menurut tanggal</h3>
            <label class="form-label">Tanggal Awal</label>
            <div class="form-group">
                <div class="form-line">
                    <input type="date" id="min" name="min" class="form-control">
                </div>
            </div>
            <label class="form-label">Tanggal </label>
            <div class="form-group">
                <div class="form-line">
                    <input type="date" id="max" name="max" class="form-control">
                </div>
            </div>

        </div>
    </div>
    <div class="card-body table-responsive" id='untuk-print'>
        <table class="table table-bordered table-striped table-hover dataTable "> <!-- js-exportable -->
            <thead>
            <tr>
                <th>No</th>
                <th>Nama PKS</th>
                <th>Jenis </th>
                <th>Tanggal </th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            
            <?php $no = 0?>
            <?php foreach($pengantin_pengantin->result() as $pengantin):?>
                <tr>
                    <td><?=++$no?></td>
                    <td><?=$pengantin->nama?></td>
                    <td><?=$pengantin->jenis_kelamin?></td>
                    <td><?=$pengantin->tanggal_lahir?></td>
                    <td>
                        <a href="<?=base_url('pengantin/show/'.$pengantin->id_pengantin)?>" class="btn btn-info">Lihat</a>
                        <a href="<?=base_url('pengantin/edit/'.$pengantin->id_pengantin)?>" class="btn btn-primary">Ubah</a>
                        <a href="<?=base_url('pengantin/destroy/'.$pengantin->id_pengantin)?>" class="btn btn-danger">Hapus</a>
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
<script src="<?=base_url('assets/js/manufacture-report.js')?>"></script>