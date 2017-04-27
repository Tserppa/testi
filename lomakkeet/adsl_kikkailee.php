<html>
<?php include 'funktiot.php'; ?>
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

if (!empty($_POST)){

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
    <H3>ADSL - Testilomake</H3>
    <?php
    include 'lomake_linkit.html';
    ?>

    <input type='hidden' name='tech' value='ADSL'>
    <input type='hidden' name='ongelma' value='Pätkii'>

    <form name='lomake' id='form'>

        <div id="liittymähakuja" class="koe">
            <h3>Onko tullut liittymähakuja?</h3>
            <input type='radio' onclick='f_1();' id='id_1' name='name_1' value='&#10;IP-haut ok'><label for='id_1'>IP-haut ok</label>
            <input type='radio' onclick='f_2();' id='id_2' name='name_1' value='&#10;10-alkuinen ip (SSA)'><label
                    for='id_2'>10-alkuinen ip (SSA)</label>
            <input type='radio' onclick='f_3();' id='id_3' name='name_1' value='&#10;Ei ip-hakuja / Ei tietoa'><label
                    for='id_3'>Ei ip-hakuja / Ei tietoa</label>
        </div>

        <div id="alcatellucent" class="koe">
            <h3>Palaako asiakkaan Alcatel-Lucentin kuitumuuntimessa valoja?</h3>
            <input type='radio' onclick='f_31();' id='id_31' name='name_3' value='&#10;Kuitumuuntimessa palaa valoja'><label for='id_31'>Kyllä</label>
            <input type='radio' onclick='f_32();' id='id_32' name='name_3' value='&#10;Kuitumuuntimessa ei pala valoja'><label for='id_32'>Ei</label>
            <input type='radio' onclick='f_33();' id='id_33' name='name_3' value='&#10;Kuitumuuntimen valoja ei pystytä tarkistamaan'><label for='id_33'>Ei osaa/pysty tarkistamaan</label>
            <input type='radio' onclick='f_34();' id='id_34' name='name_3' value='&#10;Asiakas ei ole kotona'><label for='id_34'>Ei tietoa eikä asiakas ole kotona</label>

        </div>
        <div id="saakoipn" class="koe">
            <h3>Toimiiko testattaessa tietokoneella verkkokaapelin yli suoraan kuitumuuntimesta? (saako ip:n?)</h3>
            <input type='radio' onclick='f_311();' id='id_311' name='name_31' value='&#10;Toimii verkkokaapelilla suoraan kuitumuuntimesta'><label for='id_311'>Kyllä</label>
            <input type='radio' onclick='f_312();' id='id_312' name='name_31' value='&#10;Ei toimi verkkokaapelilla suoraan kuitumuuntimesta'><label for='id_312'>Ei</label>
            <input type='radio' onclick='f_313();' id='id_313' name='name_31' value='&#10;Ei pysty testaamaan suoraan kuitumuuntimesta'><label for='id_313'>Ei pysty testaamaan</label>
        </div>

        <div id="toisellakoneella" class="koe">
            <h3>Toimiiko yhteys jollakin toisella tietokoneella / verkkolaitteella? (saako ip:n?) </h3>
            <input type='radio' onclick='f_331();' id='id_331' name='name_33' value='&#10;Toimii toisella koneella/verkkolaitteella'><label for='id_331'>Kyllä</label>
            <input type='radio' onclick='f_332();' id='id_332' name='name_33' value='&#10;Ei toimi toisella koneella/verkkolaitteella'><label for='id_332'>Ei</label>
        </div>

        <div id="kuitumuuntimesta" class="koe">
            <h3>Toimiiko testattaessa tietokoneella verkkokaapelilla suoraan kuitumuuntimesta?</h3>
            <input type='radio' onclick='f_11();' id='id_11' name='name_11' value='&#10;Toimii kuitumuuntimesta suoraan'><label for='id_11'>Kyllä</label>
            <input type='radio' onclick='f_12();' id='id_12' name='name_11' value='&#10;Ei toimi kuitumuuntimesta suoraan'><label
                    for='id_12'>Ei</label>
            <input type='radio' onclick='f_13();' id='id_13' name='name_11' value='&#10;Ei pysty testaamaan suoraan kuitumuuntimesta'><label
                    for='id_13'>Ei pysty testaamaan</label>
        </div>

        <div id="kytkinreititin" class="koe">
            <h3>Onko asiakkaalla kytkintä tai reititintä ennen tietokonetta?</h3>
            <input type='radio' onclick='f_131();' id='id_131' name='name_13' value='&#10;Asiakkaalla kytkin/reititin ennen tietokonetta'><label for='id_131'>Kyllä</label>
            <input type='radio' onclick='f_132();' id='id_132' name='name_13' value='&#10;Asiakkaall ei kytkintä/reititintä ennen tietokonetta'><label for='id_132'>Ei</label>
        </div>

        <div id="toimintaohje" class="ohje"></div>
        <div id="vakiopohjan_loppu">
            <h3>Omat havainnot ja lisätiedot</h3>
            <button onclick='generoi();' type="button">Generoi</button>
            <button onclick='tyhjenna();' type="reset">Tyhjennä</button>
            <button name='sms' id='sms' onclick='show_sms();' type="button">SMS</button>
            <TEXTAREA id="asiakasinfo" class="asiakasinfo" placeholder="Asiakasinfot" disabled></TEXTAREA><br></br>
        </div>
    </form>
</div>

<div id="oikea_palsta">
    <TEXTAREA id="generoitu" class="generoitu" placeholder="Generoitu teksti"></TEXTAREA><br></br>
</div>
<script>
    $(function () {
        $("#datepicker").datepicker();
    });
</script>
<script>
    tyhjenna();
    document.getElementById("form").reset();
    function f_1() {
        $("#kuitumuuntimesta").show();
    }

    function reset_asiakas(){
        document.getElementById('info').innerHTML = "";
        document.getElementById("liittymanumero").value = "";
        document.getElementById('yhtnro').value = "";
        document.getElementById('userid').value = "";
        document.getElementById('vikakuvaus').innerHTML = "";
    }
    function f_131() {
        $("#toimintaohje").show();
        document.getElementById('toimintaohje').innerHTML = "Pyydä asiakasta käynnistämään laitteet uudelleen / palauttamaan tehdasasetukset ja olemaan tarvittessa yhteydessä Helpsoniin. Tiketti voidaan kirjata mikäli asiakas sitä vaatii tai jos yhteys ei ole toiminut vielä kertaakaan";
        helpson();
        maksu();
        tiketti();
        sms_optio();
        $("#vakiopohjan_loppu").show();
        generoi();
    }
    function f_132() {
        $("#toimintaohje").show();
        document.getElementById('toimintaohje').innerHTML = "Pyydä asiakasta lähtökohtaisesti olemaan yhteydessä Helpsoniin tai  testaamaan toisella tietokoneella. Tiketti voidaan kirjata mikäli asiakas sitä vaatii tai jos yhteys ei ole toiminut vielä kertaakaan";
        helpson();
        maksu();
        tiketti();
        sms_optio();
        $("#vakiopohjan_loppu").show();
        generoi();
    }
    function f_11() {
        $("#toimintaohje").show();
        document.getElementById('toimintaohje').innerHTML = "Yhteys toimii asuntoon asti, mikäli vika on Soneran RGW:ssä tai takuunalaisessa reitittimessä pyydä palauttamaan laitteeseen tehdasasetukset. Jos sekään ei auta eikä laitetta ole vielä vaihdettu tämän vian takia tee mahdollinen laitteen vaihto prosessin mukaan. Jos asiakkaalla on muualta hankittu tai takuuton laite -> myy reititin! Pyydä muutoin asiakasta olemaan yhteydessä Helpsoniin. Jos tiketti tehdään niin 99€ pitää mainita!";
        helpson();
        maksu();
        tiketti();
        sms_optio();
        $("#vakiopohjan_loppu").show();
        generoi();


    }
    function f_12() {
        maksu();
        tiketti();
        $("#vakiopohjan_loppu").show();
        generoi();
    }

    function f_13() {
        $("#kytkinreititin").show();
    }


    function f_2() {
        $("#vakiopohjan_loppu").show();
        tiketti();
        generoi();
    }

    function f_3() {
        $("#alcatellucent").show();

    }
    function f_31() {
        $("#saakoipn").show();

    }
    function f_311() {
        $("#toimintaohje").show();
        document.getElementById('toimintaohje').innerHTML = "Viankorjaus ei ole Soneran vastuulla, yhteys toimii asuntoon asti. Pyydä asiakasta olemaan yhteydessä Helpsoniin. Ehdoton 99e maininta jos asiakas vaatii tikettiä";
        helpson();
        $("#vakiopohjan_loppu").show();
        generoi();
    }
    function f_312() {
        maksu();
        tiketti();
        $("#vakiopohjan_loppu").show();
        generoi();
    }
    function f_313() {
        maksu();
        tiketti();
        $("#vakiopohjan_loppu").show();
        generoi();
    }
    function f_32() {
        $("#toimintaohje").show();
        document.getElementById('toimintaohje').innerHTML = "Ennen tiketin kirjaamista pyydä tarkistamaan muuntimen virransaanti (kytkennät) ja tarvittaessa kokeilemaan toisella sähkölaitteella muuntimen pistorasiasta mahdollisen sulakevian rajaamiseksi";
        maksu();
        tiketti();
        sms_optio();
        $("#vakiopohjan_loppu").show();
        generoi();
    }

    function f_33() {
        $("#toisellakoneella").show();
    }
    function f_331() {
        $("#toimintaohje").show();
        document.getElementById('toimintaohje').innerHTML = "Viankorjaus ei ole Soneran vastuulla, yhteys toimii asuntoon asti. Pyydä asiakasta olemaan yhteydessä Helpsoniin. Ehdoton 99e maininta jos asiakas vaatii tikettiä";
        helpson();
        $("#vakiopohjan_loppu").show();
        generoi();

    }function f_332() {
        $("#toimintaohje").show();
        document.getElementById('toimintaohje').innerHTML = "Vika on todennäköisesti asunnon sisäverkossa, asiakkaan reitittimessä tai tietokoneessa mutta vikaa ei voida rajata jos asiakas ei pysty testaamaan yhteyden toimivuutta suoraan kuitumuuntimesta. ";
        maksu();
        tiketti();
        $("#vakiopohjan_loppu").show();
        generoi();
    }
    function f_34() {
        $("#toimintaohje").show();
        document.getElementById('toimintaohje').innerHTML = "Pyydä asiakasta tarkistamaan kuitumuuntimen virransaanti, ja boottaamaan kuitumuunnin ja mahdolliset mut laitteet (kytkin/reititin) sekä kokeilemaan yhteyttä kytkemällä tietokoneen suoraan verkkokaapelilla muuntimen verkkoporttin";
        maksu();
        sms_optio();
        $("#vakiopohjan_loppu").show();
        generoi();

    }
    function show_sms() {
        var $liittymatunnus = $("#liittymanumero").val();
        var $vastaanottaja = $("#yhtnro").val();
        mywindow = window.open("sms.php?yhtnro=" + $vastaanottaja + "&ltunnus=" + $liittymatunnus, "mywindow", "location=1,status=1,scrollbars=1,  width=350,height=350");
        mywindow.moveTo(0, 0);
    }
    function helpson() {
        document.getElementById('generoitu').innerHTML = "Asiakas ohjattu Helpsonille\n" + document.getElementById('generoitu').value;
        document.getElementById('asiakasinfo').innerHTML = "Ohjaa asiakas Helpsonille ja kirjaa vika-analyysi UAD:lle\n\n";
    }
    function tt() {
        document.getElementById('generoitu').innerHTML = "Toimituksentarkastus\n" + document.getElementById('generoitu').value;
        document.getElementById('asiakasinfo').innerHTML = "Kirjaa toimituksentarkastus Alphaan ja laita tapahtumatiedot ja vika-analyysi UAD:lle\n\n";
    }
    function sms_optio() {
        document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "Asiakas testaa vielä laitteensa. Kirjaa tiketti Alphaan ja laita tapahtumatiedot ja vika-analyysi UAD:lle\n\n";
        document.getElementById('generoitu').innerHTML = "SMS-optio\n" + document.getElementById('generoitu').value;
        $("#sms").show();
    }
    function tiketti() {
        document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "Tarvittavat laitetestit on käyty läpi tai asiakas ei halua testata laitteitaan. Kirjaa tiketti Alphaan ja laita tapahtumatiedot ja vika-analyysi UAD:lle.\n\n";
    }
    function maksu() {
        document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "Kerro asiakkaalle, että turha asentajakäynti maksaa 99 € mikäli vika jää asiakkaan laitteisiin, johtoihin tai kytkentöihin.\n\n";
    }

    function tyhjenna() {
        $("#kuitumuuntimesta").hide();
        $("#toimintaohje").hide();
        $("#kytkinreititin").hide();
        $("#alcatellucent").hide();
        $("#toisellakoneella").hide();
        $("#saakoipn").hide();

        document.getElementById('asiakasinfo').innerHTML = "";
        document.getElementById('generoitu').innerHTML = "";
    }

    function generoi() {
        var res = str.replace(/undefined/g, "");

    }

</script>
</body>
</html>
