<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Tambah Data Prodi
            </div>

            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="nama">Nama Prodi</label>
                    <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control" id="nama" placeholder="Nama Prodi">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="ruangan">Ruangan</label>
                        <input type="text" name="ruangan" value="<?= set_value('ruangan'); ?>" class="form-control" id="ruangan" placeholder="Ruangan">
                        <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control" value="<?= set_value('jurusan'); ?>">
                            <option value="">Pilih Jurusan</option>
                            <option value="JTI">JTI</option>
                            <option value="JTIN">JTIN</option>
                            <option value="Akuntansi">Akuntansi</option>
                        </select>
                        <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="akreditasi">Akreditasi</label>
                        <input type="text" name="akreditasi" value="<?= set_value('akreditasi'); ?>" class="form-control" id="akreditasi" placeholder="Akreditasi">
                        <?= form_error('akreditasi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama_kaprodi">Nama Kaprodi</label>
                        <input type="text" name="nama_kaprodi" value="<?= set_value('nama_kaprodi'); ?>" class="form-control" id="nama_kaprodi" placeholder="Nama Kaprodi">
                        <?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="tahun_berdiri">Tahun Berdiri</label>
                        <input type="text" name="tahun_berdiri" value="<?= set_value('tahun_berdiri'); ?>" class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri">
                        <?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="output_lulusan">Output Lulusan</label>
                        <input type="text" name="output_lulusan" value="<?= set_value('output_lulusan'); ?>" class="form-control" id="output_lulusan" placeholder="Output Lulusan">
                        <?= form_error('output_lulusan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <div class="custom-file">
                            <label for="gambar" class="custom-file-label">Choose File</label>
                            <input type="file" class="custom-file-input" name="gambar" id="gambar" value="<?= set_value('gambar'); ?>">
                        </div>
                    </div>
                    <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Prodi</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->