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
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript"
	src="https://www.gstatic.com/charts/loader.js"></script>
</head>
	<?php
	session_start ();
	
	if ($_SESSION ['loggedin'] != 1) {
		echo "<a href='index.php'>Kirjaudu sisään</a>";
		exit ();
	}
		
	$username = $_SESSION ["username"];
	$name = $_SESSION ["realname"];
	
	$area = $_SESSION ["area"];
	$pw = $_SESSION ["pw"];
	$pvm = date ( "d.m.y" );
	$time = date ( "H:i" );
	$channel = $_POST ["channel"];
	$tech = $_POST ["tech"];
	$skillit = $_SESSION ['skills'];
	$manager = $_SESSION ['manager'];
	
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
	
	
	if ($reason_l2 == 'Ei toimi' && $reason_l1_temp == 'ADSL'){
		header ( "Location: lomakkeet/adsl_eitoimi.php" );
	} else if ($reason_l2 == 'Pätkii' && $reason_l1_temp == 'ADSL'){
		header ( "Location: lomakkeet/adsl_patkii.php" );
	}
	
	?>

<?php
$servername = "localhost";
$mysqlusername = "web";
$password = "4xPRp5feSNGq4CM3";
$dbname = "test";
$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );

$syyt = "SELECT technique, count(id) count FROM $area WHERE pvm LIKE '$pvm' GROUP BY technique";
$result3 = mysqli_query ( $conn, $syyt );

?>
<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Kanava');
        data.addColumn('number', 'Määrä');
        data.addRows([ 

<?php

if ($result3->num_rows > 0) {
	
	while ( $row = $result3->fetch_assoc () ) {
		echo "['$row[technique]', $row[count] ],";
	}
}
?> 
			       		]);

        // Set chart options
        var options = {'title':'<?php echo strtoupper($area);?> - päivän kontaktijakauma',
                       'width':370,
                       'height':300,
                       'legend': 'bottom',
                       backgroundColor: "transparent",
                       pieSliceTextStyle: {
                           color: 'black',
                       },
                       };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('sivupalkki_suoritteet'));
        chart.draw(data, options);
      }
    </script>

<body>

	<div id="container">
		<script>
function naytaMob() {
    document.getElementById('reasons_buttons').style.display = "block";
    document.getElementById('reasons_buttons2').style.display = "none";
    document.getElementById('reasons_buttons3').style.display = "none";
}

function naytaData() {
    document.getElementById('reasons_buttons2').style.display = "block";
    document.getElementById('reasons_buttons3').style.display = "none";
    document.getElementById('reasons_buttons').style.display = "none";
}

function naytaPuhe() {
    document.getElementById('reasons_buttons3').style.display = "block";
	document.getElementById('reasons_buttons').style.display = "none";
    document.getElementById('reasons_buttons2').style.display = "none";
}

function naytaBB() {
    document.getElementById('reasons_buttons').style.display = "none";
    document.getElementById('reasons_buttons2').style.display = "block";
    document.getElementById("BB").checked = true;
}

function naytaLomakkeet() {
    document.getElementById('sivupalkki_lomakkeet').style.display = "block";
    document.getElementById('sivupalkki_suoritteet').style.display = "none";
    document.getElementById('sivupalkki_patkii').style.display = "none";
    document.getElementById('sivupalkki_eikuuluvuutta').style.display = "none";
}

function naytaSuoritteet() {
    document.getElementById('sivupalkki_lomakkeet').style.display = "none";
    document.getElementById('sivupalkki_suoritteet').style.display = "block";
    document.getElementById('sivupalkki_patkii').style.display = "none";
    document.getElementById('sivupalkki_eikuuluvuutta').style.display = "none";
}

function naytaPatkii() {
    document.getElementById('sivupalkki_lomakkeet').style.display = "none";
    document.getElementById('sivupalkki_suoritteet').style.display = "none";
    document.getElementById('sivupalkki_patkii').style.display = "block";
    document.getElementById('sivupalkki_eikuuluvuutta').style.display = "none";
}

function naytaEikuuluvuutta() {
    document.getElementById('sivupalkki_lomakkeet').style.display = "none";
    document.getElementById('sivupalkki_suoritteet').style.display = "none";
    document.getElementById('sivupalkki_patkii').style.display = "none";
    document.getElementById('sivupalkki_eikuuluvuutta').style.display = "block";
    
}

function suurenna() {
    window.resizeTo(400,960);  
    document.getElementById('sivupalkki').style.display = "none";
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
		?>
		<div id="header">
			<img alt="logo" src="layout/sonera_logo.png" height="51px"
				width="180px" />
			<div id="headermuuttujat">
				<a href="usersettings.php">Asetukset</a> | <a href="loki.php">Loki</a>
				| <a href="vikalomakkeet.php">Vikalomakkeet</a> | <a
					href="b2ctap_tilastot.php" target="_blank">B2C-tilastot</a> | <a
					href="b2btap_tilastot.php" target="_blank">B2B-tilastot</a><br>
					<?php 
				
					
					if ($manager == 1){
						echo "<a href='managersettings.php'>Managernäkymä</a><br>";
					}
					?>
					<br>
			</div>
		</div>
			

				<?php
		$_SESSION ['reason_l1_temp'] = $reason_l1;
		$_SESSION ['channel'] = $channel;
		$_SESSION ['tech'] = $tech;
		
		echo "<div id='reasons_buttons' class='reasons_buttons'>";
		echo "<a class='musta' href='sose.php?=back=1'>Palaa alkuun</a><br><br>";
		
		$row = $result3->fetch_assoc ();
		
		if ($row [basestation_info] == 1) {
			echo "<input type='text' name='basestation_info' placeholder='Tukiasematieto'></input><br>";
		}
		if ($row [address] == 1) {
			echo "<input type='number' name='address' placeholder='Postinumero'></input><br>";
		}
		if ($row [notice] == 1) {
			echo "<input type='text' name='notice' placeholder='Lisätieto' value='$notice'></input><br>";
		}
		$purettu = explode ( ",", $row [reason_l2] );
		foreach ( $purettu as $purettu1 ) {
			$reason_l2 = $purettu1;
			echo "<button id='$reason_l2' name='reason_l2' value='$reason_l2' type='submit'>$reason_l2</button>";
			
		}
		
		echo "</div>";
		$reason_l1 = '';
		echo "<input type='hidden' value='$tech' name='tech' /><input type='hidden' value='$channel' name='channel' />";
	} else {
		
		//
		//
		//
		if ($reason_l1 != '') {
			echo "<div id='pebble'><img src='layout/PebbleLoader.gif' height='51px' width='51px'></div>";
			
			$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );
			$sql = "INSERT INTO $area (pvm, klo, username, name, technique, channel, address, basestation_info, notice, reason_l1, reason_l2, reason_l3) VALUES('$pvm', '$time', '$username', '$name', '$tech', '$channel', '$address', '$basestation_info', '$notice', '$reason_l1', '$reason_l2', '$reason_l3')";
			if ($conn->query ( $sql ) === TRUE) {
				$_SESSION ['last'] = $time . " " . $reason_l1;
				$reason_l1 = '';
				$_SESSION ["reason_l1"] = $_SESSION ["reason_l2"] = '';
			}
			
			
		}
		
		if ($_SESSION ["reason_l2"] != '') {
			echo "<div id='pebble'><img src='layout/PebbleLoader.gif' height='51px' width='51px'></div>";
			
			$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );
			$sql = "INSERT INTO $area (pvm, klo, username, name, technique, channel, address, basestation_info, notice, reason_l1, reason_l2, reason_l3) VALUES('$pvm', '$time', '$username', '$name', '$tech', '$channel', '$address', '$basestation_info', '$notice', '$reason_l1_temp', '$reason_l2', '$reason_l3')";
			if ($conn->query ( $sql ) === TRUE) {
				$_SESSION ["reason_l1"] = $_SESSION ["reason_l2"] = '';
				$_SESSION ['last'] = $time . " " . $reason_l1_temp;
			}
			
			
			$reason_l1 = $reason_l2 = '';
			
		}
		
		?>
		<div id="header">
			<img alt="logo" src="layout/sonera_logo.png" height="51px"
				width="180px" />
			<div id="headermuuttujat">
				<a href="usersettings.php">Asetukset</a> | <a href="loki.php">Loki</a>
				| <a href="vikalomakkeet.php">Vikalomakkeet</a> | <a
					href="b2ctap_tilastot.php" target="_blank">B2C-tilastot</a> | <a
					href="b2btap_tilastot.php" target="_blank">B2B-tilastot</a><br>
					<?php	
					if ($area == 'b2ctap'){
						echo "<a href='lomakkeet/adsl_eitoimi.php'>ADSL - Ei toimi</a>";
						echo "<a href='lomakkeet/adsl_patkii.php'> - Pätkii</a><br>";
						
					}
					 
					if ($manager == 1){
						echo "<a href='managersettings.php'>Managernäkymä</a><br>";
					}
					?>
					
					<br>

			</div>
		</div>
	<?php
		
		//
		//
		//
		if ($reason_l1 == '') {
			
			echo "<div class='channel' id='channel'>";
			
			$syyt = "SELECT skills FROM users WHERE user LIKE '$username'";
			$result3 = mysqli_query ( $conn, $syyt );
			
			$row = $result3->fetch_assoc ();
			$purettu = explode ( ",", $row [skills] );
			
			foreach ( $purettu as $purettu1 ) {
				echo "<input type='radio' onclick='nayta$purettu1()' id='$purettu1' name='tech' value='$purettu1'><label for='$purettu1'>$purettu1</label>";
			}
			
			echo "<br>";
			
			$syyt = "SELECT * FROM channels WHERE area LIKE '$area'";
			$result3 = mysqli_query ( $conn, $syyt );
			if ($result3->num_rows > 0) {
				$row = $result3->fetch_assoc ();
				echo "<input type='radio' id='$row[channel]' name='channel' value='$row[channel]' checked='checked'><label for='$row[channel]'>$row[channel]</label>";
				while ( $row = $result3->fetch_assoc () ) {
					echo "<input type='radio' id='$row[channel]' name='channel' value='$row[channel]'><label for='$row[channel]'>$row[channel]</label>";
				}
			}
			$lastChannel = checkLastChannel ( $username );
			$lastTech = checkLastTech ( $username, $area );
			
			echo "<script>radiobtn = document.getElementById('$lastChannel');radiobtn.checked = true;</script>";
			echo "<script>radiobtn = document.getElementById('$lastTech');radiobtn.checked = true;</script>";
			
			if ($area != "tekno"){
			echo "<input type='text' name='notice' placeholder='Lisätieto'></input>";
			}
			echo "</div>";
			
			echo "<div id=sivupalkkinavi>";
			// echo "<div id=tehot>54%</div>";
			echo "Viimeisin kirjaus: " . $_SESSION ['last'];
			echo "<br>";
			haeSuoritteet ( $area, $username );
			
			echo "</div>";
		}
		
		//
		//
		// Hae napit
		
		if ($area == 'b2btap') {
			haeb2btap();
		} else if ($area == 'b2ctap'){
			haeb2ctap();
		} else {
			haetekno();
		}
	}
	
	echo "";
	?>
	
	<div id="sivupalkki">
			<div id="sivupalkkiylä">
				<a class="musta" href="#" onclick="naytaSuoritteet();"><div	id="sivunavi">Suoritteet</div></a> <a class="musta" href="#" onclick="naytaLomakkeet();"><div id="sivunavi">Hidastunut</div></a>
				<a class="musta" href="#" onclick="naytaPatkii();"><div id="sivunavi">Pätkii</div></a> <a class="musta" href="#" onclick="naytaEikuuluvuutta();"><div id="sivunavi">Data ei liiku</div></a>
				<div id="sivunavi">na</div>
			</div>
			<div id="sivupalkki_lomakkeet"><?php include "/lomakkeet/data_hidastunut.php";?></div>
			<div id="sivupalkki_patkii"><?php include "/lomakkeet/data_patkii.php";?></div>
			<div id="sivupalkki_eikuuluvuutta"><?php include "/lomakkeet/data_eikuuluvuutta.php";?></div>
			<div id="sivupalkki_suoritteet"></div>
	</div>
	
	<?php
	
	if ($area == "tekno"){
		?>
		<script type="text/javascript">
		$('#sivupalkki').hide();
		//$('#sivupalkkinavi').hide();
		</script>
		<?php 
	}
	
	drawFooter ();
	
	$servername = "localhost";
	$mysqlusername = "root";
	$password = "teZatr16P";
	$dbname = "test";
	$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );
	
	$syyt = "SELECT default_skill FROM users WHERE user LIKE '$username'";
	$result3 = mysqli_query ( $conn, $syyt );
	$row = $result3->fetch_assoc ();
	$oletus = $_SESSION ['default_skill'];
	
	?>
	<script>nayta<?php echo $lastTech;?>();</script>
		<script>
    document.getElementById('sivupalkki_lomakkeet').style.display = "block";
    document.getElementById('sivupalkki_suoritteet').style.display = "none";
    document.getElementById('sivupalkki_patkii').style.display = "none";
    document.getElementById('sivupalkki_eikuuluvuutta').style.display = "none";
    </script>

</body>
</html>
