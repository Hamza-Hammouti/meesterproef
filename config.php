<?php
$db = mysqli_connect("localhost","root","","meesterproef");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
?>