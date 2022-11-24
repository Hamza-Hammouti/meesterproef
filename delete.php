<?php

require_once "config.php";

$id = $_GET['id'];
$query = mysqli_query($db,"DELETE FROM game_data WHERE id = $id");

echo "De game is verwijderd.";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    
</body>
</html>