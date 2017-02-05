<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>SoSe BETA -tilasto</title>
<link href="tilasto_style.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<script src="jquery-1.11.2.min.js"></script>

<?php
$page = $_SERVER ['PHP_SELF'];
$sec = "300";
header ( "Refresh: $sec; url=$page" );
$alue = $_GET ['alue'];

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

echo "<div id='header'><table>";
$luku = 0;
$reason_l1t = "SELECT channel, count(id) count FROM b2ctap WHERE pvm LIKE '$pvm' GROUP BY channel";
$result3 = mysqli_query ( $conn, $reason_l1t );
if ($result3->num_rows > 0) {
	while ( $row = $result3->fetch_assoc () ) {
		echo "<tr><td class='nounderscore'>" . $row ["channel"] . ":</td><td class='nounderscore'> " . $row ["count"] . "kpl</td></tr>";
		$luku += $row ["count"];
	} echo "<tr><td class='nounderscore'><b>Yhteensä:</b></td><td class='nounderscore'><b>" . $luku . "kpl</b></td></tr></table>";
}

echo "</div>";


echo "<div id='vasen_palsta'></div><div id='lisäpalsta'></div>";

echo "<div id='kesk_palsta'>";
echo "<h2>Viimeisimmät kirjaukset</h2>";
echo "<p class='tarkenne'>Viimeiset 10kpl</p>";

echo "<p>";
$reason_l1t = "SELECT * FROM b2ctap ORDER BY id DESC LIMIT 10";
$result3 = mysqli_query ( $conn, $reason_l1t );
if ($result3->num_rows > 0) {
	echo "<table><tr class='otsikko'><td></td><td>Klo</td><td>Syy</td><td>Tarkenne</td></tr>";
	while ( $row = $result3->fetch_assoc () ) {
		if ($row ["channel"] == 'Sähköposti') {
			echo "<tr><td align='center'><img src='layout/envelope.jpg'></td><td>" . $row ["klo"] . "</td><td>" . $row ["reason_l1"] . "</td><td>" . $row ["reason_l2"] . "</td></tr>";
		} else if ($row ["channel"] == 'Puhelu') {
			echo "<tr><td align='center'><img src='layout/phone.png'></td><td>" . $row ["klo"] . "</td><td>" . $row ["reason_l1"] . "</td><td>" . $row ["reason_l2"] . "</td></tr>";
		}
	}
	echo "</table>";
}
echo "</p>";

$noticehaku = "SELECT reason_l1, notice, address, channel FROM b2ctap WHERE pvm LIKE '$pvm' and notice NOT LIKE '' ORDER BY id DESC LIMIT 10";
$result_notice = mysqli_query ( $conn, $noticehaku );

echo "<h2>Lisätietokirjaukset</h2>";
echo "<p class='tarkenne'>Viimeiset 10kpl</p>";

echo "<table><tr class='otsikko'><td></td><td>Syy</td><td>Lisätieto</td><td>Postinro</td></tr>";
echo "<p>";
if ($result_notice->num_rows > 0) {
	while ( $row = $result_notice->fetch_assoc () ) {
		$postinumero = $row ["address"];
		if ($row ["channel"] == 'Tausta') {
			echo "<tr><td><img src='layout/envelope.jpg'></td><td>" . $row ["reason_l1"] . "</td><td><i>" . $row ["notice"] . "</i></td><td><a href='http://www.google.fi/maps/place/$postinumero'>" . $row ["address"] . "</a></td></tr>";
		} else
			echo "<tr><td><img src='layout/phone.png'></td><td>" . $row ["reason_l1"] . "</td><td><i>" . $row ["notice"] . "</i></td><td><a href='http://www.google.fi/maps/place/$postinumero'>" . $row ["address"] . "</a></td></tr>";
	}
} else
	echo "Ei dataa";
echo "</p>";
echo "</table><br><br>";


$reason_l1t = "SELECT * FROM b2ctap WHERE pvm LIKE '$pvm' AND address NOT LIKE '' ORDER BY address ASC";

$result_notice = mysqli_query ( $conn, $reason_l1t );

echo "<h2>Paikkatietokirjaukset</h2>";
echo "<p class='tarkenne'>Viimeiset 30kpl - puhelut</p>";

echo "<table><tr class='otsikko'><td>Pvm</td><td>Klo</td><td>Syy</td><td>Postinro</td><td>Tukiasema</td><td>Kirjaaja</td></tr>";
echo "<p>";
if ($result_notice->num_rows > 0) {
	while ( $row = $result_notice->fetch_assoc () ) {
		echo "<tr><td>" .$row ["pvm"] . "</td><td>" . $row ["klo"] . "</td><td>" . $row ["reason_l1"] . "</td><td><a href='http://www.google.fi/maps/place/$row[address]'>" . $row ["address"] . "</td><td>" . $row ["basestation_info"] . "</td><td>" . $row ["name"] . "</td></tr>";
	}
} else
	echo "Ei dataa";
	echo "</p>";
	echo "</table><br><br>";

echo "</div><br>";

echo "<div id='oikea_palsta'>";

echo "</div>";


	?>
		
<script type="text/javascript"
	src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawMaterial);
    google.charts.setOnLoadCallback(drawMaterial2);

    function drawMaterial2() {
        var data3 = google.visualization.arrayToDataTable([

['Syy', 'Kappalemäärä'],

<?php

$reason_l1t = "SELECT reason_l1,channel,technique,COUNT(*) as count FROM b2ctap WHERE pvm LIKE '$pvm' AND technique LIKE 'Mob' GROUP BY reason_l1 ORDER BY count DESC LIMIT 20";
$result3 = mysqli_query ( $conn, $reason_l1t );
if ($result3->num_rows > 0) {


	while ( $row = $result3->fetch_assoc () ) {
		echo "['$row[reason_l1]', $row[count]],";
	}
}
?>
        ]);
        var view = new google.visualization.DataView(data3);
      
        var options3 = {
          chart: {
              subtitle: 'B2C TAP MOB tänään',
              'chartArea': {'width': '100%', 'height': '100%'},
                  
          },
          colors: ['#642887'],
          legend: { position: "none" },
          
          hAxis: {
            title: '',
            minValue: 0,
          },
          vAxis: {
            title: ''
          },
          bars: 'horizontal',
          axes: {
              x: {
                0: { side: 'top', label: 'kpl'} // Top x-axis.
              }
            },
            bar: { groupWidth: "90%" }
              
        };
        var material = new google.charts.Bar(document.getElementById('lisäpalsta'));
        material.draw(data3, options3);
      }


    
    function drawMaterial() {
          var data2 = google.visualization.arrayToDataTable([

['Syy', 'Kappalemäärä'],

<?php

$reason_l1t = "SELECT reason_l1,channel,technique,COUNT(*) as count FROM b2ctap WHERE pvm LIKE '$pvm' AND technique LIKE 'BB' GROUP BY reason_l1 ORDER BY count DESC LIMIT 20";
$result3 = mysqli_query ( $conn, $reason_l1t );
if ($result3->num_rows > 0) {


	while ( $row = $result3->fetch_assoc () ) {
		echo "['$row[reason_l1]', $row[count]],";
	}
}
?>
          ]);
          var view = new google.visualization.DataView(data2);
        
          var options2 = {
            chart: {
                title: "Soitonsyyt kappalemäärittäin",
                subtitle: 'B2C TAP BB tänään',
                'chartArea': {'width': '100%', 'height': '100%'},
                    
            },
            colors: ['#642887'],
            legend: { position: "none" },
            
            hAxis: {
              title: '',
              minValue: 0,
            },
            vAxis: {
              title: ''
            },
            bars: 'horizontal',
            axes: {
                x: {
                  0: { side: 'top', label: 'kpl'} // Top x-axis.
                }
              },
              bar: { groupWidth: "90%" }
                
          };
          var material = new google.charts.Bar(document.getElementById('vasen_palsta'));
          material.draw(data2, options2);
        }

    </script>

</head>