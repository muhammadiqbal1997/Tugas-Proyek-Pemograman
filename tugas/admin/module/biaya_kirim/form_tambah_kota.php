<div class="main-content">
    <section class="section">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Tambah Nama Kota</h4>
              <div class="card-header-action">
              </div>
              &nbsp;
              &nbsp;
              <div class="card-header-action">
                <a href="dashboard.php?module=kota" class="btn btn-success">Kembali ke data kota <i class="fas fa-chevron-left"></i></a>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
              <form action='module/biaya_kirim/aksi_simpan_kota.php' method="post">
                <div class="form-group">
                  <label>Nama Kota</label>
                  <input type="text" class="form-control" name="nama_kota" placeholder="Masukan Nama Kota" id="nama_kota">
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

