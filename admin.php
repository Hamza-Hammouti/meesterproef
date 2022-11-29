<?php

require_once "config.php";

$show = mysqli_query($db,"SELECT * FROM game_data");

?>
<div class="container"><div class="adminGameRow"></div>
<?php
if (mysqli_num_rows($show) > 0) {
	while($row = mysqli_fetch_array($show)){
  		?><table><b><div class="adminGame"><a href="/meesterproef/edit.php?id=<?php echo $row["id"]?>" class="editButton">EDIT</a><a href="/meesterproef/confirm.php?id=<?php echo $row["id"]?>" class="editButton2">DELETE</a><?php echo " #". $row["id"]?></b><?php echo " - " .$row["name"]." - " ?> <b> <?php echo $row["max_players"];?></div></b><br></table>
        
        <?php
	}
}
?>
<br><a href="/meesterproef/create.php" class="editButton3">CREATE</a></div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="style.css">
    <title>Adminpanel</title>
</head>
<body>
    
</body>
</html>