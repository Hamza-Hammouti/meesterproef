<?php

require_once "config.php";

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
        <div class="showGame"><a href="details.php?id=1"><img src="img/369x400.png"></a></div>
        <div class="showGame"><a href="details.php?id=2"><img src="img/369x400.png"></a></div>
        <div class="showGame"><a href="details.php?id=3"><img src="img/369x400.png"></a></div>
        <div class="showGame_Last"><a href="details.php?id=4"><img src="img/369x400.png"></a></div>
    </div>
    <div class="row_2">
        <div class="showDesc"><a>Grand Theft Auto V<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, facilis.</a></div>
        <div class="showDesc"><a>Overwatch 2<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, facilis.</a></div>
        <div class="showDesc"><a>Battlefield 2042<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, facilis.</a></div>
        <div class="showDesc_Last"><a>Call of Duty MW II<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, facilis.</a></div>
    </div>
</body>
</html>