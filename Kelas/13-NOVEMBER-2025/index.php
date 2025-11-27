<form action="" method="POST">
<input type="number" name="nis" id="nis" required placeholder="Masukan NIS">
<input type="text" name="nama" id="nama" required placeholder="Masukan Nama">
<input type="text" name="alamat" id="alamat" placeholder="Masukan Alamat">
<input type="text" name="telephone" id="telephone" placeholder="Masukan Telephone">
<input type="submit" name="simpan" value="Simpan">
</form>
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'dbsekolaH';

$koneksi = mysqli_connect($host,$user,$password,$db);


if (isset($_POST['simpan'])){
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telephone = $_POST['telephone'];

// echo $nis, "<br>" , $nama, "<br>", $alamat, "<br>",$telephone;

$sql = "INSERT INTO tblsiswa (nis , nama , alamat , telephone) VALUES ($nis, '$nama' , '$alamat', '$telephone')";
echo $sql;
$query = mysqli_query ($koneksi, $sql);
}

$sql = "SELECT * FROM tblsiswa";
$query = mysqli_query ($koneksi, $sql);
?>

<table border=1>
    <thead>
    <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telephone</th>
    </tr>
    </thead>
    <tbody>

<?php
while ($siswa = mysqli_fetch_array($query)){
    // echo $siswa ['nis'], " - ",$siswa ['nama'], " - ", $siswa ['alamat'], " - ", $siswa['telephone'];
    // echo "<br>";

?>


    <tr>
        <td><?= $siswa['nis']; ?></td>
        <td><?= $siswa['nama']; ?></td>
        <td><?= $siswa['alamat']; ?></td>
        <td><?= $siswa['telephone']; ?></td>
    </tr>

<?php } ?>
    </tbody>
</table>
<?php ?>