<input type='hidden' name='tech' value='ADSL'>
<input type='hidden' id='hidastelee' name='ongelma' value='Hidastelee&#10;'>

<form id="vikalomake">

    <div id="ensimmainen" class="koe">
        <h3>Täytä perustiedot</h3>

        <input type="text" class="lyhyt" id="tilattunopeusluokka" name="tilattunopeusluokka" placeholder="Tilattu nopeusluokka">
        <input type="text" class="lyhyt" id="mitattunopeus" name="mitattunopeus" placeholder="Mitattu yhteysnopeus">
        <input type="text" class="lyhyt" id="mitenmitattu" name="mitenmitattu" placeholder="Miten yhteysnopeus mitattu?">
        <br>
        <select id="merkki" name="merkki" title="merkki">
            <option value=""></option>
            <option value="Zyxel">Zyxel</option>
            <option value="Telewell">Telewell</option>
            <option value="A-link">A-link</option>
            <option value="D-link">D-link</option>
            <option value="TP-link">TP-link</option>
            <option value="Muu">Muu</option>
        </select>
        <input type="text" class="lyhyt" id="malli" name="malli" placeholder="Modeemin malli">


        <h3>Yhteyden laatu (kts. Line history tool sekä ica / NA-testi)</h3>
        <input type='radio' onclick='$("#hidasteleeko").show();' id='id_11' name='laatu' value='ICA: Yhteydessä ei vikaa'><label for='id_11'>Yhteydessä ei vikaa</label>
        <input type='radio' onclick='generointi("tiketti");' id='id_12' name='laatu' value='Liittymälle on konfiguroitu väärä nopeusprofiili'><label for='id_12'>Liittymälle on konfiguroitu väärä nopeusprofiili</label>
        <input type='radio' onclick='f_13();' id='id_13' name='laatu' value='Yhteyden laatu / kättelynopeus on heikko'><label for='id_13'>Yhteyden laatu / kättelynopeus on heikko</label>
        <input type='radio' onclick='$("#wlan").show();' id='id_14' name='laatu' value='ICA: Tietoa ei ole saatavilla tai sitä on vaikea tulkita'><label for='id_14'>Tietoa ei ole saatavilla tai sitä on vaikea tulkita</label>
    </div>

    <div id="hidasteleeko" class="koe" hidden>
        <h3>Hidasteleeko testattaessa tietokoneella verkkokaapelilla suoraan modeemista?</h3>
        <input type='radio' onclick='$("#sisaverkkoongelma").show();' id='id_111' name='lahiverkko' value='Ei hidastele kaapelin kanssa'><label for='id_111'>Ei</label>
        <input type='radio' onclick='f_112();' id='id_112' name='lahiverkko' value='Ei ole vielä testattu kaapelilla'><label for='id_112'>Ei ole vielä testattu, SMS-optio</label>
        <input type='radio' onclick='f_113();' id='id_113' name='lahiverkko' value='Ei pysty testaamaan kaapelilla'><label for='id_113'>Ei pysty testaamaan</label>
        <input type='radio' onclick='f_114();' id='id_114' name='lahiverkko' value='Hidasteleeko kaapelin kanssa'><label for='id_114'>Kyllä</label>
    </div>

    <div id="sisaverkkoongelma" class="koe" hidden>
        <h3>Kyse on WLAN / sisäverkko-ongelmasta</h3>
        <input type='radio' onclick='f_1111();' id='id_1111' name='sisaverkko' value='Asiakkaan oma laite, ei takuuta'><label for='id_1111'>Asiakkaan oma laite, ei takuuta</label>
        <input type='radio' onclick='f_1112();' id='id_1112' name='sisaverkko' value='RGW tai takuunalainen laite'><label for='id_1112'>RGW tai takuunalainen laite</label>
    </div>

    <div id="tehdasasetukset" class="koe" hidden>
        <h3>Onko tehdasasetukset palautettu vian ilmenemisen jälkeen?</h3>
        <input type='radio' onclick='f_11121();' id='id_11121' name='tehdasasetukset' value='Tehdasasetukset palautettu, modeemia ei vaihdettu'><label for='id_11121'>Kyllä, modeemia ei ole aiemmin vaihdettu tämän vian vuoksi.</label>
        <input type='radio' onclick='f_11122();' id='id_11122' name='tehdasasetukset' value='Ei pysty/halua palauttaa tehdasasetuksia'><label for='id_11122'>Ei pysty tai halua testata</label>
        <input type='radio' onclick='f_11123();' id='id_11123' name='tehdasasetukset' value='Ei ole kotona, palauttaa tehdasasetukset kun pystyy'><label for='id_11123'>Ei ole kotona, testaa sitten kun pystyy</label>
        <input type='radio' onclick='f_11124();' id='id_11124' name='tehdasasetukset' value='Tehtasasetukset palautettu, modeemi vaihdettu'><label for='id_11124'>Kyllä, modeemi on jo vaihdettu tämän vian vuoksi</label>
    </div>

    <div id="wlan" class="koe" hidden>
        <h3>Käyttääkö asiakas langatonta (Wi-Fi) yhteyttä?</h3>
        <input type='radio' onclick='$("#suoraanmodeemista").show();' id='id_141' name='wlan' value='Käyttää Wi-Fiä / Ei osaa sanoa'><label for='id_141'>Kyllä / Ei osaa sanoa</label>
        <input type='radio' onclick='f_13();' id='id_142' name='wlan' value='Ei käytä Wi-Fiä'><label for='id_142'>Ei</label>
    </div>

    <div id="suoraanmodeemista" class="koe" hidden>
        <h3>Hidasteleeko testattaessa tietokoneella verkkokaapelilla suoraan modeemista?</h3>
        <input type='radio' onclick='f_13();' id='id_1421' name='suoraanmodeemista' value='Hidastelee kaapelin kanssa'><label for='id_1421'>Kyllä</label>
        <input type='radio' onclick='f_1422();' id='id_1422' name='suoraanmodeemista' value='Ei pysty testaamaan kaapelilla'><label for='id_1422'>Ei pysty testaamaan / Ei tietoa</label>
        <input type='radio' onclick='$("#sisaverkko").show();' id='id_1423' name='suoraanmodeemista' value='Ei hidastele kaapelin kanssa'><label for='id_1423'>Ei</label>

    </div>

    <div id="sisaverkko" class="koe" hidden>
        <h3>Kyse on WLAN / sisäverkko-ongelmasta</h3>
        <input type='radio' onclick='f_14231();' id='id_14231' name='sisaverkko' value='Asiakkaan oma laite, ei takuuta'><label for='id_14231'>Asiakkaan oma laite, ei takuuta</label>
        <input type='radio' onclick='f_14232();' id='id_14232' name='sisaverkko' value='RGW tai takuunalainen laite'><label for='id_14232'>RGW tai takuunalainen laite</label>
    </div>

    <div id="puhelinrasioita1" class="koe" hidden>
        <div id="testidivi">Huom</br>Toisella modeemilla testaaminen on suositeltavaa, sillä yhteysongelma saattaa johtua vaurioituneesta modeemista
        </div>
        <h3>Onko puhelinrasioita enemmän kuin yksi?</h3>
        <input type='radio' onclick='puhelinrasioita_1();' id='puhelinrasioita1id' name='puhelinrasioita1' value='Puhelinrasioita useampi, muttei testattu muissa'><label for='puhelinrasioita1id'>Kyllä, ei ole testattu muissa
            rasioissa</label>
        <input type='radio' onclick='puhelinrasioita_1();' id='puhelinrasioita2id' name='puhelinrasioita1' value='Modeemia on testattu toisessa puhelinrasiossa'><label for='puhelinrasioita2id'>Kyllä, modeemia on testattu toisessa
            rasiassa</label>
        <input type='radio' onclick='puhelinrasioita_1();' id='puhelinrasioita3id' name='puhelinrasioita1' value='Vain yksi puhelinrasia'><label for='puhelinrasioita3id'>Ei</label>
        <input type='radio' onclick='puhelinrasioita_1();' id='puhelinrasioita4id' name='puhelinrasioita1' value='Ei tiedossa, onko useampi puhelinrasia'><label for='puhelinrasioita4id'>Ei tiedossa</label>
    </div>

    <div id="lankapuhelin_1" class="koe" hidden>
        <div id="testidivi">Huom</br>Muita laitteita ovat esim. UPS, ylijännitesuoja, Fax, varashälytin</div>
        <h3>Onko lankapuhelinta tai muita laitteita kytkettynä puhelinverkkoon?</h3>
        <input type='radio' onclick='lankapuhelin1();' id='lankapuhelin1_id' name='lankapuhelin' value='Ei lankapuhelinta tai muita laitteita'><label for='lankapuhelin1_id'>Ei</label>
        <input type='radio' onclick='lankapuhelin1();' id='lankapuhelin2_id' name='lankapuhelin' value='Lankapuhelin kytkettynä verkkoon'><label for='lankapuhelin2_id'>On puhelin, varmistakaa että puhelimen rasiassa on suodatin.</label>
        <input type='radio' onclick='lankapuhelin2();' id='lankapuhelin3_id' name='lankapuhelin' value='Puhelinverkossa myös '><label for='lankapuhelin3_id'>On joku muu laite, mikä? (avoin kenttä)</label>
    </div>

    <div id="toinenjohto" class="koe" hidden>
        <h3>Onko testattu puhelinrasian ja modeemin välillä toista johtoa ilman jatkojohtoa ja muita laitteita? </h3>
        <input type='radio' onclick='generointi("maksu;tiketti");' id='toinenjohto1id' name='toinenjohto' value='Toinen johto testattu'><label for='toinenjohto1id'>Kyllä</label>
        <input type='radio' onclick='generointi("maksu;helpson;sms_optio");' id='toinenjohto2id' name='toinenjohto' value='Ei testattu toista johtoa, mutta pyydetty testaamaan'><label for='toinenjohto2id'>Pyydetty testaamaan</label>
        <input type='radio' onclick='generointi("maksu;tiketti");' id='toinenjohto3id' name='toinenjohto' value='Ei halua/pysty testaamaan toista johtoa'><label for='toinenjohto3id'>Ei pysty tai halua testata</label>
    </div>

    <div id="toinenjohto2" class="koe" hidden>
        <h3>Onko testattu puhelinrasian ja modeemin välillä toista johtoa ilman jatkojohtoa ja muita laitteita? </h3>
        <input type='radio' onclick='' id='toinenjohto21id' name='toinenjohto2' value='Toinen johto testattu'><label for='toinenjohto21id'>Kyllä</label>
        <input type='radio' onclick='' id='toinenjohto22id' name='toinenjohto2' value='Ei pysty tai halua testata toista johtoa'><label for='toinenjohto22id'>Ei pysty tai halua testata</label>
    </div>

    <div id="kytkinreititin" class="koe" hidden>
        <h3>Onko asiakkaalla kytkintä tai reititintä ennen tietokonetta?</h3>
        <input type='radio' onclick='f_kytkinreititin1();' id='id_kytkinreititin1' name='kytkinreititin' value='Asiakkaalla kytkin/reititin ennen tietokonetta'><label for='id_kytkinreititin1'>Kyllä</label>
        <input type='radio' onclick='generointi("maksu;tiketti;sms_optio");' id='id_kytkinreititin2' name='kytkinreititin' value='Ei kytkintä/reititintä'><label for='id_kytkinreititin2'>Ei</label>
    </div>

    <div id="merkkimalli" class="koe" hidden>
        <h3>Kytkimen/reitittimen merkki ja malli</h3>
        <input type="text" class="lyhyt" id="merkkijamalli" name="merkkijamalli" placeholder="Merkki ja malli">
    </div>
    <div id="kaikillalaitteilla" class="koe" hidden>
        <h3>Esiintyykö hidastelua kaikilla päätelaitteilla?</h3>
        <input type='radio' onclick='$("#ilmanreititinta").show();' id='kaikillalaitteilla_1_id' name='kaikillalaitteilla' value='Hidastelua vain yhdellä laitteella / vain yksi päätelaite'><label for='kaikillalaitteilla_1_id'>Kyllä</label>
        <input type='radio' onclick='$("#ilmanreititinta").show();' id='kaikillalaitteilla_2_id' name='kaikillalaitteilla' value='Asiakkaalla vain yksi päätelaite.'><label for='kaikillalaitteilla_2_id'>Asiakkaalla vain yksi
            päätelaite</label>
    </div>
    <div id="ilmanreititinta" class="koe" hidden>
        <h3>Hidasteleeko myös ilman reititintä?</h3>
        <input type='radio' onclick='ilmanreititinta_1();' id='ilmanreititinta_1_id' name='ilmanreititinta' value='Hidastelee ilman reititintä'><label for='ilmanreititinta_1_id'>Kyllä</label>
        <input type='radio' onclick='generointi("helpson");;' id='ilmanreititinta_2_id' name='ilmanreititinta' value='Ei hidastele reitittimen kanssa'><label for='ilmanreititinta_2_id'>Ei.</label>
        <input type='radio' onclick='ilmanreititinta_3();' id='ilmanreititinta_3_id' name='ilmanreititinta' value='Ei ole testannu ilman reititintä '><label for='ilmanreititinta_3_id'>Ei ole testattu</label>
    </div>
    <div id="toimintaohje" class="ohje" hidden></div>
    <div id="tehdasasetukset2" class="koe" hidden>
        <h3>Onko tehdasasetukset palautettu vian ilmenemisen jälkeen?</h3>
        <input type='radio' onclick='f_142321();' id='id_142321' name='tehdasasetukset2' value='Tehdasasetukset palautettu, modeemia ei vaihdettu'><label for='id_142321'>Kyllä, modeemia ei ole aiemmin vaihdettu tämän vian vuoksi.</label>
        <input type='radio' onclick='generointi("maksu;helpson;tiketti;);' id='id_142322' name='tehdasasetukset2' value='Ei pysty/halua palauttaa tehdasasetuksia'><label for='id_142322'>Ei pysty tai halua testata</label>
        <input type='radio' onclick='generointi("maksu;helpson;tiketti");' id='id_142323' name='tehdasasetukset2' value='Ei ole kotona, palauttaa tehdasasetukset kun pystyy'><label for='id_142323'>Ei ole kotona, testaa sitten kun
            pystyy</label>
        <input type='radio' onclick='generointi("maksu;tiketti");' id='id_142324' name='tehdasasetukset2' value='Tehtasasetukset palautettu, modeemi vaihdettu'><label for='id_142324'>Kyllä, modeemi on jo vaihdettu tämän vian vuoksi</label>
    </div>

    <script>

        function ilmanreititinta_1() {
            huomautus("Pyydä palauttamaan modeemiin tehdasasetukset. ");
            generointi("maksu;tiketti;sms_optio");
        }
        function ilmanreititinta_3() {
            huomautus("Jos vika ei vielä ratkennut, pyydä testaamaan suoraan modeemista verkkokaapelilla ja palauttamaan modeemiin tehdasasetukset. Pyydä vastaamaan sms-optioon jos vika jatkuu testausten jälkeen. Jos testauksia ei pysty suorittamaan kirjaa tiketti ja mainitse 99e");
            generointi("maksu;helpson;tiketti;sms_optio");
        }
        function f_13() {
            $("#puhelinrasioita1").show();
            $("#lankapuhelin_1").show();
            $("#toinenjohto").show();
        }
        function f_14231() {
            huomautus("Kyseessä on wlan ja/tai muu asiakaslaiteongelma, koska yhteys toimii hidastelematta modeemiin asti. WLAN-ongelmatapauksissa pyydä asiakasta olemaan yhteydessä Helpsoniin. Jos tiketti tehdään niin 99€ pitää mainita!Jos asiakkaalla on muualta hankittu tai takuuton laite ja vika on rajattu siihen -> myy modeemi!");
            generointi("maksu;helpson;tiketti;sms_optio");
        }

        function f_142321() {
            huomautus("Takuumodeemeissa tehdään tarvittaessa softan päivitys ja mahdollinen laitteen vaihto prosessin mukaan. Jos asiakkaalla on muualta hankittu tai takuuton laite -> myy modeemi!");
            generoi();
        }

        function f_1422() {
            $("#puhelinrasioita1").show();
            $("#lankapuhelin_1").show();
            $("#toinenjohto2").show();
            $("#kytkinreititin").show();
        }
        function f_kytkinreititin1() {
            $("#merkkimalli").show();
            $("#kaikillalaitteilla").show();
        }
        function kaikillalaitteilla_2() {
            $("#toimintaohje").show();
            document.getElementById('toimintaohje').innerHTML = "Vika jää hyvin todennäköisesti asiakkaan päätelaitteeseen tai sen ja reitittimen väliseen yhteyteen. Ei optiota eikä tikettiä, 99e maininta mikäli as. vaatii asentajakäyntiä";
            generointi("helpson");
        }
        function f_14232() {
            $("#toimintaohje").show();
            $("#toimintaohje").text("Pyydä asiakasta palauttamaan tehdasasetukset toimimattomaan modeemiin, jos sitä ei ole vielä tehty");
            $("#tehdasasetukset2").show();
        }
        function f_112() {
            huomautus("Pyydetään asiakasta testaamaan verkkokaapelilla suoraan modeemin lähiverkkoportista (kannattaa ohjeistaa testaamaan useammasta eri portista, jos mahdollista myös eri päätelaitteilla).Pyydä asiakasta olemaan yhteydessä Helpsoniin mikäli testaaminen tuntuu vaikealta.");
            generointi("maksu;helpson;sms_optio");
        }

        function f_113() {
            huomautus("Vika on hyvin todennäköisesti asiakkaan laiteympäristössä. Pyydä asiakasta olemaan yhteydessä Helpsoniin.SMS-option voi tarvittaessa kirjata jos se nähdään aiheelliseksi. Jos asiakas on lähiaikoina ollut yhteydessä samasta viasta, eikä tästä ole aiemmin kirjattu tikettiä, niin siinä tapauksessa voi avata tiketin. Tällöin aina maininta asentajakäyntimaksusta 99€.");
            generointi("maksu;helpson;tiketti;sms_optio");
        }

        function f_114() {
            huomautus("Pyydä asiakasta testaamaan yhteyttä toisella modeemilla ja tietokoneella.");
            generointi("maksu;helpson;tiketti;sms_optio");
        }

        function f_1111() {
            $('#toimintaohje').show();
            $('#toimintaohje').text("Kyseessä on wlan ja/tai muu asiakaslaiteongelma, koska yhteys toimii hidastelematta modeemiin asti. WLAN-ongelmatapauksissa pyydä asiakasta olemaan yhteydessä Helpsoniin. Jos tiketti tehdään niin 99€ pitää mainita!                Jos asiakkaalla on muualta hankittu tai takuuton laite ja vika on rajattu siihen -> myy modeemi!");
            generointi("maksu;helpson;tiketti;sms_optio");
        }

        function f_1112() {
            $("#toimintaohje").show();
            $("#tehdasasetukset").show();
            $("#toimintaohje").text("Pyydä asiakasta palauttamaan tehdasasetukset toimimattomaan modeemiin, jos sitä ei ole vielä tehty");
        }

        function f_11121() {
            huomautus("Takuumodeemeissa tehdään tarvittaessa softan päivitys ja mahdollinen laitteen vaihto prosessin mukaan. Jos asiakkaalla on muualta hankittu tai takuuton laite -> myy modeemi!");
            generoi();
        }
        function f_11122() {
            // Muistutus näkyviin: Miksi? Kirjaa syy "Agentin omat havainnot ja lisätiedot"-kenttään
            generointi("maksu;helpson;tiketti");

        }
        function f_11123() {
            generointi("maksu;helpson;sms_optio");
        }
        function f_11124() {
            generointi("maksu;tiketti");
        }
    </script>
</form>