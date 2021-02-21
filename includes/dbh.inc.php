<?php   

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "phploginproject";

// using mysqli procedural way to connect to the database...
// not using normal mySQL way 

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}