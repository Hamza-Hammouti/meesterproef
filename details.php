<?php

require_once "config.php";

$id = $_GET['id'];
$query = mysqli_query($db,"SELECT * FROM game_data WHERE id='$id'");
while($row=mysqli_fetch_array($query))
{

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bg-details.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');</style>
</head>
<body>
        <div class="left-half">
            <div class="left-half-arrow">
                <a href="index.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </a>
                </div>
                <div class="main_pic"><img src="img/<?php echo $row["pic_name"] ?>"></div>
        </div>
        <div class="right-half">
            <div class="main_info">
                <div class="main_title"><a><?php echo $row["name"] ?></a></div>
                <div class="main_desc"><a><?php echo $row["game_desc"] ?></a></div>
                <div class="main_totalplayers"><a>Nog <?php echo $row["max_players"] ?> resterende plekken vrij.</a></div>
                <form action='' method='POST' onsubmit="return False">
                    <div class="main_join"><button type="submit" name="main_join">Join the game!</button></div>
                </form>
            </div>
        </div>
</body>
</html>
<?php
if(isset($_POST['main_join'])){
    $player_query = mysqli_query($db, "UPDATE game_data SET max_players = max_players - 1 WHERE id='$id'");
    echo "<meta http-equiv='refresh' content='0'>";
}
}
?>