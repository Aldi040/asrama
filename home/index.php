<?php require 'assets/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">
    
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        /* Welcome Section */
        .welcome {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 50px;
            background-color: #4a90e2;
        }

        .welcome .welcome-text {
            font-size: 24px;
            font-weight: bold;
        }

        .welcome {
            /* Set gambar sebagai background penuh */
            background-image: url('assets/img/images.jpg'); /* Ganti dengan path gambar Anda */
            background-size: cover; /* Pastikan gambar mencakup seluruh area */
            background-position: center; /* Pusatkan gambar */
            background-repeat: no-repeat; /* Hindari pengulangan gambar */
            height: 100vh; /* Set tinggi section menjadi penuh layar */
            color: #fff; /* Ubah warna teks agar kontras dengan background */
            display: flex; /* Gunakan flexbox untuk tata letak */
            flex-direction: column; /* Atur elemen ke arah vertikal */
            justify-content: center; /* Posisikan konten di tengah secara vertikal */
            align-items: center; /* Posisikan konten di tengah secara horizontal */
            text-align: center; /* Teks berada di tengah */
        }


        /* Visi Misi Section */
        .visi-misi {
            position: relative;
            display: flex;
            justify-content: space-between;
            height: 250px;
            margin-bottom: 50px;
        }

        .visi-misi div {
            width: 48%;
            height: 100%;
            padding: 20px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            font-weight: bold;
        }

        .visi-misi .left {
            background-color: #4a90e2;
            clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 0);
            transition: all 0.5s ease-in-out;
        }

        .visi-misi .right {
            background-color: white;
            color: #000;
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            transition: all 0.5s ease-in-out;
        }

        /* Animasi pada Scroll */
        .visi-misi div[data-aos="fade-up"] {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.5s ease-in-out;
        }

        .visi-misi div[data-aos="fade-up"].aos-animate {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>
    <!-- Section Welcome -->
    <section class="welcome">
        <h1 class="text-center my-4">SELAMAT DATANG <?=$_SESSION['nama']?></h1>
        <div class="welcome-text">
            <p>Selamat datang, <?=$_SESSION['nama']?>! Semoga harimu menyenankan.</p>
        </div>
        <div class="welcome-image">
            <!-- Gambar animasi orang di sini -->
        </div>
    </section>

    <!-- Section Visi Misi -->
    <section class="container py-5" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-center mb-4">Visi dan Misi Asrama</h2> <!-- Menambahkan Judul -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card h-100 rounded">
                    <h5 class="card-header text-center" >Visi Asrama</h5>
                    <div class="card-body bg-primary text-white d-flex justify-content-center align-items-center">
                        <p class="card-text">Visi Asrama akan dijelaskan di sini. Ini adalah deskripsi tentang visi yang ingin dicapai oleh pengelola asrama.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100 rounded">
                    <h5 class="card-header text-center">Misi Asrama</h5>
                    <div class="card-body bg-light text-dark d-flex justify-content-center align-items-center">
                        <ul class="card-text">
                            <li>Misi pertama: Menyediakan lingkungan yang aman dan nyaman untuk para penghuni asrama.</li>
                            <li>Misi kedua: Meningkatkan kualitas hidup penghuni melalui program-program kegiatan positif.</li>
                            <li>Misi ketiga: Menjalin kerjasama yang baik dengan pihak-pihak terkait untuk mendukung kegiatan asrama.</li>
                            <li>Misi keempat: Menciptakan suasana kebersihan, kedisiplinan, dan keagamaan yang harmonis di lingkungan asrama.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Pengelola -->
    <section class="container py-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <img src="organisasi/pengelola.jpg" alt="Pengelola" class="img-fluid rounded-circle" style="max-width: 150px;">
            </div>
            <div class="col-md-8">
                <h3>Pengelola Asrama</h3>
                <p class="text-muted">Pengelola asrama adalah pihak yang bertanggung jawab atas keseluruhan pengelolaan dan pengawasan di asrama.</p>
            </div>
        </div>
    </section>

    <!-- Section Pengurus Harian -->
    <section class="container py-5" style="background-color: #f4f6f9;" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-center mb-4">Pengurus Harian</h2>
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="organisasi/ketua.jpg" alt="Ketua" class="img-fluid rounded-circle" style="max-width: 120px;">
                <h5 class="mt-3">Ketua Asrama</h5>
            </div>
            <div class="col-md-3 text-center">
                <img src="organisasi/wakil.jpg" alt="Wakil" class="img-fluid rounded-circle" style="max-width: 120px;">
                <h5 class="mt-3">Wakil Ketua</h5>
            </div>
            <div class="col-md-3 text-center">
                <img src="organisasi/sekretaris.jpg" alt="Sekretaris" class="img-fluid rounded-circle" style="max-width: 120px;">
                <h5 class="mt-3">Sekretaris</h5>
            </div>
            <div class="col-md-3 text-center">
                <img src="organisasi/bendahara.jpg" alt="Bendahara" class="img-fluid rounded-circle" style="max-width: 120px;">
                <h5 class="mt-3">Bendahara</h5>
            </div>
        </div>
    </section>

    <!-- Section Divisi -->
    <section class="container py-5" style="background-color: #e9ecef;" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-center mb-4">Divisi Asrama</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="organisasi/keamanan.jpg" alt="Keamanan" class="img-fluid rounded-circle" style="max-width: 120px;">
                <h5 class="mt-3">Divisi Keamanan</h5>
            </div>
            <div class="col-md-4 text-center">
                <img src="organisasi/kebersihan.jpg" alt="Kebersihan" class="img-fluid rounded-circle" style="max-width: 120px;">
                <h5 class="mt-3">Divisi Kebersihan</h5>
            </div>
            <div class="col-md-4 text-center">
                <img src="organisasi/pendidikan.jpg" alt="Pendidikan" class="img-fluid rounded-circle" style="max-width: 120px;">
                <h5 class="mt-3">Divisi Pendidikan</h5>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 text-center">
                <img src="organisasi/peribadatan.jpg" alt="Peribadatan" class="img-fluid rounded-circle" style="max-width: 120px;">
                <h5 class="mt-3">Divisi Peribadatan</h5>
            </div>
            <div class="col-md-4 text-center">
                <img src="organisasi/kreatif.jpg" alt="Kreatif" class="img-fluid rounded-circle" style="max-width: 120px;">
                <h5 class="mt-3">Divisi Kreatif</h5>
            </div>
            <div class="col-md-4 text-center">
                <img src="organisasi/kwu.jpg" alt="KWU" class="img-fluid rounded-circle" style="max-width: 120px;">
                <h5 class="mt-3">Divisi KWU</h5>
            </div>
        </div>
    </section>

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
