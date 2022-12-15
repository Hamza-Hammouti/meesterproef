<?php

require_once "config.php";

$show = mysqli_query($db,"SELECT * FROM game_data");

?>
<div class="container"><div class="adminGameRow"><a href="index.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </a><br><br></div>
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