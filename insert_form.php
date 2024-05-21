<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Movie</title>
    <link rel="stylesheet" href="display.css" />
</head>
<body>
    <form action="insert_movie.php" method="post">
        Name : <input type="text" name="Name" placeholder="Movie's Name" /><br />
        Year Release : <input type="number" name="Year_Release" placeholder="Movie's Year Release" /><br />
        Production House : <input type="text" name="Production_House" placeholder="Movie's Production House" /><br />
        <button type="submit" class="button primary-button mt-16">Create</button>
    </form>
</body>
</html>