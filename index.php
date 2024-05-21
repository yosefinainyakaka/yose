<?php
    require_once "conn.php";

    $getdata = mysqli_query($conn, "SELECT * FROM movie");
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
    <title>Movie Library</title>
    <link rel="stylesheet" href="display.css" />
</head>
<body>
    <a href="insert_form.php" class="utton primary-button mb-16">Create</a>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Tahun Rilis</td>
                <td>Rumah Produksi</td>
            </tr>
        </thead>
        <tbody>
            <?php
                for ($i=0; $i < $numrows; $i++) { 
                    echo "
                        <tr>
                            <td><a href='detail.php?id={$data[$i]['ID']}'>{$data[$i]['ID']}</a></td>
                            <td>{$data[$i]['Name']}</td>
                            <td>{$data[$i]['Year_Release']}</td>
                            <td>{$data[$i]['Production_House']}</td>
                            <td><a href='delete_rows.php?id={$data[$i]['ID']}' class='button danger-button'>hapus</a></td>
                        </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>