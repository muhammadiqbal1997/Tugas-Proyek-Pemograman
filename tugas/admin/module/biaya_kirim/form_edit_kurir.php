<div class="main-content">
        <section class="section">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Edit nama kurir</h4>
                  <div class="card-header-action">
                  </div>
                  &nbsp;
                  &nbsp;
                  <div class="card-header-action">
                  </div>
                </div>
                <?php
                    include "../lib/koneksi.php";
                    $id_kurir=$_GET['id'];
                    $sql = "SELECT * FROM `tbl_kurir` WHERE id_kurir ='$id_kurir'";
                    $result = mysqli_query($koneksi, $sql);
                    $data = mysqli_fetch_assoc($result);
                                        
                  ?>
                <div class="card">
                  <div class="card-body">
                  <form action='module/biaya_kirim/aksi_edit_kurir.php' method="post">
                  <input type="hidden" name="id_kurir" value="<?php echo $data['id_kurir'];?>">
                  <div class="form-group">
                      <label>Nama Kota</label>
                      <input type="text" class="form-control" name="nama_kurir" value="<?php echo $data['nama_kurir'];?>">
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Simpan</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      

