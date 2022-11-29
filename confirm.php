<?php

require_once "config.php";

$id = $_GET['id'];

?>
<div class="container">
    <div class="confirm"><a>Weet je zeker dat je dit wilt verwijderen?</a></div>
    <br><div class="yesOrNo"><button class="choiceYes"><a href="/meesterproef/delete.php?id=<?php echo $id?>">Ja</a></button><button class="choiceNo"><a href="admin.php">Nee</a></button></div>
</div>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="confirm.css">
    <title>Confirm</title>
</head>
<body>
    
</body>
</html>