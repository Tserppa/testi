
<html>
<head>
<script type="text/javascript"
	src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<!--Load the AJAX API-->
<?php
$servername = "localhost";
$username = "root";
$password = "teZatr16P";
$dbname = "test";

$pvm = date ( "d.m.y" );

$conn = new mysqli ( $servername, $username, $password, $dbname );


$reason_l1t = "SELECT address, count(id) count FROM b2ctap WHERE address NOT LIKE '' GROUP BY ROUND(address, -3)";
$result3 = mysqli_query ( $conn, $reason_l1t );
if ($result3->num_rows > 0) {

	?>
		
<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type='text/javascript'>
     google.charts.load('current', {'packages': ['geochart']});
     google.charts.setOnLoadCallback(drawMarkersMap);

      function drawMarkersMap() {
      var data = google.visualization.arrayToDataTable([
        ['Country',  'Population'],

        <?php
        	while ( $row = $result3->fetch_assoc () ) {
        		echo "['$row[address]', $row[count]],";
        	}
        }
        ?>
      ]);

      var options = {
        sizeAxis: { minValue: 0, maxValue: 100 },
        region: 'FI', // Western Europe
        displayMode: 'markers',
        colorAxis: {colors: ['#a4ff52', '#ff0074']}, // orange to blue  
        
        backgroundColor: '#81d4fa',
        defaultColor: '#f5f5f5',
      
      };

      var chart = new google.visualization.GeoChart(document.getElementById('sivupalkki'));
      chart.draw(data, options);
    };
    </script>

<body>

	<div id="sivupalkki" style="width: 850px; height: 600px;"></div>
</body>
</html>