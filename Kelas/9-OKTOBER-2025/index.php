belajar php

<h1>Saya belajar PHP</h1>

<?php
$nama = "Kevin Anindhito";
$kelas = 10;
$umur = 16;
$hobi = "Ga ada";
$cita_cita = "Kaya raya";
$alamat = "csm";
$enter = "<br>";

echo $nama;
echo $enter;

echo $kelas;
echo $enter;

echo $umur;
echo $enter;

echo $hobi;
echo $enter;

echo $cita_cita;
echo $enter;

echo $alamat;
echo $enter;



// echo "<h1>Saya Belajar PHP</h1>";
// echo "Nama Saya Kevin";
// echo "<br>";

// echo "Umur Saya 15 Tahun";
// echo "<br>";

// echo "Hobi Ga ada";
// echo "<br>";

// echo "Cita cita yang penting jadi kaya";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Kevin</title>
</head>
<body>
    <div>
        <h1>Idnetitas</h1>
        <table>
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td><?= $nama?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><?= $alamat?></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td><?= $umur?></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td><?= $kelas?></td>
                </tr>
                <tr>
                    <td>cita cita</td>
                    <td><?= $cita_cita?></td>
                </tr>
                <tr>
                    <td>hobi</td>
                    <td><?= $hobi?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>