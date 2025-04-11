<?php
 include '..//../config/koneksi.php';

 $Id_Barang = $_POST['Id_Barang'];
 $Nama_Barang = $_POST['Nama_Barang'];
 $Id_Jenis = $_POST['Id_Jenis'];
 $Harga = $_POST['Harga'];
 $Stock = $_POST['Stock'];

 $sql = "INSERT INTO barang (Id_Barang, Nama_Barang, Id_Jenis, Harga, Stock) VALUES ('$Id_Barang, $Nama_Barang, $Id_Jenis, $Harga, $Stock')";
 if(mysqli_query(mysql: $conn, query: $sql)) {
    echo "Data Berhasil Ditambahkan";
    header(header: "location: index.php");
 } else {
    echo "Error:" . $sql . "<br>" . mysqli_error(mysql: $conn);
 }
 mysqli_close(mysql: $conn);
 ?>