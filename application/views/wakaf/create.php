<h1>Tambah wakaf</h1>
<div class="card">
    <div class="card-header">
        <a href="<?=base_url()?>wakaf" class="btn btn-primary">Kembali</a>
    </div>
    <div class="card-body">
        <form action="<?=base_url()?>wakaf/store" method="post">
            <div class="form-group">
                <label for="nama">Nama Pewakaf</label>
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
            
            <div class="form-group">
                <label for="nama">Tujuan Wakaf</label>
                <input type="text" class="form-control" name="tujuan_wakaf" id="tujuan">
            </div>

            <div class="form-group">
                <label for="nama">Kategori</label>
                <input type="text" class="form-control" name="kategori" id="kategori">
            </div>

            <div class="form-group">
                <label for="nama">Besaran</label>
                <input type="text" class="form-control" name="besaran" id="besaran">
            </div>
            
            <div class="form-group">
                <label for="nama">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="keterangan">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>