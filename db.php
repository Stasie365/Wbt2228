<?php

$servername = "34.65.95.232";
$username = "root";
$password = "";
$db = "wbt2223";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>