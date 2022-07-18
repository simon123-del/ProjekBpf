<h1>Tambah Harga</h1>
<div class="card">
    <div class="card-header">
        <a href="<?=base_url()?>pernikahan" class="btn btn-primary">Kembali</a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Harga
    </div>
    <div class="card-body">
        <form action="<?=base_url()?>pernikahan/store" method="post">
            
            <div class="form-group">
                <label for="id_pengantin">PKS</label>
                <select name="id_pengantin1" id="id_pengantin1" class="form-control">
                    <?php foreach($semua_pengantin_pria->result() as $pengantin_pria):?>
                        <option value="<?=$pengantin_pria->id_pengantin?>"><?=$pengantin_pria->nama?></option>
                    <?php endforeach?>
                </select>
            </div>

            <div class="form-group">
                <label for="id_pengantin">Harga</label>
                <select name="id_pengantin2" id="id_pengantin2" class="form-control">
                    <?php foreach($semua_pengantin_wanita->result() as $pengantin_wanita):?>
                        <option value="<?=$pengantin_wanita->id_pengantin?>"><?=$pengantin_wanita->nama?></option>
                    <?php endforeach?>
                </select>
            </div>
            
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" name="tanggal_pernikahan" id="tanggal_pernikahan" required>
            </div>
            
            <div class="form-group">
                <label for="tanggal">Penginput</label>
                <input type="text" class="form-control" name="pemohon" id="pemohon" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>