

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit</title>
    <link rel="stylesheet" href="submit.css">
</head>
<body>
    <?php

    require_once "config.php";

        $name=$_POST['name'];
        $max_players=$_POST['max_players'];
        $game_desc=$_POST['game_desc'];

        if (($_FILES['my_file']['name']!="")){
            // Where the file is going to be stored
                $target_dir = "img/";
                $file = $_FILES['my_file']['name'];
                $path = pathinfo($file);
                $filename = $path['filename'];
                $ext = $path['extension'];
                $temp_name = $_FILES['my_file']['tmp_name'];
                $path_filename_ext = $target_dir.$filename.".".$ext;
                $filenamedb = $filename.".".$ext;
             
            // Check if file already exists
            if (file_exists($path_filename_ext)) {
            ?>
            <div class="container">
                <a>Dit bestandsnaam bestaat al, verander uw bestandsnaam.<br> U zal teruggestuurd worden in 5 seconden.</a>
            </div>
            <div class="redirect">
                <a href="create.php">of klik hier.</a>
            </div>
            <?php
            header("refresh:5;url=create.php");
             }
             
             else{
             move_uploaded_file($temp_name,$path_filename_ext);
             ?>
            <div class="container">
                <a>De informatie is toegevoegd.<br> U zal teruggestuurd worden in 5 seconden.</a>
            </div>
            <div class="redirect">
                <a href="admin.php">of klik hier.</a>
            </div>
            <?php
            header("refresh:5;url=admin.php");
             }
            }

        $createItem = mysqli_query($db, "INSERT INTO game_data (id, name, max_players, game_desc, pic_name, home_pic) VALUES (NULL, '$name', '$max_players', '$game_desc', '$filenamedb', NULL)");
    ?>
</body>
</html>