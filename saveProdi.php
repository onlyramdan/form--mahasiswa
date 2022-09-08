<?php

use LDAP\Result;

include 'connect.php';

print_r($id_prodi);

$id_prodi = $_POST ['id_prodi'];
$nama_prodi = $_POST ['nama_prodi'];

$sql = 'INSERT INTO prodi VALUES("' . $id_prodi . '","' . $nama_prodi . '")';

$result = mysqli_query($conn, $sql);

if($result){
    header('Location: prodi.php');
}else{
    echo('imsert failed');
}

?>