<?php
session_start ();
$username = $_SESSION ["username"];

$servername = "localhost";
	$mysqlusername = "web";
	$password = "4xPRp5feSNGq4CM3";
$dbname = "test";

$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );

$pw = $_POST ['password'];
$pwre = $_POST ['password_re'];
$pwmd5 = md5 ( $pw );

$sql = "UPDATE users SET pw='$pwmd5' WHERE user LIKE '$username'";

if ($pw != $pwre) {
	$_SESSION ["virhe"] = "<font color='red'>Väärä salasana</font>";
	header ( 'Location: usersettings.php' );
} else {
	if ($conn->query ( $sql ) === TRUE) {
		$_SESSION ["virhe"] = "<font color='green'>Salasana vaihdettu</font>";
		header ( 'Location: usersettings.php' );
	} else {
		echo "Error updating record: " . $conn->error;
	}
	
	$conn->close ();
}
?>