<?php

require_once "config.php";

$id = $_GET['id'];
$query = mysqli_query($db,"DELETE FROM game_data WHERE id = $id");

echo nl2br("De game is verwijderd. \n Je zal teruggestuurd worden in 5 seconden.");
header("refresh:5;url=admin.php");


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