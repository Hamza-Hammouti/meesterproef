<?php

require_once "config.php";

$id = $_GET['id'];

?>
<div class="container">
    <div class="confirm"><a>Weet je zeker dat je dit wilt verwijderen?</a></div>
    <br><div class="yesOrNo"><a href="/meesterproef/delete.php?id=<?php echo $id?>"><button class="choiceYes">Ja</button></a><a href="admin.php"><button class="choiceNo">Nee</button></a></div>
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