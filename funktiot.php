<?php
$versio = "1.4";

function refresh_page() {
	$page = $_SERVER ['PHP_SELF'];
	$sec = "300";
	header ( "Refresh: $sec; url=$page" );
}
function create_mysqli_connection() {
	$starttime = microtime ( true );
	$servername = "localhost";
	$username = "root";
	$password = "teZatr16P";
	$dbname = "silakka";
	$pvm = date ( "d.m.y" );
	
	// Create connection
	return new mysqli ( $servername, $username, $password, $dbname );
}
function haenapit($skilli, $area) {
	$servername = "localhost";
	$mysqlusername = "root";
	$password = "teZatr16P";
	$dbname = "test";
	$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );
	
	$syyt = "SELECT * FROM reasonit WHERE skill LIKE '$skilli' AND area LIKE '$area'";
	$result3 = mysqli_query ( $conn, $syyt );
	
	echo '<div id="reasons_buttons" class="reasons_buttons">';
	
	if ($result3->num_rows > 0) {
		// output data of each row
		while ( $row = $result3->fetch_assoc () ) {
			echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
		}
	}
	echo "</div>";
}

function haeb2ctap() {
	$servername = "localhost";
	$mysqlusername = "root";
	$password = "teZatr16P";
	$dbname = "test";
	$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );
	
	$syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Mob' AND area LIKE 'b2ctap' AND category LIKE 'Verkko'";
	$result3 = mysqli_query ( $conn, $syyt );
	
	echo '<div id="reasons_buttons" class="reasons_buttons"><h3>Verkko</h3>';
	
	if ($result3->num_rows > 0) {
		// output data of each row
		while ( $row = $result3->fetch_assoc () ) {
			echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
		}
	}
	
	$syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Mob' AND area LIKE 'b2ctap' AND category LIKE 'Palvelu'";
	$result3 = mysqli_query ( $conn, $syyt );
	
	echo '<h3>Palvelu</h3>';
	
	if ($result3->num_rows > 0) {
		// output data of each row
		while ( $row = $result3->fetch_assoc () ) {
			echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
		}
	}
	
	$syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Mob' AND area LIKE 'b2ctap' AND category LIKE 'Muut'";
	$result3 = mysqli_query ( $conn, $syyt );
	
	echo '<h3>Muut</h3>';
	
	if ($result3->num_rows > 0) {
		// output data of each row
		while ( $row = $result3->fetch_assoc () ) {
			echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
		}
	}
	
	echo "</div>";
	
$syyt = "SELECT * FROM reasonit WHERE skill LIKE 'BB' AND area LIKE 'b2ctap' AND category LIKE 'Verkko' ORDER BY title ASC";
	$result3 = mysqli_query ( $conn, $syyt );
	
	echo '<div id="reasons_buttons2" class="reasons_buttons"><h3>Verkko</h3>';
	
	if ($result3->num_rows > 0) {
		// output data of each row
		while ( $row = $result3->fetch_assoc () ) {
			echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
		}
	}
	
	$syyt = "SELECT * FROM reasonit WHERE skill LIKE 'BB' AND area LIKE 'b2ctap' AND category LIKE 'Palvelu' ORDER BY title ASC";
	$result3 = mysqli_query ( $conn, $syyt );
	
	echo '<h3>Palvelu</h3>';
	
	if ($result3->num_rows > 0) {
		// output data of each row
		while ( $row = $result3->fetch_assoc () ) {
			echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
		}
	}
	
	$syyt = "SELECT * FROM reasonit WHERE skill LIKE 'BB' AND area LIKE 'b2ctap' AND category LIKE 'Muut' ORDER BY title ASC";
	$result3 = mysqli_query ( $conn, $syyt );
	
	echo '<h3>Muut</h3>';
	
	if ($result3->num_rows > 0) {
		// output data of each row
		while ( $row = $result3->fetch_assoc () ) {
			echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
		}
	}
	
	
	echo "</div>";
}

function haeb2btap() {
	$servername = "localhost";
	$mysqlusername = "root";
	$password = "teZatr16P";
	$dbname = "test";
	$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );

	$syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Mob' AND area LIKE 'b2btap' AND category LIKE 'Verkko'";
	$result3 = mysqli_query ( $conn, $syyt );

	echo '<div id="reasons_buttons" class="reasons_buttons"><h3>Verkko</h3>';

	if ($result3->num_rows > 0) {
		// output data of each row
		while ( $row = $result3->fetch_assoc () ) {
			echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
		}
	}

	$syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Mob' AND area LIKE 'b2btap' AND category LIKE 'Palvelu'";
	$result3 = mysqli_query ( $conn, $syyt );

	echo '<h3>Palvelu</h3>';

	if ($result3->num_rows > 0) {
		// output data of each row
		while ( $row = $result3->fetch_assoc () ) {
			echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
		}
	}

	$syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Mob' AND area LIKE 'b2btap' AND category LIKE 'Muut'";
	$result3 = mysqli_query ( $conn, $syyt );

	echo '<h3>Muut</h3>';

	if ($result3->num_rows > 0) {
		// output data of each row
		while ( $row = $result3->fetch_assoc () ) {
			echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
		}
	}

	echo "</div>";

	
	
	
	
	$syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Data' AND area LIKE 'b2btap' AND category LIKE 'Verkko'";
	$result3 = mysqli_query ( $conn, $syyt );
	
	echo '<div id="reasons_buttons2" class="reasons_buttons"><h3>Verkko</h3>';
	
	if ($result3->num_rows > 0) {
		// output data of each row
		while ( $row = $result3->fetch_assoc () ) {
			echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
		}
	}
	
	$syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Data' AND area LIKE 'b2btap' AND category LIKE 'Palvelu'";
	$result3 = mysqli_query ( $conn, $syyt );
	
	echo '<h3>Palvelu</h3>';
	
	if ($result3->num_rows > 0) {
		// output data of each row
		while ( $row = $result3->fetch_assoc () ) {
			echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
		}
	}
	
	$syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Data' AND area LIKE 'b2btap' AND category LIKE 'Muut'";
	$result3 = mysqli_query ( $conn, $syyt );
	
	echo '<h3>Muut</h3>';
	
	if ($result3->num_rows > 0) {
		// output data of each row
		while ( $row = $result3->fetch_assoc () ) {
			echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
		}
	}
	
	echo "</div>";
	
	
	
	$syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Puhe' AND area LIKE 'b2btap' AND category LIKE 'Verkko'";
	$result3 = mysqli_query ( $conn, $syyt );
	
	echo '<div id="reasons_buttons3" class="reasons_buttons"><h3>Verkko</h3>';
	
	if ($result3->num_rows > 0) {
		// output data of each row
		while ( $row = $result3->fetch_assoc () ) {
			echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
		}
	}
	
	$syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Puhe' AND area LIKE 'b2btap' AND category LIKE 'Palvelu'";
	$result3 = mysqli_query ( $conn, $syyt );
	
	echo '<h3>Palvelu</h3>';
	
	if ($result3->num_rows > 0) {
		// output data of each row
		while ( $row = $result3->fetch_assoc () ) {
			echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
		}
	}
	
	$syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Puhe' AND area LIKE 'b2btap' AND category LIKE 'Muut'";
	$result3 = mysqli_query ( $conn, $syyt );
	
	echo '<h3>Muut</h3>';
	
	if ($result3->num_rows > 0) {
		// output data of each row
		while ( $row = $result3->fetch_assoc () ) {
			echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
		}
	}
	
	echo "</div>";
	
}

function haetekno() {
	$servername = "localhost";
	$mysqlusername = "root";
	$password = "teZatr16P";
	$dbname = "test";
	$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );

	$syyt = "SELECT * FROM reasonit WHERE skill LIKE 'teknoskilli' AND area LIKE 'tekno' AND category LIKE 'tekno'";
	$result3 = mysqli_query ( $conn, $syyt );

	echo '<div id="reasons_buttons" class="reasons_buttons">';

	if ($result3->num_rows > 0) {
		// output data of each row
		while ( $row = $result3->fetch_assoc () ) {
			echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
		}
	}
	echo "</div>";
}

function haeSuoritteet($area, $username) {
	$servername = "localhost";
	$mysqlusername = "root";
	$password = "teZatr16P";
	$dbname = "test";
	$pvm = date ( "d.m.y" );
	
	$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );
	
	$syyt = "SELECT channel, count(id) count FROM $area WHERE username LIKE '$username' AND pvm LIKE '$pvm' GROUP BY channel ";
	$result3 = mysqli_query ( $conn, $syyt );

	if ($result3->num_rows > 0) {
		$suoritteet = 0;
		while ( $row = $result3->fetch_assoc () ) {
			echo $row [channel] . ": " . $row[count] . " ";	
			$suoritteet += $row[count];
		} echo "<br>" . round(($suoritteet/26)*100) . "%";
	}
}

function drawFooter(){
	echo "<div id='footer'><a href='ohje_$area.php'>Ohje</a>";
	
	echo "	| <a
			href='mailto:antti.leukkunen@teliasonera.com?subject=SoSe-palaute'>Jätä
			palautetta</a> | <a href='about.php'>Tietoa</a><br> <a class='header'
			href='logout.php'>Kirjaudu ulos [" . $_SESSION [realname] . " / " . $_SESSION[area] . "]</a></div>";
	
}

function checkLastChannel($username){
	$servername = "localhost";
	$mysqlusername = "root";
	$password = "teZatr16P";
	$dbname = "test";
	$pvm = date ( "d.m.y" );
	
	$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );
	
	$syyt = "SELECT channel FROM b2btap WHERE username LIKE '$username' ORDER BY ID DESC LIMIT 1 ";
	$result3 = mysqli_query ( $conn, $syyt );
	
	if ($result3->num_rows > 0) {
	
		while ( $row = $result3->fetch_assoc () ) {
			$lastChannel = $row[channel];
		}
	}
	return $lastChannel;
}

function checkLastTech($username, $area){
	$servername = "localhost";
	$mysqlusername = "root";
	$password = "teZatr16P";
	$dbname = "test";
	$pvm = date ( "d.m.y" );
	$lastTech = 'Mob';
	$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );

	$syyt = "SELECT technique FROM $area WHERE username LIKE '$username' ORDER BY ID DESC LIMIT 1 ";
	
	$result3 = mysqli_query ( $conn, $syyt );

	if ($result3->num_rows > 0) {

		while ( $row = $result3->fetch_assoc () ) {
			$lastTech = $row[technique];
		}
	}
	return $lastTech;
}

?>

