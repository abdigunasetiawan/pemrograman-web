<?php

include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Mahasiswa</title>

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

<body class="font-inter py-8">

    <div class="text-center mb-8">
        <h1 class=" text-slate-800 text-3xl font-bold mb-4">Mahasiswa</h1>
        <a href="form-tambah.php" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Data</a>
    </div>

    <div class="container mx-auto lg:px-16">
        <div class=" overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right  ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NPM
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Prodi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM biodata order by NPM ASC";
                    $result = $mysqli->query($query);
                    $no = 0;
                    while ($row = $result->fetch_assoc()) {
                        $no++;
                    ?>
                        <tr class="bg-white ">
                            <td class="px-6 py-4"><?= $no; ?></td>
                            <td class="px-6 py-4"><?= $row['npm']; ?></td>
                            <td class="px-6 py-4"><?= $row['nama']; ?></td>
                            <td class="px-6 py-4"><?= $row['prodi']; ?></td>
                            <td>
                                <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2  focus:outline-none " href="<?= 'form-edit.php?id=' . $row['id']; ?>">Edit</a>
                                <a class="text-white bg-red-600  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2  focus:outline-none " href="<?= 'proses.php?action=delete&id=' . $row['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>

<?php

?>