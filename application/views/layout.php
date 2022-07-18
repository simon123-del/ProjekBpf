<!doctype html>
<html lang="en">

<head>
	<title>Aplikasi Sawit</title>
	<link rel="stylesheet" href="<?=base_url('assets/plugins/bootstrap-select/css/bootstrap-select.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')?>">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/dashboard.css">
	<style>
		.table-responsive {
			overflow-x: initial;
		}
	</style>
	<script src="<?=base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
</head>

<body>
	<nav class="navbar navbar-dark fixed-top bg-success flex-md-nowrap p-0 shadow">
		<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Aplikasi Sawit</a>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<nav id="navigation" class="col-md-2 d-none d-md-block bg-success sidebar">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link text-white" href="<?=base_url()?>">
								Beranda
							</a>
						</li>
						<?php if ($this->session->admin == 'admin'): ?>
						<li class="nav-item">
							<a class="nav-link text-white" href="<?=base_url('pengantin')?>">
								PKS
							</a>
						</li>
						<?php endif?>
						<li class="nav-item">
							<a class="nav-link text-white" href="<?=base_url('pernikahan')?>">
								Harga
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="<?=base_url('logout')?>">
								Keluar
							</a>
						</li>
						
					</ul>
				</div>
			</nav>
			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
				<?php if($this->session->pesan):?>
					<div class="card">
						<div class="card-body bg-default">
							<?=$this->session->pesan?>
						</div>
					</div>
				<?php endif?>
				<!-------------------------------------------------------------------------------------->
				<!-------------------------------------------------------------------------------------->
				<!-------------------------------------------------------------------------------------->
				<!-------------------------------------------------------------------------------------->
				<!-------------------------------------------------------------------------------------->
				<?php $this->load->view($view)?>
				<!-------------------------------------------------------------------------------------->
				<!-------------------------------------------------------------------------------------->
				<!-------------------------------------------------------------------------------------->
				<!-------------------------------------------------------------------------------------->
				<!-------------------------------------------------------------------------------------->
			</main>
		</div>
	</div>
</body>

</html>
