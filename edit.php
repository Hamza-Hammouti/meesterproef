<?php

require_once "config.php";
?>

<?php
$id = $_GET['id'];
$query = mysqli_query($db,"SELECT * FROM game_data WHERE id='$id'");
while($row=mysqli_fetch_array($query)){

        $name2 = $row["name"];
        $max_players2 = $row["max_players"];
        $game_desc2 = $row["game_desc"];
        ?>
            <form action="submit.php?id=<?php echo $row["id"]?>" method="post">

                <a href="admin.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </a><br><br>   
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" value="<?php echo $name2 ?>"><br>
                <label for="max_players">Max players:</label><br>
                <input type="text" id="max_players" name="max_players" value="<?php echo $max_players2 ?>"><br>
                <label for="game_desc">Game description:</label><br>
                <textarea id="game_desc" name="game_desc" rows="10" cols="54"><?php echo $game_desc2 ?></textarea><br><br>
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