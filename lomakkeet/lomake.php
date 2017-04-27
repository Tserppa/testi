<html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>SoSe | <?php echo $versio; ?></title>
    <link href="normalize.css" rel="stylesheet" type="text/css"/>
    <link href="lomake_style.css" rel="stylesheet" type="text/css"/>
    <link href="datepicker.css" rel="stylesheet" type="text/css"/>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#datepicker").datepicker({dateFormat: 'yy-mm-dd'});
        });
    </script>
</head>
<BODY>
<?php
session_start();
date_default_timezone_set('Europe/Helsinki');
$date = date('Y-m-d');

if (!empty($_POST)) {

    $_SESSION['liittyma'] = $_POST ["liittymanumero"];
    $_SESSION['puhnro'] = $_POST ["yhtnro"];
    $_SESSION['tunnus'] = $_POST ["userid"];
    $_SESSION['asiakaskuvaus'] = $_POST ["vikakuvaus"];
    $_SESSION['agenttikuvaus'] = $_POST ["info"];
    $_SESSION['alkoi'] = $_POST ["stamp_pvm"];
}
?>
<div id="lomake">
    <a href="../sose.php">Tallenna kontakti ja palaa soseeseen</a>
    <H3>GPON - Pätkii</H3>
    <?php
    include 'lomake_linkit.html';
    ?>
    <script src="funktiot.js"></script>