<?php
$query = "SELECT * FROM biodata WHERE id=$_GET[id]";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
?>
<h5>Form Edit Biodata Mahasiswa</h5>
<hr>
<form action="<?= 'modul/biodata/proses.php?action=update&id=' . $_GET['id']; ?>" method="post">
    <label for="npm">NPM</label>
    <input type="text" class="form-control" name="npm" value="<?= $row['npm'] ?>"><br>
    <label for="nama">Nama</label>
    <input type="text" class="form-control" name="nama" value="<?= $row['nama'] ?>"><br>
    <label for="prodi">Prodi</label>
    <select name="prodi" class="form-control">
        <option value="<?= ($row['prodi'] == 'Sistem Informasi (S1)') ? 'selected' : ''; ?>">Sistem Informasi (S1)</option>
        <option value="<?= ($row['prodi'] == 'Teknik Informatika (S1)') ? 'selected' : ''; ?>">Teknik Informatika (S1)</option>
        <option value="<?= ($row['prodi'] == 'Bisnis Digital (S1)') ? 'selected' : ''; ?>">Bisnis Digital (S1)</option>
        <option value="<?= ($row['prodi'] == 'Manajemen Informatika (D3)') ? 'selected' : ''; ?>">Manajemen Informatika (D3)</option>
        <option value="<?= ($row['prodi'] == 'Komputerisasi Akuntansi (D3)') ? 'selected' : ''; ?>">Komputerisasi Akuntansi (D3)</option>
    </select>
    <br>
    <input type="submit" class="btn btn-primary" value="Update">
</form>