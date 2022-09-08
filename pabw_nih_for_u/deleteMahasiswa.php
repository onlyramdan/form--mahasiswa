<?php
    include 'connect.php';

    $sql = 'DELETE FROM mahasiswa WHERE nim = "'.$_GET['nim'].'"';

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: index.php');    
    }   else {
        echo 'Gagal menghapus data.';
    }
?>