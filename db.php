<?php

$servername = "34.65.217.214";
$username = "webappuser";
$password = "asojfqw948rjq98wrj98ar";
$db = "wbt2122";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>