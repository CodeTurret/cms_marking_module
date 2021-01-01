<?php

// make the database connection
$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "web_tech";

$conn = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?> 