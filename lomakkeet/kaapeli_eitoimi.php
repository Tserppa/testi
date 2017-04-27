<input type='hidden' name='tech' value='Kaapeli'>
<input type='hidden' id='eitoimi' name='ongelma' value='Ei toimi&#10;'>

<form id="vikalomake">
    <div id="toimintaohje" class="ohje">Kysy asiakkaalta näkyykö KTV häiriöttä, jos ei näy niin tee KTV-tiketti!</div>
    <div id="toimintaohje" class="ohje">Jos asiakas on kotona, tarkista täsmääkö asiakkaan modeemin CM MAC-osoite UAD:n tietojen kanssa.</div>

    <div id="ensimmainen" class="koe">
        <h3>Jos asiakkaan modeemin CM MAC ei täsmää päivitä tiedot Alphaan!</h3>
        <input type="text" class="lyhyt" id="cmmac" name="uusi_CM_MAC" placeholder=""><br><br>
    </div>
    <div id="ensimmainen" class="koe">
        <h3>Jos käytössä on Telia Kaupan tai jokin muu lainamodeemi, laita sen CM MAC tähän:</h3>
        <input type="text" class="lyhyt" id="kauppamac" name="kauppa_MAC" placeholder=" "><br><br>
    </div>

    <div id="ensimmainen" class="koe">
        <h3>ICA-testi</h3>
        <input type='radio' onclick='$("#logrepository2").show();' id='id_1' name='ica' value='Yksi tai useampi testi Fail tilassa'><label for='id_1'>Yksi tai useampi testi Fail tilassa</label>
        <input type='radio' onclick='$("#logrepository").show();' id='id_2' name='ica' value='OK tai Warning, ei fail-tiloja'><label for='id_2'>OK tai Warning, ei fail-tiloja</label>
    </div>

    <div id="logrepository" class="koe" hidden>
        <div id="testidivi"><svg class="huomautus"  height="40px" width="40px" fill="black">
                <use xlink:href='../layout/svg.svg#speech-bubble'/>
            </svg>Katso tässä kohtaa LogRepositorylta IP-haut</div>
        <h3>Log Repository</h3>
        <input type='radio' onclick='$("#suoraanverkkokaapelilla").show();' id='id21' name='logrepository' value='Ei IP:tä'><label for='id21'>Ei IP:tä</label>
        <input type='radio' onclick='$("#suoraanverkkokaapelilla").show();' id='id22' name='logrepository' value='IP OK'><label for='id22'>IP OK</label>
        <input type='radio' onclick='$("#suoraanverkkokaapelilla").show();' id='id23' name='logrepository' value='Ei tietoa IP-hauista'><label for='id23'>Ei tietoa IP-hauista</label>
        <input type='radio' onclick='f24();' id='id24' name='logrepository' value='Peer holds all free leases'><label for='id24'>Peer holds all free leases</label>
    </div>

    <div id="suoraanverkkokaapelilla" class="koe" hidden>
        <h3>Toimiiko tietokoneen ollessa kytkettynä suoraan modeemiin verkkokaapelilla?</h3>
        <input type='radio' onclick='f25();' id='id25' name='suoraanverkkokaapelilla' value='Ei suostu tai pysty testaaamaan suoraan kaapelimodeemista'><label for='id25'>Ei suostu tai pysty testaaamaan suoraan kaapelimodeemista</label>
        <input type='radio' onclick='f26();' id='id26' name='suoraanverkkokaapelilla' value='Toimii suoraan kaapelilla modeemista'><label for='id26'>Kyllä</label>
        <input type='radio' onclick='f27();' id='id27' name='suoraanverkkokaapelilla' value='Ei toimi suoraan kaapelilla modeemista'><label for='id27'>Ei </label>
    </div>

    <div id="logrepository2" class="koe" hidden>
        <div id="testidivi"><svg class="huomautus"  height="40px" width="40px" fill="black">
                <use xlink:href='../layout/svg.svg#speech-bubble'/>
            </svg>Katso tässä kohtaa LogRepositorylta IP-haut</div>
        <h3>Log Repository</h3>
        <input type='radio' onclick='$("#haaroittimia").show();' id='id11' name='logrepository' value='Ei IP:tä'><label for='id11'>Ei IP:tä</label>
        <input type='radio' onclick='$("#haaroittimia").show();' id='id12' name='logrepository' value='IP OK'><label for='id12'>IP OK</label>
        <input type='radio' onclick='$("#haaroittimia").show();' id='id13' name='logrepository' value='Ei tietoa IP-hauista'><label for='id13'>Ei tietoa IP-hauista</label>
        <input type='radio' onclick='f11();' id='id14' name='logrepository' value='Peer holds all free leases'><label for='id24'>Peer holds all free leases</label>
    </div>


    <div id="haaroittimia" class="koe" hidden>
        <h3>Onko yhteys toiminut koskaan nykyisessä osoitteessa?</h3>
        <input type='radio' onclick='' id='kylla' name='onkotoiminutkoskaan' value='Toiminut aiemmin'><label for='kylla'>Kyllä</label>
        <input type='radio' onclick='' id='ei' name='onkotoiminutkoskaan' value='Ei ole toiminut koskaan'><label for='ei'>Ei</label>

        <h3>Onko modeemille tehty tehdasasetusten palautus vian ilmenemisen jälkeen? </h3>
        <input type='radio' onclick='' id='kylla2' name='onkotoiminutkoskaan2' value='Tehdasasetukset palautettu'><label for='kylla2'>Kyllä</label>
        <input type='radio' onclick='' id='ei2' name='onkotoiminutkoskaan2' value='Tehdasasetuksia ei palautettu'><label for='ei2'>Ei</label>

        <h3>Onko käytössä haaroittimia, kaapelijatkoja tai antennivahvistimia?</h3>
        <input type='radio' onclick='$("#muitarasioita2").show();' id='haaroitinkylla' name='onkohaaroittimia' value='Käytössä haaroitin tms.'><label for='haaroitinkylla'>Kyllä</label>
        <input type='radio' onclick='$("#muitarasioita").show();' id='haaroitinei' name='onkohaaroittimia' value='Ei haaroittimia tms.'><label for='haaroitinei'>Ei / Ei tiedossa</label>
    </div>

    <div id="muitarasioita" class="koe" hidden>
        <h3>Onko asunnossa muita antennirasioita?</h3>
        <input type='radio' onclick='$("#toinenrasia").show();' id='rasioitakylla' name='rasioita' value='Toiminut aiemmin'><label for='rasioitakylla'>Kyllä</label>
        <input type='radio' onclick='generointi("maksu;tiketti");' id='rasioitaei' name='rasioita' value='Ei ole toiminut koskaan'><label for='rasioitaei'>Ei / Ei tiedossa</label>
    </div>

    <div id="toinenrasia" class="koe" hidden>
        <h3>Onko testattu toisesta antennirasiasta</h3>
        <input type='radio' onclick='generointi("maksu;sms_optio");' id='rasioitakylla' name='toinenrasia' value='Asiakas testaa toisen rasian'><label for='rasioitakylla'>Asiakas testaa</label>
        <input type='radio' onclick='generointi("maksu;tiketti");' id='rasioitaei' name='toinenrasia' value='Toinen rasia testattu, ei vaikutusta'><label for='rasioitaei'>On testattu, ei vaikutusta</label>
        <input type='radio' onclick='generointi("maksu;tiketti");' id='rasioitaei' name='toinenrasia' value='Ei suostu/pysty testaamaan toista rasiaa'><label for='rasioitaei'>Ei suostu tai pysty testaamaan</label>
    </div>

    <div id="muitarasioita2" class="koe" hidden>
        <h3>Onko asunnossa muita antennirasioita?</h3>
        <input type='radio' onclick='$("#toistarasiaa").show();' id='rasioitakylla2' name='rasioita2' value='Toiminut aiemmin'><label for='rasioitakylla2'>Kyllä</label>
        <input type='radio' onclick='$("#ilmanhaaroitinta").show();' id='rasioitaei2' name='rasioita2' value='Ei ole toiminut koskaan'><label for='rasioitaei2'>Ei / Ei tiedossa</label>
    </div>

    <div id="ilmanhaaroitinta" class="koe" hidden>
        <h3>Onko asiakas testannut ilman haaroittimia, jatkojohtoja tai antennivahvistimia?</h3>
        <input type='radio' onclick='generointi("maksu;tiketti");' id='haaroitin11' name='ilmanhaaroitinta' value='Testattu ilman haaroittimia tms.'><label for='haaroitin11'>On testattu</label>
        <input type='radio' onclick='generointi("maksu;sms_optio");' id='haaroitin22' name='ilmanhaaroitinta' value='Ei vielä testattu ilman haaroittimia tms.'><label for='haaroitin22'>Ei vielä testattu</label>
        <input type='radio' onclick='generointi("maksu;tiketti");' id='haaroitin33' name='ilmanhaaroitinta' value='Ei pysty/suostu testaamaan ilman haaroitinta tms.'><label for='haaroitin33'>Ei suostu/pysty testaamaan</label>
    </div>

    <div id="toistarasiaa" class="koe" hidden>
        <h3>Onko asiakas testannut kaapelimodeemin kytkemistä toiseen antennirasiaan ja poistanut välistä ylimääräiset haaroittimet ja jatkojohdot?</h3>
        <input type='radio' onclick='generointi("maksu;tiketti");' id='toistarasiaa1' name='toistarasiaa' value='Testattu toista rasiaa ilman välilaitteita'><label for='toistarasiaa1'>On testattu</label>
        <input type='radio' onclick='generointi("maksu;sms_optio");' id='toistarasiaa2' name='toistarasiaa' value='Asiakas testaa toista rasiaa ilman välilaitteita'><label for='toistarasiaa2'>Asiakas testaa</label>
        <input type='radio' onclick='generointi("maksu;tiketti");' id='toistarasiaa3' name='toistarasiaa' value='Ei suostu testaamaan toista rasiaa'><label for='toistarasiaa3'>Ei suostu/pysty testaamaan</label>
    </div>

    <script>
        function f24() {
            huomautus("Modeemin CM-macilla ei ole valtuutusta. Tarkasta abuse ja laskutus ja mikäli ne ovat kunnossa, valtuuta modeemi!")
            generointi("sms_optio");
        }
        function f25() {
            // Muistutus näkyviin: Miksi? Kirjaa syy "Agentin omat havainnot ja lisätiedot"-kenttään
            generointi("maksu;tiketti");
        }
        function f26() {
            huomautus("Ei optiota eikä tikettiä, Helpson auttaa Wi-Fi ongelmien kanssa. Ehdoton 99e maininta mikäli as. vaatii tikettiä tai asentajakäyntiä")
            generointi("maksu;helppi");
        }
        function f27() {
            huomautus("Suorittakaa modeemille tehdasasetusten palautus painamalla laitteen reset-painiketta. Resetointi palauttaa laitteeseen oletusarvot myös langattoman yhteyden osalta.")
            generointi("maksu;tiketti");
        }

        function f11() {
            huomautus("Modeemin CM-macilla ei ole valtuutusta. Tarkasta abuse ja laskutus ja mikäli ne ovat kunnossa, valtuuta modeemi! Kerrotaan asiakkaalle, että vika todennäköisesti korjaantuu, mutta vikailmoitus siirretään vielä asiantuntijalle tarkastettavaksi");
            generointi("tiketti");
        }
    </script>
</form>