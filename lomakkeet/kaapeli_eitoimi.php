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
        <h3>Jos käytössä on Sonera Kaupan tai jokin muu lainamodeemi, laita sen CM MAC tähän:</h3>
        <input type="text" class="lyhyt" id="kauppamac" name="kauppa_MAC" placeholder=" "><br><br>
    </div>

    <div id="ensimmainen" class="koe">
        <h3>ICA-testi</h3>
        <input type='radio' onclick='' id='id_1' name='ica' value='Yksi tai useampi testi Fail tilassa'><label for='id_1'>Yksi tai useampi testi Fail tilassa</label>
        <input type='radio' onclick='$("#logrepository").show();' id='id_2' name='ica' value='OK tai Warning, ei fail-tiloja'><label for='id_2'>OK tai Warning, ei fail-tiloja</label>
    </div>

    <div id="logrepository" class="koe" hidden>
        <div id="testidivi">Huom!<br>Katso tässä kohtaa LogRepositorylta IP-haut</div>
        <h3>Log Repository</h3>
        <input type='radio' onclick='();' id='id21' name='logrepository' value='Ei IP:tä'><label for='id21'>Ei IP:tä</label>
        <input type='radio' onclick='();' id='id22' name='logrepository' value='IP OK'><label for='id22'>IP OK</label>
        <input type='radio' onclick='();' id='id23' name='logrepository' value='Ei tietoa IP-hauista'><label for='id23'>Ei tietoa IP-hauista</label>
        <input type='radio' onclick='f24();' id='id24' name='logrepository' value='Peer holds all free leases'><label for='id24'>Peer holds all free leases</label>
    </div>

    <div id="suoraanverkkokaapelilla" class="koe" hidden>
        <h3>Toimiiko tietokoneen ollessa kytkettynä suoraan modeemiin verkkokaapelilla?</h3>
        <input type='radio' onclick='f25();' id='id25' name='suoraanverkkokaapelilla' value='Ei suostu tai pysty testaaamaan suoraan kaapelimodeemista'><label for='id25'>Ei suostu tai pysty testaaamaan suoraan kaapelimodeemista</label>
        <input type='radio' onclick='f26();' id='id26' name='suoraanverkkokaapelilla' value='Toimii suoraan kaapelilla modeemista'><label for='id26'>Kyllä</label>
        <input type='radio' onclick='f27();' id='id27' name='suoraanverkkokaapelilla' value='Ei toimi suoraan kaapelilla modeemista'><label for='id27'>Ei </label>
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
            generointi("maksu;helpson");
        }
        function f27() {
            huomautus("Suorittakaa modeemille tehdasasetusten palautus painamalla laitteen reset-painiketta. Resetointi palauttaa laitteeseen oletusarvot myös langattoman yhteyden osalta.")
            generointi("maksu;tiketti");
        }
    </script>
</form>