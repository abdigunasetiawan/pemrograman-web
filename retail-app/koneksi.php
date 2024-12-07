<?php

$mysqli = new mysqli("localhost", "root", "", "retailapp");
if ($mysqli->connect_error) {
    die("Koneksi gagal : " . $mysqli->connect_error);
}