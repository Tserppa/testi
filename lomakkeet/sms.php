<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>SMS-optio</title>
<link href="lomake_style.css" rel="stylesheet" type="text/css" />

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

<script>
    window.onunload = refreshParent;

    
</script>
<?php
session_start ();
$liittymanumero = $_GET['ltunnus'];
$vastaanottaja = str_replace("-","", $_GET['yhtnro']);

?>
<h3>Lähetä SMS-optio:</h3>
<form accept-charset="iso-8859-1" action="sms_send.php" method="post">
	Viesti:<br><textarea name="content" class="sms">Ongelman jatkuessa ja varmistettuanne, ettei yhteysongelma johdu teidän laitteistanne, lähettäkää seuraava viesti numeroon 18100: vika <?php echo $liittymanumero;?>. T Sonera</textarea></br>
	Lähettäjän numero:<br><input class="sms" type="text" name="sender" value="18100"><br> 
	Vastaanottajan numero:<br><input class="sms" type="text" name="receiver" value="<?php echo $vastaanottaja;?>"><br><br>
	<input type='submit' name='submit' value='Lähetä'>
</form>