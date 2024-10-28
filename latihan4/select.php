<?php
    $query = "SELECT * FROM mahasiswa";
    $result = $mysqli->query($query);
    while ($row = $result->fetch_assoc()) {
        echo $row['nama'];
    }
?>