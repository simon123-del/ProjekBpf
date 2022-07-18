<h1>Tambah PKS</h1>
<div class="card">
    <div class="card-header">
        <a href="<?=base_url()?>pengantin" class="btn btn-primary">Kembali</a>
    </div>
    <div class="card-body">
        <form action="<?=base_url()?>pengantin/store" method="post">    
            
        
            <div class="form-group">
                <label for="nama">Izin Perusahaan</label>
                <input type="number" class="form-control" name="nik" id="nik">
            </div>

            <div class="form-group">
                <label for="nama">Nama PKS</label>
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
            
            
            <div class="form-group">
                <label for="nama">Tanggal</label>
                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
            </div>

            <div class="form-group">
                <label for="nama">Jenis PKS</label>
                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                    <option value="pria" selected>Besar</option>
                    <option value="wanita">Kecil</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="nama">Agama</label>
                <select class="form-control" name="agama" id="agama">
                    <option value="Islam" selected>Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik" >Katholik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nama">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat">
            </div>

            <div class="form-group">
                <label for="nama">Kewarganegaraan</label>
                <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan">
            </div>

            <div class="form-group">
                <label for="nama">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan">
            </div>

            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>