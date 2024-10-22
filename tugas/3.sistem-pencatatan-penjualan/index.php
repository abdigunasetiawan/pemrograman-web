<?php

session_start();

if (isset($_POST['reset'])) {
    $_SESSION['laporan_penjualan'] = array();
}

if (!isset($_SESSION['laporan_penjualan'])) {
    $_SESSION['laporan_penjualan'] = array();
}

if (isset($_POST['tambah'])) {
    $nama_produk = $_POST['nama_produk'];
    
    // Membersihkan input harga
    $harga_produk = str_replace('.', '', $_POST['harga_produk']); 
    $harga_produk = str_replace(',', '.', $harga_produk); 
    $harga_produk = floatval($harga_produk); 
    
    $jumlah_terjual = intval($_POST['jumlah_terjual']); 

    $transaksi = array(
        "nama_produk" => $nama_produk,
        "harga_produk" => $harga_produk,
        "jumlah_terjual" => $jumlah_terjual,
    );

    array_push($_SESSION['laporan_penjualan'], $transaksi);
}

function getJumlahTerjual() {
    $jumlah_terjual = 0;
    foreach ($_SESSION['laporan_penjualan'] as $transaksi) {
        $jumlah_terjual += $transaksi['jumlah_terjual'];
    }
    return $jumlah_terjual;
}

function getTotalPendapatan() {
    $total_pendapatan = 0;
    foreach ($_SESSION['laporan_penjualan'] as $transaksi) {
        $total_pendapatan += ($transaksi['harga_produk'] * $transaksi['jumlah_terjual']);
    }
    return number_format($total_pendapatan, 0, ',', '.');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pencatatan Penjualan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex min-h-screen justify-center items-center bg-slate-50 py-16">
    <div class="bg-white py-6 px-8 rounded-md shadow">
        <h1 class="text-2xl text-center font-bold text-slate-800">Sistem Pencatatan Penjualan</h1>
        <form method="post" class="mt-6 mb-4">
            <table class="" cellpadding="4">
                <tr class="">
                    <td class="font-medium">
                        <label for="nama_produk">Masukkan Nama Produk</label>
                    </td>
                    <td class="px-4 font-medium">:</td>
                    <td>
                        <input type="text" name="nama_produk" id="nama_produk" class="p-1 border border-slate-300 rounded-sm" required>
                    </td>
                </tr>
                <tr class="">
                    <td class="font-medium">
                        <label for="harga_produk">Masukkan Harga Per Produk</label>
                    </td>
                    <td class="px-4 font-medium">:</td>
                    <td>
                        <input type="text" name="harga_produk" id="harga_produk" class="p-1 border border-slate-300 rounded-sm" required>
                    </td>
                </tr>
                <tr class="">
                    <td class="font-medium">
                        <label for="jumlah_terjual">Masukkan Jumlah Terjual</label>
                    </td>
                    <td class="px-4 font-medium">:</td>
                    <td>
                        <input type="number" name="jumlah_terjual" id="jumlah_terjual" class="p-1 border border-slate-300 rounded-sm" min="1" required>
                    </td>
                </tr>
                <tr class="">
                    <td colspan="3" class="pt-4">
                        <button type="submit" name="tambah" class="bg-slate-800 hover:bg-slate-900 rounded-md py-2 text-white w-full font-medium">Tambah</button>
                    </td>
                </tr>
            </table>
        </form>

        <?php if (isset($_SESSION['laporan_penjualan']) && !empty($_SESSION['laporan_penjualan'])) : ?>
            <h2 class="text-xl text-center font-bold text-slate-800">Laporan Penjualan</h2>

            <table class="w-full mt-4 border-2 border-slate-600">
                <tr class="">
                    <th class="border-2 border-slate-600">No</th>
                    <th class="border-2 border-slate-600">Produk</th>
                    <th class="border-2 border-slate-600">Harga</th>
                    <th class="border-2 border-slate-600">Jumlah Terjual</th>
                    <th class="border-2 border-slate-600">Total</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach ($_SESSION['laporan_penjualan'] as $transaksi) : ?>
                    <tr>
                        <td class="border-2 border-slate-600 px-1"><?= $i ?></td>
                        <td class="border-2 border-slate-600 px-1"><?= $transaksi['nama_produk'] ?></td>
                        <td class="border-2 border-slate-600 px-1">Rp <?= number_format($transaksi['harga_produk'], 2, ',', '.'); ?></td>
                        <td class="border-2 border-slate-600 px-1"><?= $transaksi['jumlah_terjual'] ?></td>
                        <td class="border-2 border-slate-600 px-1">Rp <?= number_format($transaksi['harga_produk'] * $transaksi['jumlah_terjual'], 2, ',', '.'); ?></td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3" class="border-2 border-slate-600 px-1 font-bold">Total Penjualan</td>
                    <td class="border-2 border-slate-600  px-1 font-bold"><?= getJumlahTerjual(); ?></td>
                    <td class="border-2 border-slate-600  px-1 font-bold">Rp <?= getTotalPendapatan(); ?></td>
                </tr>
            </table>

            <form method="post">
                <button type="submit" name="reset" class="bg-slate-800 hover:bg-slate-900 rounded-md py-2 text-white w-full font-medium mt-4">Reset</button>
            </form>
        <?php endif; ?>

    </div>
</body>
</html>
