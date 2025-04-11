<?php
 include '..//../config/koneksi.php';

 $Id_Jenis = $_POST['id_jenis'];
 $Nama_Jenis = $_POST['nama_jenis'];

 $sql = "INSERT INTO jenis (id_jenis, nama_jenis) VALUES ('$Id_Jenis, $Nama_Jenis')";
 if(mysqli_query(mysql: $conn, query: $sql)) {
    echo "Data Berhasil Ditambahkan";
    header(header: "location: index.php");
 } else {
    echo "Error:" . $sql . "<br>" . mysqli_error(mysql: $conn);
 }
 mysqli_close(mysql: $conn);
 ?>