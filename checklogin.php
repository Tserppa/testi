<?php
session_start ();
$salasana = $_POST ['password'];
$useri = $_POST ['username'];

$servername = "localhost";
$username = "root";
$password = "teZatr16P";
$dbname = "test";

$conn = new mysqli ( $servername, $username, $password, $dbname );

$syyt = "SELECT * FROM users WHERE user LIKE '$useri'";
$result3 = mysqli_query ( $conn, $syyt );

if ($result3->num_rows > 0) {
	// output data of each row
	while ( $row = $result3->fetch_assoc () ) {
		if (md5($_POST ['password']) == $row ['pw']) {
			$_SESSION ['username'] = strtolower ( $_POST ['username'] );
			$_SESSION ['area'] = $_POST ['area'];
			$_SESSION ['loggedin'] = 1;
			$_SESSION ['pw'] = $_POST ['password'];
			$_SESSION ['skills'] = $row['skills'];
			$_SESSION ['manager'] = $row['manager'];
			$_SESSION ['realname'] = $row['name'];
			$_SESSION ['team'] = $row['team'];
			$_SESSION ['default_skill'] = $row['default_skill'];
			
			echo "Voit sulkea tämän ikkunan";
			echo '<script>window.open("sose.php","winname","directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=1000,height=960");</script>';
		} else {
	echo "Väärä salasana";
	$_SESSION['username'] = '';
	header ( "Location: index.php?pw=1" );
	}
} 
}

?>