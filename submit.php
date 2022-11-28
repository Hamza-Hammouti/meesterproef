<?php

require_once "config.php";

    $id = $_GET['id'];

    $name=$_POST['name'];
    $max_players=$_POST['max_players'];
    $game_desc=$_POST['game_desc'];

    $updateItem = mysqli_query($db,"UPDATE game_data SET name='$name', max_players='$max_players', game_desc='$game_desc' WHERE id=$id");

    echo nl2br("De gegevens zijn geupdate. \n Je zal teruggestuurd worden in 5 seconden.");
    header("refresh:5;url=admin.php");
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