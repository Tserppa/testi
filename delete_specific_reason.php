<?php
session_start ();

$servername = "localhost";
$username = "root";
$password = "teZatr16P";
$dbname = "test";
$poistettava = $_GET['id'];
$area = $_SESSION['area'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

	$sql  = "DELETE FROM reasonit WHERE id LIKE '$poistettava'";

if ($conn->query($sql) === TRUE) {
	echo "<script>window.location.replace('./managersettings.php');</script>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	break;
}

?>