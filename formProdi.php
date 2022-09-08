<?php include 'header.php'?>
<div class="container">
<H1>Form Program Studi</H1>
<form method='post' action="saveProdi.php">
    <div class="mb-3">
        <label class="form-label">ID PRODI</label>
        <input type="text" class="form-control" placeholder="Id Prodi" name="id_prodi" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Prodi</label>
        <input type="text" class="form-control" placeholder="Nama Prodi " name="nama_prodi" required>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-success" value="Simpan">
    </div>
</form>

</div>
<?php include 'footer.php'?>