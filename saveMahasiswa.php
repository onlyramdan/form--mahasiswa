<?php

include 'connect.php';



$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$id_prodi = $_POST['id_prodi'];

$sql = 'INSERT INTO mahasiswa VALUES ("' . $nim . '", "' . $nama . '", "' . $jenis_kelamin . '", "' . $tanggal_lahir . '", "' . $alamat . '", "' . $id_prodi . '")';
$result = mysqli_query($conn, $sql);

if ($result) {
    header('Location: index.php');
} else {
    echo 'Insert Failed';
}
?>