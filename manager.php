<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>SoSe - manager-näkymä</title>
<link href="tilasto_style.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<link rel="stylesheet"
	href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	<script src="jquery-1.11.2.min.js"></script>
<?php
$page = $_SERVER ['PHP_SELF'];
$sec = "300";
header ( "Refresh: $sec; url=$page" );

$servername = "localhost";
$username = "root";
$password = "teZatr16P";
$dbname = "test";
$pvm = date ( "d.m.y" );

// Create connection
$conn = new mysqli ( $servername, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {
	die ( "Connection failed: " . $conn->connect_error );
}
echo "<div id='ylapalkki'>";
echo "<p>Sivu päivittyy automaattisesti 5min välein. Päivitetty klo " . date ( "H:i" ) . "</p>";
echo "<p><a href='tsmob_tilastot.php'>B2C MOB TAP</a> | <a href='tsbb_tilastot.php'>B2C BB TAP</a>| <a href='tsds_tilastot.php'>B2C Delivery</a><br><a href='b2bmob_tilastot.php'>B2B MOB TAP</a> | <a href='b2baspa_tilastot.php'>B2B Aspa</a></p>";
echo "</div>";
echo "<div id='vasen_palsta'><h2>Kirjausten määrä tiimeittäin tänään </h2>";
echo "<p class='tarkenne'></p><br>";

$syyt = "SELECT *, COUNT(*) as count FROM b2ctap JOIN users ON users.user = b2ctap.username WHERE b2ctap.pvm  LIKE '$pvm' AND b2ctap.channel LIKE 'Puhelu' GROUP BY b2ctap.name, b2ctap.channel ORDER BY team, count DESC";
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

?>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
	<script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'dd.mm.y' });
  } );
  </script>


	<br/><br/><br/><form method='post' action='manager.php'>

					<select name='tiimi'>
						<option value='Jkl1'>Jkl1</option>
						<option value='Jkl2'>Jkl2</option>
						<option value='Rvn'>Rvn</option>
						<option value='Tku1'>Tku1</option>
						<option value='Tku2'>Tku2</option>
					</select>
					<br> Päivämäärä: <input type='text' id='datepicker' name='pvm' value='<?php echo $_POST ['pvm'] ?>'> <input
							type='submit' name='submit' value='Hae'>
				
				</form>
				<br/>
		  <?php
				if (isset ( $_POST ['submit'] )) {
					$input_date = $_POST ['pvm'];
					$input_tiimi = $_POST ['tiimi'];
					
					$syyt = "SELECT *, COUNT(*) as count FROM b2ctap JOIN users ON users.user = b2ctap.username WHERE b2ctap.pvm  LIKE '$input_date' AND users.team LIKE '$input_tiimi' AND b2ctap.channel LIKE 'Puhelu' GROUP BY b2ctap.name, b2ctap.channel ORDER BY count DESC";
					$result3 = mysqli_query ( $conn, $syyt );
					if ($result3->num_rows > 0) {
						
						// output data of each row
						echo $getti . "<br>";
						echo "<table><h2>$input_tiimi - $input_date</h2><br>";
						echo "<th>tiimi</th><th>ts id</th><th>nimi</th><th>puhelut</th><th>sähköposti</th><th>yht</th>";
						while ( $row = $result3->fetch_assoc () ) {
							$total = 0;
							echo "<tr><td>" . $row ["team"] . "</td><td>" . $row ["user"] . "</td><td>" . $row ["name"] . "</td><td>" . $row ["count"] . "</td>";
							$total += $row ["count"];
							
							$syyt3 = "SELECT *, COUNT(*) as count FROM b2ctap JOIN users ON users.user = b2ctap.username WHERE b2ctap.pvm LIKE '$input_date' AND users.team LIKE '$input_tiimi' AND b2ctap.channel LIKE 'Sähköposti' AND b2ctap.username LIKE '$row[user]' GROUP BY b2ctap.name, b2ctap.channel ORDER BY team,b2ctap.name,count DESC";
							$result4 = mysqli_query ( $conn, $syyt3 );
							$row = $result4->fetch_assoc ();
							echo "<td>" . $row ["count"] . "</td>";
							$total += $row ["count"];
							
							echo "<td><b>" . $total . "</b></td></tr>";
						}
					} else
						echo "Ei dataa";
					
					echo "</table>";
				}
				
				echo "</div><div id='kesk_palsta'>";
				echo "</div>";
				
				echo "<div id='oikea_palsta'>";
				echo "<h2></h2>";
		
		echo "</div>";
		
		?>