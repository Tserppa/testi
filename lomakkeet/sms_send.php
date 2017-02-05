<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Kanjoni | SDI</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<?php
$servername = "localhost";
$mysqlusername = "web";
$password = "4xPRp5feSNGq4CM3";
$dbname = "vht";

$conn = new mysqli ( $servername, $mysqlusername, $password, $dbname );

if (isset ( $_POST ['submit'] )) {
	$lahettaja = $_POST ['sender'];
	$vastaanottaja = $_POST ['receiver'];
	$sisalto = $_POST ['content'];
	
	$osoite = "http://sisuvius.etela.sonera.fi:8887/send?to=$vastaanottaja&from=$lahettaja&msg=$sisalto";
	
	header("Location: ".$osoite."");
}

?>

