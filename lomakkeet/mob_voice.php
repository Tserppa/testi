<input type='hidden' name='tech' value='Mob'>
<input type='hidden' id='voice' name='ongelma' value='Voice&#10;'>

<form id="vikalomake">

    <div id="ensimmainen" class="koe">
        <h3>Mikä on sun ongelmasi?</h3>
        <input type='radio' onclick='f1();' id='id_1' name='ongelma' value='Puhelut pätkivät / esiintyy äänenlaatuhäiriöitä'><label for='id_1'>Pätkii / äänenlaatuhäiriöt</label>
        <input type='radio' onclick='f1();' id='id_2' name='ongelma' value='Puhelut katkeilevat'><label for='id_2'>Katkeilee</label>
        <input type='radio' onclick='f1();' id='id_3' name='ongelma' value='Puhelut eivät muodostu tai eivät tule perille'><label for='id_3'>Ei muodostu tai ei tule perille</label>
    </div>

    <div id="uudelleenkaynnistys" class="koe" hidden>
        <div id="testidivi">Hae asiakas mbossille. Tarkista hälyt Alarm- mapilta</div>
        <h3>Laitteen uudelleenkäynnistys</h3>
        <input type='radio' onclick='$("#akillisesti2").show();' id='id_4' name='uudelleenkaynnistys' value='Laite on käynnistetty uudelleen'><label for='id_4'>Laite on käynnistetty uudelleen</label>
        <input type='radio' onclick='$("#akillisesti").show();' id='id_5' name='uudelleenkaynnistys' value='Laitetta ei ole käynnistetty uudelleen'><label for='id_5'>Laitetta ei ole käynnistetty uudelleen</label>
    </div>

    <div id="akillisesti" class="koe" hidden>
        <h3>Onko ongelma alkanut äkillisesti</h3>
        <input type='radio' onclick='f21();' id='id21' name='akillisesti' value='Ongelmia on ollut jo pitkään'><label for='id21'>Ongelmia on ollut jo pitkään</label>
        <input type='radio' onclick='f22();' id='id22' name='akillisesti' value='Ongelma on alkanut äkillisesti'><label for='id22'>Ongelma on alkanut äkillisesti</label>
    </div>

    <div id="akillisesti2" class="koe" hidden>
        <h3>Onko ongelma alkanut äkillisesti</h3>
        <input type='radio' onclick='f21();' id='id11' name='akillisesti2' value='Ongelmia on ollut jo pitkään'><label for='id11'>Ongelmia on ollut jo pitkään</label>
        <input type='radio' onclick='$("#sijainti").show();' id='id12' name='akillisesti2' value='Ongelma on alkanut äkillisesti'><label for='id12'>Ongelma on alkanut äkillisesti</label>
    </div>

    <div id="sijainti" class="koe" hidden>
        <div id="testidivi">Tarkista VIHTI yleisten vikojen varalta.</div>
        <h3>Onko ongelmia tietyssä vain sijainnissa</h3>
        <input type='radio' onclick='$("#useammalla").show();' id='id111' name='sijainti' value='Ongelmaa on kaikkialla'><label for='id111'>Ongelmaa on kaikkialla</label>
        <input type='radio' onclick='' id='id112' name='sijainti' value='Asiakas ei osaa sanoa, onko vikaa kaikkialla.'><label for='id112'>Asiakas ei osaa sanoa, onko vikaa kaikkialla.</label>
        <input type='radio' onclick='f113();' id='id113' name='sijainti' value='Ongelmia vain yhdessä sijainnissa. Laite toimii muualla normaalisti. '><label for='id113'>Ongelmia vain yhdessä sijainnissa. Laite toimii muualla
            normaalisti. </label>
    </div>

    <div id="useammalla" class="koe" hidden>
        <h3>Onko usealla käyttäjällä samaa ongelmaa</h3>
        <input type='radio' onclick='$("#liittymamuutoksia").show();' id='id1111' name='useammalla' value='Muilla asiakkailla ei samaa ongelmaa'><label for='id1111'>Muilla asiakkailla ei samaa ongelmaa</label>
        <input type='radio' onclick='$("#liittymamuutoksia").show();' id='id1112' name='useammalla' value='Asiakas ei osaa sanoa'><label for='id1112'>Asiakas ei osaa sanoa</label>
        <input type='radio' onclick='f1113();' id='id1113' name='useammalla' value='Usealla käyttäjällä samaa vikaa'><label for='id1113'>Usealla käyttäjällä samaa vikaa </label>
    </div>


    <div id="liittymamuutoksia" class="koe" hidden>
        <h3>Onko liittymälle tehty muutoksia?</h3>
        <input type='radio' onclick='f11111();' id='id11111' name='liittymamuutoksia' value='Liittymälle on tehty muutoksia tai muita toimenpiteitä'><label for='id11111'>Liittymälle on tehty muutoksia tai muita toimenpiteitä</label>
        <input type='radio' onclick='$("#toinenlaite").show();' id='id11112' name='liittymamuutoksia' value='Liittymälle ei ole tehty muutoksia'><label for='id11112'>Liittymälle ei ole tehty muutoksia</label>
    </div>

    <div id="toinenlaite" class="koe" hidden>
        <h3>Onko asiakas testannut toista laitetta</h3>
        <input type='radio' onclick='f111121();' id='id111121' name='toinenlaite' value='Asiakas ei ole testannut toista laitetta'><label for='id111121'>Asiakas ei ole testannut toista laitetta</label>
        <input type='radio' onclick='f111122();' id='id111122' name='toinenlaite' value='Asiakas on testannut toisessa laitteessa ja ongelma jatkuu'><label for='id111122'>Asiakas on testannut toisessa laitteessa ja ongelma jatkuu</label>
        <input type='radio' onclick='f111123();' id='id111123' name='toinenlaite' value='Ongelma ei toistu toisella laitteella testattaessa.'><label for='id111123'>Ongelma ei toistu toisella laitteella testattaessa.</label>
    </div>


    <div id="toimintaohje" class="ohje" hidden></div>

    <script>
        function f1() {
            $('#uudelleenkaynnistys').show();
        }

        function f21() {
            huomautus("Pitkään samassa paikassa jatkuneet ongelmat johtuvat tod näk kuuluvuusongelmasta");
            generointi("Käy läpi kuuluvuustilanne asiakkaan kanssa. Tarkista tulevat parannukset eMobile järjestelmästä  Kirjaa kuuluvuuspalaute Mboss-järjestelmään kohdasta Create CT.");
        }

        function f22() {
            huomautus("Neuvo asiakasta käynnistämään laite uudelleen ja nollaamaan verkkoasetukset. Useimmat viat korjaantuvat laitteen uudelleenkäynnistyksellä.");
            generointi("Kyseessä on päätelaitteesta johtuva ongelma. Ongelman toistuessa kannattaa ohjata asiakasta testaamaan toista päätelaitetta. Jos ongelma ei toistu muilla päätelaitteilla ja sama vika jatkuu yhdessä laitteessa, on päätelaite viallinen. Tällöin neuvo asiakkaalle laitteen huolto: http://intranet.teliasonera.net/Workroom/finnish/asiakaspalvelu/tupa/mobiili/Pages/Sonera-huolto-ohjeet.aspx");
        }

        function f113() {
            huomautus("Tarkista aluetta palvelvat tukiasemat MOLOsta. Tarkista onko alueelta jo tehty tiksuja.");
            generointi("Kirjaa tarvittaessa tiksu esimerkein, mikäli ongelmaan ei löydy vastausta. Jos alueelta on jo useita tiksuja, kerro asiakkaalle, että vikaa tutkitaan. Jos asiakas vaatii asiasta tietoa, liitä tiketti parent tikettiin.");
        }
        function f1113() {
            generointi("Ongelma vaikuttaa laajemmalta vikatilanteelta. Tarkista Vihti, IRC #premiumsupport -kanava ja vieruskaverien tietämys aiheesta. Tiedustele tarvitseeko asiasta lisää vikatikettejä. Pahoittele viasta aiheutunutta häiriötä ja neuvo asiakasta seuraamaan Sonera.fi/vikatiedote. (Huom: Ohjaa yritysasiakkaat yritysportaaliin)");
        }
        function f11111() {
            generointi("Tarkista onko liittymälle tehty muutoksia (UAD, NAK, NM210),jotka voivat vaikuttaa puheluihin. Esimerkiksi juuri siirrettyjen liittymien reititys ja soitonsiirrot (soitonsiirto väärään numeroon). Tarkista liittymän palvelut. Tee tarvittaessa tiksu, mikäli et saa itse ratkaistua ongelmaa.");
        }
        function f111121() {
            generointi("Neuvo asiakasta testaamaan liittymää toisella laitteella.  Ongelman jatkuessa asiakasta pyydetään palaamaan asiaan esimerkkien kera. Neuvo asiakkaalle, millaiset esimerkit auttavat vianratkaisussa ja sovi asiakkaan kanssa jatkotoimenpiteet ongelman jatkuessa (soita itse asiakkaalle, SMS-optio, vastaus lähettämääsi sähköpostiin, asiakas soittaa itse vikapalveluun uudellen, häiriöilmoitus Omien Sivujen kautta).");
        }
        function f111122() {
            generointi("Kirjaa tiksu esimerkein. Jos vika vaikuttaa laajemmalta vialta, joka voisi koskea esimerkiksi jotain tiettyä palvelua tai suurempaa aluetta, kysy esim Ircistä (#premiumsupport, #B2C-mobiilitap, #mobilesupport) ovatko muuta havainneet samanlaista vikaa.");
        }
        function f111123() {
            generointi("Ongelma jää asiakkaan laitteeseen. Ei tarvetta tiksulle. Päätelaiteongelmissa suosittele asiakkaalle Helpson palvelua.");
        }
    </script>
</form>