<?php include 'funktiot.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>SoSe | <?php echo $versio;?></title>
<link href="stylesettings.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<script src="jquery-1.11.2.min.js"></script>
	<?php
	session_start ();
	if ($_SESSION ['loggedin'] != 1) {
		echo "<a href='index.php'>Kirjaudu sisään</a>";
		exit ();
	}
	$username = $_SESSION ["username"];
	$area = $_SESSION ["area"];
	
	$servername = "localhost";
	$mysqlusername = "web";
	$password = "4xPRp5feSNGq4CM3";
	$dbname = "test";
	
	?>
</head>
<body>
	<div id="header">
        <img alt="logo" class="logo" src="layout/telia_logo.png" height="55px" width="55px" />
		<img alt="logo" class="logo" src="layout/teliasose.png" height="55px" width="110px" />
		<div id="headermuuttujat">
			<a href="sose.php">Palaa soseeseen</a>
		</div>
	</div>

<?php
$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );

$syyt = "SELECT * FROM users WHERE user LIKE '$username'";
$result3 = mysqli_query ( $conn, $syyt );

$row = $result3->fetch_assoc ();

echo "<br><div id='usersettings'><table>";
echo "<tr><td>User</td><td>" . $username . "</td></tr><tr><td>Skillit</td><td>" . $row ['skills'] . "</td></tr><tr><td>Oletus</td><td>";
echo $row ['default_skill'] . "</td></tr><tr><td>Esimies</td><td>" . $row [manager] . "</td></tr><tr><td>Admin</td><td>" . $row [admin] . "</td></tr>";

// ///////////////////////////////////////////////////////
$syyt = "SELECT COUNT(id) AS numero FROM $area WHERE username LIKE '$username'";
$result3 = mysqli_query ( $conn, $syyt );
$row = $result3->fetch_assoc ();

echo "<tr><td>Kirjausten määrä:</td><td>" . $row ['numero'] . "</td></tr>";
echo "</table>";

if ($_SESSION [admin] == 1) {
	echo "<form class='settings' action='usersettings.php'><table>";
	echo "<tr><th>id</th><th>skilli</th><th>syy</th><th>Rivinvaihto</th></tr><tr>";
	
	$syyt = "SELECT * FROM reasonit";
	$result3 = mysqli_query ( $conn, $syyt );
	if ($result3->num_rows > 0) {
		while ( $row = $result3->fetch_assoc () ) {
			echo "<tr>";
			if ($row ['linebreak'] == 1) {
				echo "<td>" . $row ['id'] . ". </td><td>" . $row ['skill'] . "</td><td width='100%'><input type='text' value='$row[reason_l1]'></input></td><td><input type='checkbox' value='Rivinvaihto' checked></td>";
			} else {
				echo "<td>" . $row ['id'] . ". </td><td>" . $row ['skill'] . "</td><td><input type='text' value='$row[reason_l1]'></input></td><td><input type='checkbox' value='Rivinvaihto'></td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	
	echo "<input type='submit' value='Tallenna'>";
	echo "</form>";
}
?>
<h2>Vaihda salasana</h2>
<?php 
echo "<p>". $_SESSION["virhe"] . "</p><p>Kirjoita uusi salasana molempiin kenttiin ja paina nappulaa.</p><br>";
$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );

$syyt = "SELECT * FROM users WHERE user LIKE '$username'";
$result3 = mysqli_query ( $conn, $syyt );

$row = $result3->fetch_assoc ();


$_SESSION["virhe"] = "";
?>
<p>

<form action="changepassword.php" method="post"><table>
<tr><td>Salasana:</td><td><input type="password" name="password" required="required"></td></input></tr>
<tr><td>Salasana uudelleen:</td><td><input type="password" name="password_re" required="required"></input></tr>
<tr><td><input type="submit" value="Vaihda salasana"></td></tr>

</table></form>
</p>
<?php 
echo "</div>";
drawFooter ()?>
</body>
</html>
