<?php   

require('../vendor/autoload.php');

if($_SERVER['HTTP_HOST'] != 'edge-ledger-website.herokuapp.com') {
    
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    $dotenv->required(['serverName', 'dbUsername', 'dbPassword', 'dbName', 'port']);
};

$serverName = $_ENV['serverName'];
$dbUsername = $_ENV['dbUsername'];
$dbPassword = $_ENV['dbPassword'];
$dbName = $_ENV['dbName'];
$port = $_ENV['port'];

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName, $port);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}