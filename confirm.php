<?php

require_once "config.php";

$id = $_GET['id'];

echo "Weet je zeker dat je dit wilt verwijderen?";

?>
<br><hr><button><a href="/meesterproef/delete.php?id=<?php echo $id?>">Ja</a></button><button><a href="admin.php">Nee</a></button>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>
</head>
<body>
    
</body>
</html>