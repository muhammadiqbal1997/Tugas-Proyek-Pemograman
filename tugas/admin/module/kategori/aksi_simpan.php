<?php 
include "../../../lib/koneksi.php";
$nama_kategori =$_POST['nama_kategori'];
$sql = "INSERT INTO tbl_kategori (nama_kategori) VALUES ('$nama_kategori')";
$simpan= mysqli_query ($koneksi, $sql);
if($simpan){
    echo "<script> alert('Data Kategori berhasil masuk'); window.location = '$adminUrl' + 'dashboard.php?module=kategori';</script>";
    } else {
        echo "<script> alert('Data Kategori gagal masuk'); window.location = '$adminUrl' + 'dashboard.php?module=form_tambah';</script>";
    }
?>