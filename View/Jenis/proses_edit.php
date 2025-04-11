<?php

$Id = $_POST['Id_Jenis'];
$Nama_Jenis= $_POST['Nama_Jenis'];
include "../../config/koneksi.php";

$query = mysqli_query($conn, "
UPDATE jenis SET
Nama_Jenis='$Nama_Jenis'
WHERE Id_Jenis='$Id'
");

if($query) {
    echo "<script>alert('Data berhasil diedit')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Data gagal diedit')</script>";
    echo "<script>window.location.href='from_tambah.php'</script>";
}
?>