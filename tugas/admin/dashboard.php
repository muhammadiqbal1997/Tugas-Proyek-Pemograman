<?php 
session_start();
include "lib/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Ecommerce Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo $adminUrl; ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo $adminUrl; ?>assets/css/components.css">
  </head>

  <body>
  <div id="app">
    <div class="main-wrapper">
    <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?php echo $adminUrl; ?>assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?php echo $adminUrl; ?>assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?php echo $adminUrl; ?>assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?php echo $adminUrl; ?>assets/img/avatar/avatar-1.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?php echo $adminUrl; ?>assets/img/avatar/avatar-2.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?php echo $adminUrl; ?>assets/img/avatar/avatar-3.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?php echo $adminUrl; ?>assets/img/avatar/avatar-4.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?php echo $adminUrl; ?>assets/img/avatar/avatar-5.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b>
                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?php echo $adminUrl; ?>assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li><a class="nav-link" href="dashboard.php?module=home"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
            
              <li class="menu-header">Main Menu</li>
              <?php
              if($_SESSION['level']=='A'){  ?>
              <li><a class="nav-link" href="#"><i class="fas fa-users"></i> <span>Member</span></a></li>
              <li><a class="nav-link" href="blank.html"><i class="fas fa-user-alt"></i> <span>penjual</span></a></li>
              <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="logout.php" class="btn btn-danger btn-lg btn-block btn-icon-split">
                  <i class="fas fa-sign-out-alt"></i><span>Logout</span>
                </a>
              </div> 
              <?php } else { ?>
              <li><a class="nav-link" href="dashboard.php?module=kategori"><i class="fas fa-align-justify"></i> <span>Kategori</span></a></li>
              <li><a class="nav-link" href="dashboard.php?module=merek"><i class="fas fa-tags"></i> <span>Merek</span></a></li>
              <li><a class="nav-link" href="dashboard.php?module=produk"><i class="fas fa-archive"></i> <span>Produk</span></a></li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-dollar-sign"></i><span>Biaya Kirim</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="dashboard.php?module=kota"><i class="fas fa-city"></i> <span>Kota</span></a></li>
                  <li><a class="nav-link" href="dashboard.php?module=kurir"><i class="fas fa-truck"></i> <span>Kurir</span></a></li>
                  <li><a class="nav-link" href="dashboard.php?module=biaya"><i class="fas fa-money-bill-alt"></i> <span>Biaya</span></a></li>
                </ul>
              </li>
              <li><a class="nav-link" href="blank.html"><i class="fas fa-cart-arrow-down"></i> <span>Pesanan</span></a></li>
              <li><a class="nav-link" href="blank.html"><i class="fas fa-cart-plus"></i> <span>Penjualan</span></a></li>
              <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="logout.php" class="btn btn-danger btn-lg btn-block btn-icon-split">
                  <i class="fas fa-sign-out-alt"></i><span>Logout</span>
                </a>
              </div>
              <?php } ?>   
            </ul>
        </aside>
      </div>

      <?php
      if ($_GET['module'] == 'home'){
        include "module/home/home.php";
      } elseif ($_GET['module'] == 'kategori'){
        include "module/kategori/list_kategori.php";
      } elseif ($_GET['module'] == 'tambah_kategori'){
        include "module/kategori/form_tambah.php";
      } elseif ($_GET['module'] == 'edit_kategori'){
        include "module/kategori/form_edit.php";
      } 
      // Merek
      elseif ($_GET['module'] == 'merek'){
        include "module/merek/list_merek.php";
      } elseif ($_GET['module'] == 'tambah_merek'){
        include "module/merek/form_tambah.php";
      } elseif ($_GET['module'] == 'edit_merek'){
        include "module/merek/form_edit.php";
      } 
      // produk
      elseif ($_GET['module'] == 'produk'){
        include "module/produk/list_produk.php";
      } elseif ($_GET['module'] == 'tambah_produk'){
        include "module/produk/form_tambah.php";
      } elseif ($_GET['module'] == 'edit_produk'){
        include "module/produk/form_edit.php";
      } 
      // member
      elseif ($_GET['module'] == 'member'){
        include "module/member/list_member.php";
      } 
      // biaya_kirim
      elseif ($_GET['module'] == 'biaya'){
        include "module/biaya_kirim/list_biaya_kirim.php";
      } elseif ($_GET['module'] == 'tambah_biaya'){
        include "module/biaya_kirim/form_tambah_biaya.php";
      } elseif ($_GET['module'] == 'edit_biaya'){
        include "module/biaya_kirim/form_edit_biaya.php";
      } 
        // kota
        elseif ($_GET['module'] == 'kota'){
        include "module/biaya_kirim/list_kota.php";
      } elseif ($_GET['module'] == 'tambah_kota'){
        include "module/biaya_kirim/form_tambah_kota.php";
      } elseif ($_GET['module'] == 'edit_kota'){
        include "module/biaya_kirim/form_edit_kota.php";
      } 
      // kurir
      elseif ($_GET['module'] == 'kurir'){
        include "module/biaya_kirim/list_kurir.php";
      } elseif ($_GET['module'] == 'tambah_kurir'){
        include "module/biaya_kirim/form_tambah_kurir.php";
      } elseif ($_GET['module'] == 'edit_kurir'){
        include "module/biaya_kirim/form_edit_kurir.php";
      } 
      // penjualan
        elseif ($_GET['module'] == 'penjualan'){
        include "module/penjualan/list_penjualan.php";
      } 
      else{
        include "module/home/home.php";
      }
      ?>
    
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo $adminUrl; ?>assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="<?php echo $adminUrl; ?>assets/js/scripts.js"></script>
  <script src="<?php echo $adminUrl; ?>assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo $adminUrl; ?>assets/js/page/index.js"></script>
  <script src="<?php echo $adminUrl; ?>assets/js/page/bootstrap-modal.js"></script>
  <script src="<?php echo $adminUrl; ?>assets/js/page/modal-tambah-kategori.js"></script>
</body>
</html>