<?php

require_once "config.php";

$show = mysqli_query($db,"SELECT * FROM game_data");
$count=1;

if (mysqli_num_rows($show) > 0) {
	while($row = mysqli_fetch_array($show)){
  		?><table><b><button><a href="edit.php?id=<?php echo $row["id"]?>">Edit</a></button><?php echo " ". $row["id"]?></b><?php echo " - " .$row["name"]." - " ?> <b> <?php echo $row["max_players"];?></b></table>
        <?php
        $count=$count+1;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminpanel</title>
</head>
<body>
    
</body>
</html>