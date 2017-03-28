<input type='hidden' name='tech' value='ADSL'>
<input type='hidden' name='ongelma' value='Pätkii&#10;'>

<form id="vikalomake">
    <div id="ensimmainen" class="koe">
        <h3>Modeemin merkki ja malli</h3>
        <select id="merkki" name="merkki">
            <option value=""></option>
            <option value="Zyxel">Zyxel</option>
            <option value="Telewell">Telewell</option>
            <option value="A-link">A-link</option>
            <option value="D-link">D-link</option>
            <option value="TP-link">TP-link</option>
            <option value="Muu">Muu</option>
        </select>
        <input type="text" class="lyhyt" id="malli" name="malli" placeholder="Modeemin malli"></input>

        <h3>Yhteyden laatu (kts. line history tool sekä ICA / NA-testi)</h3>
        <input type='radio' onclick='laatu_1();' id='laatu_1_id' name='laatu' value='ICA/NA: Yhteydessä ei vikaa'><label for='laatu_1_id'>Yhteydessä ei vikaa</label>
        <input type='radio' onclick='laatu_2();' id='laatu_2_id' name='laatu' value='ICA/NA: Tietoa ei saatavilla tai vaikea tulkita'><label for='laatu_2_id'>Tietoa ei saatavilla tai vaikea tulkita</label>
        <input type='radio' onclick='laatu_3();' id='laatu_3_id' name='laatu' value='ICA/NA: Yhteyden laatu / kättely on heikko'><label for='laatu_3_id'>Yhteyden laatu /
            kättely on heikko</label>
    </div>

    <div id="lahiverkko" class="koe" hidden>
        <h3>Pätkiikö testattaessa tietokoneella verkkokaapelilla suoraan modeemista?</h3>
        <input type='radio' onclick='lahiverkko_1();' id='lahiverkko_1_id' name='lahiverkko' value='Pätkii kaapelin kanssa'><label for='lahiverkko_1_id'>Kyllä</label>
        <input type='radio' onclick='lahiverkko_2();' id='lahiverkko_2_id' name='lahiverkko' value='Ei pätki kaapelin kanssa'><label for='lahiverkko_2_id'>Ei</label>
        <input type='radio' onclick='lahiverkko_3();' id='lahiverkko_3_id' name='lahiverkko' value='Ei pysty testaamaan kaapelilla'><label for='lahiverkko_3_id'>Ei pysty testaamaan</label>
        <input type='radio' onclick='lahiverkko_4();' id='lahiverkko_4_id' name='lahiverkko' value='Ei ole vielä testattu kaapelilla'><label for='lahiverkko_4_id'>Ei ole vielä testattu, SMS-optio</label>
    </div>

    <div id="toimintaohje" class="ohje" hidden></div>

    <div id="takuulaite" class="koe" hidden>
        <h3>Oma vai takuunalainen?</h3>
        <input type='radio' onclick='takuulaite_1();' id='takuulaite1id' name='takuulaite' value='Laite on asiakkaan oma'><label for='takuulaite1id'>Asiakkaan oma laite</label>
        <input type='radio' onclick='takuulaite_2();' id='takuulaite2id' name='takuulaite' value='Laite on RGW / takuunalainen laite'><label for='takuulaite2id'>RGW / takuunalainen
            laite</label>
    </div>

    <div id="toimintaohje2" class="ohje" hidden></div>
    <div id="toimintaohje3" class="ohje" hidden></div>

    <div id="wlan" class="koe" hidden>
        <h3>Käyttääkö asiakas langatonta (Wi-Fi) yhteyttä?</h3>
        <input type='radio' onclick='wlan_1();' id='wlan_1_id' name='wlan' value='Käyttää Wi-Fiä / Ei osaa sanoa'><label for='wlan_1_id'>Kyllä / Ei osaa sanoa</label>
        <input type='radio' onclick='wlan_2();' id='wlan_2_id' name='wlan' value='Ei käytä Wi-Fiä'><label for='wlan_2_id'>Ei</label>
    </div>

    <div id="suoraanmodeemista" class="koe" hidden>
        <h3>Pätkiikö testattaessa tietokoneella verkkokaapelilla suoraan modeemista?</h3>
        <input type='radio' onclick='laatu_3();' id='suoraanmodeemista_1_id' name='suoraanmodeemista' value='Pätkii kaapelin kanssa'><label for='suoraanmodeemista_1_id'>Kyllä</label>
        <input type='radio' onclick='suoraanmodeemista_1();' id='suoraanmodeemista_2_id' name='suoraanmodeemista' value='Ei pätki kaapelin kanssa'><label for='suoraanmodeemista_2_id'>Ei</label>
        <input type='radio' onclick='suoraanmodeemista_2();' id='suoraanmodeemista_3_id' name='suoraanmodeemista' value='Ei pysty testaamaan kaapelilla'><label for='suoraanmodeemista_3_id'>Ei pysty testaamaan / Ei tietoa</label>
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

    <div id="toimintaohje4" class="ohje" hidden></div>

    <div id="lankapuhelin_1" class="koe" hidden>
        <div id="testidivi">Huom</br>Muita laitteita ovat esim. UPS, ylijännitesuoja, Fax, varashälytin</div>
        <h3>Onko lankapuhelinta tai muita laitteita kytkettynä puhelinverkkoon?</h3>
        <input type='radio' onclick='lankapuhelin1();' id='lankapuhelin1_id' name='lankapuhelin' value='Ei lankapuhelinta tai muita laitteita'><label for='lankapuhelin1_id'>Ei</label>
        <input type='radio' onclick='lankapuhelin1();' id='lankapuhelin2_id' name='lankapuhelin' value='Lankapuhelin kytkettynä verkkoon'><label for='lankapuhelin2_id'>On puhelin, varmistakaa että puhelimen rasiassa on suodatin.</label>
        <input type='radio' onclick='lankapuhelin2();' id='lankapuhelin3_id' name='lankapuhelin' value='Puhelinverkossa myös '><label for='lankapuhelin3_id'>On joku muu laite, mikä? (avoin kenttä)</label>
    </div>

    <div id="toinenlaite" class="koe" hidden>
        <h3>Mikä laite?</h3>
        <input type="text" class="lyhyt" id="toinenlaite" name="toinenlaite" placeholder="Mikä laite? "></input>
    </div>

    <div id="toimintaohje5" class="ohje" hidden></div>

    <div id="toinenjohto" class="koe" hidden>
        <h3>Onko testattu puhelinrasian ja modeemin välillä toista johtoa ilman jatkojohtoa ja muita
            laitteita? </h3>
        <input type='radio' onclick='toinenjohto1();' id='toinenjohto1id' name='toinenjohto' value='Toinen johto testattu'><label for='toinenjohto1id'>Kyllä</label>
        <input type='radio' onclick='toinenjohto2();' id='toinenjohto2id' name='toinenjohto' value='Ei testattu toista johtoa, mutta pyydetty testaamaan'><label for='toinenjohto2id'>Pyydetty testaamaan</label>
        <input type='radio' onclick='toinenjohto1();' id='toinenjohto3id' name='toinenjohto' value='Ei halua/pysty testaamaan toista johtoa'><label for='toinenjohto3id'>Ei pysty tai halua testata</label>
    </div>

    <div id="takuulaite_2" class="koe" hidden>
        <h3>Kyse on WLAN / sisäverkko-ongelmasta?</h3>
        <input type='radio' onclick='takuulaite_2_1();' id='takuulaite_2_1_id' name='takuulaite_2' value='Laite on asiakkaan oma'><label for='takuulaite_2_1_id'>Asiakkaan oma laite</label>
        <input type='radio' onclick='takuulaite_2_2();' id='takuulaite_2_2_id' name='takuulaite_2' value='Laite on RGW / takuunalainen laite'><label for='takuulaite_2_2_id'>RGW / takuunalainen laite</label>
    </div>

    <div id="toimintaohje6" class="ohje" hidden></div>

    <div id="tehdasasetukset2" class="koe" hidden>
        <h3>Auttaako tehdasasetusten palauttaminen toimimattomaan modeemiin?</h3>
        <input type='radio' onclick='tehdasasetukset21();' id='tehdasasetukset21id' name='tehdasasetukset' value='Tehdasasetuksien palauttaminen ei auttanut, eikä modeemia ole aiemmin vaihdettu'><label for='tehdasasetukset21id'>Kyllä,
            modeemia ei ole aiemmin vaihdettu tämän vian vuoksi.</label>
        <input type='radio' onclick='tehdasasetukset22();' id='tehdasasetukset22id' name='tehdasasetukset' value='Asiakas ei halua/pysty palauttamaan tehdasasetuksia'><label for='tehdasasetukset22id'>Ei pysty tai halua testata</label>
        <input type='radio' onclick='tehdasasetukset23();' id='tehdasasetukset23id' name='tehdasasetukset' value='Asiakas ei ole kotona, mutta testaa kun pystyy'><label for='tehdasasetukset23id'>Ei ole kotona, testaa sitten kun
            pystyy</label>
        <input type='radio' onclick='tehdasasetukset24();' id='tehdasasetukset24id' name='tehdasasetukset' value='Tehdasasetuksien palauttaminen ei auttanut ja modeemi on aiemmin vaihdettu'><label for='tehdasasetukset24id'>Kyllä, modeemi on
            jo vaihdettu tämän vian vuoksi</label>
    </div>

    <div id="toimintaohje7" class="ohje" hidden></div>


    <div id="puhelinrasioita_2" class="koe" hidden>
        <div id="testidivi">Huom</br>Miksi? Kirjaa syy Agentin havainnot -kenttään</div>
        <h3>Onko puhelinrasioita enemmän kuin yksi?</h3>
        <input type='radio' onclick='puhelinrasioita2();' id='puhelinrasioita_2_1id' name='puhelinrasioita_2' value='Puhelinrasioita useampi, muttei testattu muissa'><label for='puhelinrasioita_2_1id'>Kyllä, ei ole testattu muissa
            rasioissa</label>
        <input type='radio' onclick='puhelinrasioita2();' id='puhelinrasioita_2_2id' name='puhelinrasioita_2' value='Modeemia on testattu toisessa puhelinrasiossa'><label for='puhelinrasioita_2_2id'>Kyllä, modeemia on testattu toisessa
            rasiassa</label>
        <input type='radio' onclick='puhelinrasioita2();' id='puhelinrasioita_2_3id' name='puhelinrasioita_2' value='Vain yksi puhelinrasia'><label for='puhelinrasioita_2_3id'>Ei</label>
        <input type='radio' onclick='puhelinrasioita2();' id='puhelinrasioita_2_4id' name='puhelinrasioita_2' value='Ei tiedossa, onko useampi puhelinrasia'><label for='puhelinrasioita_2_4id'>Ei tiedossa</label>
    </div>

    <div id="toimintaohje8" class="ohje" hidden></div>

    <div id="lankapuhelin_2" class="koe" hidden>
        <div id="testidivi">Huom</br>Muita laitteita ovat esim. UPS, ylijännitesuoja, Fax, varashälytin</div>
        <h3>Onko lankapuhelinta tai muita laitteita kytkettynä puhelinverkkoon?</h3>
        <input type='radio' onclick='lankapuhelin2_1();' id='lankapuhelin_2_1_id' name='lankapuhelin_2' value='Ei lankapuhelinta tai muita laitteita'><label for='lankapuhelin_2_1_id'>Ei</label>
        <input type='radio' onclick='lankapuhelin2_1();' id='lankapuhelin_2_2_id' name='lankapuhelin_2' value='Lankapuhelin kytkettynä verkkoon'><label for='lankapuhelin_2_2_id'>On puhelin, varmistakaa että puhelimen rasiassa on
            suodatin.</label>
        <input type='radio' onclick='lankapuhelin2_1();' id='lankapuhelin_2_3_id' name='lankapuhelin_2' value='Puhelinverkossa myös '><label for='lankapuhelin_2_3_id'>On joku muu laite, mikä? (avoin kenttä)</label>
    </div>

    <div id="toimintaohje9" class="ohje" hidden></div>

    <div id="toinenjohto_2" class="koe" hidden>
        <h3>Onko testattu puhelinrasian ja modeemin välillä toista johtoa ilman jatkojohtoa ja muita laitteita? </h3>
        <input type='radio' onclick='toinenjohto2_1();' id='toinenjohto_2_1id' name='toinenjohto_2' value='Toinen johto testattu'><label for='toinenjohto_2_1id'>Kyllä</label>
        <input type='radio' onclick='toinenjohto2_1();' id='toinenjohto_2_3id' name='toinenjohto_2' value='Ei halua/pysty testaamaan toista johtoa'><label for='toinenjohto_2_3id'>Ei pysty tai halua testata</label>
    </div>


    <div id="reititin" class="koe" hidden>
        <h3>Onko asiakkaalla kytkintä tai reititintä ennen tietokonetta?</h3>
        <input type='radio' onclick='reititin_1();' id='reititin_1_id' name='reititin' value='Ei kytkintä tai reititintä'><label for='reititin_1_id'>Kyllä</label>
        <input type='radio' onclick='reititin_2();' id='reititin_2_id' name='reititin' value='Kytkin/reititin välissä.'><label for='reititin_2_id'>Ei</label>
    </div>

    <div id="merkkimalli" class="koe" hidden>
        <h3>Kytkimen/reitittimen merkki ja malli</h3>
        <input type="text" class="lyhyt" id="merkkijamalli" name="merkkijamalli" placeholder="Merkki ja malli"></input>
    </div>

    <div id="kaikillalaitteilla" class="koe" hidden>
        <h3>Esiintyykö hidastelua kaikilla päätelaitteilla?</h3>
        <input type='radio' onclick='kaikillalaitteilla_1();' id='kaikillalaitteilla_1_id' name='kaikillalaitteilla' value='Hidastelua vain yhdellä laitteella / vain yksi päätelaite'><label for='kaikillalaitteilla_1_id'>Kyllä</label>
        <input type='radio' onclick='kaikillalaitteilla_2();' id='kaikillalaitteilla_2_id' name='kaikillalaitteilla' value='Vain yksi päätelaite hidastelee.'><label for='kaikillalaitteilla_2_id'>Ei</label>
    </div>

    <div id="toimintaohje10" class="ohje" hidden></div>

    <div id="ilmanreititinta" class="koe" hidden>
        <h3>Pätkiikö myös ilman reititintä?</h3>
        <input type='radio' onclick='ilmanreititinta_1();' id='ilmanreititinta_1_id' name='ilmanreititinta' value='Pätkii ilman reititintä'><label for='ilmanreititinta_1_id'>Kyllä</label>
        <input type='radio' onclick='ilmanreititinta_2();' id='ilmanreititinta_2_id' name='ilmanreititinta' value='Ei pätki reitittimen kanssa'><label for='ilmanreititinta_2_id'>Ei.</label>
        <input type='radio' onclick='ilmanreititinta_3();' id='ilmanreititinta_3_id' name='ilmanreititinta' value='Ei ole testannu ilman reititintä '><label for='ilmanreititinta_3_id'>Ei ole testattu</label>
    </div>

    <div id="toimintaohje11" class="ohje" hidden></div>

    <script>
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
            huomautus("Pyydä asiakasta testaamaan yhteyttä toisella modeemilla ja tietokoneella.");
            generointi("maksu;helpson;tiketti;sms_optio");
        }

        function lahiverkko_2() {
            $("#toimintaohje").show();
            document.getElementById('toimintaohje').innerHTML = "Wifin pätkiminen voi johtua muun muassa seuraavista tekijöistä, mutta näitä korjaustoimenpiteitä / testejä ei pidä tehdä puhelun aikana:<ul><li>Modeemin sijainti</li><li>varmista ettei laitetta ole sijoitettu huoneistojakamon sisään / kaappiin</li><li>Pyydä testaamaan kaikki wlan-laitteet yksitellen siten että muut laitteet eivät ole yhteydessä (vanhat laitteet tai vaillinaiset ajurit eivät välttämättä tue uudempaa wlan-standardia tai suojausta)</li><li>Pyydä vaihtamaan modeemin hallintasivulta wlan-kanavaa, samassa rakennuksessa sijaitsevat muut wlan-tukiasemat voivat häiritä asiakkaan langatonta yhteyttä.</li><li>Helpson opastaa ja auttaa wifi -testauksien kanssa</li></ul>";
            $("#takuulaite").show();
        }

        function lahiverkko_3() {
            huomautus("Miksi? Kirjaa syy Agentin havainnot -kenttään.Vika on hyvin todennäköisesti asiakkaan laiteympäristössä. Pyydä asiakasta olemaan yhteydessä Helpsoniin.SMS-option voi tarvittaessa kirjata jos se nähdään aiheelliseksi. Jos asiakas on lähiaikoina ollut yhteydessä samasta viasta, eikä tästä ole aiemmin kirjattu tikettiä, niin siinä tapauksessa voi avata tiketin. Tällöin aina maininta asentajakäyntimaksusta 99€.");
            generointi("maksu;helpson;tiketti;sms_optio");
        }

        function lahiverkko_4() {
            huomautus("Pyydetään asiakasta testaamaan verkkokaapelilla suoraan modeemin lähiverkkoportista (kannattaa ohjeistaa testaamaan useammasta eri portista, jos mahdollista myös eri päätelaitteilla). Pyydä asiakasta olemaan yhteydessä Helpsoniin mikäli testaaminen tuntuu vaikealta.");
            generointi("maksu;helpson;sms_optio");
        }

        function takuulaite_1() {
            huomautus("Kyseessä on wlan ja/tai muu asiakaslaiteongelma, koska yhteys toimii pätkimättä modeemiin asti. WLAN-ongelmatapauksissa pyydä asiakasta olemaan yhteydessä Helpsoniin. Jos tiketti tehdään niin 99€ pitää mainita!");
            generointi("helpson");
        }

        function takuulaite_2() {
            huomautus("Pyydä asiakasta palauttamaan tehdasasetukset RGW:n, jos sitä ei ole vielä tehty");
            generointi("helpson;tiketti;sms_optio");
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
            generointi("maksu;tiketti");
        }

        function toinenjohto2() {
            generointi("maksu;helpson;sms_optio");
        }

        function wlan_2() {
            $("#puhelinrasioita1").show();
            $("#suoraanmodeemista").hide();
        }

        function wlan_1() {
            $("#suoraanmodeemista").show();
            $("#puhelinrasioita1").hide();
        }

        function suoraanmodeemista_1() {
            $("#takuulaite_2").show();
            $("#puhelinrasioita").hide();
        }

        function suoraanmodeemista_2() {
            $("#puhelinrasioita_2").show();
            $("#takuulaite_2").hide();
            $("#puhelinrasioita").hide();
        }


        function puhelinrasioita2() {
            huomautus("Linjan laatua testattaessa on tärkeää, että kaikki puhelinlaitteet ja mahdolliset suodattimet ovat irroitettuna puhelinrasioista");
            $("#lankapuhelin_2").show();
        }

        function lankapuhelin2_1() {
            huomautus("Huom! Mikäli on epäilys tai tieto siitä, että kyseessä on myös wifi-ongelma, kirjaa asia asiakkaan kertomaan viankuvaukseen / omaan analyysikenttään");
            $("#toinenjohto_2").show();
        }

        function toinenjohto2_1() {
            $("#reititin").show();
        }

        function reititin_2() {
            generointi("maksu;tiketti;sms_optio");
        }

        function reititin_1() {
            $("#merkkimalli").show();
            $("#kaikillalaitteilla").show();
        }

        function kaikillalaitteilla_1() {
            $("#ilmanreititinta").show();
        }


        function kaikillalaitteilla_2() {
            huomautus("Vika jää hyvin todennäköisesti asiakkaan päätelaitteeseen tai sen ja reitittimen väliseen yhteyteen. Ei optiota eikä tikettiä, 99e maininta mikäli as. vaatii asentajakäyntiä");
            generointi("helpson");
        }

        function ilmanreititinta_1() {
            huomautus("Pyydä palauttamaan modeemiin tehdasasetukset.");
            generointi("maksu;helpson;tiketti;sms_optio");
        }

        function ilmanreititinta_2() {
            $("#ilmanreititinta").show();
            generointi("helpson");
        }

        function ilmanreititinta_3() {
            huomautus("Jos vika ei vielä ratkennut, pyydä testaamaan suoraan modeemista verkkokaapelilla ja palauttamaan modeemiin tehdasasetukset. Pyydä vastaamaan sms-optioon jos vika jatkuu testausten jälkeen. Jos testauksia ei pysty suorittamaan kirjaa tiketti ja mainitse 99e");
            generointi("maksu;helpson;tiketti;sms_optio");
        }

        function takuulaite_2_1() {
            huomautus("Kyseessä on wlan ja/tai muu asiakaslaiteongelma, koska yhteys toimii hidastelematta modeemiin asti. WLAN-ongelmatapauksissa pyydä asiakasta olemaan yhteydessä Helpsoniin. Jos tiketti tehdään niin 99€ pitää mainita! Jos asiakkaalla on muualta hankittu tai takuuton laite ja vika on rajattu siihen -> myy modeemi!");
            generointi("maksu;helpson;tiketti;sms_optio");
        }
        function takuulaite_2_2() {
            $("#toimintaohje6").show();
            document.getElementById('toimintaohje6').innerHTML = "Pyydä asiakasta palauttamaan tehdasasetukset toimimattomaan modeemiin, jos sitä ei ole vielä tehty";
            $("#tehdasasetukset2").show();
        }

        function tehdasasetukset21() {
            $("#toimintaohje7").show();
            document.getElementById('toimintaohje7').innerHTML = "Takuumodeemeissa tehdään tarvittaessa softan päivitys ja mahdollinen laitteen vaihto prosessin mukaan. Jos asiakkaalla on muualta hankittu tai takuuton laite -> myy modeemi!";
        }

        function tehdasasetukset22() {
            $("#toimintaohje7").show();
            document.getElementById('toimintaohje7').innerHTML = "Miksi? Kirjaa syy Agentin havainnot -kenttään";
            generointi("maksu;helpson;tiketti");
        }

        function tehdasasetukset23() {
            generointi("maksu;helpson;sms_optio");
        }

        function tehdasasetukset24() {
            generointi("maksu;tiketti");
        }

    </script>
</form>