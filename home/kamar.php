<?php
include '../connect.php';
include 'session_check.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>asrama</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <style>
        <?php include 'assets/style.css'; ?>
        .outer-card{
            border-radius: 20px;
        }
        </style>
    </head>

    <body>
        <?php require 'assets/header.php'; ?>

        <!-- Konten lainnya -->
        <main>
            <h2 class="text-center">Berikut Daftar Kamar yang Ada di Asrama</h2>
            <div class="container mt-5">
                <div class="row">
                    <?php
                    // Query untuk mengambil data kamar
                    $sql = "SELECT * FROM kamar";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // Loop melalui semua data kamar
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Cek status kamar
                            if ($row['status_kamar'] == 'Tersedia') {
                                $statusColor = '#219B9D';
                            } elseif ($row['status_kamar'] == 'Kosong') {
                                $statusColor = '#1F509A';
                            } else {
                                $statusColor = '#D91656';
                            }

                            // Hitung jumlah penghuni di setiap kamar
                            $no_kamar = $row['no_kamar'];
                            $sql_penghuni = "SELECT COUNT(*) AS jumlah_penghuni FROM warga_asrama WHERE no_kamar = '$no_kamar'";
                            $result_penghuni = mysqli_query($conn, $sql_penghuni);
                            $penghuni = mysqli_fetch_assoc($result_penghuni);
                            $jumlah_penghuni = $penghuni['jumlah_penghuni'];

                            // Misalnya kapasitas kamar adalah 6
                            $kapasitas_kamar = 6;
                            $tersedia = $kapasitas_kamar - $jumlah_penghuni;

                            echo '<div class="col-md-4 mb-4">
                                    <div class="card shadow-lg outer-card" style="background-color: #E2F4FD;">
                                    <h4 class="card-header" style="width: 100%; text-align: center; background-color: #084B83; color: white;">Kamar</h4>
                                    <h5 class="card-title p-2" style="width: 100%; text-align: center; color: white; background-color: #17689A;">' . $row['no_kamar'] . '</h5>
                                        <div class="card-body d-flex flex-column align-items-center">
                                            <p class="card-text fw-bold">Gedung: ' . $row['id_gedung'] . '</p>
                                            <p class="card-text fw-bold p-1" style="color: black">' . 'Status : '. '<span class="p-1" style="background-color: '. $statusColor.'; color: white;"> '.$row['status_kamar'].'</span>'. '</p>
                                            <p class="card-text fw-bold">Jumlah Penghuni: ' . $jumlah_penghuni . ' / ' . $kapasitas_kamar . '</p>
                                            <p class="card-text fw-bold">Kamar Tersedia: ' . $tersedia . '</p>
                                            <form action="detail_kamar.php" method="get">
                                                <input type="hidden" name="no_kamar" value="' . $row['no_kamar'] . '">
                                                <button type="submit" class="btn btn-primary">Lihat Detail Kamar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>';
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </div>
            </div>
        </main>
    </body>

</html>
