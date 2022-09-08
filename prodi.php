<?php include 'header.php'; ?>
<div class="container">
<H1>PROGRAM STUDI</H1>
<a href="formProdi.php" class="btn btn-info btn-sm mb-3 mt-3">Tambah </a>
<table class="table">
  <thead class="table-primary">
    <tr>
        <th>No.</th>
        <th>ID Prodi</th>
        <th>Nama Prodi</th>
        <th>Hapus Prodi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql ='SELECT * FROM prodi';
    $query = mysqli_query($conn, $sql) ;
    $i = 1;

    while ($row = mysqli_fetch_object($query)) {
    ?>
    <tr>
        <td><?php echo $i++,'.';?></td>
        <td><?php echo $row->id_prodi; ?></td>
        <td><?php echo $row->nama_prodi; ?></td>
        <td>
          <a href="deleteProdi.php?id_prodi=<?php echo $row->id_prodi;?>" class='btn btn-danger btn-sm' onclick="return confirm('Apakah yakin untuk menghapus prodi')">hapus</a>
        </td>
    </tr>
    <?php
    }
    if (! mysqli_num_rows($query)){
            echo '<tr> <td colspan="4" class="text-center"> TIDAK ADA DATA </td></tr>';
    }
    ?>

  </tbody>
</table>

</div>
<?php include 'footer.php'; ?>
