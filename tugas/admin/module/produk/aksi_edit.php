<?php
include "../../../lib/koneksi.php";

$id_produk = $_POST['id_produk']; 
$nama_produk = $_POST['nama_produk'];
$id_kategori = $_POST['id_kategori'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$foto = $_POST['foto'];
$deskripsi = $_POST['deskripsi'];
$sql = "UPDATE tbl_produk SET nama_produk='$nama_produk', id_kategori='$id_kategori', harga='$harga', jumlah='$jumlah', foto='$foto', deskripsi='$deskripsi' WHERE id_produk='$id_produk'";
$edit = mysqli_query($koneksi, $sql);

if($edit){
    echo "<script> alert('Data Kategori berhasil diubah'); window.location= '$adminUrl' + 'dashboard.php?module=produk';</script>";
} else{
    echo "<script> alert('Data Kategori gagal diubah'); window.location= '$adminUrl' + 'dashboard.php?module=edit_produk&id';</script>";
}

?>