<?php

    if(isset($_POST['hitung'])) {
        $bilangan_1 = $_POST['bilangan_1'];
        $bilangan_2 = $_POST['bilangan_2'];
        $operasi = $_POST['operasi'];
        $hasil = '-';


        switch($operasi) {
            case 'penjumlahan':
                $hasil = $bilangan_1 + $bilangan_2;
                break;
            case 'pengurangan':
                $hasil = $bilangan_1 - $bilangan_2;
                break;
            case 'perkalian':
                $hasil = $bilangan_1 * $bilangan_2;
                break;
            case 'pembagian':
                $hasil = $bilangan_1 / $bilangan_2;
                break;
            default:
                $hasil = 0;
                break;
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex min-h-screen justify-center items-center bg-slate-50">
    <div class="shadow p-8 rounded-md bg-white">
        <h1 class="text-2xl text-center font-bold text-slate-800">Aplikasi Kalkulator Sederhana</h1>

        <form method="post" class="mt-4">
            <table class="" cellpadding="4">
                <tr class="">
                    <td class="font-medium">
                        <label for="bilangan_1">Masukkan Bilangan Pertama</label>
                        
                    </td>
                    <td class="px-4 font-medium">:</td>
                    <td>
                        <input type="number" name="bilangan_1" id="bilangan_1" class="pl-1 border border-slate-300 rounded-sm" required>
                    </td>
                </tr>
                <tr class="">
                    <td class="font-medium">
                        <label for="bilangan_2">Masukkan Bilangan Kedua</label>
                    </td>
                    <td class="px-4 font-medium">:</td>
                    <td>
                        <input type="number" name="bilangan_2" id="bilangan_2" class="pl-1 border border-slate-300 rounded-sm" required>
                    </td>
                </tr>
                <tr class="">
                    <td class="font-medium">
                        <label for="operasi">Pilih Operasi</label>
                    </td>
                    <td class="px-4 font-medium">:</td>
                    <td>
                        <select name="operasi" id="operasi" name="operasi" class="border w-full border-slate-300 p-1 rounded-sm">
                            <option value="penjumlahan">Penjumlahan (+)</option>
                            <option value="pengurangan">Pengurangan (-)</option>
                            <option value="perkalian">Perkalian (*)</option>
                            <option value="pembagian">Pembagian (/)</option>
                        </select>
                    </td>
                </tr>
                <tr class="">
                    <td colspan="3">
                        <button type="submit" name="hitung" class="bg-slate-800 hover:bg-slate-900 rounded-md py-2 text-white w-full font-medium">Hitung</button>
                    </td>
                </tr>
                <tr class="">
                    <td class="font-medium">Hasil Perhitungan</td>
                    <td class="px-4 font-medium">:</td>
                    <td class="font-bold"><?= $hasil; ?></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>