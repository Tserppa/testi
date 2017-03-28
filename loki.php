<?php include 'funktiot.php';?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>SoSe | <?php echo $versio;?></title>
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="header">
        <!--<img alt="logo" src="layout/sonera_logo.png" height="51px"
            width="180px" />-->
		<div id="headermuuttujat">
		<?php
		session_start ();
		$nimi = $_SESSION ["username"];
		$area = $_SESSION ['area'];
		$pvm = date ( "d.m.y" );

		echo "<a class='header' href='sose.php'>Palaa soseeseen</a>";
		
		$servername = "localhost";
		$mysqlusername = "sose";
		$password = "mr2eqNW49Z2sffCV";
		$dbname = "test";
		?>

		</div>
	</div>
	<?php
	
	$starttime = microtime ( true );
	$pvm = date ( "Y-m-d" );
	
	// Check connection
	if ($conn->connect_error) {
		die ( "Connection failed: " . $conn->connect_error );
	}
	echo '<div id="loki">';
	
	echo "<h2>Kappalemäärät</h2>";
	
	$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );
	
	$syyt = "SELECT channel, COUNT(channel) count FROM $area WHERE username LIKE '$nimi' AND pvmtime LIKE '%$pvm%' GROUP BY channel ";
	$result_info = mysqli_query ( $conn, $syyt );
	while ( $row = $result_info->fetch_assoc () ) {
		$suoritteet3 .= "<tr><td>" . $row ["channel"] . "</td><td>" . $row ["count"] . "</td></tr>";
	}
	
	echo "<p><table>" . $suoritteet3 . "</table></p>";
	echo "<h2>Tämän päivän kirjaukseni</h2>";
	
	$syyt = "SELECT * FROM $area WHERE username LIKE '$nimi' AND pvmtime LIKE '%$pvm%' ORDER BY id DESC";
	
	$result3 = mysqli_query ( $conn, $syyt );
	if ($result3->num_rows > 0) {
		// output data of each row
		echo "<table><tr><td>Poisto</td><td>pvm</td><td>klo</td><td>kanava</td><td>syy</td><td>syy2</td><td>info</td></tr>";
		while ( $row = $result3->fetch_assoc () ) {
			echo "<tr><td><a href='delete_specific_row.php?id=" . $row ["id"] . "'><font color='red'>Poista</font></a></td><td>" . $row ["pvmtime"] . "</td><td>" . $row ["channel"] . "</td><td>" . $row ["reason_l1"] . "</td><td>" . $row ["reason_l2"] . "</td><td>" . $row ["notice"] . "</td></tr>";
		}
		echo "</table>";
	} else {
		echo "<p>Tältä päivältä ei löytynyt kirjauksia :(</p>";
	}
	
echo "</div><div id='kaavio'></div>";
drawFooter();
	?>
	
		<?php
/*
$syyt = "SELECT technique, count(id) count FROM $area WHERE pvm LIKE '$pvm' GROUP BY technique";
$result3 = mysqli_query ( $conn, $syyt );

?>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript"
	src="https://www.gstatic.com/charts/loader.js"></script>
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
                       'legend': 'right',
                       backgroundColor: "transparent",
                       pieSliceTextStyle: {
                           color: 'black',
                       },
                       };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('kaavio'));
        chart.draw(data, options);
      }
    </script>
<?php
*/
?>
</body>
</html>
