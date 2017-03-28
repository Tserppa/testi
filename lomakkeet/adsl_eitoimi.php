<input type='hidden' name='tech' value='ADSL'>
<input type='hidden' id='eitoimi' name='ongelma' value='Ei toimi ollenkaan&#10;'>
<form id="vikalomake">
    <div id="ensimmainen" class="koe">
        <h3>Liittymän status ICA/L2-manager</h3>
        <input type='radio' onclick='linkdown();' id='DOWN' name='fault' value='Link DOWN'><label for='DOWN'>Link DOWN</label>
        <input type='radio' onclick='linkap();' id='UP' name='fault' value='Link UP'><label for='UP'>Link UP</label>
        <input type='radio' onclick='vevi();' id='verkkovika' name='fault' value='Verkkovika'><label for='verkkovika'>Alueella verkkovika</label>
        <input type='radio' onclick='konffiongelma();' id='2-manageri' name='fault'
               value='Ongelma L2-managerissa'><label for='2-manageri'>Ongelma L2-managerissa</label>
    </div>
    <div id="toimintaohje" class="ohje" hidden></div>
    <div id="linkdown" class="koe" hidden>
        <h3>SELT-testi</h3>
        <input type='radio' onclick='vika_verkossa()();' id='Vika' name='selt' value='SELT: Vika verkossa'><label for='Vika'>Vika verkossa</label>
        <input type='radio' onclick='ei_onnistu_vikaa();' id='eionnistu' name='selt' value='SELT-testi ei onnistu'><label for='eionnistu'>Testi ei onnistu</label>
        <input type='radio' onclick='ei_onnistu_vikaa();' id='epaselva' name='selt' value='SELT-testin tulos epäselvä'><label for='epaselva'>Testin tulos epäselvä</label>
        <input type='radio' onclick='ei_onnistu_vikaa();' id='vikaa' name='selt' value='SELT: Ei vikaa'><label for='vikaa'>Ei vikaa</label>
    </div>
    <div id="toimintaohje2" class="ohje" hidden></div>
    <div id="valo" class="koe" hidden>
        <h3>DSL/Broadband-valon status modeemissa, vian ollessa päällä?</h3>
        <select id="valostatus" name="valostatus" title="valostatus">
            <option value=""></option>
            <option value=" Valo palaa">Valo palaa</option>
            <option value=" Valo ei pala">Valo ei pala</option>
            <option value=" Vilkkuu">Vilkkuu</option>
            <option value=" Ei tiedossa">Ei tiedossa</option>
        </select>
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
    </div>
    <div id="toinen_modeemi3" class="koe" hidden>
        <div id="testidivi">Huom<br>Suorittakaa modeemille tehdasasetusten palautus painamalla laitteen reset-painiketta HUOM! Resetointi palauttaa laitteeseen oletusarvot myös langattoman yhteyden osalta
        </div>
        <h3>Onko testattu toisella modeemilla ja tietokoneella?</h3>
        <input type='radio' onclick='modeemi3_1();' id='modeemi3_11' name='modeemi3' value='Testattu toisella modeemilla omassa liittymässä'><label for='modeemi3_11'>Testattu
            toisella modeemilla omassa liittymässä</label>
        <input type='radio' onclick='modeemi3_2();' id='modeemi3_22' name='modeemi3' value='Testattu toisessa liittymässä omalla modeemilla'><label for='modeemi3_22'>Testattu
            toisessa liittymässä omalla modeemilla</label>
        <input type='radio' onclick='modeemi3_3();' id='modeemi3_33' name='modeemi3' value='Asiakas testaa modeemin'><label for='modeemi3_33'>Asiakas testaa modeemin</label>
        <input type='radio' onclick='modeemi3_3();' id='modeemi3_44' name='modeemi3' value='Ei suostu tai pysty testaamaan'><label for='modeemi3_44'>Ei suostu tai pysty
            testaamaan</label>
    </div>
    <div id="toinen_modeemi4" class="koe" hidden>
        <h3>Onko testattu toisella modeemilla ja tietokoneella</h3>
        <input type='radio' onclick='modeemi4_kylla();' id='modeemi4_kyllaid' name='modeemi4' value='Testattu toisella modeemilla'><label for='modeemi4_kyllaid'>Kyllä</label>
        <input type='radio' onclick='modeemi4_ei();' id='modeemi4_eiid' name='modeemi4' value='Ei testattu toisella modeemilla'><label for='modeemi4_eiid'>Ei</label>
        <input type='radio' onclick='modeemi4_kyllahuonosti();' id='modeemi4_kyllaida' name='modeemi4' value='Testattu toisella modeemilla, mutta toimii huonosti'><label for='modeemi4_kyllaida'>Kyllä, mutta toimii
            huonosti asiakkaan mielestä</label>
    </div>
    <div id="takuulaite" class="koe" hidden>
        <div id="testidivi">Huom</br>Pyydä asiakasta palauttamaan tehdasasetukset toimimattomaan modeemiin, jos sitä ei ole vielä tehty
        </div>
        <h3>Oma vai takuunalainen?</h3>
        <input type='radio' onclick='takuulaite1();' id='takuulaite1id' name='takuulaite' value='Laite on asiakkaan oma'><label for='takuulaite1id'>Asiakkaan oma laite</label>
        <input type='radio' onclick='takuulaite2();' id='takuulaite2id' name='takuulaite' value='Laite on RGW / takuunalainen laite'><label for='takuulaite2id'>RGW / takuunalainen
            laite</label>
    </div>
    <div id="toimintaohje3" class="ohje" hidden>Jos asiakkaalla on muualta hankittu tai takuuton laite -> myy modeemi!
    </div>
    <div id="tehdasasetukset2" class="koe" hidden>
        <h3>Auttaako tehdasasetusten palauttaminen toimimattomaan modeemiin?</h3>
        <input type='radio' onclick='tehdasasetukset21();' id='tehdasasetukset21id' name='tehdasasetukset' value='Tehdasasetuksien palautteminen ei auttanut, eikä modeemia ole aiemmin vaihdettu'><label
                for='tehdasasetukset21id'>Ei auttanut, modeemia ei ole aiemmin vaihdettu tämän vian vuoksi.</label>
        <input type='radio' onclick='tehdasasetukset22();' id='tehdasasetukset22id' name='tehdasasetukset' value='Tehdasasetukset on palautettu'><label for='tehdasasetukset22id'>Kyllä</label>
        <input type='radio' onclick='tehdasasetukset23();' id='tehdasasetukset23id' name='tehdasasetukset' value='Asiakas ei ole kotona, mutta testaa kun pystyy'><label for='tehdasasetukset23id'>Ei ole kotona, testaa sitten kun
            pystyy</label>
        <input type='radio' onclick='tehdasasetukset24();' id='tehdasasetukset24id' name='tehdasasetukset' value='Ei auttanut ja modeemi on aiemmin vaihdettu'><label for='tehdasasetukset24id'>Ei auttanut, modeemi on jo vaihdettu tämän vian
            vuoksi</label>
    </div>
    <div id="toimintaohje4" class="ohje" hidden>Takuumodeemeissa tehdään tarvittaessa softan päivitys ja mahdollinen laitteen vaihto prosessin mukaan. Jos asiakkaalla on muualta hankittu tai takuuton laite -> myy modeemi!
    </div>
    <div id="tehdasasetukset" class="koe" hidden>
        <div id="testidivi">Huom</br>SMS-optio, jos vika ei ratkea puhelun aikana.</div>
        <h3>Onko modeemille tehty tehdasasetusten palautus reset-nappia painamalla vian ilmenemisen jälkeen?</h3>
        <input type='radio' onclick='tehdasasetukset1();' id='tehdasasetukset1id' name='tehdasasetukset' value='Tehdasasetukset palautettu ennen puhelua'><label for='tehdasasetukset1id'>Kyllä</label>
        <input type='radio' onclick='tehdasasetukset1();' id='tehdasasetukset2id' name='tehdasasetukset' value='Tehdasasetukset palautettu puhelun aikana'><label for='tehdasasetukset2id'>Tehtiin puhelun aikana</label>
        <input type='radio' onclick='tehdasasetukset1();' id='tehdasasetukset3id' name='tehdasasetukset' value='Tehdasasetuksia ei ole palautettu'><label for='tehdasasetukset3id'>Ei</label>
        <input type='radio' onclick='tehdasasetukset1();' id='tehdasasetukset4id' name='tehdasasetukset' value='Tehdasasetuksia ei ole palautettu, mutta modeemi on käytetty virroitta'><label
                for='tehdasasetukset4id'>Ei, mutta modeemi on käytety virroitta</label>
    </div>
    <div id="toinen_liittymä" class="koe" hidden>
        <h3>Toimiko toisessa liittymässä?</h3>
        <input type='radio' onclick='toinenliittyma_1();' id='toinenliittyma_1id' name='toinenliittyma' value='Laite toimii toisessa liittymässä'><label for='toinenliittyma_1id'>Kyllä</label>
        <input type='radio' onclick='toinenliittyma_2();' id='toinenliittyma_2id' name='toinenliittyma' value='Laite ei toimi toisessa liittymässä'><label for='toinenliittyma_2id'>Ei</label>
    </div>
    <div id="toimintaohje6" class="ohje" hidden>Oletettavasti asiakkaan modeemi on vialla. Tämän varmistamiseksi olisi hyödyllistä testata toisella modeemilla asiakkaan omassa liittymässä, jotta voidaan esim. lähettää tai myydä uusi modeemi.
    </div>
    <div id="puhelinrasioita" class="koe" hidden>
        <h3>Onko puhelinrasioita enemmän kuin yksi?</h3>
        <input type='radio' onclick='puhelinrasioita1();' id='puhelinrasioita1id' name='puhelinrasioita' value='Puhelinrasioita useampi, muttei testattu muissa'><label for='puhelinrasioita1id'>Kyllä, ei ole testattu muissa rasioissa</label>
        <input type='radio' onclick='puhelinrasioita1();' id='puhelinrasioita2id' name='puhelinrasioita' value='Modeemia on testattu toisessa puhelinrasiossa'><label for='puhelinrasioita2id'>Kyllä, modeemia on testattu toisessa
            rasiassa</label>
        <input type='radio' onclick='puhelinrasioita1();' id='puhelinrasioita3id' name='puhelinrasioita' value='Vain yksi puhelinrasia'><label for='puhelinrasioita3id'>Ei</label>
        <input type='radio' onclick='puhelinrasioita1();' id='puhelinrasioita4id' name='puhelinrasioita' value='Ei tiedossa, onko useampi puhelinrasia'><label for='puhelinrasioita4id'>Ei tiedossa</label>
    </div>
    <div id=lankapuhelin class="koe" hidden>
        <div id="testidivi">Huom</br>Muita laitteita ovat esim. UPS, ylijännitesuoja, Fax, varashälytin</div>
        <h3>Onko lankapuhelinta tai muita laitteita kytkettynä puhelinverkkoon?</h3>
        <input type='radio' onclick='lankapuhelin6();' id='lankapuhelin1' name='lankapuhelin' value='Ei lankapuhelinta tai muita laitteita'><label for='lankapuhelin1'>Ei</label>
        <input type='radio' onclick='lankapuhelin6();' id='lankapuhelin2' name='lankapuhelin' value='Lankapuhelin kytkettynä verkkoon'><label for='lankapuhelin2'>On puhelin, varmistakaa että puhelimen rasiassa on suodatin.</label>
        <input type='radio' onclick='lankapuhelin6();' id='lankapuhelin3' name='lankapuhelin' value='Puhelinverkossa myös '><label for='lankapuhelin3'>On joku muu laite, mikä? (avoin kenttä)</label>
    </div>

    <div id="toinenjohto" class="koe" hidden>
        <h3>Onko testattu puhelinrasian ja modeemin välillä toista johtoa ilman jatkojohtoa ja muita laitteita? </h3>
        <input type='radio' onclick='toinenjohto1();' id='toinenjohto1id' name='toinenjohto' value='Toinen johto testattu'><label for='toinenjohto1id'>Kyllä</label>
        <input type='radio' onclick='toinenjohto2();' id='toinenjohto2id' name='toinenjohto' value='Ei testattu toista johtoa, mutta pyydetty testaamaan'><label for='toinenjohto2id'>Pyydetty testaamaan</label>
        <input type='radio' onclick='toinenjohto1();' id='toinenjohto3id' name='toinenjohto' value='Ei halua/pysty testaamaan toista johtoa'><label for='toinenjohto3id'>Ei pysty tai halua
            testata</label>
    </div>
    <div id="toimintaohje5" class="ohje" hidden>Jos ei ole toiminut koskaan ja toimituksesta alle 3kk, niin katso TT-ohje.
    </div>
    <div id="linkup" class="koe" hidden>
        <h3>Reagoiko linkki puhelinjohdon irroittamiseen?</h3>
        <input type='radio' onclick='onko_iphakuja();' id='johto_kylla' name='linkup' value='Reagoi puhelinjohdon irrottamiseen'><label for='johto_kylla'>Kyllä</label>
        <input type='radio' onclick='johtoei();' id='johto_ei' name='linkup' value='Ei reagoi puhelinjohdon irrottamiseen'><label for='johto_ei'>Ei</label>
        <input type='radio' onclick='onko_iphakuja();' id='eikotona' name='linkup' value='Asiakas ei ole kotona'><label for='eikotona'>Asiakas ei ole kotona</label>
        <input type='radio' onclick='onko_iphakuja();' id='eihalua' name='linkup' value='Asiakas ei halua/pysty testata'><label for='eihalua'>Ei pysty/halua testata</label>
    </div>
    <div id="toimintaohje7" class="ohje" hidden>Jos ei ole toiminut koskaan ja toimituksesta alle 3kk, niin katso TT-ohje.
    </div>
    <div id="iphakuja" class="koe" hidden>
        <h3>Onko liittymästä tullut IP-hakuja?</h3>
        <input type='radio' onclick='toinen_modeemi2();' id='hakuja_kylla' name='iphakuja' value='Liittymästä on tullut IP-hakuja'><label for='hakuja_kylla'>Kyllä</label>
        <input type='radio' onclick='atm_ping_ei();' id='hakuja_ei' name='iphakuja' value='Liittymästä ei ole tullut IP-hakuja'><label for='hakuja_ei'>Ei</label>
    </div>
    <div id="toinen_modeemi2" class="koe" hidden>
        <h3>Onko testannut toisella modeemilla ja tietokoneella?</h3>
        <input type='radio' onclick='modeemi2_kyllaa();' id='modeemi2_kylla' name='modeemi2' value='On testattu toisella modeemilla ja tietokoneella'><label for='modeemi2_kylla'>Kyllä</label>
        <input type='radio' onclick='modeemi2_kyllaa();' id='modeemi2_eihalua' name='modeemi2' value='Ei halua/pysty testata toisella modeemilla'><label for='modeemi2_eihalua'>Ei pysty/halua</label>
        <input type='radio' onclick='modeemi2ei();' id='modeemi2_ei' name='modeemi2' value='Ei ole testattu toisella modeemilla'><label for='modeemi2_ei'>Ei</label>
    </div>
    <div id="testaukset" class="koe" hidden>
        <h3>Asiakas tekee vielä seuraavat testaukset</h3>
        <input type="text" id="asiakastestaukset" placeholder="Asiakas tekee vielä seuraavat testaukset">
    </div>
    <div id="wifi" class="koe" hidden>
        <h3>Onko yhteyden toiminta testattu käyttämällä vain langatonta (Wi-Fi) yhteyttä?</h3>
        <input type='radio' onclick='wifii1();' id='wifi11' name='wifi' value='On testattu WiFillä'><label for='wifi11'>Kyllä</label>
        <input type='radio' onclick='wifii1();' id='wifi22' name='wifi' value='Ei osaa sanoa onko testattu WiFillä'><label for='wifi22'>Ei osaa sanoa</label>
        <input type='radio' onclick='wifi3();' id='wifi33' name='wifi' value='Yhteys on testattu vain verkkokaapelilla'><label for='wifi33'>Ei, yhteys on testattu verkkokaapelilla</label>
    </div>
    <div id="lahiverkko" class="koe" hidden>
        <h3>Toimiiko yhteys testattessa lähiverkkokaapelilla suoraan modeemin lähiverkkoportista?</h3>
        <input type='radio' onclick='lahiverkko1();' id='lahiverkko11' name='lahiverkko' value='Asiakas ei tiedä toimiiko suoraan kaapelilla, mutta testaa'><label for='lahiverkko11'>Ei tietoa, sovittu että asiakas testaa</label>
        <input type='radio' onclick='lahiverkko2();' id='lahiverkko22' name='lahiverkko' value='Yhteys toimii kaapelilla suoraan lähiverkkoportista'><label for='lahiverkko22'>Kyllä</label>
        <input type='radio' onclick='lahiverkko2();' id='lahiverkko33' name='lahiverkko' value='Asiakas ei voi testata suoraan kaapelilla'><label for='lahiverkko33'>Ei pysty tai ei suostu käyttämään kaapelilla</label>
        <input type='radio' onclick='lahiverkko_4();' id='lahiverkko44' name='lahiverkko' value='Yhteys ei toimi kaapelilla lähiverkkoportista'><label for='lahiverkko44'>Ei</label>
    </div>
    <div id="toimintaohje8" class="ohje" hidden>Suorittakaa modeemille tehdasasetusten palautus painamalla laitteen reset-painiketta HUOM! Resetointi palauttaa laitteeseen oletusarvot myös langattoman yhteyden osalta.
    </div>
    <div id="wifi_tehdas" class="koe" hidden>
        <h3>Onko tehdasasetukset palautettu?</h3>
        <input type='radio' onclick='generointi("maksu;tiketti");' id='wifi_tehdas1' name='wifi_tehdas' value='Tehdasasetukset palautettu'><label for='wifi_tehdas1'>Kyllä</label>
        <input type='radio' onclick='generointi("maksu;tiketti");' id='wifi_tehdas2' name='wifi_tehdas' value='Tehdasasetuksia ei ole palautettu'><label for='wifi_tehdas2'>Ei</label>
    </div>
    <div id="lahiverkko_tehdas" class="koe" hidden>
        <div id="testidivi">Huom</br>Resetointi palauttaa laitteeseen oletusarvot myös langattoman yhteyden osalta.</div>
        <h3>Onko modeemille tehty tehdasasetusten palautus vian ilmenemisen jälkeen?</h3>
        <input type='radio' onclick='lahiverkko_tehdas1();' id='lahiverkko_tehdas1' name='lahiverkko_tehdas' value='lahiverkko_tehdas1'><label for='lahiverkko_tehdas1'>Kyllä</label>
        <input type='radio' onclick='lahiverkko_tehdas2();' id='lahiverkko_tehdas2' name='lahiverkko_tehdas' value='lahiverkko_tehdas2'><label for='lahiverkko_tehdas2'>Ei, asiakas resetoi</label>
        <input type='radio' onclick='lahiverkko_tehdas3();' id='lahiverkko_tehdas3' name='lahiverkko_tehdas' value='lahiverkko_tehdas3'><label for='lahiverkko_tehdas3'>Ei suostu tai pysty resetoimaan </label>
    </div>
    <div id="rgw" class="koe" hidden>
        <h3>Käyttääkö RGW:tä?</h3>
        <input type='radio' onclick='rgw1();' id='rgw11' name='rgw' value='rgw1'><label for='rgw11'>Kyllä</label>
        <input type='radio' onclick='rgw2();' id='rgw22' name='rgw' value='rgw2'><label for='rgw22'>Ei</label>
    </div>
    <div id="rgw_tehdas" class="koe" hidden>
        <div id="testidivi">Huom</br>Resetointi palauttaa laitteeseen oletusarvot myös langattoman yhteyden osalta.</div>
        <h3>Onko modeemille tehty tehdasasetusten palautus vian ilmenemisen jälkeen?</h3>
        <input type='radio' onclick='rgw_tehdas11();' id='rgw_tehdas1' name='rgw_tehdas' value='rgw_tehdas1'><label for='rgw_tehdas1'>Kyllä</label>
        <input type='radio' onclick='rgw_tehdas22();' id='rgw_tehdas2' name='rgw_tehdas' value='rgw_tehdas2'><label for='rgw_tehdas2'>Ei, asiakas resetoi</label>
        <input type='radio' onclick='rgw_tehdas33();' id='rgw_tehdas3' name='rgw_tehdas' value='rgw_tehdas3'><label for='rgw_tehdas3'>Ei ole resetoitu eikä ole tehty mitään aiemmin pyydettyjä testejä</label>
    </div>
    <div id="toimintaohje9" class="ohje" hidden>Pyydä asiakasta suorittamaan tehdasasetusten palautus painamalla laitteen reset-painiketta. Takuumodeemeissa softan päivitys, Mahdollinen laitteen vaihto prosessin mukaan. Jos asiakkaalla on muualta
        hankittu tai takuuton laite -> myy modeemi!
    </div>
    <div id="toimintaohje10" class="ohje" hidden>Takuumodeemeissa tehdään tarvittaessa softan päivitys ja mahdollinen laitteen vaihto prosessin mukaan. Jos asiakkaalla on muualta hankittu tai takuuton laite -> myy modeemi!
    </div>
    <div id="atm-ping" class="koe" hidden>
        <h3>Meneekö ATM-ping läpi?</h3>
        <input type='radio' onclick='atm_kylla();' id='atm_kyllaa' name='atm_ping' value='ATM-ping menee läpi'><label for='atm_kyllaa'>Kyllä</label>
        <input type='radio' onclick='atm_kylla();' id='atm_eivoii' name='atm_ping' value='Kyseessä VDSL tai ICA:n atm-ping -testiä ei voi tehdä'><label for='atm_eivoii'>Ei voi tehdä</label>
        <input type='radio' onclick='atm_ei2();' id='atm_ei' name='atm_ping' value='ATM-ping ei mene läpi'><label for='atm_ei'>Ei</label>
    </div>
    <div id="vpi_vci" class="koe" hidden>
        <h3>Onko VPI- ja VCI-arvot tarkistettu ja/tai testattu toisella modeemilla?</h3>
        <input type='radio' onclick='vpi_kyllaa();' id='vpi_kylla' name='vpi_vci' value='VPI/VCI tarkistettu ja/tai testattu toisella modeemilla'><label for='vpi_kylla'>Kyllä</label>
        <input type='radio' onclick='vpi_kyllaa();' id='vpi_eihalua' name='vpi_vci' value='Ei pysty/halua tarkistaa VPI/VCI-arvoja'><label for='vpi_eihalua'>Ei pysty/halua</label>
        <input type='radio' onclick='vpi_eii();' id='vpi_ei' name='vpi_vci' value='VPI/VCI arvoja ei tarkastettu / testattu toisella modeemilla'><label
                for='vpi_ei'>Ei</label>
    </div>
    <div id="toinen_modeemi" class="koe" hidden>
        <h3>Onko asiakas testannut toisella modeemilla?</h3>
        <input type='radio' onclick='modeemi_kylla();' id='modeemi_kyllaa' name='toinen_modeemi' value='Testattu toisella modeemilla'><label for='modeemi_kyllaa'>Kyllä</label>
        <input type='radio' onclick='modeemi_ei();' id='modeemi_eii' name='toinen_modeemi' value='Ei testattu toisella modeemilla'><label
                for='modeemi_eii'>Ei</label>
    </div>

    <script>
          function vevi() {
            $("#toimintaohje").show();
            document.getElementById('toimintaohje').innerHTML = "Muista kirjata asiakkaan kuvaus ongelmasta ja omat havainnot ja lisätiedot -kenttään. Linkin status, jos se on saatavilla. ";
            generointi("tiketti");
        }

        function linkap() {
            $("#linkup").show();
            $("#linkdown").hide();
        }

        function vika_verkossa() {
            $("#toimintaohje2").show();
            document.getElementById('toimintaohje2').innerHTML = "Saa valita ainoastaan kun olet aivan varma tuloksesta!\n\nJos ei ole toiminut koskaan ja toimituksesta alle 3kk, niin katso TT-ohje.";
            $("#valo").hide();
            $("#toinen_modeemi3").hide();
            generointi("tiketti");
        }

        function vpi_kyllaa() {
            generointi("maksu;tiketti");
        }

        function tehdasasetukset23() {
            generointi("maksu;sms_optio");
        }

        function vpi_eii() {
            generointi("maksu;helpson;sms_optio");
        }

        function modeemi_kylla() {
            generointi("maksu;tiketti");
        }
        function modeemi_ei() {
            generointi("maksu;helpson;sms_optio");
        }
        function linkdown() {
            $("#linkdown").show();
            $("#linkup").hide();
        }

        function konffiongelma() {
            $("#toimintaohje").show();
            document.getElementById('toimintaohje').innerHTML = "Agentin omat havainnot ja lisätiedot -kenttään. Jos on virheilmoitus L2:n Workeissä, niin copy-paste. Jos on ohjaus SSA-kauppaan, niin  kirjataan asiakkaalle myyty nopeus ja onko TV-palvelua käytössä";
            generointi("tiketti");
        }

        function ei_onnistu_vikaa() {
            $("#valo").show();
            $("#toinen_modeemi3").show();
        }

        function johtoei() {
            $("#toimintaohje7").show();
            generointi("tiketti;tt");
        }

        function onko_iphakuja() {
            $("#iphakuja").show();
        }

        function toinen_modeemi2() {
            $("#toinen_modeemi2").show();
            $("#atm-ping").hide();
        }

        function modeemi2ei() {
            $("#testaukset").show();
            $("#wifi").hide();
            generointi("maksu;helpson;sms_optio");
        }

        function rgw1() {
            $("#wifi_tehdas").hide();
            $("#rgw_tehdas").show();
        }

        function rgw2() {
            $("#wifi_tehdas").hide();
            $("#rgw_tehdas").show();
        }


        function modeemi2_kyllaa() {
            $("#wifi").show();
            $("#testaukset").hide();

        }

        function wifii1() {
            $("#lahiverkko").show();
            $("#wifi_tehdas").hide();
        }

        function wifi3() {
            $("#toimintaohje8").show();
            $("#wifi_tehdas").show();
            $("#lahiverkko").hide();
        }

        function lahiverkko1() {
            $("#toimintaohje8").show();
            $("#wifi_tehdas").show();
            $("#lahiverkko_tehdas").hide();
            $("#rgw").hide();
        }

        function lahiverkko2() {
            $("#rgw").show();
            $("#wifi_tehdas").hide();
            $("#lahiverkko_tehdas").hide();
        }

        function lahiverkko_4() {
            $("#lahiverkko_tehdas").show();
            $("#wifi_tehdas").hide();
            $("#rgw").hide();
        }

        function atm_ping_ei() {
            $("#atm-ping").show();
            $("#toinen_modeemi2").hide();

        }

        function toinenjohto1() {
            $("#toimintaohje5").show();
            generointi("maksu;tiketti");
        }

        function toinenjohto2() {
            generointi("maksu;helpson");
        }

        function takuulaite1() {
            $("#toimintaohje3").show();
            $("#tehdasasetukset2").hide();
            generoi();

        }
        function atm_kylla() {
            $("#toinen_modeemi").show();
            $("#vpi_vci").hide();
        }

        function atm_ei2() {
            $("#vpi_vci").show();
            $("#toinen_modeemi").hide();
        }

        function modeemi3_1() {
            $("#toinen_modeemi4").show();
            $("#tehdasasetukset").hide();
            $("#toinen_liittymä").hide();
        }

        function modeemi3_3() {
            $("#tehdasasetukset").show();
            $("#toinen_modeemi4").hide();
            $("#toinen_liittymä").hide();

        }

        function modeemi3_2() {
            $("#toinen_liittymä").show();
            $("#toinen_modeemi4").hide();
            $("#tehdasasetukset").hide();
        }

        function tehdasasetukset1() {
            $("#puhelinrasioita").show();
        }

        function toinenliittyma_1() {
            $("#puhelinrasioita").show();
        }

        function toinenliittyma_2() {
            $("#puhelinrasioita").show();
            $("#toimintaohje6").show();

        }

        function modeemi4_ei() {
            $("#puhelinrasioita").show();
            $("#takuulaite").hide();
        }

        function modeemi4_kylla() {
            $("#takuulaite").show();
            $("#puhelinrasioita").hide();
        }

        function modeemi4_kyllahuonosti() {
            $("#tehdasasetukset").show();
            $("#puhelinrasioita").hide();

        }

        function rgw_tehdas11() {
            $("#toimintaohje10").show();
            $("#toimintaohje9").hide();
            generointi("tiketti");
        }

        function rgw_tehdas22() {
            $("#toimintaohje10").hide();
            generointi("sms_optio");
        }


        function rgw_tehdas33() {
            $("#toimintaohje9").show();
            $("#toimintaohje10").hide();
            generointi("maksu;tiketti");
        }

        function takuulaite2() {
            $("#tehdasasetukset2").show();
        }

        function tehdasasetukset21() {
            $("#toimintaohje4").show();
            $("#puhelinrasioita").hide();

        }

        function tehdasasetukset24() {
            $("#puhelinrasioita").show();
        }

        function puhelinrasioita1() {
            $("#lankapuhelin").show();
        }

        function lankapuhelin6() {
            $("#toinenjohto").show();
        }

    </script>
</form>