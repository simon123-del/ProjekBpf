<h1>Detail Pengantin</h1>
<div class="card">
    <div class="card-header">
        <a href="<?=base_url()?>pengantin" class="btn btn-primary">Kembali</a>
        <a onclick="printtabel()" class="btn btn-primary">Cetak</a>
    </div>
    <div class="card-body" id="untuk-print">
    <div class="container">
    <hr>
		<div class="row">
			<div class="col-md-4">
				<table class="table">
					<tr>
						<td>No</td>
						<td>:</td>
						<td>56/XI</td>
					</tr>
					<tr>
						<td>Perihal</td>
						<td>:</td>
						<td>Pendaftaran pengantin</td>
					</tr>
				</table>
			</div>
            <div class="col-md-6">
            <table class="table">
            <tr>17 Desember 2019</tr>
            </table>
            </div>
		</div>
        </div>
        <form action="<?=base_url()?>pengantin/store" method="post">
            
        <div class="form-group">
                <label for="nama">NIK</label>
                <input disabled type="number" class="form-control" name="nik" id="nik" value="<?=$pengantin->nik?>">
            </div>

            <div class="form-group">
                <label for="nama">Nama pengantin</label>
                <input type="hidden" name="id_pengantin" value="<?=$pengantin->id_pengantin?>">
                <input disabled type="text" class="form-control" name="nama" id="nama" value="<?=$pengantin->nama?>">
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input disabled type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?=$pengantin->tanggal_lahir?>">
            </div>

            <div class="form-group">
                <label for="nama">Jenis </label>
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
                <input disabled type="text" class="form-control" name="alamat" id="alamat" value="<?=$pengantin->alamat?>">
            </div>

            <div class="form-group">
                <label for="nama">Kewarganegaraan</label>
                <input disabled type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" value="<?=$pengantin->kewarganegaraan?>">
            </div>

            <div class="form-group">
                <label for="nama">Jumlah pertahun</label>
                <input disabled type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="<?=$pengantin->pekerjaan?>">
            </div>
        </form>
    </div>
</div>
<script>
function printtabel(){
    var head = document.getElementsByTagName('head')[0]; // mengambil elemen head untuk mengaktifkan css
    var elem = document.getElementById('untuk-print'); // mengambil bagian untuk di print
    var doc = window.open(); // membuka tab browser baru
    doc.document.write('<head>'+head.innerHTML+'</head>'); //menuliskan elemen head pada tab baru
    doc.document.write('<img src="<?=base_url('assets/kop-surat.png')?>">'); //menambahkan gambar header
    doc.document.write(elem.innerHTML); //menuliskan bagian untuk di print
    doc.document.write('<img src="<?=base_url('assets/footer-surat.png')?>">');
    doc.print();
}
</script>