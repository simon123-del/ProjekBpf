          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><?php echo $judul; ?></h4>
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Edit Data Pabrik
            </div>

            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $pabrik['id']; ?>">
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <div class="custom-file">
                            <label for="gambar" class="custom-file-label">Choose File</label>
                            <input type="file" class="custom-file-input" name="gambar" id="gambar" value="<?= $pabrik['gambar']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="nama">Nama Pabrik</label>
                    <input type="text" name="nama" value="<?= $pabrik['nama']; ?>" class="form-control" id="nama" placeholder="Nama Pabrik">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="stok">Jumlah Produksi/Hari</label>
                        <input type="text" name="stok" value="<?= $pabrik['stok']; ?>" class="form-control" id="stok" placeholder="Jumlah Produksi/Hari">
                        <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" value="<?= $pabrik['harga']; ?>" class="form-control" id="harga" placeholder="Harga">
                        <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="ukuran">Alamat</label>
                        <input type="text" name="ukuran" value="<?= $pabrik['ukuran']; ?>" class="form-control" id="ukuran" placeholder="Alamat">
                        <?= form_error('ukuran', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" value="<?= $pabrik['keterangan']; ?>" class="form-control" id="keterangan" placeholder="Keterangan">
                        <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <br>
                    <br>
                    <a href="<?= base_url('pabrik') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="ubah" class="btn btn-primary float-right">Edit Pabrik</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>