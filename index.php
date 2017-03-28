<?php
include 'funktiot.php';
session_start ();
header ( 'Content-Type: text/html; charset=utf-8' );

if ($_GET ['logout'] == 1) {
	echo "Hyvästi";
} else if ($_GET ['pw'] == 1) {
	echo "Väärä salasana";
} else
	echo "";

$_SESSION ['username'] = '1';
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>SoSe | <?php echo $versio;?>.</title>
<LINK href="stylelogin.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>Kirjaudu soitonsyyseurantaan:</h1>

	<section class="loginform cf">
		<form name="login" action="checklogin.php?login=1" method="post"
			accept-charset="utf-8">
			<ul>
				<li><label for="usermail">Käyttäjätunnus</label> <input id="nimi"
					type="text" name="username" placeholder="esim. LUD1745" required></li>
				<li><label for="password">Salasana</label> <input type="password"
					name="password" placeholder="Salasana" required></li>

				<li><label for="password">Alue</label> <select name="area">
						<option value="b2ctap">B2C TAP</option>
						<option value="b2btap">B2B TAP</option>
						<option value="tekno">Delivery</option>
				</select></li>

				<li><input type="submit" value="Login"></li>
			</ul>
		</form>
	</section>
</body>
</head>
</html>