<?php include 'funktiot.php'; ?>
<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>SoSe | <?php echo $versio; ?></title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript"
            src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<?php
session_start();

if ($_SESSION ['loggedin'] != 1) {
    echo "<a href='index.php'>Kirjaudu sisään</a>";
    exit ();
}

$servername = "localhost";
$mysqlusername = "sose";
$password = "mr2eqNW49Z2sffCV";
$dbname = "test";
$conn = new mysqli ($servername, $mysqlusername, $password, $dbname);

$username = $_SESSION ["username"];
$name = $_SESSION ["realname"];
$area = $_SESSION ["area"];
$pw = $_SESSION ["pw"];
$pvm = date("d.m.y");
$time = date("H:i");
$stamp = date("Y-m-d h:i");
$channel = $_POST ["channel"];
$tech = $_POST ["tech"];
$skillit = $_SESSION ['skills'];
$manager = $_SESSION ['manager'];

$notice = $_POST ["notice"];
$address = $_POST ["address"];
$basestation_info = $_POST ["basestation_info"];

$reason_l1 = str_replace(array(
    "\r",
    "\n"
), "", $_POST ["reason_l1"]);

$reason_l2 = $_POST ["reason_l2"];

$_SESSION ["reason_l2"] = $reason_l2;

if ($reason_l2 == 'Ei toimi' && $_SESSION ["reason_l1"] == 'ADSL') {
    header("Location: lomakkeet/lomakkeet.php?lomake=adsl_eitoimi");
} else if ($reason_l2 == 'Pätkii' && $_SESSION ["reason_l1"] == 'ADSL') {
    header("Location: lomakkeet/lomakkeet.php?lomake=adsl_patkii");
}  else if ($reason_l2 == 'testinappi' && $_SESSION ["reason_l1"] == 'ADSL') {
    header("Location: lomakkeet/gpon_eitoimi.php");
}
?>

<body>
<div id="container">
    <div id="header">
        <img alt="logo" class="logo" src="layout/telia_logo.png" height="55px" width="55px" />
        <img alt="logo" class="logo" src="layout/teliasose.png" height="55px" width="110px" />
        <div id="headermuuttujat">
            <a href="usersettings.php">Asetukset</a> | <a href="loki.php">Loki</a>
            | <a href="vikalomakkeet.php">Vikalomakkeet</a> | <a
                    href="b2ctap_tilastot.php" target="_blank">B2C-tilastot</a> | <a
                    href="b2btap_tilastot.php" target="_blank">B2B-tilastot</a><br>
            <?php
            if ($area == 'b2ctap') {
                echo "<a href='lomakkeet/lomakkeet.php?lomake=adsl_eitoimi'>ADSL - Ei toimi</a>";
                echo "<a href='lomakkeet/lomakkeet.php?lomake=adsl_patkii'> - Pätkii</a><br>";
            }
            if ($manager == 1) {
                echo "<a href='managersettings.php'>Managernäkymä</a><br>";
            }
            ?>
        </div>
    </div>

    <?php
    echo "<form action='sose.php' method='post'><input type='hidden' value='$username' name='username' /><input type='hidden' value='$area' name='area' />";

    // Tarkistetaan onko soitonsyy kaksitasoinen
    // Jos on niin piirretään uudet painikkeet
    //
    $syyt = "SELECT * FROM reasons_l2 WHERE reason_l1 LIKE '$reason_l1'";
    $result3 = mysqli_query($conn, $syyt);
    if ($result3->num_rows > 0) {

        $_SESSION ["reason_l1"] = $_POST ["reason_l1"];

        ?>
        <?php
        $_SESSION ['channel'] = $channel;
        $_SESSION ['tech'] = $tech;

        echo "<div id='reasons_buttons' class='reasons_buttons'>";
        echo "<a class='musta' href='sose.php?back=1'>Palaa alkuun</a><br><br>";

        $row = $result3->fetch_assoc();

        if ($row ['basestation_info'] == 1) {
            echo "<input type='text' name='basestation_info' placeholder='Tukiasematieto'/><br>";
        }
        if ($row ['address'] == 1) {
            echo "<input type='number' name='address' placeholder='Postinumero'/><br>";
        }
        if ($row ['notice'] == 1) {
            echo "<input type='text' name='notice' placeholder='Lisätieto' value='$notice'/><br>";
        }
        $purettu = explode(",", $row ['reason_l2']);

        foreach ($purettu as $purettu1) {
            $reason_l2 = $purettu1;
            echo "<button id='$reason_l2' name='reason_l2' value='$reason_l2' type='submit'>$reason_l2</button>";
        }

        echo "</div>";
        echo "<input type='hidden' value='$tech' name='tech' /><input type='hidden' value='$channel' name='channel' />";
    } else {

        //Tallenna, jos yksitasoinen
        if ($reason_l1 != '') {
            echo "<div id='pebble'><img src='layout/PebbleLoader.gif' height='55px' width='55px'></div>";

            $conn = new mysqli ($servername, $mysqlusername, $password, $dbname);
            $sql = "INSERT INTO $area (pvmtime, username, name, technique, channel, address, basestation_info, notice, reason_l1, reason_l2, reason_l3) VALUES('$stamp', '$username', '$name', '$tech', '$channel', '$address', 
'$basestation_info', '$notice', '$reason_l1', '$reason_l2', '$reason_l3')";
            if ($conn->query($sql) === TRUE) {
                $_SESSION ['last'] = $time . " " . $reason_l1;
                $_SESSION ["reason_l2"] = '';
            }
            $reason_l1 = '';

        }

        //Tallenna, jos kaksitasoinen
        if ($_SESSION ["reason_l2"] != '' && $paluu != 1) {
            echo "<div id='pebble'><img src='layout/PebbleLoader.gif' height='55px' width='55px'></div>";

            $conn = new mysqli ($servername, $mysqlusername, $password, $dbname);
            $sql = "INSERT INTO $area (pvmtime, username, name, technique, channel, address, basestation_info, notice, reason_l1, reason_l2, reason_l3) VALUES('$stamp', '$username', '$name', '$tech', '$channel', '$address', 
'$basestation_info', '$notice', '$_SESSION[reason_l1]', '$reason_l2', '$reason_l3')";
            if ($conn->query($sql) === TRUE) {
                $_SESSION ["reason_l2"] = '';
                $_SESSION ['last'] = $time . " " . $_SESSION["reason_l1"];
            }

            $reason_l1 = $reason_l2 = '';
        }

        //Piirrä tekniikat
        if ($reason_l1 == '') {

            echo "<div class='channel' id='channel'>";

            $syyt = "SELECT skills FROM users WHERE user LIKE '$username'";
            $result3 = mysqli_query($conn, $syyt);

            $row = $result3->fetch_assoc();
            $purettu = explode(",", $row [skills]);

            foreach ($purettu as $purettu1) {
                echo "<input type='radio' onclick='nayta$purettu1()' id='$purettu1' name='tech' value='$purettu1'><label for='$purettu1'>$purettu1</label>";
            }
            echo "<br>";

            $syyt = "SELECT * FROM channels WHERE area LIKE '$area'";
            $result3 = mysqli_query($conn, $syyt);
            if ($result3->num_rows > 0) {
                $row = $result3->fetch_assoc();
                echo "<input type='radio' id='$row[channel]' name='channel' value='$row[channel]' checked='checked'><label for='$row[channel]'>$row[channel]</label>";
                while ($row = $result3->fetch_assoc()) {
                    echo "<input type='radio' id='$row[channel]' name='channel' value='$row[channel]'><label for='$row[channel]'>$row[channel]</label>";
                }
            }
            $lastChannel = checkLastChannel($username);
            $lastTech = checkLastTech($username, $area);

            echo "<script>radiobtn = document.getElementById('$lastChannel');radiobtn.checked = true;</script>";
            echo "<script>radiobtn = document.getElementById('$lastTech');radiobtn.checked = true;</script>";


            echo "<input type='text' name='notice' placeholder='Lisätieto' />";

            echo "</div>";

            echo "<div id=sivupalkkinavi>";
            // echo "<div id=tehot>54%</div>";
            echo "Viimeisin kirjaus: " . $_SESSION ['last'];
            echo "<br>";
            haeSuoritteet($area, $username);

            echo "</div>";
        }

        //
        //
        // Hae napit

        if ($area == 'b2btap') {
            haeb2btap();
        } else if ($area == 'b2ctap') {
            haeb2ctap();
        } else {
            haetekno();
        }
    }

    ?>

    <div id="sivupalkki" hidden>
        <div id="sivupalkkiylä">
            </a> <a class="musta" href="#" onclick="naytaLomakkeet();">
                <div id="sivunavi">Hidastunut</div>
            </a>
            <a class="musta" href="#" onclick="naytaPatkii();">
                <div id="sivunavi">Pätkii</div>
            </a> <a class="musta" href="#" onclick="naytaEikuuluvuutta();">
                <div id="sivunavi">Data ei liiku</div>
            </a>
            <div id="sivunavi">na</div>
        </div>
        <div id="sivupalkki_lomakkeet"><?php include "/lomakkeet/data_hidastunut.php"; ?></div>
        <div id="sivupalkki_patkii" hidden><?php include "/lomakkeet/data_patkii.php"; ?></div>
        <div id="sivupalkki_eikuuluvuutta" hidden><?php include "/lomakkeet/data_eikuuluvuutta.php"; ?></div>
    </div>

    <?php

    if ($area != "tekno") {
        ?>
        <script>
            $('#sivupalkki').show();
            //$('#sivupalkkinavi').hide();
        </script>
        <?php
    }

    drawFooter();

    ?>
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
            document.getElementById('sivupalkki_patkii').style.display = "none";
            document.getElementById('sivupalkki_eikuuluvuutta').style.display = "none";
        }


        function naytaPatkii() {
            document.getElementById('sivupalkki_lomakkeet').style.display = "none";
            document.getElementById('sivupalkki_patkii').style.display = "block";
            document.getElementById('sivupalkki_eikuuluvuutta').style.display = "none";
        }

        function naytaEikuuluvuutta() {
            document.getElementById('sivupalkki_lomakkeet').style.display = "none";
            document.getElementById('sivupalkki_patkii').style.display = "none";
            document.getElementById('sivupalkki_eikuuluvuutta').style.display = "block";
        }

        function suurenna() {
            window.resizeTo(400, 960);
            document.getElementById('sivupalkki').style.display = "none";
        }
        nayta<?php echo $lastTech;?>();


    </script>

</body>
</html>
