
<div class="main-content">
        <section class="section">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Menu Kota</h4>
                  <div class="card-header-action">
                  </div>
                  &nbsp;
                  &nbsp;
                  <div class="card-header-action">
                    <a href="dashboard.php?module=tambah_biaya" class="btn btn-success">Tambah biaya <i class="fas fa-plus"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                  <?php 
                  $sql = "SELECT b.id_biaya_kirim, k.nama_kota, j.nama_kurir, b.biaya 
                  FROM tbl_kota k, tbl_kurir j, tbl_biaya_kirim b 
                  WHERE b.id_kota=k.id_kota AND b.id_kurir=j.id_kurir";
                  $q = mysqli_query($koneksi, $sql);
                  ?>
                    <table class="table table-striped">
                      <thead>
                      <tr>
                        <th>Kota Tujuan</th>
                        <th>Kurir</th>
                        <th>Biaya</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <?php while( $data= mysqli_fetch_array($q)){  ?>
                      <tr>
                        <td class="font-weight-600"><?php echo $data['nama_kota']; ?></td>
                        <td class="font-weight-600"><?php echo $data['nama_kurir']; ?></td>
                        <td class="font-weight-600"><?php echo $data['biaya']; ?></td>
                        <td>
                        <a href="dashboard.php?module=edit_biaya&id=<?php echo $data['id_biaya_kirim']; ?>" class="btn btn-icon btn-primary"><i class="fas fa-pencil-alt"></i></a>
                        <a href="module/biaya_kirim/aksi_hapus.php?id=<?php echo $data['id_biaya_kirim']; ?>" class="btn btn-icon btn-danger" onclick="return confirm('yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      <?php } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      

