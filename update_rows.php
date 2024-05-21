<?php
    require_once "conn.php";

    $query = "UPDATE movie SET movie.Name = '{$_POST['Name']}', Year_Release = {$_POST['Year_Release']}, Production_House = '{$_POST['Production_House']}' WHERE ID = {$_POST['ID']}";
    $getdata = mysqli_query($conn, $query);

    header("Location: index.php");
?>