<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="../../../tailwindcss/output.css" />

    <!-- Helper -->
    <script defer src="https://cdn.jsdelivr.net/gh/abdigunasetiawan/css-layout-helper/index.js"></script>
    <link defer rel="stylesheet" href="https://cdn.jsdelivr.net/gh/abdigunasetiawan/css-layout-helper/index.css" />
</head>

<body class="min-h-screen flex  justify-center items-center bg-slate-50">

    <div class="bg-white shadow-md p-8 flex flex-col ">

        <div class="">
            <h3 class="font-bold text-slate-800 mb-2">Tambah Mahasiswa</h3>
            <hr>
        </div>
        <form class="mt-4" action="<?= 'proses.php?action=insert' ?>" method="post">
            <div class="flex flex-col gap-1">
                <label class="block  text-sm font-medium text-gray-900 dark:text-white" for="npm">NPM</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="npm" id="npm"><br>
            </div>
            <div class=" flex flex-col gap-1">
                <label class="block  text-sm font-medium text-gray-900 dark:text-white" for="nama">Nama</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="nama" id="nama"><br>
            </div>
            <div class=" flex flex-col gap-1">
                <label class="block  text-sm font-medium text-gray-900 dark:text-white" for="prodi">Prodi</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="prodi" id="prodi">
                    <option value="Sistem Informasi (S1)">Sistem Informasi (S1)</option>
                    <option value="Teknik Informatika (S1)">Teknik Informatika (S1)</option>
                    <option value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>
                </select>
            </div>
            <input type="submit" value="Tambah" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4 w-full dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
        </form>
    </div>

</body>

</html>