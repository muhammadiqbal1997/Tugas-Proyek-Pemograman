<div class="main-content">
    <section class="section">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Tambah kategori</h4>
              <div class="card-header-action">
              </div>
              &nbsp;
              &nbsp;
              <div class="card-header-action">
                <a href="dashboard.php?module=kategori" class="btn btn-success">Kembali ke data kategori <i class="fas fa-chevron-left"></i></a>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
              <form action='module/kategori/aksi_simpan.php' method="post">
                <div class="form-group">
                  <label>Nama Kategori</label>
                  <input type="text" class="form-control" name="nama_kategori" placeholder="Masukan Nama Kategori" id="nama_kategori">
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

