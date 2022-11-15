<?php

$dbname = "drinksify";
$username = "host";
$hostname = "localhost";
$password = "";

// $connection = mysqli_connect($hostname, $username, $dbname);

$conn = new mysqli($hostname, $username, $dbname);

session_start();

?>