<?php
require "../../connect.php";

// Penanganan penambahan berita
if (isset($_POST['tambah_berita'])) {
    $judul = $mysqli->real_escape_string($_POST['judul']);
    $konten = $mysqli->real_escape_string($_POST['konten']);
    $tanggal = date('Y-m-d'); // Ambil tanggal saat ini

    $query = "INSERT INTO berita (judul_berita, isi_berita, tanggal_berita) VALUES ('$judul', '$konten', '$tanggal')";
    if ($mysqli->query($query)) {
        echo "<div class='alert alert-success'>Berita berhasil ditambahkan!</div>";
    } else {
        echo "<div class='alert alert-danger'>Terjadi kesalahan: " . $mysqli->error . "</div>";
    }
}

// Penanganan penghapusan berita
if (isset($_GET['hapus_id'])) {
    $hapusId = (int) $_GET['hapus_id'];
    $query = "DELETE FROM berita WHERE id_berita = $hapusId";
    if ($mysqli->query($query)) {
        echo "<div class='alert alert-success'>Berita berhasil dihapus!</div>";
    } else {
        echo "<div class='alert alert-danger'>Terjadi kesalahan: " . $mysqli->error . "</div>";
    }
}

// Ambil data berita dari database
$daftarBerita = [];
$query = "SELECT * FROM berita ORDER BY tanggal_berita DESC"; // Mengurutkan berdasarkan tanggal terbaru
$result = mysqli_query($conn, $query);

$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $daftarBerita[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengelolaan Berita Asrama</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Pengelolaan Berita Asrama</h1>

        <!-- Formulir untuk menambah berita -->
        <form method="POST" class="mb-4">
            <div class="mb-3">
                <input type="text" name="judul" class="form-control" placeholder="Judul Berita" required>
            </div>
            <div class="mb-3">
                <textarea name="konten" class="form-control" placeholder="Isi Berita" required></textarea>
            </div>
            <button type="submit" name="tambah_berita" class="btn btn-primary">Tambah Berita</button>
        </form>

        <h2>Daftar Berita</h2>
        <ul class="list-group">
            <?php foreach ($daftarBerita as $berita) : ?>
                <li class="list-group-item">
                    <strong><?php echo $berita['judul_berita']; ?></strong>
                    <p><?php echo $berita['isi_berita']; ?></p>
                    <small><em><?php echo $berita['tanggal_berita']; ?></em></small>
                    <div class="text-end">
                        <a href="?hapus_id=<?php echo $berita['id_berita']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Link ke Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
