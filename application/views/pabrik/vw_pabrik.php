

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><?php echo $judul; ?></h4>
              <div class="float-right"><a href="<?= base_url() ?>Pabrik/tambah" class="btn btn-info mb-2">Tambah Pabrik</a></div>

<!-- Basic Bootstrap Table -->
<div class="card">
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead> <tr>
                        <td>No </td>
                        <td>Gambar</td>
                        <td>Nama Pabrik</td>
                        <td>Jumlah Produksi/Hari</td>
                        <td>Harga</td>
                        <td>Alamat</td>
                        <td>Action</td>
                    </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <?php $i = 1; ?>
                <?php foreach ($pabrik as $us): ?>
                    <tr>
                        <td><?= $i; ?>.</td>
                        <td>
                            <img src="<?= base_url('assets/img/sepatu/').$us['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                        </td>
                        <td><?= $us['nama']; ?></td>
                        <td><?= $us['stok']; ?></td>
                        <td><?= $us['harga']; ?></td>
                        <td><?= $us['ukuran']; ?></td>
                        <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?= base_url('Pabrik/edit/') . $us['id']; ?>" ><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="<?= base_url('Pabrik/hapus/') . $us['id']; ?>"><i class="bx bx-trash me-2"></i> Delete</a>
              </div>
            </div>
          </td>
                    </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->
            </div>
            <!-- / Content -->
