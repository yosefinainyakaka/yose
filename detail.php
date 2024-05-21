<?php
    require_once "conn.php";
    
    $id = $_GET['id'];
    // echo $_GET['nama'];
    $query = "SELECT * FROM movie WHERE ID = {$id}";
    $getdata = mysqli_query($conn, $query);
    $data = [];
    $numrows = mysqli_num_rows($getdata);

    if ($numrows > 0) {
        while ($row = mysqli_fetch_assoc($getdata)) {
            $data[] = $row;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data[0]['Name'] ?> - Detail</title>
    <link rel="stylesheet" href="display.css">
</head>
<body>
    <form action="update_rows.php" method="POST">
        
        Nama : <?= "<input type='hidden' name='ID' value='{$data[0]['ID']}'> <input type='text' name='Name' value='{$data[0]['Name']}'>" ?><br />
        Tahun Rilis : <?= "<input type='number' name='Year_Release' value='{$data[0]['Year_Release']}'>"; ?><br />
        Rumah Produksi : <?= "<input type='text' name='Production_House' value='{$data[0]['Production_House']}'>"; ?><br />
        <button type="submit" class="button primary-button mt-16">Update</button>
    </form>
</body>
</html>