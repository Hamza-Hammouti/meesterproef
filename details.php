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