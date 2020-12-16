<div class="main-content">
        <section class="section">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Edit nama kota</h4>
                  <div class="card-header-action">
                  </div>
                  &nbsp;
                  &nbsp;
                  <div class="card-header-action">
                  </div>
                </div>
                <?php
                    include "../lib/koneksi.php";
                    $id_kota=$_GET['id'];
                    $sql = "SELECT * FROM `tbl_kota` WHERE id_kota ='$id_kota'";
                    $result = mysqli_query($koneksi, $sql);
                    $data = mysqli_fetch_assoc($result);
                                        
                  ?>
                <div class="card">
                  <div class="card-body">
                  <form action='module/biaya_kirim/aksi_edit_kota.php' method="post">
                  <input type="hidden" name="id_kota" value="<?php echo $data['id_kota'];?>">
                  <div class="form-group">
                      <label>Nama Kota</label>
                      <input type="text" class="form-control" name="nama_kota" value="<?php echo $data['nama_kota'];?>">
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
      

