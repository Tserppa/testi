<?php
date_default_timezone_set("Europe/Helsinki");
$stamp = date("d.m.y;H:i");
$stamp_readable = date("H:i");
$pvm = date("d.m.y");
$klo = date("H:i");
$reason_l1 = $_POST["reason_l1"];
$notice = $_POST["notice"];
$username = $_POST["username"];
$channel = $_POST["channel"];
$area = $_POST["area"];
$tech = $_POST["tech"];


echo $pvm ."<br>";

echo $klo ."<br>";

echo $reason_l1 ."<br>";

echo $notice ."<br>";

echo $username ."<br>";

echo $channel ."<br>";

echo $tech ."<br>";

echo $area ."<br>";
