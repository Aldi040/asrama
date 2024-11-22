<?php
require "koneksi.php";
$sql = "SELECT * FROM obat";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Obat</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Ruang Kesehatan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index_pasien.php">Data Pasien</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index_obat.php">Data Obat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pasien.php">Tambah Data Pasien</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="obat.php">Tambah Data Obat</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Data Obat</h1>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Obat</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Tampilkan data jika ada
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>" . $row['id_obat'] . "</td>
                            <td>" . $row['nama_obat'] . "</td>
                            <td>" . $row['kategori_obat'] . "</td>
                            <td>Rp " . number_format($row['harga'], 2, ',', '.') . "</td>
                            <td>" . $row['stok'] . "</td>
                            <td>" . $row['deskripsi'] . "</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center'>Tidak ada data</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>