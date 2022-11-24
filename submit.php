<?php

require_once "config.php";

    $id = 2;

    $name=$_POST['name'];
    $max_players=$_POST['max_players'];
    $game_desc=$_POST['game_desc'];

    $updateItem = mysqli_query($db,"UPDATE game_data SET name='$name', max_players='$max_players', game_desc='$game_desc' WHERE id=$id");

    echo "De gegevens zijn geupdate.";
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