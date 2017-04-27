<input type='hidden' name='tech' value='GPON'>
<input type='hidden' name='ongelma' value='Pätkii&#10;'>

<form id="vikalomake">

    <div id="ensimmainen" class="koe" >
        <h3>Pätkiikö testattaessa tietokoneella verkkokaapelilla suoraan kuitumuuntimesta?</h3>
        <input type='radio' onclick='f_11();' id='id_11' name='name_1' value='Pätkii suoraan kaapelilla kuitumuuntimesta'><label for='id_11'>Kyllä</label>
        <input type='radio' onclick='f_12();' id='id_12' name='name_1' value='Ei pätki suoraan kaapelilla kuitumuuntimesta'><label for='id_12'>Ei</label>
        <input type='radio' onclick='$("#onkoasiakkaalla").show();' id='id_13' name='name_1' value='Ei pysty testaamaan suoraan kaapelilla kuitumuuntimesta'><label for='id_13'>Ei pysty testaamaan</label>
    </div>

    <div id="onkoasiakkaalla" class="koe" hidden>
        <h3>Onko asiakkaalla kytkintä tai reititintä ennen tietokonetta?</h3>
        <input type='radio' onclick='$("#muillalaitteilla").show();' id='id_31' name='name_2' value='Asiakkaalla kytkin/reititin ennen tietokonetta'><label for='id_31'>Kyllä</label>
        <input type='radio' onclick='f_132();' id='id_32' name='name_2' value='Asiakkaalla ei kytkintä/reititintä ennen tietokonetta'><label for='id_32'>Ei</label>
    </div>
    <div id="muillalaitteilla" class="koe" hidden>
        <h3>Pätkiikö myös muilla laitteilla?</h3>

        <select id="merkki" name="merkki">
            <option value=""></option>
            <option value="Zyxel">Zyxel</option>
            <option value="Telewell">Telewell</option>
            <option value="A-link">A-link</option>
            <option value="D-link">D-link</option>
            <option value="TP-link">TP-link</option>
            <option value="Muu">Muu</option>
        </select>
        <input type="text" class="lyhyt" id="malli" name="malli" placeholder="Modeemin malli"><br><br>
        <input type='radio' onclick='$("#kayttaakoasiakas").show();' id='id_1311' name='name_3' value='Pätkii muilla laitteilla / Asiakkaalla yksi laite'><label for='id_1311'>Kyllä / asiakkaalla yksi laite</label>
        <input type='radio' onclick='f_1312();' id='id_1312' name='name_3' value='Ei pätki muilla laitteilla'><label for='id_1312'>Ei</label>
    </div>

    <div id="kayttaakoasiakas" class="koe" hidden>
        <h3>Käyttääkö asiakas langatonta (Wi-Fi) yhteyttä?</h3>
        <input type='radio' onclick='$("#patkiikolangatonta").show();' id='id_13111' name='name_4' value='Asiakas käyttää Wi-Fiä'><label for='id_13111'>Kyllä</label>
        <input type='radio' onclick='$("#patkiikomyos").show();' id='id_13112' name='name_4' value='Asiakas ei käytä Wi-Fiä'><label for='id_13112'>Ei</label>
    </div>

    <div id="patkiikolangatonta" class="koe" hidden>
        <h3>Pätkiikö myös ilman langatonta yhteyttä?</h3>
        <input type='radio' onclick='$("#patkiikomyos").show();' id='id_131111' name='name_5' value='Pätkii myös ilman langatonta yhteyttä'><label for='id_131111'>Kyllä</label>
        <input type='radio' onclick='f_131112();' id='id_131112' name='name_5' value='Ei pätki ilman langatonta yhteyttä'><label for='id_131112'>Ei</label>
        <input type='radio' onclick='f_131113();' id='id_131113' name='name_5' value='Ei testattu ilman langatonta yhteyttä'><label for='id_131113'>Ei ole testattu</label>
    </div>

    <div id="patkiikomyos" class="koe" hidden>
        <h3>Pätkiikö myös ilman reititintä?</h3>
        <input type='radio' onclick='f_131121();' id='id_131121' name='name_6' value='Pätkii myös ilman reititintä'><label for='id_131121'>Kyllä</label>
        <input type='radio' onclick='f_131122();' id='id_131122' name='name_6' value='Ei pätki ilman reititintä'><label for='id_131122'>Ei</label>
        <input type='radio' onclick='f_131123();' id='id_131123' name='name_6' value='Ei ole testattu ilman reititintä'><label for='id_131123'>Ei ole testattu</label>
    </div>

    <div id="toimintaohje" class="ohje" hidden></div>

    <script>

        function f_11() {
            huomautus("Testaus tehtävä kuitumuuntimesta myös toisella verkkokaapelilla jos mahdollista!");
            generointi("maksu;tiketti");
        }

        function f_12() {
            huomautus("Yhteys toimii asuntoon asti, mikäli vika on Telian RGW:ssä tai takuunalaisessa reitittimessä pyydä palauttamaan laitteeseen tehdasasetukset. WLAN-ongelmatapauksissa pyydä asiakasta olemaan yhteydessä Helpsoniin tai kokeilemaan yhteyttä verkkokaapelilla reitittimestä. Jos RGW on jo vaihdettu tämän vian takia kirjaa asiasta tiketti. Mahdollinen laitevaihto prosessin mukaan. Jos asiakkaalla on muualta hankittu tai takuuton laite -> myy uusi reititin!");
            generointi("maksu;helppi;tiketti;sms_optio");
        }

        function f_132() {
            huomautus("Pyydä asiakasta lähtökohtaisesti olemaan yhteydessä Helpsoniin tai  testaamaan toisella tietokoneella ja verkkokaapeleilla. Tiketti voidaan kirjata mikäli asiakas sitä vaatii mutta 99€ pitää mainita!");
            generointi("maksu;helppi;tiketti;sms_optio");
        }

        function f_1312() {
            huomautus("Vika jää hyvin todennäköisesti asiakkaan päätelaitteeseen tai sen ja reitittimen väliseen yhteyteen. Ei optiota eikä tikettiä, 99e maininta mikäli as. vaatii asentajakäyntiä");
            generointi("helppi");
        }

        function f_131112() {
            huomautus("Vika on Wi-Fi:ssä tai  asiakkaan reitittimessä. Asiakas pitää ohjata Helpsonille. Mikäli vika on Telian RGW:ssä tai takuunalaisessa reitittimessä pyydä palauttamaan laitteeseen tehdasasetukset. Jos RGW on jo vaihdettu tämän vian takia kirjaa asiasta tiketti. Mahdollinen laitevaihto prosessin mukaan. Jos asiakkaalla on muualta hankittu tai takuuton laite -> myy uusi reititin!");
            generointi("helppi");
        }
        function f_131113() {
            huomautus("Vika on todennäköisesti Wi-Fi:ssä, asunnon sisäverkossa, asiakkaan reitittimessä tai tietokoneessa mutta Telian osuutta ei voida rajata pois ilman testausta suoraan kuitumuuntimesta. Asiakas pitää ohjata Helpsonille.Tiketti voidaan kirjata mikäli asiakas sitä vaatii mutta 99e pitää mainita. Tiketti pitää kirjata jos yhteys ei ole toiminut vielä kertaakaan tilatulla nopeudella");
            generointi("maksu;helppi;tiketti");
        }
        function f_131121() {
            huomautus("Vika on todennäköisesti asunnon sisäverkossa tai tietokoneessa mutta Telian osuutta ei voida rajata pois ilman testausta suoraan kuitumuuntimesta. Ei optiota koska as. ei pysty/suostu testaamaan. Asiakas pitää ohjata Helpsonille.Tiketti voidaan kirjata mikäli asiakas sitä vaatii mutta 99e pitää mainita. Tiketti pitää kirjata jos yhteys ei ole toiminut vielä kertaakaan tilatulla nopeudella");
            generointi("maksu;helppi;tiketti");
        }
        function f_131122() {
            huomautus("Mikäli vika on Telian RGW:ssä tai takuunalaisessa reitittimessä pyydä palauttamaan laitteeseen tehdasasetukset. Jos RGW on jo vaihdettu tämän vian takia kirjaa asiasta tiketti. Mahdollinen laitevaihto prosessin mukaan. Jos asiakkaalla on muualta hankittu tai takuuton laite -> myy uusi reititin!");
            generointi("maksu;tiketti");
        }
        function f_131123() {
            huomautus("Pyydä testaamaan ilman reititintä ja toisella verkkokaapelilla. Mikäli vika on Telian RGW:ssä tai takuunalaisessa reitittimessä pyydä palauttamaan laitteeseen tehdasasetukset ja vastaamaan sms-optioon jos vika jatkuu resetin jälkeen");
            generointi("maksu;sms_optio");
        }


    </script>
</form>