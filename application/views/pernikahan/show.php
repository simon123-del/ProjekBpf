<h1>Lihat Harga</h1>
<div class="card">
    <div class="card-header">
        <a href="<?=base_url()?>pernikahan" class="btn btn-primary">Kembali</a>
        <a onclick="printtabel()" class="btn btn-primary">Cetak</a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Harga
    </div>
    <div class="card-body" id='untuk-print'>
    <hr>
		<div class="row">
			<div class="col-md-4">
				<table class="table">
					<tr>
						<td>No</td>
						<td>:</td>
						<td>11/XI/19</td>
					</tr>
					<tr>
						<td>Perihal</td>
						<td>:</td>
						<td>Pengajuan Harga</td>
					</tr>
				</table>
			</div>
            <div class="col-md-6">
            <table class="table">
            <tr>Projek BPF 2022</tr>
            </table>
            </div>
		</div>
        <!-- </div> -->
        <form action="<?=base_url()?>pernikahan/store" method="post">
            
             <div class="form-group">
                <label for="id">Id </label>
                <input type="number" class="form-control" name="id" id="id" value="<?=$pernikahan->id_pernikahan?>" disabled required>
            </div>

            <div class="form-group">Penginput</label>
                <input type="text" class="form-control" name="pemohon" id="pemohon" value="<?=$pernikahan->pemohon?>" disabled required>
            </div>
            
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="text" class="form-control" name="tanggal_pernikahan" id="tanggal" value="<?=$pernikahan->tanggal_pernikahan?>" disabled required>
            </div>
            <table class="table table-striped">
                <tr>
                    <th>
                        Nama PKS
                    </th>
                    <th>
                        Alamat
                    </th>
                    <th>
                        Tanggal Berdiri
                    </th>
                    <th>
                        Tanggal saat ini
                    </th>
                </tr>
                <?php foreach($pengantin_pengantin as $pengantin):?>
                <tr>
                    <td>
                        <?=$pengantin->nama?>
                    </td>
                    <td>
                        <?=$pengantin->jenis_kelamin?>
                    </td>
                    <td>
                        <?=$pengantin->tanggal_lahir?>
                    </td>
                    <td>
                        <?=date_diff(date_create($pengantin->tanggal_lahir), date_create($pernikahan->tanggal_pernikahan))->y?>
                    </td>
                </tr>
                <?php endforeach?>
            </table>
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