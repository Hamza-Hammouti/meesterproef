<?php

require_once "config.php";

$sql = "SELECT id, name, max_players FROM game_data";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Gamename: " . $row["name"]. " - Max players: " . $row["max_players"]. "<br>";
  }
} else {
  echo "0 results";
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
    <header><h1>Overzicht</h1></header>
    <div class="row_1">
        <div class="showGame"><a href="details.php"><img src="img/369x400.png"></a></div>
        <div class="showGame"><a href="details.php"><img src="img/369x400.png"></a></div>
        <div class="showGame"><a href="details.php"><img src="img/369x400.png"></a></div>
        <div class="showGame_Last"><a href="details.php"><img src="img/369x400.png"></a></div>
    </div>
    <div class="row_2">
        <div class="showDesc"><a>{Gametitle} 1<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, facilis.</a></div>
        <div class="showDesc"><a>{Gametitle} 2<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, facilis.</a></div>
        <div class="showDesc"><a>{Gametitle} 3<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, facilis.</a></div>
        <div class="showDesc_Last"><a>{Gametitle} 4<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, facilis.</a></div>
    </div>
</body>
</html>