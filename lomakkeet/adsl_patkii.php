﻿<html>
<?php include 'funktiot.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>SoSe | <?php echo $versio;?></title>
<link href="normalize.css" rel="stylesheet" type="text/css" />
<link href="lomake_style.css" rel="stylesheet" type="text/css" />
<link href="datepicker.css" rel="stylesheet" type="text/css" />

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script>
$( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>
</head>
<BODY>
<?php 
date_default_timezone_set ( 'Europe/Helsinki' );
$date = date ( 'Y-m-d' );
?>
<div id="lomake">
<a href="../sose.php">Tallenna kontakti ja palaa soseeseen</a>
	<H3>ADSL - Pätkii/Hidastelee</H3>
	

		<INPUT id="liittymanumero" type="text" placeholder="Liittymänumero" value="">
		<INPUT id="yhtnro" type="text" placeholder="Yhteyspuhelinnumero" value="">
		<INPUT id="userid" type="text" placeholder="Käyttäjätunnus" value="">
		
		<TEXTAREA id="vikakuvaus"  placeholder="Asiakkaan vikakuvaus"></TEXTAREA>
		
		<input type='text' id="datepicker" name='stamp_pvm' value='<?php echo $_POST ['pvm'];?>' placeholder="Milloin vika alkoi">	<br>

		<input type='hidden' name='tech' value='ADSL'>
		<!-- <input type='radio' onclick='' id='adsl' name='tech' value='ADSL' checked="checked"><label for='adsl'>ADSL/VDSL 333/346</label> -->
		<br>
		<input type='hidden' name='ongelma' value='Pätkii'>
		<!-- <input type='radio' ' id='Pätkii' name='ongelma' value='Pätkii' checked="checked"><label for='Pätkii'>Pätkii</label> -->
		
		 
		<form name='lomake' id='form' >
	<div id="fmerkki" class="koe">
	<h3>Modeemin merkki ja malli</h3>
 	<select id="merkki">
 	  <option value=""></option>
	  <option value="&#10;Zyxel">Zyxel</option>
	  <option value="&#10;Telewell">Telewell</option>
	  <option value="&#10;A-link">A-link</option>
	  <option value="&#10;D-link">D-link</option>
	  <option value="&#10;TP-link">TP-link</option>
	  <option value="&#10;Muu">Muu</option>
	</select>
	<input type="text" class="lyhyt" id="malli" placeholder="Modeemin malli"></input>
	</div>

	<div id="laatu" class="koe">
	<h3>Yhteyden laatu (kts. line history tool sekä ICA / NA-testi)</h3>
	<input type='radio' onclick='laatu_1();' id='laatu_1_id' name='laatu' value='&#10;ICA/NA: Yhteydessä ei vikaa'><label for='laatu_1_id'>Yhteydessä ei vikaa</label>
	<input type='radio' onclick='laatu_2();' id='laatu_2_id' name='laatu' value='&#10;ICA/NA: Tietoa ei saatavilla tai vaikea tulkita'><label for='laatu_2_id'>Tietoa ei saatavilla tai vaikea tulkita</label>
	<input type='radio' onclick='laatu_3();' id='laatu_3_id' name='laatu' value='&#10;ICA/NA: Yhteyden laatu / kättely on heikko'><label for='laatu_3_id'>Yhteyden laatu / kättely on heikko</label>
	</div>
	
	
	<div id="lahiverkko" class="koe">
	<h3>Pätkiikö testattaessa tietokoneella verkkokaapelilla suoraan modeemista?</h3>
	<input type='radio' onclick='lahiverkko_1();' id='lahiverkko_1_id' name='lahiverkko' value='&#10;Pätkii kaapelin kanssa'><label for='lahiverkko_1_id'>Kyllä</label>
	<input type='radio' onclick='lahiverkko_2();' id='lahiverkko_2_id' name='lahiverkko' value='&#10;Ei pätki kaapelin kanssa'><label for='lahiverkko_2_id'>Ei</label>
	<input type='radio' onclick='lahiverkko_3();' id='lahiverkko_3_id' name='lahiverkko' value='&#10;Ei pysty testaamaan kaapelilla'><label for='lahiverkko_3_id'>Ei pysty testaamaan</label>
	<input type='radio' onclick='lahiverkko_4();' id='lahiverkko_4_id' name='lahiverkko' value='&#10;Ei ole vielä testattu kaapelilla'><label for='lahiverkko_4_id'>Ei ole vielä testattu, SMS-optio</label>
	</div>
	
	<div id="toimintaohje" class="ohje"></div>

	<div id="takuulaite" class="koe">
	<h3>Oma vai takuunalainen?</h3>
	<input type='radio' onclick='takuulaite_1();' id='takuulaite1id' name='takuulaite' value='&#10;Laite on asiakkaan oma'><label for='takuulaite1id'>Asiakkaan oma laite</label>
	<input type='radio' onclick='takuulaite_2();' id='takuulaite2id' name='takuulaite' value='&#10;Laite on RGW / takuunalainen laite'><label for='takuulaite2id'>RGW / takuunalainen laite</label>
	</div>

	<div id="toimintaohje2" class="ohje"></div>
	<div id="toimintaohje3" class="ohje"></div>
	
	<div id="wlan" class="koe">
	<h3>Käyttääkö asiakas langatonta (Wi-Fi) yhteyttä?</h3>
	<input type='radio' onclick='wlan_1();' id='wlan_1_id' name='wlan' value='&#10;Käyttää Wi-Fiä / Ei osaa sanoa'><label for='wlan_1_id'>Kyllä / Ei osaa sanoa</label>
	<input type='radio' onclick='wlan_2();' id='wlan_2_id' name='wlan' value='&#10;Ei käytä Wi-Fiä'><label for='wlan_2_id'>Ei</label>
	</div>
	
		<div id="suoraanmodeemista" class="koe">
	<h3>Pätkiikö testattaessa tietokoneella verkkokaapelilla suoraan modeemista?</h3>
	<input type='radio' onclick='laatu_3();' id='suoraanmodeemista_1_id' name='suoraanmodeemista' value='&#10;Pätkii kaapelin kanssa'><label for='suoraanmodeemista_1_id'>Kyllä</label>
	<input type='radio' onclick='suoraanmodeemista_1();' id='suoraanmodeemista_2_id' name='suoraanmodeemista' value='&#10;Ei pätki kaapelin kanssa'><label for='suoraanmodeemista_2_id'>Ei</label>
	<input type='radio' onclick='suoraanmodeemista_2();' id='suoraanmodeemista_3_id' name='suoraanmodeemista' value='&#10;Ei pysty testaamaan kaapelilla'><label for='suoraanmodeemista_3_id'>Ei pysty testaamaan / Ei tietoa</label>
	</div>
	
	<div id="puhelinrasioita1" class="koe">
	<div id="testidivi">Huom</br>Toisella modeemilla testaaminen on suositeltavaa, sillä yhteysongelma saattaa johtua vaurioituneesta modeemista</div>
	<h3>Onko puhelinrasioita enemmän kuin yksi?</h3>
	<input type='radio' onclick='puhelinrasioita_1();' id='puhelinrasioita1id' name='puhelinrasioita1' value='&#10;Puhelinrasioita useampi, muttei testattu muissa'><label for='puhelinrasioita1id'>Kyllä, ei ole testattu muissa rasioissa</label>
	<input type='radio' onclick='puhelinrasioita_1();' id='puhelinrasioita2id' name='puhelinrasioita1' value='&#10;Modeemia on testattu toisessa puhelinrasiossa'><label for='puhelinrasioita2id'>Kyllä, modeemia on testattu toisessa rasiassa</label>
	<input type='radio' onclick='puhelinrasioita_1();' id='puhelinrasioita3id' name='puhelinrasioita1' value='&#10;Vain yksi puhelinrasia'><label for='puhelinrasioita3id'>Ei</label>
	<input type='radio' onclick='puhelinrasioita_1();' id='puhelinrasioita4id' name='puhelinrasioita1' value='&#10;Ei tiedossa, onko useampi puhelinrasia'><label for='puhelinrasioita4id'>Ei tiedossa</label>
	</div>
	
	<div id="toimintaohje4" class="ohje"></div>
	
	<div id="lankapuhelin_1" class="koe">
	<div id="testidivi">Huom</br>Muita laitteita ovat esim. UPS, ylijännitesuoja, Fax, varashälytin</div>
	<h3>Onko lankapuhelinta tai muita laitteita kytkettynä puhelinverkkoon?</h3>
	<input type='radio' onclick='lankapuhelin1();' id='lankapuhelin1_id' name='lankapuhelin' value='&#10;Ei lankapuhelinta tai muita laitteita'><label for='lankapuhelin1_id'>Ei</label>
	<input type='radio' onclick='lankapuhelin1();' id='lankapuhelin2_id' name='lankapuhelin' value='&#10;Lankapuhelin kytkettynä verkkoon'><label for='lankapuhelin2_id'>On puhelin, varmistakaa että puhelimen rasiassa on suodatin.</label>
	<input type='radio' onclick='lankapuhelin2();' id='lankapuhelin3_id' name='lankapuhelin' value='&#10;Puhelinverkossa myös '><label for='lankapuhelin3_id'>On joku muu laite, mikä? (avoin kenttä)</label>
	</div>
	
	<div id="toinenlaite" class="koe">
	<h3>Mikä laite?</h3>
	<input type="text" class="lyhyt" id="toinenlaite" placeholder="Mikä laite? "></input>
	</div>
	
	<div id="toimintaohje5" class="ohje"></div>
	
	<div id="toinenjohto" class="koe">
	<h3>Onko testattu puhelinrasian ja modeemin välillä toista johtoa ilman jatkojohtoa ja muita laitteita? </h3>
	<input type='radio' onclick='toinenjohto1();' id='toinenjohto1id' name='toinenjohto' value='&#10;Toinen johto testattu'><label for='toinenjohto1id'>Kyllä</label>
	<input type='radio' onclick='toinenjohto2();' id='toinenjohto2id' name='toinenjohto' value='&#10;Ei testattu toista johtoa, mutta pyydetty testaamaan'><label for='toinenjohto2id'>Pyydetty testaamaan</label>
	<input type='radio' onclick='toinenjohto1();' id='toinenjohto3id' name='toinenjohto' value='&#10;Ei halua/pysty testaamaan toista johtoa'><label for='toinenjohto3id'>Ei pysty tai halua testata</label>
	</div>

	<div id="takuulaite_2" class="koe">
	<h3>Kyse on WLAN / sisäverkko-ongelmasta?</h3>
	<input type='radio' onclick='takuulaite_2_1();' id='takuulaite_2_1_id' name='takuulaite_2' value='&#10;Laite on asiakkaan oma'><label for='takuulaite_2_1_id'>Asiakkaan oma laite</label>
	<input type='radio' onclick='takuulaite_2_2();' id='takuulaite_2_2_id' name='takuulaite_2' value='&#10;Laite on RGW / takuunalainen laite'><label for='takuulaite_2_2_id'>RGW / takuunalainen laite</label>
	</div>

	<div id="toimintaohje6" class="ohje"></div>

	<div id="tehdasasetukset2" class="koe">
	<h3>Auttaako tehdasasetusten palauttaminen toimimattomaan modeemiin?</h3>
	<input type='radio' onclick='tehdasasetukset21();' id='tehdasasetukset21id' name='tehdasasetukset' value='&#10;Tehdasasetuksien palauttaminen ei auttanut, eikä modeemia ole aiemmin vaihdettu'><label for='tehdasasetukset21id'>Kyllä, modeemia ei ole aiemmin vaihdettu tämän vian vuoksi.</label>
	<input type='radio' onclick='tehdasasetukset22();' id='tehdasasetukset22id' name='tehdasasetukset' value='&#10;Asiakas ei halua/pysty palauttamaan tehdasasetuksia'><label for='tehdasasetukset22id'>Ei pysty tai halua testata</label>
	<input type='radio' onclick='tehdasasetukset23();' id='tehdasasetukset23id' name='tehdasasetukset' value='&#10;Asiakas ei ole kotona, mutta testaa kun pystyy'><label for='tehdasasetukset23id'>Ei ole kotona, testaa sitten kun pystyy</label>
	<input type='radio' onclick='tehdasasetukset24();' id='tehdasasetukset24id' name='tehdasasetukset' value='&#10;Tehdasasetuksien palauttaminen ei auttanut ja modeemi on aiemmin vaihdettu'><label for='tehdasasetukset24id'>Kyllä, modeemi on jo vaihdettu tämän vian vuoksi</label>
	</div>

	<div id="toimintaohje7" class="ohje"></div>
			
			
	<div id="puhelinrasioita_2" class="koe">
	<div id="testidivi">Huom</br>Miksi? Kirjaa syy Agentin havainnot -kenttään</div>
	<h3>Onko puhelinrasioita enemmän kuin yksi?</h3>
	<input type='radio' onclick='puhelinrasioita2();' id='puhelinrasioita_2_1id' name='puhelinrasioita_2' value='&#10;Puhelinrasioita useampi, muttei testattu muissa'><label for='puhelinrasioita_2_1id'>Kyllä, ei ole testattu muissa rasioissa</label>
	<input type='radio' onclick='puhelinrasioita2();' id='puhelinrasioita_2_2id' name='puhelinrasioita_2' value='&#10;Modeemia on testattu toisessa puhelinrasiossa'><label for='puhelinrasioita_2_2id'>Kyllä, modeemia on testattu toisessa rasiassa</label>
	<input type='radio' onclick='puhelinrasioita2();' id='puhelinrasioita_2_3id' name='puhelinrasioita_2' value='&#10;Vain yksi puhelinrasia'><label for='puhelinrasioita_2_3id'>Ei</label>
	<input type='radio' onclick='puhelinrasioita2();' id='puhelinrasioita_2_4id' name='puhelinrasioita_2' value='&#10;Ei tiedossa, onko useampi puhelinrasia'><label for='puhelinrasioita_2_4id'>Ei tiedossa</label>
	</div>
	
	<div id="toimintaohje8" class="ohje"></div>
	
	<div id="lankapuhelin_2" class="koe">
	<div id="testidivi">Huom</br>Muita laitteita ovat esim. UPS, ylijännitesuoja, Fax, varashälytin</div>
	<h3>Onko lankapuhelinta tai muita laitteita kytkettynä puhelinverkkoon?</h3>
	<input type='radio' onclick='lankapuhelin2_1();' id='lankapuhelin_2_1_id' name='lankapuhelin_2' value='&#10;Ei lankapuhelinta tai muita laitteita'><label for='lankapuhelin_2_1_id'>Ei</label>
	<input type='radio' onclick='lankapuhelin2_1();' id='lankapuhelin_2_2_id' name='lankapuhelin_2' value='&#10;Lankapuhelin kytkettynä verkkoon'><label for='lankapuhelin_2_2_id'>On puhelin, varmistakaa että puhelimen rasiassa on suodatin.</label>
	<input type='radio' onclick='lankapuhelin2_1();' id='lankapuhelin_2_3_id' name='lankapuhelin_2' value='&#10;Puhelinverkossa myös '><label for='lankapuhelin_2_3_id'>On joku muu laite, mikä? (avoin kenttä)</label>
	</div>
	
	
	<div id="toimintaohje9" class="ohje"></div>
	
	<div id="toinenjohto_2" class="koe">
	<h3>Onko testattu puhelinrasian ja modeemin välillä toista johtoa ilman jatkojohtoa ja muita laitteita? </h3>
	<input type='radio' onclick='toinenjohto2_1();' id='toinenjohto_2_1id' name='toinenjohto_2' value='&#10;Toinen johto testattu'><label for='toinenjohto_2_1id'>Kyllä</label>
	<input type='radio' onclick='toinenjohto2_1();' id='toinenjohto_2_3id' name='toinenjohto_2' value='&#10;Ei halua/pysty testaamaan toista johtoa'><label for='toinenjohto_2_3id'>Ei pysty tai halua testata</label>
	</div>

	
	
	<div id="reititin" class="koe">
	<h3>Onko asiakkaalla kytkintä tai reititintä ennen tietokonetta?</h3>
	<input type='radio' onclick='reititin_1();' id='reititin_1_id' name='reititin' value='&#10;Ei kytkintä tai reititintä'><label for='reititin_1_id'>Kyllä</label>
	<input type='radio' onclick='reititin_2();' id='reititin_2_id' name='reititin' value='&#10;Kytkin/reititin välissä.'><label for='reititin_2_id'>Ei</label>
	</div>
	
	<div id="merkkimalli" class="koe">
	<h3>Kytkimen/reitittimen merkki ja malli</h3>
	<input type="text" class="lyhyt" id="merkkijamalli" placeholder="Merkki ja malli"></input>
	</div>
	
	<div id="kaikillalaitteilla" class="koe">
	<h3>Esiintyykö hidastelua kaikilla päätelaitteilla?</h3>
	<input type='radio' onclick='kaikillalaitteilla_1();' id='kaikillalaitteilla_1_id' name='kaikillalaitteilla' value='&#10;Hidastelua vain yhdellä laitteella / vain yksi päätelaite'><label for='kaikillalaitteilla_1_id'>Kyllä</label>
	<input type='radio' onclick='kaikillalaitteilla_2();' id='kaikillalaitteilla_2_id' name='kaikillalaitteilla' value='&#10;Vain yksi päätelaite hidastelee.'><label for='kaikillalaitteilla_2_id'>Ei</label>
	</div>
	
	<div id="toimintaohje10" class="ohje"></div>
	
	<div id="ilmanreititinta" class="koe">
	<h3>Pätkiikö myös ilman reititintä?</h3>
	<input type='radio' onclick='ilmanreititinta_1();' id='ilmanreititinta_1_id' name='ilmanreititinta' value='&#10;Pätkii ilman reititintä'><label for='ilmanreititinta_1_id'>Kyllä</label>
	<input type='radio' onclick='ilmanreititinta_2();' id='ilmanreititinta_2_id' name='ilmanreititinta' value='&#10;Ei pätki reitittimen kanssa'><label for='ilmanreititinta_2_id'>Ei.</label>
	<input type='radio' onclick='ilmanreititinta_3();' id='ilmanreititinta_3_id' name='ilmanreititinta' value='&#10;Ei ole testannu ilman reititintä '><label for='ilmanreititinta_3_id'>Ei ole testattu</label>
	</div>
	
	<div id="toimintaohje11" class="ohje"></div>
	
	<br>
	<!--  <button onclick='generoi();' type="button">Generoi</button>-->
	<button onclick='tyhjenna();' type="reset">Tyhjennä</button>
	<button name='sms' id='sms' onclick='show_sms();' type="button">SMS</button><br></br>
	
	<div id="vakiopohjan_loppu">
	<h3>Omat havainnot ja lisätiedot</h3>
	<TEXTAREA id="info"  placeholder="(oleelliset tiedot, jotka parantavat vika-analyysiä. Esimerkiksi vian oireiden tarkempi kuvaus, jos asiakkaan omin sanoin kuvattu ongelma ei ole riittävä, Network Analyser SELT-testin tulos, yms)" ></TEXTAREA><br></br>
	<TEXTAREA id="asiakasinfo" class="asiakasinfo" placeholder="Asiakasinfot" disabled></TEXTAREA><br></br>
	<TEXTAREA id="generoitu" style="height:10em" placeholder="Generoitu teksti" ></TEXTAREA><br></br>
	</div>
</form>

</div>

  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
		<script>
		 document.getElementById("form").reset();
		 
		$("#toimintaohje").hide();
		$("#toimintaohje2").hide();
		$("#toimintaohje3").hide();
		$("#toimintaohje4").hide();
		$("#toimintaohje5").hide();
		$("#toimintaohje6").hide();
		$("#toimintaohje7").hide();
		$("#toimintaohje8").hide();
		$("#toimintaohje9").hide();
		$("#toimintaohje10").hide();
		$("#toimintaohje11").hide();
		$("#sms").hide();
		$("#tehdasasetukset2").hide();
		$("#lahiverkko").hide();
		$("#suoraanmodeemista").hide();
		$("#puhelinrasioita1").hide();
		$("#lankapuhelin_1").hide();
		$("#toinenjohto").hide();
		$("#puhelinrasioita_2").hide();
		$("#lankapuhelin_2").hide();
		$("#toinenjohto_2").hide();
		$("#takuulaite").hide();
		$("#takuulaite_2").hide();
		$("#vakiopohjan_loppu").hide();
		$("#reititin").hide();
		$("#merkkimalli").hide();
		$("#kaikillalaitteilla").hide();
		$("#ilmanreititinta").hide();
		$("#merkkimalli").hide();
		$("#wlan").hide();
		$("#toinenlaite").hide();

		function tyhjenna() {
			$("#toimintaohje").hide();
			$("#toimintaohje2").hide();
			$("#toimintaohje3").hide();
			$("#toimintaohje4").hide();
			$("#toimintaohje5").hide();
			$("#toimintaohje6").hide();
			$("#toimintaohje7").hide();
			$("#toimintaohje8").hide();
			$("#toimintaohje9").hide();
			$("#toimintaohje10").hide();
			$("#toimintaohje11").hide();
			$("#sms").hide();
			$("#tehdasasetukset2").hide();
			$("#lahiverkko").hide();
			$("#suoraanmodeemista").hide();
			$("#puhelinrasioita1").hide();
			$("#lankapuhelin_1").hide();
			$("#toinenjohto").hide();
			$("#puhelinrasioita_2").hide();
			$("#lankapuhelin_2").hide();
			$("#toinenjohto_2").hide();
			$("#takuulaite").hide();
			$("#takuulaite_2").hide();
			$("#vakiopohjan_loppu").hide();
			$("#reititin").hide();
			$("#merkkimalli").hide();
			$("#kaikillalaitteilla").hide();
			$("#ilmanreititinta").hide();
			$("#merkkimalli").hide();
			$("#wlan").hide();
			$("#toinenlaite").hide();
			
		}
		
		
		function laatu_1() {
			$("#lahiverkko").show();
			$("#puhelinrasioita1").hide();
			$("#wlan").hide();
		}
		function laatu_2() {
			$("#wlan").show();
			$("#lahiverkko").hide();
			$("#puhelinrasioita1").hide();			
		}

		function laatu_3() {
			$("#puhelinrasioita1").show();
			$("#lahiverkko").hide();	
			$("#takuulaite_2").hide();	
		}
		
		function lahiverkko_1() {
			$("#toimintaohje").show();
			$("#vakiopohjan_loppu").show();
			document.getElementById('toimintaohje').innerHTML = "Pyydä asiakasta testaamaan yhteyttä toisella modeemilla ja tietokoneella.";
			helpson();
			sms_optio();
			maksu();
			tiketti();
			generoi();
			
		}
		
		function lahiverkko_2() {
			$("#toimintaohje").show();
			document.getElementById('toimintaohje').innerHTML = "Wifin pätkiminen voi johtua muun muassa seuraavista tekijöistä, mutta näitä korjaustoimenpiteitä / testejä ei pidä tehdä puhelun aikana:<ul><li>Modeemin sijainti</li><li>varmista ettei laitetta ole sijoitettu huoneistojakamon sisään / kaappiin</li><li>Pyydä testaamaan kaikki wlan-laitteet yksitellen siten että muut laitteet eivät ole yhteydessä (vanhat laitteet tai vaillinaiset ajurit eivät välttämättä tue uudempaa wlan-standardia tai suojausta)</li><li>Pyydä vaihtamaan modeemin hallintasivulta wlan-kanavaa, samassa rakennuksessa sijaitsevat muut wlan-tukiasemat voivat häiritä asiakkaan langatonta yhteyttä.</li><li>Helpson opastaa ja auttaa wifi -testauksien kanssa</li></ul>";
			$("#takuulaite").show();
		}

		function lahiverkko_3() {
			$("#toimintaohje").show();
			$("#vakiopohjan_loppu").show();
			document.getElementById('toimintaohje').innerHTML = "Miksi? Kirjaa syy Agentin havainnot -kenttään.<br><br>Vika on hyvin todennäköisesti asiakkaan laiteympäristössä. Pyydä asiakasta olemaan yhteydessä Helpsoniin.SMS-option voi tarvittaessa kirjata jos se nähdään aiheelliseksi. Jos asiakas on lähiaikoina ollut yhteydessä samasta viasta, eikä tästä ole aiemmin kirjattu tikettiä, niin siinä tapauksessa voi avata tiketin. Tällöin aina maininta asentajakäyntimaksusta 99€.";
			helpson();
			sms_optio();
			maksu();
			tiketti();
			generoi();
			
			}

		function lahiverkko_4() {
			$("#toimintaohje").show();
			$("#vakiopohjan_loppu").show();
			document.getElementById('toimintaohje').innerHTML = "Pyydetään asiakasta testaamaan verkkokaapelilla suoraan modeemin lähiverkkoportista (kannattaa ohjeistaa testaamaan useammasta eri portista, jos mahdollista myös eri päätelaitteilla). Pyydä asiakasta olemaan yhteydessä Helpsoniin mikäli testaaminen tuntuu vaikealta.";
			helpson();
			sms_optio();
			maksu();
			generoi();
			
			}
		
		function takuulaite_1() {
			$("#toimintaohje2").show();
			$("#vakiopohjan_loppu").show();
			$("#toimintaohje3").hide();
			document.getElementById('toimintaohje2').innerHTML = "Kyseessä on wlan ja/tai muu asiakaslaiteongelma, koska yhteys toimii pätkimättä modeemiin asti.<br><br>WLAN-ongelmatapauksissa pyydä asiakasta olemaan yhteydessä Helpsoniin. Jos tiketti tehdään niin 99€ pitää mainita!";
			helpson();
			generoi();
			
		}
		
		function takuulaite_2() {
			$("#toimintaohje3").show();
			$("#vakiopohjan_loppu").show();
			$("#toimintaohje2").hide();
			document.getElementById('toimintaohje3').innerHTML = "Pyydä asiakasta palauttamaan tehdasasetukset RGW:n, jos sitä ei ole vielä tehty";
			helpson();
			sms_optio();
			tiketti();
			generoi();
		}
		
		function puhelinrasioita_1() {
			$("#toimintaohje4").show();
			document.getElementById('toimintaohje4').innerHTML = "Linjan laatua testattaessa on tärkeää, että kaikki puhelinlaitteet ja mahdolliset suodattimet ovat irroitettuna puhelinrasioista";
			$("#lankapuhelin_1").show();
		}

		function lankapuhelin1() {
			$("#toimintaohje5").show();
			document.getElementById('toimintaohje5').innerHTML = "Huom! Mikäli on epäilys tai tieto siitä, että kyseessä on myös wifi-ongelma, kirjaa asia asiakkaan kertomaan viankuvaukseen / omaan analyysikenttään";
			
			$("#toinenjohto").show();
		}

		function lankapuhelin2() {
			$("#toinenlaite").show();
			$("#toimintaohje5").show();
			document.getElementById('toimintaohje5').innerHTML = "Huom! Mikäli on epäilys tai tieto siitä, että kyseessä on myös wifi-ongelma, kirjaa asia asiakkaan kertomaan viankuvaukseen / omaan analyysikenttään";
			$("#toinenjohto").show();
		}
		
		function toinenjohto1() {
			$("#vakiopohjan_loppu").show();
			maksu();
			tiketti();
			generoi();
			
		}
		
		function toinenjohto2() {
			$("#vakiopohjan_loppu").show();
			maksu();
			helpson();
			sms_optio();
			generoi();
			
		}

		function wlan_2(){ 
			$("#puhelinrasioita1").show();
			$("#suoraanmodeemista").hide();	
		}

		function wlan_1(){
			$("#suoraanmodeemista").show();
			$("#puhelinrasioita1").hide();
		}
		
		function suoraanmodeemista_1(){
			$("#takuulaite_2").show();
			$("#puhelinrasioita").hide();
		}
		
		function suoraanmodeemista_2(){
			$("#puhelinrasioita_2").show();
			$("#takuulaite_2").hide();
			$("#puhelinrasioita").hide();
			
		}
		

		function puhelinrasioita2() {
			$("#toimintaohje8").show();
			document.getElementById('toimintaohje8').innerHTML = "Linjan laatua testattaessa on tärkeää, että kaikki puhelinlaitteet ja mahdolliset suodattimet ovat irroitettuna puhelinrasioista";
			$("#lankapuhelin_2").show();
		}

		function lankapuhelin2_1() {
			$("#toimintaohje9").show();
			document.getElementById('toimintaohje9').innerHTML = "Huom! Mikäli on epäilys tai tieto siitä, että kyseessä on myös wifi-ongelma, kirjaa asia asiakkaan kertomaan viankuvaukseen / omaan analyysikenttään";
			$("#toinenjohto_2").show();
		}
		
		function toinenjohto2_1() {
			$("#reititin").show();
		}

		function reititin_2() {
			$("#vakiopohjan_loppu").show();
			maksu();
			tiketti();
			sms_optio();
			generoi();
		}

		function reititin_1() {
			$("#merkkimalli").show();
			$("#kaikillalaitteilla").show();
		}
		
		function kaikillalaitteilla_1() {
			$("#ilmanreititinta").show();
		}

	
		
		function kaikillalaitteilla_2() {
			$("#toimintaohje10").show();
			document.getElementById('toimintaohje10').innerHTML = "Vika jää hyvin todennäköisesti asiakkaan päätelaitteeseen tai sen ja reitittimen väliseen yhteyteen. Ei optiota eikä tikettiä, 99e maininta mikäli as. vaatii asentajakäyntiä";
			$("#vakiopohjan_loppu").show();
			helpson();
		}
		
		function ilmanreititinta_1() {
			$("#toimintaohje11").show();
			document.getElementById('toimintaohje11').innerHTML = "Pyydä palauttamaan modeemiin tehdasasetukset. ";
			$("#vakiopohjan_loppu").show();
			maksu();
			helpson();
			sms_optio();
			tiketti();
			generoi();
		}

		function ilmanreititinta_2() {
			$("#ilmanreititinta").show();
			$("#vakiopohjan_loppu").show();
			helpson();
			generoi();
		}

		function ilmanreititinta_3() {
			$("#toimintaohje11").show();
			document.getElementById('toimintaohje11').innerHTML = "Jos vika ei vielä ratkennut, pyydä testaamaan suoraan modeemista verkkokaapelilla ja palauttamaan modeemiin tehdasasetukset. Pyydä vastaamaan sms-optioon jos vika jatkuu testausten jälkeen. Jos testauksia ei pysty suorittamaan kirjaa tiketti ja mainitse 99e";
			$("#vakiopohjan_loppu").show();
			maksu();
			helpson();
			sms_optio();
			tiketti();
			generoi();
		}
		
		function takuulaite_2_1(){
			$("#toimintaohje6").show();
			document.getElementById('toimintaohje6').innerHTML = "Kyseessä on wlan ja/tai muu asiakaslaiteongelma, koska yhteys toimii hidastelematta modeemiin asti.<br><br>WLAN-ongelmatapauksissa pyydä asiakasta olemaan yhteydessä Helpsoniin. Jos tiketti tehdään niin 99€ pitää mainita!<br><br>Jos asiakkaalla on muualta hankittu tai takuuton laite ja vika on rajattu siihen -> myy modeemi!";
			$("#vakiopohjan_loppu").show();
			helpson();
			maksu();
			tiketti();
			sms_optio();
			generoi();
			
		}
		function takuulaite_2_2(){
			$("#toimintaohje6").show();
			document.getElementById('toimintaohje6').innerHTML = "Pyydä asiakasta palauttamaan tehdasasetukset toimimattomaan modeemiin, jos sitä ei ole vielä tehty";
			$("#tehdasasetukset2").show();
		}

		function tehdasasetukset21(){
			$("#toimintaohje7").show();
			document.getElementById('toimintaohje7').innerHTML = "Takuumodeemeissa tehdään tarvittaessa softan päivitys ja mahdollinen laitteen vaihto prosessin mukaan. Jos asiakkaalla on muualta hankittu tai takuuton laite -> myy modeemi!";
			$("#tehdasasetukset2").show();
		}
		
		function tehdasasetukset22(){
			$("#toimintaohje7").show();
			document.getElementById('toimintaohje7').innerHTML = "Miksi? Kirjaa syy Agentin havainnot -kenttään";
			$("#tehdasasetukset2").show();
			$("#vakiopohjan_loppu").show();
			maksu();
			helpson();
			tiketti();
			generoi();
			
		}
		
		function tehdasasetukset23(){
			$("#tehdasasetukset2").show();
			$("#vakiopohjan_loppu").show();
			maksu();
			helpson();
			sms_optio();
			generoi();
			
		}
		
		function tehdasasetukset24(){
			$("#tehdasasetukset2").show();
			$("#vakiopohjan_loppu").show();
			maksu();
			tiketti();
			generoi();
		}
		

		function show_sms() {
			var $liittymatunnus = $("#liittymanumero").val();
			var $vastaanottaja = $("#yhtnro").val();
		    mywindow = window.open("sms.php?yhtnro="+$vastaanottaja+"&ltunnus="+$liittymatunnus, "mywindow", "location=1,status=1,scrollbars=1,  width=350,height=350");
		    mywindow.moveTo(0, 0);
		}

		function helpson() {
			document.getElementById('generoitu').innerHTML = "Asiakas ohjattu Helpsonille\n"+document.getElementById('generoitu').value;
			document.getElementById('asiakasinfo').innerHTML = "Ohjaa asiakas Helpsonille ja kirjaa vika-analyysi UAD:lle\n\n";
		}
		function tt() {
			document.getElementById('generoitu').innerHTML = "Toimituksentarkastus\n"+document.getElementById('generoitu').value;
			document.getElementById('asiakasinfo').innerHTML = "Kirjaa toimituksentarkastus Alphaan ja laita tapahtumatiedot ja vika-analyysi UAD:lle\n\n";
		}
		function sms_optio() {
			document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value+"Asiakas testaa vielä laitteensa. Kirjaa tiketti Alphaan ja laita tapahtumatiedot ja vika-analyysi UAD:lle\n\n";
			document.getElementById('generoitu').innerHTML = "SMS-optio\n"+document.getElementById('generoitu').value;
			$("#sms").show();	
		}
		function tiketti() {
			document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value+"Tarvittavat laitetestit on käyty läpi tai asiakas ei halua testata laitteitaan. Kirjaa tiketti Alphaan ja laita tapahtumatiedot ja vika-analyysi UAD:lle.\n\n";
			}
		function maksu() {
			document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value+"Kerro asiakkaalle, että turha asentajakäynti maksaa 99 € mikäli vika jää asiakkaan laitteisiin, johtoihin tai kytkentöihin.\n\n";
			}

				
		function generoi() {
			window.scrollTo(0,document.body.scrollHeight);
			
			var $lnro = $("#liittymanumero").val();
			var $ynro = $("#yhtnro").val();
			var $userid = $("#userid").val();
			var $vikakuvaus = $("#vikakuvaus").val();
			var $pvm = $("#datepicker").val();

			var $tekniikka = $('input[name=tech]').val();
			var $ongelma = $('input[name=ongelma]').val();
			var $fault = $('input[name=fault]:checked').val();

			var $merkki = $("#merkki").val();
			var $malli = $("#malli").val();

			var $laatu = $('input[name=laatu]:checked').val();
			var $lahiverkko = $('input[name=lahiverkko]:checked').val();
			var $takuulaite = $('input[name=takuulaite]:checked').val();
			var $wlan = $('input[name=wlan]:checked').val();
			var $suoraanmodeemista= $('input[name=suoraanmodeemista]:checked').val();
			var $puhelinrasioita_1 = $('input[name=puhelinrasioita1]:checked').val();

			var $lankapuhelin = $('input[name=lankapuhelin]:checked').val();
			var $toinenjohto = $('input[name=toinenjohto]:checked').val();
			var $takuulaite_2 = $('input[name=takuulaite_2]:checked').val();
			var $tehdasasetukset = $('input[name=tehdasasetukset]:checked').val();
			var $puhelinrasioita_2 = $('input[name=puhelinrasioita_2]:checked').val();
			var $lankapuhelin_2 = $('input[name=lankapuhelin_2]:checked').val();
			var $toinenjohto_2 = $('input[name=toinenjohto_2]:checked').val();
			var $reititin = $('input[name=reititin]:checked').val();

			var $merkkijamalli = $("#merkkijamalli").val();

			var $kaikillalaitteilla = $('input[name=kaikillalaitteilla]:checked').val();
			var $ilmanreititinta = $('input[name=kaikillalaitteilla]:checked').val();






			
			var $info = $("#info").val();
			
			var str = "Liittymänumero: "+$lnro+"\nYhteysnumero: "+$ynro+"\nKäyttäjätunnus: "+$userid+"\nVikakuvaus: "+$vikakuvaus+
			"\nAlkanut "+$pvm+"\n\n"+$tekniikka+" "+$ongelma+"\n"+$merkki+" "+$malli+$laatu+$lahiverkko+$takuulaite+$wlan+$suoraanmodeemista+$puhelinrasioita_1
			+$lankapuhelin+$toinenjohto+$takuulaite_2+$tehdasasetukset+$puhelinrasioita_2+$lankapuhelin_2+$toinenjohto_2+$reititin+$merkkijamalli+$kaikillalaitteilla+
			$kaikillalaitteilla+"\n\nVikakuvaus:\n"+$info;

			
			var res = str.replace(/undefined/g, "");

			document.getElementById('generoitu').innerHTML = res;
		}		
		
	</script>
</body>
</html>
