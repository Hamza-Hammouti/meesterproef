<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="submit.css">
    <title>Submit</title>
</head>
<body>
<?php

require_once "config.php";

    $id = $_GET['id'];

    $name=$_POST['name'];
    $max_players=$_POST['max_players'];
    $game_desc=$_POST['game_desc'];

    $updateItem = mysqli_query($db,"UPDATE game_data SET name='$name', max_players='$max_players', game_desc='$game_desc' WHERE id=$id");

    header("refresh:5;url=admin.php");
?>   

    <div class="container">
        <a>De gegevens zijn geupdate. <br> Je zal teruggestuurd worden in 5 seconden.</a>
    </div>
    <div class="redirect">
        <a href="admin.php">of klik hier.</a>
    </div>
</body>
</html>