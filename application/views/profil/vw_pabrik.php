          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><?php echo $judul; ?></h4>
<div class="row">
        <div class="col-md-12">
            <?= $this->session->flashdata('message'); 
            ?>
            <div>
                <?php $i = 1; ?>
                <?php foreach($pabrik as $us) : ?>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div><?= $us['nama'] ?></div>
                                        <div class="tetxt-xs font-weight-bold text-gray-800">Rp.<?= $us['harga'] ?></div>
                                        <div>Jumlah Produksi/Hari
                                            <a class="badge badge-info"><?= $us['stok'] ?></a>
                                        </div>
                                        <div class="col-auto">
                                            <img src="<?= base_url('assets/img/sepatu/').$us['gambar'];?>" style="width:100px" class="img-thumbnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->