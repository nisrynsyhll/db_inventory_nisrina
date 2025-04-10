<?php $id = $_GET ['id'];

$nama_barang = $_POST ['nama_barang'];
$id_jenis = $_POST ['id_jenis'];
$harga = $_POST ['harga'];
$stock = $_POST ['stock'];
include '../../config/koneksi.php';

$query = mysqli_query(mysql: $Conn, query: "UPDATE barang SET
nama_barang='$nama_barang',
id_jenis= '$id_jenis',
harga='$harga',
stock= '$stock'
WHERE id_barang = '$id'");

//JS
if ($query) {
    echo "<script>alert('Data Berhasil Diedit');</script>";
    echo "<script>window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Data Gagal Diedit');</script>";
    echo "<script>window.location.href='index.php';</script>";
}