<div class="card">
    <div class="card-header">
        <a href="<?=base_url('pernikahan/create')?>" class="btn btn-success">Tambah Pernikahan</a>
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
            <label class="form-label">Tanggal Akhir</label>
            <div class="form-group">
                <div class="form-line">
                    <input type="date" id="max" name="max" class="form-control">
                </div>
            </div>

        </div>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-bordered table-striped table-hover dataTable "> <!-- js-exportable -->
        <thead>
        <tr>
            <th>No</th>
            <th>Penginput</th>
            <th>PKS</th>
            <th>Harga</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>            
        <?php 
            $no = 0;
            $counter = 0;
        ?>
            <?php foreach($pernikahan_pernikahan->result() as $pernikahan):?>
                <tr>
                    <td><?=++$no?></td>
                    <td><?=$pernikahan->pemohon?></td>
                    <td><?=$pengantinnya[$counter++]['nama']?></td>
                    <td><?=$pengantinnya[$counter++]['nama']?></td>
                    <td><?=$pernikahan->tanggal_pernikahan?></td>
                    <td>
                        <a href="<?=base_url('pernikahan/show/'.$pernikahan->id_pernikahan)?>" class="btn btn-info">Lihat</a>
                        <?php if($this->session->admin == 'admin'):?>
                        <a href="<?=base_url('pernikahan/destroy/'.$pernikahan->id_pernikahan)?>" class="btn btn-danger">Hapus</a>
                        <?php if($pernikahan->acc == 1):?>  
                                Sudah di Sah-kan
                        <?php else:?>
                                Belum di Sah-kan
                        <?php endif?>
                        <?php else:?>
                            <?php if($pernikahan->acc == 0):?>
                                <a onclick="confirm('Apakah Anda Yakin?')" href="<?=base_url('pernikahan/acc/'.$pernikahan->id_pernikahan)?>" class="btn btn-success">Sah-kan</a>
                            <?php else:?>
                                Sudah di Sah-kan
                            <?php endif?>
                        <?php endif?>
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