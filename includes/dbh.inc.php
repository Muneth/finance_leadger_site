<?php   

require('../vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// using mysqli procedural way to connect to the database...
// not using normal mySQL way 

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName, $port);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}