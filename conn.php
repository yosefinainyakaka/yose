<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web2";

    $conn = new mysqli($server, $username, $password, $dbname);

    if($conn->connect_error){
        die("Koneksi Gagal: ".$conn->connect_error);
    }
?>