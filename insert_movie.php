<?php
    require_once "conn.php";

    $data['Name'] = $_POST['Name'];
    $query = "SELECT MAX(ID) AS ID FROM movie";
    $getdata = mysqli_query($conn, $query);
    $iddata = [];
    $numrows = mysqli_num_rows($getdata);

    if ($numrows > 0) {
        while ($row = mysqli_fetch_assoc($getdata)) {
            $iddata[] = $row;
        }
    }
    $newid = $iddata[0]['ID']+1;

    $query = "INSERT INTO movie VALUES({$newid}, '{$_POST['Name']}', {$_POST['Year_Release']}, '{$_POST['Production_House']}')";
    $getdata = mysqli_query($conn, $query);

    header("Location: index.php");
?>