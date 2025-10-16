<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If dan Variabel</title>
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.min.css">
</head>
<body>
    <div>
        <nav>
        <div class="bg-primary p-2 rounded">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link text-white" href="?menu=profile">Profile</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="?menu=sejarah">Sejarah</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="?menu=kontak">Kontak</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="?menu=prestasi">Prestasi</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="?menu=kegiatan">Kegiatan</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="?menu=jurusan">Jurusan</a></li>
            </ul>
        </div>
        </nav>
        <section>
            <?php
            if (isset($_GET["menu"])) {
            $isi=$_GET["menu"];

            if($isi == "sejarah"){
                require_once "pages/sejarah.php";
            }
            if($isi == "profile"){
                require_once "pages/profile.php";
            }
            if($isi == "jurusan"){
                require_once "pages/jurusan.php";
            }
            if($isi == "prestasi"){
                require_once "pages/prestasi.php";
            }
            if($isi == "kegiatan"){
                require_once "pages/kegiatan.php";
            }
            if($isi == "kontak"){
                require_once "pages/kontak.php";
            }
            if (isset($_POST['tombol'])){
                $nama=$_POST['nama'];
                $pesan=$_POST['pesan'];
                $email=$_POST['email'];
                
                echo $nama;
                echo "<br>";
                echo $email;
                echo "<br>";
                echo $pesan;
            }
            }
            ?>
        </section>
        <footer>
                <p>Web ini dibuat oleh kevin</p>
        </footer>
    </div>
</body>
</html>