<?php include 'funktiot.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>SoSe | <?php echo $versio;?></title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/x-icon" href="favicon.ico" />
	<?php
	session_start ();
	
	if ($_SESSION ['loggedin'] != 1) {
		echo "<a href='index.php'>Kirjaudu sis��n</a>";
		exit ();
	}
	$username = $_SESSION ["username"];
	$area = $_SESSION ["area"];
	$pw = $_SESSION ["pw"];
	$pvm = date ( "d.m.y" );
	$time = date ( "H:i" );
	$channel = $_POST ["channel"];
	$tech = $_POST ["tech"];
	$skillit = $_SESSION ['skills'];
	
	$notice = $_POST ["notice"];
	$address = $_POST ["address"];
	$basestation_info = $_POST ["basestation_info"];
	
	$reason_l1 = str_replace ( array (
			"\r",
			"\n" 
	), "", $_POST ["reason_l1"] );
	$reason_l2 = $_POST ["reason_l2"];
	$reason_l1_temp = $_SESSION ["reason_l1_temp"];
	
	$_SESSION ["reason_l1"] = $reason_l1;
	$_SESSION ["reason_l2"] = $reason_l2;
	
	?>


</head>
<body>

	<div id="header">
		<img alt="logo" src="layout/sonera_logo.png" height="51px"
			width="180px" />
		<div id="headermuuttujat">
			<a href="usersettings.php">Asetukset</a> | <a href="loki.php">Loki</a>
			| <a href="vikalomakkeet.php">Vikalomakkeet</a>
		</div>
	</div>
	<div id="container">
		<script>
function naytaMob() {
    document.getElementById('reasons_buttons').style.display = "block";
    document.getElementById('reasons_buttons2').style.display = "none";
    document.getElementById("Mob").checked = true;
}

function naytaBB() {
    document.getElementById('reasons_buttons').style.display = "none";
    document.getElementById('reasons_buttons2').style.display = "block";
    document.getElementById("BB").checked = true;
}

function generoi() {
	var verkko = document.getElementById('verkko').value;
	var nopeus = document.getElementById('nopeus').value;
	var ajankohta = document.getElementById('ajankohta').value;
	var paikka = document.getElementById('paikka').value;
	var verkkolukitus = document.getElementById('verkkolukitus').value;
	var kayttajat = document.getElementById('kayttajat').value;
	var laite = document.getElementById('laite').value;
	var kentänvoimakkuus = document.getElementById('kentänvoimakkuus').value;
	var solu = document.getElementById('solu').value;
	var päätelaite = document.getElementById('päätelaite').value;

	document.getElementById('tuloste').value = "Mitä verkkoa asiakas käyttää: " + verkko + "\nMillä nopeudella yhteys toimii: " + nopeus + "\nMihin aikaan yhteys hidastuu: " 
	+ ajankohta + "\nOnko ongelma vain yhdessä paikassa: " + paikka + "\nOnko yhteys lukittu käytettävään verkkoon: " + verkkolukitus + "\nOnko muilla samoja ongelmia: " + 
	kayttajat + "\nOnko testattu toista laitetta: " + laite + "\nMikä kentänvoimakkuus laitteessa näkyy: " + kentänvoimakkuus + "\nTukiasema: " + solu + "\nPäätelaite: " + päätelaite;	

	document.getElementById('tuloste').focus();
	document.getElementById('tuloste').select();
	document.execCommand("copy");
}

</script>

	<?php
	
	echo "<form action='sose.php' method='post'><input type='hidden' value='$username' name='username' /><input type='hidden' value='$area' name='area' />";
	
	$servername = "localhost";
	$mysqlusername = "root";
	$password = "teZatr16P";
	$dbname = "test";
	$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );
	
	// Tarkistetaan onko soitonsyy kaksitasoinen
	// Jos on niin piirretään uudet painikkeet
	//
	$syyt = "SELECT * FROM reasons_l2 WHERE reason_l1 LIKE '$reason_l1'";
	$result3 = mysqli_query ( $conn, $syyt );
	if ($result3->num_rows > 0) {
		
		$_SESSION ['reason_l1_temp'] = $reason_l1;
		$_SESSION ['channel'] = $channel;
		$_SESSION ['tech'] = $tech;
		
		echo "<div id='reasons_buttons' class='reasons_buttons'>";
		
		$row = $result3->fetch_assoc ();
		
		if ($row [basestation_info] == 1) {
			echo "<input type='text' name='basestation_info' placeholder='Tukiasematieto'></input><br>";
		}
		if ($row [notice] == 1) {
			echo "<input type='text' name='notice' placeholder='Lisätieto'></input><br>";
		}
		if ($row [address] == 1) {
			echo "<input type='text' name='address' placeholder='Osoitetieto'></input><br>";
		}
		
		$purettu = explode ( ",", $row [reason_l2] );
		foreach ( $purettu as $purettu1 ) {
			$reason_l2 = $purettu1;
			// echo "<input type='radio' id='$reason_l2' name='reason_l2' value='$reason_l2' required><label for='$reason_l2'>$reason_l2</label><br>";
			echo "<button id='$reason_l2' name='reason_l2' value='$reason_l2' type='submit'>$reason_l2</button><br>";
		}
		
		echo "</div>";
		$reason_l1 = '';
		echo "<input type='hidden' value='$tech' name='tech' /><input type='hidden' value='$channel' name='channel' />";
	} else {
		
		//
		//
		//
		if ($reason_l1 != '') {
			$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );
			$sql = "INSERT INTO b2ctap (pvm, klo, username, technique, channel, address, basestation_info, notice, reason_l1, reason_l2, reason_l3) VALUES('$pvm', '$time', '$username', '$tech', '$channel', '$address', '$basestation_info', '$notice', '$reason_l1', '$reason_l2', '$reason_l3')";
			if ($conn->query ( $sql ) === TRUE) {
				$reason_l1 = '';
				$_SESSION ["reason_l1"] = $_SESSION ["reason_l2"] = '';
			}
		}
		
		if ($_SESSION ["reason_l2"] != '') {
			$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );
			$sql = "INSERT INTO b2ctap (pvm, klo, username, technique, channel, address, basestation_info, notice, reason_l1, reason_l2, reason_l3) VALUES('$pvm', '$time', '$username', '$tech', '$channel', '$address', '$basestation_info', '$notice', '$reason_l1_temp', '$reason_l2', '$reason_l3')";
			if ($conn->query ( $sql ) === TRUE) {
				$_SESSION ["reason_l1"] = $_SESSION ["reason_l2"] = '';
			}
			$reason_l1 = $reason_l2 = '';
		}
		
		//
		//
		//
		if ($reason_l1 == '') {
			echo "<div class='channel' id='channel'>";
			
			$i = 0;
			$skillit = explode ( ",", $skillit );
			foreach ( $skillit as $skilli ) {
				if ($i == 0) {
					echo "<input type='radio' onclick='nayta$skilli()' id='$skilli' name='tech' value='$skilli' checked='checked' required><label for='$skilli'>$skilli</label>";
				} else
					echo "<input type='radio' onclick='nayta$skilli()' id='$skilli' name='tech' value='$skilli'><label for='$skilli'>$skilli</label>";
				$i ++;
			}
			echo "<br><br>";
			echo "<input type='radio' id='IN-puhelu' name='channel' value='IN-puhelu' checked='checked'><label for='IN-puhelu'>IN-puhelu</label>";
			echo "<input type='radio' id='Sähköposti' name='channel' value='Sähköposti'><label for='Sähköposti'>Sähköposti</label>";
			echo "<input type='radio' id='Some' name='channel' value='Some'><label for='Some'>Some</label>";
			echo "</div>";
			
			echo "<div id=sivupalkkinavi></div>";
		}
		
		//
		//
		// Hae mobiilinapit
		
		$servername = "localhost";
		$mysqlusername = "root";
		$password = "teZatr16P";
		$dbname = "test";
		$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );
		
		$syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Mob'";
		$result3 = mysqli_query ( $conn, $syyt );
		
		echo '<div id="reasons_buttons" class="reasons_buttons">';
		
		if ($result3->num_rows > 0) {
			// output data of each row
			while ( $row = $result3->fetch_assoc () ) {
				
				echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[reason_l1]</button>";
				
				/*
				 * uudempi
				 * echo "<input type='radio' id='$row[reason_l1]' name='reason_l1'' value='$row[reason_l1]' required><label for='$row[reason_l1]'>$row[reason_l1]</label>";
				 */
				
				/*
				 * if ($row ['linebreak'] == 1) {
				 * echo "<input type='radio' id='$row[reason_l1]' name='reason_l1'' value='$row[reason_l1]' required><label for='$row[reason_l1]'>$row[reason_l1]</label><br>";
				 * } else {
				 * echo "<input type='radio' id='$row[reason_l1]' name='reason_l1'' value='$row[reason_l1]' required><label for='$row[reason_l1]'>$row[reason_l1]</label>";
				 * }
				 */
			}
		}
		echo "</div>";
		
		$syyt = "SELECT * FROM reasonit WHERE skill LIKE 'BB'";
		$result3 = mysqli_query ( $conn, $syyt );
		
		echo '<div id="reasons_buttons2" class="reasons_buttons">';
		
		if ($result3->num_rows > 0) {
			// output data of each row
			while ( $row = $result3->fetch_assoc () ) {
				
				echo "<button value='$row[reason_l1]' name='reason_l1' type='submit'>$row[reason_l1]</button>";
				
				/*
				 * echo "<input type='radio' id='$row[reason_l1]' name='reason_l1'' value='$row[reason_l1]' required><label for='$row[reason_l1]'>$row[reason_l1]</label>";
				 */
				
				/*
				 * if ($row ['linebreak'] == 1) {
				 * echo "<input type='radio' id='$row[reason_l1]' name='reason_l1'' value='$row[reason_l1]' required><label for='$row[reason_l1]'>$row[reason_l1]</label><br>";
				 * } else {
				 * echo "<input type='radio' id='$row[reason_l1]' name='reason_l1'' value='$row[reason_l1]' required><label for='$row[reason_l1]'>$row[reason_l1]</label>";
				 * }
				 */
			}
		}
	}
	
	echo "</div>";
	echo "";
	?>
	
	<div id="sivupalkki">
		
		<!-- <button type='submit'>Tallenna</button> -->

	</div>

	<div id="footer">
	
	<?php echo "<a href='ohje_$area.php'>Ohje</a>";?>
		| <a
			href="mailto:antti.leukkunen@teliasonera.com?subject=SoSe-palaute">Jätä
			palautetta</a> | <a href="about.php">Tietoa</a><br> <a class='header'
			href='logout.php'>Kirjaudu ulos [<?php echo $username . " / " . $area?>]</a>
	
	</div>
	<?php
	
	$servername = "localhost";
	$mysqlusername = "root";
	$password = "teZatr16P";
	$dbname = "test";
	$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );
	
	$syyt = "SELECT default_skill FROM users WHERE user LIKE '$username'";
	$result3 = mysqli_query ( $conn, $syyt );
	$row = $result3->fetch_assoc ();
	$oletus = $row ['default_skill'];
	?>
	<script>nayta<?php echo $oletus;?>()</script>

</body>
</html>
