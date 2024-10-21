<?php

    if (isset($_POST['proses'])) {
        $nilai_mk1 = $_POST['mk-1'];
        $nilai_mk2 = $_POST['mk-2'];
        $nilai_mk3 = $_POST['mk-3'];
        $status_kelulusan = '';

        $total_nilai = 0;

        for($i = 1; $i <= 3; $i++) {
            $total_nilai += $_POST['mk-' . $i];
        }

        $nilai_rata_rata = $total_nilai / 3;
        if($nilai_rata_rata >= 60) {
            $status_kelulusan = 'Lulus 👍🏻';
        }
        else {
            $status_kelulusan = "Tidak Lulus 😂🫵🏻";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex justify-center items-center ">
    <div class="shadow max-w-lg p-8 rounded-md">
        <h1 class="text-2xl font-bold">Aplikasi Penilaian Mahasiswa</h1>
        <form method="post" class="mt-6 flex flex-col gap-3">
            <div class="flex flex-col gap-1">
                <label for="mk-1" class="font-medium text-black/80">Masukkan Nilai Mata Kuliah 1 :</label>
                <input class="border p-1 rounded-md" type="number" name="mk-1" min="0" max="100" required>
            </div>
            <div class="flex flex-col gap-1">
                <label for="mk-2" class="font-medium text-black/80">Masukkan Nilai Mata Kuliah 2 :</label>
                <input class="border p-1 rounded-md" type="number" name="mk-2" min="0" max="100" required>
            </div>
            <div class="flex flex-col gap-1">
                <label for="mk-3" class="font-medium text-black/80">Masukkan Nilai Mata Kuliah 3 :</label>
                <input class="border p-1 rounded-md" type="number" name="mk-3" min="0" max="100" required>
            </div>

            <button class="w-full mt-2 bg-blue-600 py-2.5  text-white font-medium rounded-md hover:bg-blue-700 focus:outline-blue-700 outline-offset-4" type="submit" name="proses">Proses</button>

            <div class="result">
                <table class="table-auto border-space-x-22">
                    <tr>
                        <td class="font-medium">Nilai Rata-rata</td>
                        <td class="px-2">:</td>
                        <td class="font-bold"><?= isset($_POST['proses']) ? $nilai_rata_rata : ('-');?></td>
                    </tr>
                    <tr>
                        <td class="font-medium">Status Kelulusan</td>
                        <td class="px-2">:</td>
                        <td class="font-bold"><?= isset($_POST['proses']) ? $status_kelulusan : ('-');?></td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</body>
</html>