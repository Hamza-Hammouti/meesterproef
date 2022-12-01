<?php

require_once "config.php";

$show = mysqli_query($db,"SELECT * FROM game_data");
?>


<?php
/*if (mysqli_num_rows($show) > 0) {
	while($row = mysqli_fetch_array($show)){
  		?><table><b><div class="adminGame"><a href="/meesterproef/edit.php?id=<?php echo $row["id"]?>" class="editButton">EDIT</a><a href="/meesterproef/confirm.php?id=<?php echo $row["id"]?>" class="editButton2">DELETE</a><?php echo " #". $row["id"]?></b><?php echo " - " .$row["name"]." - " ?> <b> <?php echo $row["max_players"];?></div></b><br></table>
        
        <?php
	}
}*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meesterproef</title>
    <link rel="stylesheet" href="style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');</style>
</head>
<body>
    <header><h1>Overzicht</h1></header>
    <div class="containertje">
        <div class="showGame"><a href="details.php?id=1"><img src="img/369x400.png"></a></div>
        <div class="showDesc"><a>Grand Theft Auto V<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, facilis.</a></div>
    </div>
    <div class="containertje">
        <div class="showGame"><a href="details.php?id=1"><img src="img/369x400.png"></a></div>
        <div class="showDesc"><a>Grand Theft Auto V<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, facilis.</a></div>
    </div>
    <div class="containertje">
        <div class="showGame"><a href="details.php?id=1"><img src="img/369x400.png"></a></div>
        <div class="showDesc"><a>Grand Theft Auto V<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, facilis.</a></div>
    </div>
    <div class="containertje">
        <div class="showGame"><a href="details.php?id=1"><img src="img/369x400.png"></a></div>
        <div class="showDesc"><a>Grand Theft Auto V<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, facilis.</a></div>
    </div>
    <br> 
</body>
</html>