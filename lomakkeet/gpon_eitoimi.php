<input type='hidden' name='tech' value='GPON'>
<input type='hidden' name='ongelma' value='Ei toimi&#10;'>

<form name='lomake' id='form'>

    <div id="liittymähakuja" class="koe">
        <h3>Onko tullut liittymähakuja?</h3>
        <input type='radio' onclick='f_1();' id='id_1' name='name_1' value='IP-haut ok'><label for='id_1'>IP-haut ok</label>
        <input type='radio' onclick='f_2();' id='id_2' name='name_1' value='10-alkuinen ip (SSA)'><label for='id_2'>10-alkuinen ip (SSA)</label>
        <input type='radio' onclick='f_3();' id='id_3' name='name_1' value='Ei ip-hakuja / Ei tietoa'><label for='id_3'>Ei ip-hakuja / Ei tietoa</label>
    </div>

    <div id="alcatellucent" class="koe">
        <h3>Palaako asiakkaan Alcatel-Lucentin kuitumuuntimessa valoja?</h3>
        <input type='radio' onclick='f_31();' id='id_31' name='name_3' value='Kuitumuuntimessa palaa valoja'><label for='id_31'>Kyllä</label>
        <input type='radio' onclick='f_32();' id='id_32' name='name_3' value='Kuitumuuntimessa ei pala valoja'><label for='id_32'>Ei</label>
        <input type='radio' onclick='f_33();' id='id_33' name='name_3' value='Kuitumuuntimen valoja ei pystytä tarkistamaan'><label for='id_33'>Ei osaa/pysty tarkistamaan</label>
        <input type='radio' onclick='f_34();' id='id_34' name='name_3' value='Asiakas ei ole kotona'><label for='id_34'>Ei tietoa eikä asiakas ole kotona</label>

    </div>
    <div id="saakoipn" class="koe">
        <h3>Toimiiko testattaessa tietokoneella verkkokaapelin yli suoraan kuitumuuntimesta? (saako ip:n?)</h3>
        <input type='radio' onclick='f_311();' id='id_311' name='name_31' value='Toimii verkkokaapelilla suoraan kuitumuuntimesta'><label for='id_311'>Kyllä</label>
        <input type='radio' onclick='f_312();' id='id_312' name='name_31' value='Ei toimi verkkokaapelilla suoraan kuitumuuntimesta'><label for='id_312'>Ei</label>
        <input type='radio' onclick='f_313();' id='id_313' name='name_31' value='Ei pysty testaamaan suoraan kuitumuuntimesta'><label for='id_313'>Ei pysty testaamaan</label>
    </div>

    <div id="toisellakoneella" class="koe">
        <h3>Toimiiko yhteys jollakin toisella tietokoneella / verkkolaitteella? (saako ip:n?) </h3>
        <input type='radio' onclick='f_331();' id='id_331' name='name_33' value='Toimii toisella koneella/verkkolaitteella'><label for='id_331'>Kyllä</label>
        <input type='radio' onclick='f_332();' id='id_332' name='name_33' value='Ei toimi toisella koneella/verkkolaitteella'><label for='id_332'>Ei</label>
    </div>

    <div id="kuitumuuntimesta" class="koe">
        <h3>Toimiiko testattaessa tietokoneella verkkokaapelilla suoraan kuitumuuntimesta?</h3>
        <input type='radio' onclick='f_11();' id='id_11' name='name_11' value='Toimii kuitumuuntimesta suoraan'><label for='id_11'>Kyllä</label>
        <input type='radio' onclick='f_12();' id='id_12' name='name_11' value='Ei toimi kuitumuuntimesta suoraan'><label for='id_12'>Ei</label>
        <input type='radio' onclick='f_13();' id='id_13' name='name_11' value='Ei pysty testaamaan suoraan kuitumuuntimesta'><label for='id_13'>Ei pysty testaamaan</label>
    </div>

    <div id="kytkinreititin" class="koe">
        <h3>Onko asiakkaalla kytkintä tai reititintä ennen tietokonetta?</h3>
        <input type='radio' onclick='f_131();' id='id_131' name='name_13' value='Asiakkaalla kytkin/reititin ennen tietokonetta'><label for='id_131'>Kyllä</label>
        <input type='radio' onclick='f_132();' id='id_132' name='name_13' value='Asiakkaall ei kytkintä/reititintä ennen tietokonetta'><label for='id_132'>Ei</label>
    </div>

    <script>
        tyhjenna();
        document.getElementById("form").reset();
        function f_1() {
            $("#kuitumuuntimesta").show();
        }

        function reset_asiakas() {
            document.getElementById('info').innerHTML = "";
            document.getElementById("liittymanumero").value = "";
            document.getElementById('yhtnro').value = "";
            document.getElementById('userid').value = "";
            document.getElementById('vikakuvaus').innerHTML = "";
        }
        function f_131() {
            $("#toimintaohje").show();
            document.getElementById('toimintaohje').innerHTML = "Pyydä asiakasta käynnistämään laitteet uudelleen / palauttamaan tehdasasetukset ja olemaan tarvittessa yhteydessä Helpsoniin. Tiketti voidaan kirjata mikäli asiakas sitä vaatii tai jos yhteys ei ole toiminut vielä kertaakaan";
            helppi();
            maksu();
            tiketti();
            sms_optio();
            $("#vakiopohjan_loppu").show();
            generoi();
        }
        function f_132() {
            $("#toimintaohje").show();
            document.getElementById('toimintaohje').innerHTML = "Pyydä asiakasta lähtökohtaisesti olemaan yhteydessä Helpsoniin tai  testaamaan toisella tietokoneella. Tiketti voidaan kirjata mikäli asiakas sitä vaatii tai jos yhteys ei ole toiminut vielä kertaakaan";
            helppi();
            maksu();
            tiketti();
            sms_optio();
            $("#vakiopohjan_loppu").show();
            generoi();
        }
        function f_11() {
            $("#toimintaohje").show();
            document.getElementById('toimintaohje').innerHTML = "Yhteys toimii asuntoon asti, mikäli vika on Telian RGW:ssä tai takuunalaisessa reitittimessä pyydä palauttamaan laitteeseen tehdasasetukset. Jos sekään ei auta eikä " +
                "laitetta ole vielä vaihdettu tämän vian takia tee mahdollinen laitteen vaihto prosessin mukaan. Jos asiakkaalla on muualta hankittu tai takuuton laite -> myy reititin! Pyydä muutoin asiakasta olemaan yhteydessä Helpsoniin. Jos tiketti tehdään niin 99€ pitää mainita!";
            helppi();
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
            document.getElementById('toimintaohje').innerHTML = "Viankorjaus ei ole Telian vastuulla, yhteys toimii asuntoon asti. Pyydä asiakasta olemaan yhteydessä Helpsoniin. Ehdoton 99e maininta jos asiakas vaatii tikettiä";
            helppi();
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
            document.getElementById('toimintaohje').innerHTML = "Viankorjaus ei ole Telian vastuulla, yhteys toimii asuntoon asti. Pyydä asiakasta olemaan yhteydessä Helpsoniin. Ehdoton 99e maininta jos asiakas vaatii tikettiä";
            helppi();
            $("#vakiopohjan_loppu").show();
            generoi();

        }
        function f_332() {
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

        function tyhjenna() {
            $("#sms").hide();
            $("#kuitumuuntimesta").hide();
            $("#toimintaohje").hide();
            $("#kytkinreititin").hide();
            $("#alcatellucent").hide();
            $("#toisellakoneella").hide();
            $("#saakoipn").hide();

            document.getElementById('asiakasinfo').innerHTML = "";
            document.getElementById('generoitu').innerHTML = "";

            var str = "Liittymänumero: " + $lnro + "\nYhteysnumero: " + $ynro + "\nKäyttäjätunnus: " + $userid + "\nVikakuvaus: " + $vikakuvaus +
                "\nAlkanut " + $pvm + "\n\n" + $tekniikka + " " + $ongelma + "\n" + $merkki + " " + $malli + $laatu + $lahiverkko + $takuulaite + $wlan + $suoraanmodeemista + $puhelinrasioita_1
                + $lankapuhelin + $toinenjohto + $takuulaite_2 + $tehdasasetukset + $puhelinrasioita_2 + $lankapuhelin_2 + $toinenjohto_2 + $reititin + $merkkijamalli + $kaikillalaitteilla +
                $kaikillalaitteilla + "\n\nVikakuvaus:\n" + $info;
        }

    </script>
</form>
</body>
</html>
