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
