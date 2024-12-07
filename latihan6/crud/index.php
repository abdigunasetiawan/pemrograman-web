<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container border">
        <div class="row">
            <div class="col bg-info p-3">
                <h1>Aplikasi CRUD Sederhana</h1>
            </div>
        </div>
        <div class="row p-3">
            <div class="col">
                <?php

                include "koneksi.php";
                // jika modul tidak ada
                if (!isset($_GET['modul'])) {
                ?>
                    <a class="btn btn-primary" href="index.php?modul=biodata">Biodata</a>
                    <a class="btn btn-warning" href="modul/nilai/">Nilai</a>
                <?php
                } else if ($_GET['modul'] == 'biodata') {
                    include "modul/biodata/index.php";
                } else if ($_GET['modul'] == 'form-tambah') {
                    include "modul/biodata/form-tambah.php";
                } else if ($_GET['modul'] == 'form-edit') {
                    include "modul/biodata/form-edit.php";
                } else if ($_GET['modul'] == 'nilai') {
                    include "modul/nilai/index.php";
                } else {
                    echo "Modul Tidak Ditemukan";
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>