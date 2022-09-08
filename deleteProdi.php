<?php
    include 'connect.php';

    $sql = 'DELETE FROM prodi WHERE id_prodi = "'.$_GET['id_prodi'].'"';

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: prodi.php');    
    }   else {
        echo 'Gagal menghapus data.';
    }
?>