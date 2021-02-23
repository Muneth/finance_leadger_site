<?php   

$serverName = "eu-cdbr-west-03.cleardb.net";
$dbUsername = "b26eaa157f67ab";
$dbPassword = "af8f126a";
$dbName = "heroku_e366f3f606a810e";

// using mysqli procedural way to connect to the database...
// not using normal mySQL way 

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}