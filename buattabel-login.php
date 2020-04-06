<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praktikum9";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: ". mysqli_connect_error()); }
$sql = "CREATE TABLE login (
id INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
username VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL
)";
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: ". $sql . "<br>" . mysqli_error($conn); }
mysqli_close($conn);
?>