<h1>Ubah Wakaf</h1>
<div class="card">
    <div class="card-header">
        <a href="<?=base_url()?>wakaf" class="btn btn-primary">Kembali</a>
    </div>
    <div class="card-body">
        <form action="<?=base_url('wakaf/update/'.$wakaf->id_wakaf)?>" method="post">
            <div class="form-group">
                <label for="nama">Nama wakaf</label>
                <input type="hidden" name="id_wakaf" value="<?=$wakaf->id_wakaf?>">
                <input type="text" class="form-control" name="nama" id="nama" value="<?=$wakaf->nama?>">
            </div>
            <div class="form-group">
                <label for="nama">Tujuan Wakaf</label>
                <input type="text" class="form-control" name="tujuan_wakaf" id="tujuan" value="<?=$wakaf->tujuan_wakaf?>">
            </div>

            <div class="form-group">
                <label for="nama">Kategori</label>
                <input type="text" class="form-control" name="kategori" id="kategori" value="<?=$wakaf->kategori?>">
            </div>

            <div class="form-group">
                <label for="nama">Besaran</label>
                <input type="text" class="form-control" name="besaran" id="besaran" value="<?=$wakaf->besaran?>">
            </div>
            
            <div class="form-group">
                <label for="nama">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="keterangan" value="<?=$wakaf->keterangan?>">
            </div>
            <button type="submit" class="btn btn-primary">ubah</button>
        </form>
    </div>
</div>