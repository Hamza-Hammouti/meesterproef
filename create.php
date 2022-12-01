<?php
require_once "config.php";
?>
    <form action="submit2.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value=""><br>
        <label for="max_players">Max players:</label><br>
        <input type="text" id="max_players" name="max_players" value=""><br>
        <label for="game_desc">Game description:</label><br>
        <textarea id="game_desc" name="game_desc" rows="4" cols="50"></textarea><br>
        <label for="my_file">Game picture:</label><br>
        <input type="file" name="my_file" id="my_file"/><br><br>
        <input type="submit" value="Create">
    </form>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="create.css">
    <title>Create</title>
</head>
<body>
    
</body>
</html>