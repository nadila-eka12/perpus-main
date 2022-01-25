<?php 
    $server = "10.0.0.47";
    $user = "admin";
    $password = "Admin@123";
    $nama_database = "dbperpus";

    $db = mysqli_connect( $server, $user, $password, $nama_database);

    if (!$db) {
        die ("Gagal Terhubung dengan database: " . mysqli_connect_error());
    }
?>