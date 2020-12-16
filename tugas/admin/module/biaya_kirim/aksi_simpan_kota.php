<?php 
include "../../../lib/koneksi.php";
$nama_kota =$_POST['nama_kota'];
$sql = "INSERT INTO tbl_kota (nama_kota) VALUES ('$nama_kota')";
$simpan= mysqli_query ($koneksi, $sql);
if($simpan){
    echo "<script> alert('Data Kategori berhasil masuk'); window.location = '$adminUrl' + 'dashboard.php?module=kota';</script>";
    } else {
        echo "<script> alert('Data Kategori gagal masuk'); window.location = '$adminUrl' + 'dashboard.php?module=form_tambah_kota';</script>";
    }
?>