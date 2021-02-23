<?php   

$serverName = "mysql-21117-0.cloudclusters.net";
$serverPort = "21123",
$dbUsername = "adminmuneth";
$dbPassword = "password";
$dbName = "phpproject01";

// using mysqli procedural way to connect to the database...
// not using normal mySQL way 

$conn = mysqli_connect($serverName, $serverPort, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}