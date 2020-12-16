<?php 
include "../../../lib/koneksi.php";
$nama_merek =$_POST['nama_merek'];
$sql = "INSERT INTO tbl_merek (nama_merek) VALUES ('$nama_merek')";
$simpan= mysqli_query ($koneksi, $sql);
if($simpan){
    echo "<script> alert('Data Kategori berhasil masuk'); window.location = '$adminUrl' + 'dashboard.php?module=merek';</script>";
    } else {
        echo "<script> alert('Data Kategori gagal masuk'); window.location = '$adminUrl' + 'dashboard.php?module=form_tambah';</script>";
    }
?>