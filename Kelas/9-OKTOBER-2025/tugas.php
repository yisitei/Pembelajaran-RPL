<?php
$menu = ["Beranda", "Kontak", "Kegiatan", "Jadwal"];
$berita = "Selamat Datang Di SMPN 5 SIDOARJO. Sekolah terfavorite dan menjunjung tinggi ramah anak, Dengan visi misi yang sangat menjunjung tinggi generasi emas 2045. Sekolah yang sudah befasilitas lengkap dengan ini siswa dapat dengan mudah beraktifitas dan para pendidik/tenaga pelajar bisa memvariasikan pembelajaran dengan medan yang di miliki pada sekolah";
$img = "images/lorem2.jpg";
$fasilitas = ["Laboratorium IPA", "Perpustakaan", "Ruang Karawitan"];
$lab = "images/lab.jpg";
$gamelan = "images/gamelan.jpg";
$perpus = "images/perpus.jpg"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sekolah SMPN 5 Sidoarjo</title>
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3">
        <div class="bg-dark p-2 rounded">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link text-white" href="Beranda"><?= $menu[0] ?></a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#"><?= $menu[1] ?></a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#"><?= $menu[2] ?></a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#"><?= $menu[3] ?></a></li>
            </ul>
        </div>
        <div class="Beranda">
            <h2>SMPN 5 SIDOARJO</h2>
            <p style="max-width:600px"; ><?= $berita ?></p>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0">
                    <img src="images/lab.jpg" class="card-img-top" alt="Laboratorium">
                    <div class="card-body">
                        <h5 class="card-title"><?= $fasilitas [0]?></h5>
                        <p class="card-text">Tempat siswa melakukan praktik sains dengan alat dan bahan lengkap.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0">
                    <img src="<?= $perpus?>" class="card-img-top" alt="Perpustakaan">
                    <div class="card-body">
                        <h5 class="card-title"><?= $fasilitas [1]?></h5>
                        <p class="card-text">Menyediakan berbagai koleksi buku pelajaran dan bacaan umum untuk siswa.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0">
                    <img src="<?= $gamelan?>" class="card-img-top" alt="Ruang Karawitan">
                    <div class="card-body">
                        <h5 class="card-title"><?= $fasilitas [2]?></h5>
                        <p class="card-text">Fasilitas untuk kegiatan seni dan budaya tradisional siswa SMPN 5 Sidoarjo.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
