<?php
include "../../../lib/koneksi.php";

$id_kurir = $_POST['id_kurir']; 
$nama_kurir = $_POST['nama_kurir'];
$sql = "UPDATE tbl_kurir SET nama_kurir='$nama_kurir' WHERE id_kurir='$id_kurir'";
$edit = mysqli_query($koneksi, $sql);

if($edit){
    echo "<script> alert('Data Kategori berhasil diubah'); window.location= '$adminUrl' + 'dashboard.php?module=kurir';</script>";
} else{
    echo "<script> alert('Data Kategori gagal diubah'); window.location= '$adminUrl' + 'dashboard.php?module=edit_kurir&id';</script>";
}

?>