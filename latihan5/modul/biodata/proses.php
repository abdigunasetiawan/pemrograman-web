<?php

$action = $_GET['action'];
if ($action == 'insert') {
   include "koneksi.php";

   $npm = $_POST['npm'];
   $nama = $_POST['nama'];
   $prodi = $_POST['prodi'];

   $query = "INSERT INTO biodata (npm, nama, prodi) VALUES ('$npm', '$nama', '$prodi')";
   $result = $mysqli->query($query);
   header('location:index.php');
} else if ($action == 'edit') {
   include "koneksi.php";
   $id = $_GET['id'];
   $npm = $_POST['npm'];
   $nama = $_POST['nama'];
   $prodi = $_POST['prodi'];
   $query = "UPDATE biodata SET npm='$npm', nama='$nama', prodi='$prodi' WHERE id = '$id'";
   $mysqli->query($query);
   header('location:index.php');
} else if ($action == 'delete') {
   require "koneksi.php";
   $id = $_GET['id'];
   $query = "DELETE FROM biodata WHERE id = '$id'";
   $result = $mysqli->query($query);
   header('location:index.php');
}
