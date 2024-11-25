<?php
// Koneksi ke database
$servername = "localhost"; // Ganti dengan server MySQL Anda
$username = "root";        // Ganti dengan username MySQL Anda
$password = "";            // Ganti dengan password MySQL Anda
$dbname = "asrama";        // Nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil ID fasilitas dari URL
$id_fasilitas = $_GET['id'];

// Mengambil data fasilitas berdasarkan ID
$sql = "SELECT * FROM fasilitas WHERE id_fasilitas = $id_fasilitas";
$result = $conn->query($sql);
$fasilitas_item = $result->fetch_assoc();

$conn->close();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $fasilitas_item['nama_fasilitas'] ?></title>
    <style>
        /* Reset dan pengaturan dasar */
        <?php include './assets/style.css';?>

        header h1 {
            font-size: 24px;
            margin: 0;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #666;
            text-align: center;
            margin: 10px 0;
        }

        footer {
            background-color: #004080;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 14px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .container p {
            margin: 10px 0;
        }

        footer {
            margin-top: 40px;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 22px;
            }

            h1 {
                font-size: 24px;
            }

            p {
                font-size: 14px;
            }

            footer {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <?php require './assets/header.php';?>
    <header>
        <h1>Detail Fasilitas</h1>
    </header>

    <div class="container">
        <h1><?= $fasilitas_item['nama_fasilitas'] ?></h1>
        <p><strong>Aturan Penggunaan:</strong></p>
        <p><?= $fasilitas_item['aturan_penggunaan'] ?></p>
        <p><strong>Jumlah Fasilitas:</strong> <?= $fasilitas_item['jumlah_fasilitas'] ?></p>
    </div>

    <footer>
        &copy; 2024 Asrama Mahasiswa
    </footer>
</body>
</html>