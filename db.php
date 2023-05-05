<?php

$servername = "34.65.95.232";
$username = "Stasie";
$password = "AcPjH8";
$db = "wbt2122";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>