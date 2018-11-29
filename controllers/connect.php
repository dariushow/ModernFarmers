<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "ECOMMERCE";

$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn) {
	die("connection failed" . mysqli_error($conn));
}

?>
