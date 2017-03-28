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
	$team = $_SESSION ["team"];
	$pvm = date ( "d.m.y" );

    $conn = create_mysqli_connection();
	?>


</head>
<body>
	<div id="header">
		<img alt="logo" src="layout/sonera_logo.png" height="51px"
			width="180px" />
		<div id="headermuuttujat">
			<a href="sose.php">Palaa soseeseen</a>
		</div>
	</div>

<?php

$syyt = "SELECT * FROM users WHERE user LIKE '$username'";
$result3 = mysqli_query ( $conn, $syyt );

$row = $result3->fetch_assoc ();

?>
<div id='usersettings'>
		<h2>Lisää väliaikainen painike</h2>
<?php 
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {

	$syyt = "INSERT INTO reasonit (area,skill,category,title,reason_l1,temp) VALUES ('$area', '$_POST[technique]', '$_POST[category]', '+ $_POST[lisatty_nappi]', '$_POST[lisatty_nappi]', '1')";

	if (mysqli_query ( $conn, $syyt )) {
		echo "<font color='green'>Uusi nappula lisätty onnistuneesti</font>";
	} else {
		echo "<font color='red'>Joku meni pieleen :(</font>";
	}
}
?>
		<form action="" method="post">
			<input type="radio" name="technique" value="Mob" checked>Mob<br> <input
					type="radio" name="technique" value="BB">BB<br><br>
			
			<input type="radio" name="category" value="Verkko" checked>Verkko<br>
					<input type="radio" name="category" value="Palvelu">Palvelu<br> <input
							type="radio" name="category" value="Muut">Muut<br><br>Kirjoita soitonsyyn nimi: <input
										type="text" name="lisatty_nappi" required="required"></input><br></br> <input
										type="submit"></input>
		
		</form>
		<hr>
		
		
		<h3>Väliaikaiset napit</h3>
<?php
$reason_l1t = "SELECT * FROM reasonit WHERE area LIKE 'b2ctap' AND temp=1";
$result3 = mysqli_query ( $conn, $reason_l1t );
if ($result3->num_rows > 0) {
	// output data of each row
	echo "<table><tr class='otsikko'><td>poista</td><td>id</td><td>skill</td><td>syy</td><td>kategoria</td></tr>";
	while ( $row = $result3->fetch_assoc () ) {
		echo "<tr><td><a href='delete_specific_reason.php?id=" . $row ["id"] . "'><font color='red'>Poista</font></a></td><td>" . $row ["id"] . "</td><td>" . $row ["skill"] . "</td><td>" . $row ["reason_l1"] . "</td><td>" . $row ["category"] . "</td></tr>";
	}
	echo "</table>";
} else {
	echo "0 results";
}

?>
<hr>
		
		
		<h2>Päivän kirjaukset</h2>
<?php

$syyt = "SELECT *, COUNT(*) as count FROM b2ctap JOIN users ON users.user = b2ctap.username WHERE b2ctap.pvm  LIKE '$pvm' AND b2ctap.channel LIKE 'Puhelu' AND users.team LIKE '$team' GROUP BY b2ctap.name, b2ctap.channel ORDER BY team, count DESC";
$result3 = mysqli_query ( $conn, $syyt );
if ($result3->num_rows > 0) {
	
	echo "<table><th>tiimi</th><th>ts id</th><th>nimi</th><th>puhelut</th><th>sähköposti</th><th>yht</th>";
	while ( $row = $result3->fetch_assoc () ) {
		$total = 0;
		echo "<tr><td>" . $row ["team"] . "</td><td>" . $row ["user"] . "</td><td>" . $row ["name"] . "</td><td>" . $row ["count"] . "</td>";
		$total += $row ["count"];
		
		$syyt3 = "SELECT *, COUNT(*) as count FROM b2ctap JOIN users ON users.user = b2ctap.username WHERE b2ctap.pvm LIKE '$pvm'  AND b2ctap.channel LIKE 'Sähköposti' AND b2ctap.username LIKE '$row[user]' GROUP BY b2ctap.name, b2ctap.channel ORDER BY team,b2ctap.name,count DESC";
		$result4 = mysqli_query ( $conn, $syyt3 );
		$row = $result4->fetch_assoc ();
		echo "<td>" . $row ["count"] . "</td>";
		$total += $row ["count"];
		
		echo "<td><b>" . $total . "</b></td></tr>";
	}
} else
	echo "Ei dataa";

echo "</table>";
echo "</div>";
drawFooter ()?>


</body>
</html>
