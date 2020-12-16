<div class="main-content">
    <section class="section">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Tambah Produk</h4>
              <div class="card-header-action">
              </div>
              &nbsp;
              &nbsp;
              <div class="card-header-action">
                <a href="dashboard.php?module=produk" class="btn btn-success">Kembali ke data Produk <i class="fas fa-chevron-left"></i></a>
              </div>
            </div>
            <?php
                    include "../lib/koneksi.php";
                    $id_produk = $_GET['id'];
                    $sql = "SELECT * FROM `tbl_produk` WHERE id_produk = '$id_produk'";
                    $result = mysqli_query($koneksi, $sql);
                    $data = mysqli_fetch_assoc($result);
                    
            ?>
            <div class="card">
              <div class="card-body">
              <form action='module/produk/aksi_edit.php' method="post">
                <!-- membawa data dari halaman form tambah -->
                <input type="hidden" name="id_produk" value="<?php echo $data['id_produk'];?>">
                <!-- end -->
                <div class="form-group">
                  <b><label>Nama Produk</label></b>
                  <input type="text" class="form-control" name="nama_produk" value="<?php echo $data['nama_produk'];?>">
                </div>
                <div class="form-group">
                  <b><label>Kategori</label></b>
                    <!-- PHP -->
                    <?php
                        $sql = "SELECT * FROM tbl_kategori";
                        $q = mysqli_query($koneksi, $sql);
                    ?>
                  <select class="form-control" name="id_kategori">
                    <?php while( $data= mysqli_fetch_array($q)){  ?>
                  <option value="<?php echo $data['id_kategori'];?>"><?php echo $data['nama_kategori']?></option>
                    <?php } ?>
                    <!-- PHP end -->
                  </select>
                </div>
               <div class="form-group">
                  <b><label>Harga Produk</label></b>
                  <input type="text" class="form-control" name="harga" value="<?php echo $data['harga'];?>">
                </div>
                <div class="form-group">
                  <b><label>Jumlah</label></b>
                  <input type="text" class="form-control" name="jumlah" value="<?php echo $data['jumlah'];?>">
                </div>
                <div class="form-group">
                  <b><label>Gambar Produk</label></b>
                  <input type = "file" class="form-control" name="foto" value="<?php echo $data['foto'];?>">
                </div>
                <div class="form-group">
                    <b><label>Deskripsi Produk</label></b>
                    <input type="text" class="form-control" name="deskripsi" value="<?php echo $data['deskripsi'];?>">   
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

