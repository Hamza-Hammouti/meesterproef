<?php

require_once "config.php";

$show = mysqli_query($db,"SELECT * FROM game_data");
?>

<header><h1>Overzicht</h1><a href="admin.php">Adminpanel</a></header>
<?php
if (mysqli_num_rows($show) > 0) {
	while($row = mysqli_fetch_array($show)){
  		?>
        
        <div class="containertje">
            <div class="showGame"><a href="details.php?id=<?php echo $row["id"]?>"><img src="img/<?php echo $row["pic_name"]?>" alt="Picture unavailable"></a></div>
            <div class="showDesc"><a><?php echo $row["name"]?><br><br><?php echo $row["max_players"]?> spot(s) remaining.</a></div>
        </div>

        <?php
	}
}

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
</body>
</html>