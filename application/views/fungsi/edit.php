<h1>Ubah Masjid</h1>
<div class="card">
    <div class="card-header">
        <a href="<?=base_url()?>masjid" class="btn btn-primary">Kembali</a>
    </div>
    <div class="card-body">
        <form action="<?=base_url('masjid/update/'.$masjid->id_masjid)?>" method="post">
            <div class="form-group">
                <label for="nama">Nama Masjid</label>
                <input type="hidden" name="id_masjid" value="<?=$masjid->id_masjid?>">
                <input type="text" class="form-control" name="nama_masjid" id="nama_masjid" value="<?=$masjid->nama_masjid?>">
            </div>
            <div class="form-group">
                <label for="nama">Alamat Masjid</label>
                <input type="text" class="form-control" name="alamat_masjid" id="alamat" value="<?=$masjid->alamat_masjid?>">
            </div>
            
            <div class="form-group">
                <label for="nama">Luas Masjid</label>
                <input type="number" class="form-control" name="luas_masjid" id="luas" value="<?=$masjid->luas_masjid?>">
            </div>
            <button type="submit" class="btn btn-primary">ubah</button>
        </form>
    </div>
</div>