<?php include "header.php";?>
<div class="container">
<h1>MAHASISWA</h1>
<a href="formMahasiswa.php" class="btn btn-info btn-sm mb-3 mt-3">Tambah </a>
<table class="table">
  <thead class="table-primary">
    <tr>
        <th>No.</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>alamat</th>
        <th>Program Studi</th>
        <th>Hapus Data</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql ='SELECT * FROM mahasiswa JOIN prodi ON prodi.id_prodi = mahasiswa.id_prodi';
    $query = mysqli_query($conn, $sql) ;
    $i = 1;

    while ($row = mysqli_fetch_object($query)) {
    ?>
    <tr>
        <td><?php echo $i++,'.';?></td>
        <td><?php echo $row->nim; ?></td>
        <td><?php echo $row->nama; ?></td>
        <td><?php echo $row->jenis_kelamin; ?></td>
        <td><?php echo $row->tanggal_lahir; ?></td>
        <td><?php echo $row->alamat; ?></td>
        <td><?php echo $row->nama_prodi; ?></td>
        <td>
          <a href="deleteMahasiswa.php?nim=<?php echo $row->nim;?>" class='btn btn-danger btn-sm' onclick="return confirm('Apakah yakin untuk menghapus mahasiswa')">hapus</a>
        </td>
    </tr>
    <?php
    }
    if (! mysqli_num_rows($query)){
            echo '<tr> <td colspan="8" class="text-center"> TIDAK ADA DATA </td></tr>';
    }
    ?>

  </tbody>
</table>
<?php include "footer.php";?>


