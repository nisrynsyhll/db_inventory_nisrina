<?php 

$Id_Barang=$_GET['Id_Barang'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "DELETE FROM barang WHERE Id_Barang='$Id_Barang' ");

if($query){
    echo "<script>alert('Data berhasil dihapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('Data gagal dihapus')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}