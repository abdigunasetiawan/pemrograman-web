<?php

include "../../koneksi.php";
if ($_GET['action'] == 'insert') {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $query = "INSERT INTO biodata (npm, nama, prodi) VALUES ('$npm', '$nama', '$prodi')";
    $result = $mysqli->query($query);
    header("location:../../index.php?modul=biodata");
} else if ($_GET['action'] == 'update') {
    $id = $_GET['id'];
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $query = "UPDATE biodata SET npm='$npm', nama='$nama', prodi='$prodi' WHERE id=$id";
    $result = $mysqli->query($query);
    header("location:../../index.php?modul=biodata");
} else if ($_GET['action'] == 'delete') {
    $id = $_GET['id'];
    $query = "DELETE FROM biodata WHERE id=$id";
    $result = $mysqli->query($query);
    header("location:../../index.php?modul=biodata");
} else {
    header("location:../../index.php");
}
