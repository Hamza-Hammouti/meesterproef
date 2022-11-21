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
                <div class="main_title"><h3><?php echo $row["name"] ?></h3></div>
                <div class="main_desc"><a><?php echo $row["game_desc"] ?></a></div>
                <div class="main_totalplayers"><h3>Maximaal <?php echo $row["max_players"] ?> spelers.</h3></div>
                <div class="main_join"><button type="button">Join the game!</button></div>
            </div>
        </div>
</body>
</html>

<?php
}
?>