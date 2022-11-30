


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="submit.css">
    <title>Delete</title>
</head>
<body>
    <?php
    require_once "config.php";

    $id = $_GET['id'];
    $query = mysqli_query($db,"DELETE FROM game_data WHERE id = $id");
    //header("refresh:5;url=admin.php");
    ?>
    <div class="container">
        <a>De game is verwijderd. <br> Je zal teruggestuurd worden in 5 seconden.</a>
    </div>
    <div class="redirect">
        <a href="admin.php">of klik hier.</a>
    </div>
</body>
</html>