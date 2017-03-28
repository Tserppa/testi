<?php
$versio = "1.4";
error_reporting(1);

function refresh_page()
{
    $page = $_SERVER ['PHP_SELF'];
    $sec = "300";
    header("Refresh: $sec; url=$page");
}

function create_mysqli_connection()
{
    $config = parse_ini_file('private/config.ini');
    $connection = mysqli_connect($config['servername'], $config['username'], $config['password'], $config['dbname']);

    return $connection;
}

function haeb2ctap()
{
    $conn = create_mysqli_connection();

    $syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Mob' AND area LIKE 'b2ctap' AND category LIKE 'Verkko'";
    $result3 = mysqli_query($conn, $syyt);

    echo '<div id="reasons_buttons" hidden><h3>Verkko</h3>';

    if ($result3->num_rows > 0) {
        // output data of each row
        while ($row = $result3->fetch_assoc()) {
            echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
        }
    }

    $syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Mob' AND area LIKE 'b2ctap' AND category LIKE 'Palvelu'";
    $result3 = mysqli_query($conn, $syyt);

    echo '<h3>Palvelu</h3>';

    if ($result3->num_rows > 0) {
        // output data of each row
        while ($row = $result3->fetch_assoc()) {
            echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
        }
    }

    $syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Mob' AND area LIKE 'b2ctap' AND category LIKE 'Muut'";
    $result3 = mysqli_query($conn, $syyt);

    echo '<h3>Muut</h3>';

    if ($result3->num_rows > 0) {
        // output data of each row
        while ($row = $result3->fetch_assoc()) {
            echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
        }
    }

    echo "</div>";

    $syyt = "SELECT * FROM reasonit WHERE skill LIKE 'BB' AND area LIKE 'b2ctap' AND category LIKE 'Verkko' ORDER BY title ASC";
    $result3 = mysqli_query($conn, $syyt);

    echo '<div id="reasons_buttons2"  hidden><h3>Verkko</h3>';

    if ($result3->num_rows > 0) {
        // output data of each row
        while ($row = $result3->fetch_assoc()) {
            echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
        }
    }

    $syyt = "SELECT * FROM reasonit WHERE skill LIKE 'BB' AND area LIKE 'b2ctap' AND category LIKE 'Palvelu' ORDER BY title ASC";
    $result3 = mysqli_query($conn, $syyt);

    echo '<h3>Palvelu</h3>';

    if ($result3->num_rows > 0) {
        // output data of each row
        while ($row = $result3->fetch_assoc()) {
            echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
        }
    }

    $syyt = "SELECT * FROM reasonit WHERE skill LIKE 'BB' AND area LIKE 'b2ctap' AND category LIKE 'Muut' ORDER BY title ASC";
    $result3 = mysqli_query($conn, $syyt);

    echo '<h3>Muut</h3>';

    if ($result3->num_rows > 0) {
        // output data of each row
        while ($row = $result3->fetch_assoc()) {
            echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
        }
    }


    echo "</div>";
}

function haeb2btap()
{
    $conn = create_mysqli_connection();


    $syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Mob' AND area LIKE 'b2btap' AND category LIKE 'Verkko'";
    $result3 = mysqli_query($conn, $syyt);

    echo '<div id="reasons_buttons"  hidden><h3>Verkko</h3>';

    if ($result3->num_rows > 0) {
        // output data of each row
        while ($row = $result3->fetch_assoc()) {
            echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
        }
    }

    $syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Mob' AND area LIKE 'b2btap' AND category LIKE 'Palvelu'";
    $result3 = mysqli_query($conn, $syyt);

    echo '<h3>Palvelu</h3>';

    if ($result3->num_rows > 0) {
        // output data of each row
        while ($row = $result3->fetch_assoc()) {
            echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
        }
    }

    $syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Mob' AND area LIKE 'b2btap' AND category LIKE 'Muut'";
    $result3 = mysqli_query($conn, $syyt);

    echo '<h3>Muut</h3>';

    if ($result3->num_rows > 0) {
        // output data of each row
        while ($row = $result3->fetch_assoc()) {
            echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
        }
    }

    echo "</div>";


    $syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Data' AND area LIKE 'b2btap' AND category LIKE 'Verkko'";
    $result3 = mysqli_query($conn, $syyt);

    echo '<div id="reasons_buttons2"  hidden><h3>Verkko</h3>';

    if ($result3->num_rows > 0) {
        // output data of each row
        while ($row = $result3->fetch_assoc()) {
            echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
        }
    }

    $syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Data' AND area LIKE 'b2btap' AND category LIKE 'Palvelu'";
    $result3 = mysqli_query($conn, $syyt);

    echo '<h3>Palvelu</h3>';

    if ($result3->num_rows > 0) {
        // output data of each row
        while ($row = $result3->fetch_assoc()) {
            echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
        }
    }

    $syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Data' AND area LIKE 'b2btap' AND category LIKE 'Muut'";
    $result3 = mysqli_query($conn, $syyt);

    echo '<h3>Muut</h3>';

    if ($result3->num_rows > 0) {
        // output data of each row
        while ($row = $result3->fetch_assoc()) {
            echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
        }
    }

    echo "</div>";


    $syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Puhe' AND area LIKE 'b2btap' AND category LIKE 'Verkko'";
    $result3 = mysqli_query($conn, $syyt);

    echo '<div id="reasons_buttons3"  hidden><h3>Verkko</h3>';

    if ($result3->num_rows > 0) {
        // output data of each row
        while ($row = $result3->fetch_assoc()) {
            echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
        }
    }

    $syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Puhe' AND area LIKE 'b2btap' AND category LIKE 'Palvelu'";
    $result3 = mysqli_query($conn, $syyt);

    echo '<h3>Palvelu</h3>';

    if ($result3->num_rows > 0) {
        // output data of each row
        while ($row = $result3->fetch_assoc()) {
            echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
        }
    }

    $syyt = "SELECT * FROM reasonit WHERE skill LIKE 'Puhe' AND area LIKE 'b2btap' AND category LIKE 'Muut'";
    $result3 = mysqli_query($conn, $syyt);

    echo '<h3>Muut</h3>';

    if ($result3->num_rows > 0) {
        // output data of each row
        while ($row = $result3->fetch_assoc()) {
            echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
        }
    }

    echo "</div>";

}

function haetekno()
{
    $conn = create_mysqli_connection();


    $syyt = "SELECT * FROM reasonit WHERE skill LIKE 'teknoskilli' AND area LIKE 'tekno' AND category LIKE 'tekno'";
    $result3 = mysqli_query($conn, $syyt);

    echo '<div id="reasons_buttons"  hidden>';

    if ($result3->num_rows > 0) {
        // output data of each row
        while ($row = $result3->fetch_assoc()) {
            echo "<button id='$row[reason_l1]' value='$row[reason_l1]' name='reason_l1' type='submit'>$row[title]</button>";
        }
    }
    echo "</div>";
}

function haeSuoritteet($area, $username)
{
    $conn = create_mysqli_connection();

    $pvm = date("Y-m-d");


    $syyt = "SELECT channel, count(id) count FROM $area WHERE username LIKE '$username' AND pvmtime LIKE '%$pvm%' GROUP BY channel ";
    $result3 = mysqli_query($conn, $syyt);

    if ($result3->num_rows > 0) {
        $suoritteet = 0;
        while ($row = $result3->fetch_assoc()) {
            echo $row [channel] . ": " . $row[count] . " ";
            $suoritteet += $row[count];
        }
        echo "<br>" . round(($suoritteet / 26) * 100) . "%";
    }
}

function drawFooter()
{
    echo "<div id='footer'><a href='ohje_$area.php'>Ohje</a>";

    echo "	| <a
			href='mailto:antti.leukkunen@teliasonera.com?subject=SoSe-palaute'>Jätä
			palautetta</a> | <a href='about.php'>Tietoa</a><br> <a class='header'
			href='logout.php'>Kirjaudu ulos [" . $_SESSION [realname] . " / " . $_SESSION[area] . "]</a></div>";

}

function checkLastChannel($username)
{
    $conn = create_mysqli_connection();


    $syyt = "SELECT channel FROM b2btap WHERE username LIKE '$username' ORDER BY ID DESC LIMIT 1 ";
    $result3 = mysqli_query($conn, $syyt);

    if ($result3->num_rows > 0) {

        while ($row = $result3->fetch_assoc()) {
            $lastChannel = $row[channel];
        }
    }
    return $lastChannel;
}

function checkLastTech($username, $area)
{
    $conn = create_mysqli_connection();

    $lastTech = 'Mob';

    $syyt = "SELECT technique FROM $area WHERE username LIKE '$username' ORDER BY ID DESC LIMIT 1 ";

    $result3 = mysqli_query($conn, $syyt);

    if ($result3->num_rows > 0) {

        while ($row = $result3->fetch_assoc()) {
            $lastTech = $row[technique];
        }
    }
    return $lastTech;
}

