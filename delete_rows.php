<?php
    require_once "conn.php";

    $query = "DELETE FROM movie WHERE ID = {$_GET['id']}";
    $getdata = mysqli_query($conn, $query);

    header("Location: index.php");
?>