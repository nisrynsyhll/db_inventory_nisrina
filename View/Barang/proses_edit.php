<?php $Id = $_GET ['Id_Barang'];

$Nama_Barang = $_POST ['Nama_Barang'];
$Id_Jenis = $_POST ['Id_Jenis'];
$Harga = $_POST ['Harga'];
$Stock = $_POST ['Stock'];

include '../../config/koneksi.php';

$query = mysqli_query($conn,"UPDATE barang SET
Nama_Barang='$Nama_Barang',
Id_Jenis= '$Id_Jenis',
Harga='$Harga',
Stock= '$Stock'
WHERE Id_Barang = '$Id_Barang'
");

//JS
if ($query) {
    echo "<script>alert('Data Berhasil Diedit');</script>";
    echo "<script>window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Data Gagal Diedit');</script>";
    echo "<script>window.location.href='index.php';</script>";
}