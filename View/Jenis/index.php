<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Jenis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../barang/index.php">Barang</a>
        </li>
      </form>
    </div>
  </div>
</nav>

<div class="container">
    <h1>Data Jenis Nisrina</h1>
    <a href="view_tambah.php" class="btn btn-primary">Tambah Data Jenis Baru</a>
    <table class="table">
        <thead>
        <tr>
                <th scope="col">No</th>
                <th scope="col">ID Jenis</th>
                <th scope="col">Nama Jenis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <th scope="col">1</th>
                <td scope="col">110</td>
                <td scope="col">kaos</td>
                <th><a href="" class="btn btn-warning">Edit</a></th>
            </tr>
            <tr>
                <th scope="col">2</th>
                <td scope="col">120</td>
                <td scope="col">celana</td>
                <th><a href="" class="btn btn-warning">Edit</a></th>
            </tr>
            <tr>
                <th scope="col">3</th>
                <td scope="col">130</td>
                <td scope="col">kerudung</td>
                <th><a href="" class="btn btn-warning">Edit</a></th>
            </tr>
            </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>