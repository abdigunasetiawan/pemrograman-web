<?php

session_start();
if (!isset($_SESSION['login'])) {
    header('location:index.php');
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Retail - Dashboard</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>

    <body class="bg-secondary-subtle">
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand">Retail Application</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a href="?modul=home" class="nav-link active" aria-current="page">Home</a>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" aria-current="page" data-bs-toggle="dropdown"
                                aria-expanded="false">Barang</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?modul=barang">Data Barang</a></li>
                                <li><a class="dropdown-item" href="?modul=persedian">Persedian Barang</a></li>
                            </ul>
                        </li>
                        <a class="nav-link" href="?modul=penjualan">Penjualan</a>
                        <a class="nav-link" href="?modul=pengguna">Pengguna</a>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-person-circle"><?= $_SESSION['user']; ?></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="?modul=profile" class="dropdown-item">Profile</a></li>
                                <li><a href="logout.php" class="dropdown-item">Logout</a></li>
                            </ul>
                        </li>
                    </div>
                </div>
            </div>
        </nav>
        <main class="bg-white py-4 shadow-sm">
            <div class="container">
                <?php
                if (!isset($_GET['modul'])) {
                    include 'home.php';
                } else {
                    $modul = $_GET['modul'];
                    if ($modul == "home") {
                        include "home.php";
                    } else if ($modul == "barang") {
                        include "modul/barang/index.php";
                    } else if ($modul == "persedian") {
                        include "modul/persedian/index.php";
                    } else if ($modul == "penjualan") {
                        include "modul/penjualan/index.php";
                    } else if ($modul == "pengguna") {
                        include "modul/pengguna/index.php";
                    } else if ($modul == "profile") {
                        include "modul/profile/index.php";
                    } else {
                        include "home.php";
                    }
                }
                ?>
            </div>
        </main>
        <div class="container py-3 text-center">
            <span>Copyright &copy;2024 | Retail Application</span>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>
    <?php
}

?>