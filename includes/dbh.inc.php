<?php   

$serverName = "host=mysql-21117-0.cloudclusters.net";
$dbUsername = "adminmuneth";
$dbPassword = "password";
$dbName = "phpproject01";

// using mysqli procedural way to connect to the database...
// not using normal mySQL way 

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}