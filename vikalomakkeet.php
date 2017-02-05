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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>
<body>

	<div id="header">
		<!--<img alt="logo" src="layout/sonera_logo.png" height="51px" width="180px" />-->
		<div id="headermuuttujat">
		<?php
		session_start ();
		$nimi = $_SESSION ["username"];
		$area = $_SESSION ['area'];
		$lomake = $_GET ['lomake'];
		
		echo "<a class='header' href='sose.php'>Palaa soseeseen</a>";
		
		$servername = "localhost";
		$mysqlusername = "root";
		$password = "teZatr16P";
		$dbname = "test";
		
		?>
	
		</div>
	</div>
	<div id="loki">
	
	<?php
	
	$starttime = microtime ( true );
	$pvm = date ( "d.m.y" );
	
	?>
		<a class="musta" href="vikalomakkeet.php?lomake=data_hidastunut">Data hidastunut</a>
	|
	<a class="musta" href="vikalomakkeet.php?lomake=data_patkii">Data pätkii</a> |
	<a class="musta" href="vikalomakkeet.php?lomake=ei_kuuluvuutta">Ei kuuluvuutta</a> | 
	<a class="musta" href="lomakkeet/bb_testi.php">BB-lomakkeet</a>

	<script>
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
	include '/lomakkeet/' . $lomake . '.php';
	
	echo "</div>";
	drawFooter();
	?>

</body>
</html>
