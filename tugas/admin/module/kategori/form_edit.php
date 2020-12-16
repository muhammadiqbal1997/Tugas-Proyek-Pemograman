<div class="main-content">
        <section class="section">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Edit kategori</h4>
                  <div class="card-header-action">
                  </div>
                  &nbsp;
                  &nbsp;
                  <div class="card-header-action">
                  </div>
                </div>
                <?php
                    include "../lib/koneksi.php";
                    $id_kategori=$_GET['id'];
                    $sql = "SELECT * FROM `tbl_kategori` WHERE id_kategori='$id_kategori'";
                    $result = mysqli_query($koneksi, $sql);
                    $data = mysqli_fetch_assoc($result);
                    
                  ?>
                <div class="card">
                  <div class="card-body">
                  <form action='module/kategori/aksi_edit.php' method="post">
                  <input type="hidden" name="id_kategori" value="<?php echo $data['id_kategori']; ?>">
                  <div class="form-group">
                      <label>Nama Kategori</label>
                      <input type="text" class="form-control" name="nama_kategori" value="<?php echo $data['nama_kategori']; ?>">
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
      

