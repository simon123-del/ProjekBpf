<h1>Tambah Masjid</h1>
<div class="card">
    <div class="card-header">
        <a href="<?=base_url()?>masjid" class="btn btn-primary">Kembali</a>
    </div>
    <div class="card-body">
        <form action="<?=base_url()?>masjid/store" method="post">
            <div class="form-group">
                <label for="nama">Nama Masjid</label>
                <input type="text" class="form-control" name="nama_masjid" id="nama">
            </div>
            
            <div class="form-group">
                <label for="nama">Alamat Masjid</label>
                <input type="text" class="form-control" name="alamat_masjid" id="alamat">
            </div>
            <div class="form-group">
                <label for="nama">Luas Masjid</label>
                <input type="number" class="form-control" name="luas_masjid" id="luas">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>