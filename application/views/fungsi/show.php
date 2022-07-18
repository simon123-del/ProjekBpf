<h1>Lihat Masjid</h1>
<div class="card">
    <div class="card-header">
        <a href="<?=base_url()?>masjid" class="btn btn-primary">Kembali</a>
    </div>
    <div class="card-body">
        <form action="<?=base_url()?>masjid/store" method="post">
            <div class="form-group">
                <label for="nama">Nama Masjid</label>
                <input type="hidden" name="id_masjid" value="<?=$masjid->id_masjid?>">
                <input type="text" class="form-control" name="nama_masjid" id="nama" value="<?=$masjid->nama_masjid?>" disabled>
            </div>
            <div class="form-group">
                <label for="stok">Alamat Masjid</label>
                <input type="text" class="form-control" name="alamat_masjid" id="jenis_kelamin" value="<?=$masjid->alamat_masjid?>" disabled>
            </div>
            <div class="form-group">
                <label for="stok">Luas Masjid</label>
                <input type="text" class="form-control" name="luas_masjid" id="tanggal_lahir" value="<?=$masjid->luas_masjid?>" disabled>
            </div>
        </form>
    </div>
</div>