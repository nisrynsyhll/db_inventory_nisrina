<?php
 include '..//../config/koneksi.php';

 $id_jenis = $_POST['id_jenis'];
 $nama_jenis = $_POST['nama_jenis'];

 $sql = "INSERT INTO jenis (id_jenis, nama_jenis) VALUES ('$id_jenis, $nama_jenis')";
 if(mysqli_query(mysql: $conn, query: $sql)) {
    echo "Data Berhasil Ditambahkan";
    header(header: "location: index.php");
 } else {
    echo "Error:" . $sql . "<br>" . mysqli_error(mysql: $conn);
 }
 mysqli_close(mysql: $conn);
 ?>