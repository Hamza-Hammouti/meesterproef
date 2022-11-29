<?php

require_once "config.php";

$id = $_GET['id'];
$query = mysqli_query($db,"SELECT * FROM game_data WHERE id='$id'");
while($row=mysqli_fetch_array($query)){

        $name2 = $row["name"];
        $max_players2 = $row["max_players"];
        $game_desc2 = $row["game_desc"];
        ?>
            <form action="submit.php?id=<?php echo $row["id"]?>" method="post">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" value="<?php echo $name2 ?>"><br>
                <label for="max_players">Max players:</label><br>
                <input type="text" id="max_players" name="max_players" value="<?php echo $max_players2 ?>"><br>
                <label for="game_desc">Game description:</label><br>
                <textarea id="game_desc" name="game_desc" rows="4" cols="50"><?php echo $game_desc2 ?></textarea><br><br>
                <input type="submit" value="Save">
            </form>
        <?php
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <title>Edit</title>
</head>
<body>
    
</body>
</html>