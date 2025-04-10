 <?php
 include '..//../config/koneksi.php';

 $id_barang = $_POST['id_barang'];
 $nama_barang = $_POST['nama_barang'];
 $id_jenis = $_POST['id_jenis'];
 $harga = $_POST['harga'];
 $stock = $_POST['stock'];

 $sql = "INSERT INTO barang (id_barang, nama_barang, id_jenis, harga, stock) VALUES ('$id_barang, $nama_barang, $id_jenis, $harga, $stock')";
 if(mysqli_query(mysql: $conn, query: $sql)) {
    echo "Data Berhasil Ditambahkan";
    header(header: "location: index.php");
 } else {
    echo "Error:" . $sql . "<br>" . mysqli_error(mysql: $conn);
 }
 mysqli_close(mysql: $conn);
 ?>