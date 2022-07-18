<h1>Ubah PKS</h1>
<div class="card">
    <div class="card-header">
        <a href="<?=base_url()?>pengantin" class="btn btn-primary">Kembali</a>
    </div>
    <div class="card-body">
        <form action="<?=base_url('pengantin/update/'.$pengantin->id_pengantin)?>" method="post">

            <div class="form-group">
                <label for="nama">No Izin Perusahaan</label>
                <input type="number" class="form-control" name="nik" id="nik" value="<?=$pengantin->nik?>">
            </div>

            <div class="form-group">
                <label for="nama">Nama PKS</label>
                <input type="hidden" name="id_pengantin" value="<?=$pengantin->id_pengantin?>">
                <input type="text" class="form-control" name="nama" id="nama" value="<?=$pengantin->nama?>">
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal</label>
                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?=$pengantin->tanggal_lahir?>">
            </div>

            <div class="form-group">
                <label for="nama">Jenis Roling</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                    <option value="<?=$pengantin->jenis_kelamin?>" selected>Tidak Merubah Kategori</option>
                    <option value="pria" selected>Besar</option>
                    <option value="wanita" selected>Kecil</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nama">Agama</label>
                <select class="form-control" name="agama" id="agama">
                    <option value="<?=$pengantin->agama?>" selected>Tidak Merubah Agama</option>
                    <option value="Islam" selected>Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik" >Katholik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="nama">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" value="<?=$pengantin->alamat?>">
            </div>

            <div class="form-group">
                <label for="nama">Kewarganegaraan</label>
                <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" value="<?=$pengantin->kewarganegaraan?>">
            </div>

            <div class="form-group">
                <label for="nama">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="<?=$pengantin->pekerjaan?>">
            </div>
            <button type="submit" class="btn btn-primary">ubah</button>
        </form>
    </div>
</div>