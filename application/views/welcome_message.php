<div class="row">
	<div class="col-md-3">
		<div class="card bg-secondary">
			<div class="card-body">
				<h2>Jumlah Pengantin</h2>
				<h5><?=$jumlah_produk?></h5>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card bg-secondary">
			<div class="card-body">
				<h2>Jumlah Pernikahan</h2>
				<h5><?=$jumlah_penjualan?></h5>
			</div>
		</div>
	</div>
</div>
<br>
<!-- Chart JS -->
<div class="row clearfix">
	<!-- Line Chart -->
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>LINE CHART JUMLAH PKS</h2>
			</div>
			<div class="body"><iframe class="chartjs-hidden-iframe" __idm_frm__="917" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
				<canvas id="line_chart_transaksi" height="190" width="381" style="display: block; width: 381px; height: 190px;"></canvas>
			</div>
		</div>
	</div>
	<!-- #END# Line Chart -->
	<!-- Bar Chart -->
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>BAR CHART Harga TBS</h2>
			</div>
			<div class="body"><iframe class="chartjs-hidden-iframe" __idm_frm__="918" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
				<canvas id="bar_chart_stok" height="190" width="381" style="display: block; width: 381px; height: 190px;"></canvas>
			</div>
		</div>
	</div>
	<!-- #END# Bar Chart -->
</div>


<script src="<?=base_url('assets/js/jquery.js')?>"></script>
<script src="<?=base_url('assets/js/Chart.bundle.js')?>"></script>
<script>
	$(function () {
		new Chart(document.getElementById("line_chart_transaksi").getContext("2d"), getChartJs('line'));
		new Chart(document.getElementById("bar_chart_stok").getContext("2d"), getChartJs('bar'));
	});

	function getChartJs(type) {
		var config = null;

		if (type === 'line') {
			config = {
				type: 'line',
				data: {
					labels: [
						<?php foreach($bulan_transaksi as $b): ?>
						'<?=$b->waktu?>',
						<?php endforeach?>
					],
					datasets: [{
						label: "Jumlah Transaksi",
						data: [
						<?php foreach($transaksi_perbulan as $t): ?>
						'<?=$t->jumlah?>',
						<?php endforeach?>
					],
						borderColor: 'rgba(0, 188, 212, 0.75)',
						backgroundColor: 'rgba(0, 188, 212, 0.3)',
						pointBorderColor: 'rgba(0, 188, 212, 0)',
						pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
						pointBorderWidth: 1
					}]
				},
				options: {
					responsive: true,
					legend: false
				}
			}
		}
		else if (type === 'bar') {
			config = {
				type: 'bar',
				data: {
					labels: [
						<?php foreach($produk as $p):?>
							'<?=$p->nama?>',
						<?php endforeach?>
					],
					datasets: [{
						label: "Jumlah Stok",
						data: [
							<?php foreach($produk as $p):?>
							'<?=$p->stok?>',
							<?php endforeach?>
						],
						backgroundColor: 'rgba(0, 188, 212, 0.8)'
					}],
				},
				options: {
					responsive: true,
					legend: false
				}
			}
		}
		return config;
	}
</script>