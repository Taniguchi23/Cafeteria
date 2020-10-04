<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "cafeteria";

$connect = mysqli_connect($server,$username,$password,$database);

//try {
//$connect = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
//} catch (PDOException $e) {
//die('Connected failed: ' . $e->getMessage());
//}
?>