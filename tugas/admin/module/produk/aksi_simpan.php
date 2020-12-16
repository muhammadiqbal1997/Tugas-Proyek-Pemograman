<?php 
include "../../../lib/koneksi.php";

$nama_produk = $_POST['nama_produk'];
$id_kategori = $_POST['id_kategori'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$deskripsi = $_POST['deskripsi'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$path = 'foto/'.$foto;

if(move_uploaded_file($tmp, $path)){
    $sql = "INSERT INTO tbl_produk (id_kategori, nama_produk, deskripsi, harga, gambar, jumlah) VALUES ('$id_kategori', '$nama_produk', '$deskripsi', '$harga', '$foto', '$jumlah')";
    $simpan= mysqli_query($koneksi, $sql);
    if($simpan){
        echo "<script> alert('Data Produk berhasil masuk'); window.location = '$adminUrl' + 'dashboard.php?module=produk';</script>";
        } else {
            echo "<script> alert('Data Produk gagal masuk'); window.location = '$adminUrl' + 'dashboard.php?module=tambah_produk';</script>";
        }
} 
// else {
//     echo "<script> alert; window.location = '$adminUrl' + 'dashboard.php?module=tambah_produk';</script>";
// }

?>