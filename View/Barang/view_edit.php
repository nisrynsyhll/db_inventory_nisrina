!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Data Barang</h1>
    <?php 
        $id=$_GET['id'];
        include '../../config/koneksi.php';
        $query = mysqli_query($conn, "SELECT * FROM barang WHERE Id_Barang ='$id'");
        $result = mysqli_fetch_array($query);
        ?>

        <div class="container mt-5">
        <div class="card card-custum mx-auto" style="max-width: 600px;">
        <h3 class="mb-4 text-center text-dark">Tambah Barang Baru</h3>
        <form action = "proses_edit.php?id=<?php echo $result['Id_Barang'];?>" method="POST">
            <div class="mb-3">
            <label class="form-label">Id Barang</label>
                <input type="number" class="form-control" value="<?php echo $result['Id_Barang']?>" name="Id_Barang" required>
                </div>

                <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" class="form-control" value="<?php echo $result['Nama_Barang']?>" name="Nama_Barang" required>
                </div>

                <div class="mb-3">
                <label class="form-label">Id Jenis</label>
                <input type="number" class="form-control" value="<?php echo $result['Id_Jenis']?>" name="id_jenis" required>
                </div>

                <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" class="form-control" value="<?php echo $result['Harga']?>" name="harga" required>
                </div>

                <div class="mb-3">
                <label class="form-label">Stock</label>
                <input type="number" class="form-control" value="<?php echo $result['Stock']?>" name="Stock" required>
                </div>
            </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>