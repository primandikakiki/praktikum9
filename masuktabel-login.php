<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praktikum9";

//Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check Connection
if (!$conn) {
	die("Connection failed :".mysqli_connect_error());
}

$sql = "INSERT INTO login (username, password)
VALUES ('admin', 'admin123')";
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>