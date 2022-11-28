<?php

require_once "config.php";

    $name=$_POST['name'];
    $max_players=$_POST['max_players'];
    $game_desc=$_POST['game_desc'];

    $createItem = mysqli_query($db, "INSERT INTO game_data (id, name, max_players, game_desc, pic_name, home_pic) VALUES (NULL, '$name', '$max_players', '$game_desc', NULL, NULL)");
    echo "De informatie is toegevoegd.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit</title>
</head>
<body>
    
</body>
</html>