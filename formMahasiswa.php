<?php include 'header.php'; ?>

<div class ='container'>
<h1>Form Mahasiswa</h1>

<form method='post' action="saveMahasiswa.php">
    <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" class="form-control" placeholder="NIM" name="nim" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" placeholder="Nama" name="nama" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Pria" id="pria">
            <label class="form-check-label" for="pria">
                Pria
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Wanita" id="wanita" checked>
            <label class="form-check-label" for="wanita">
                Wanita
            </label>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea type="text" class="form-control" placeholder="Alamat" name="alamat" required></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Program Studi</label>
        <select class="form-control" placeholder="Program Studi" name="id_prodi" required>
            <?php
            $sql = 'SELECT * FROM prodi';

            $query = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_object($query)) {
            ?>
                <option value="<?php echo $row->id_prodi; ?>"><?php echo $row->nama_prodi; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-success" value="Simpan">
    </div>
</form>

</div>

<?php include 'footer.php'; ?>