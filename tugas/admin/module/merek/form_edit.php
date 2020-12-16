<div class="main-content">
        <section class="section">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Edit merek</h4>
                  <div class="card-header-action">
                  </div>
                  &nbsp;
                  &nbsp;
                  <div class="card-header-action">
                  </div>
                </div>
                <?php
                    include "../lib/koneksi.php";
                    $id_merek=$_GET['id'];
                    $sql = "SELECT * FROM `tbl_merek` WHERE id_merek='$id_merek'";
                    $result = mysqli_query($koneksi, $sql);
                    $data = mysqli_fetch_assoc($result);
                    
                  ?>
                <div class="card">
                  <div class="card-body">
                  <form action='module/merek/aksi_edit.php' method="post">
                  <input type="hidden" name="id_merek" value="<?php echo $data['id_merek']; ?>">
                  <div class="form-group">
                      <label>Nama Merek</label>
                      <input type="text" class="form-control" name="nama_merek" value="<?php echo $data['nama_merek']; ?>">
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
      

