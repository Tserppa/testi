<input type='hidden' name='tech' value='Ethernet'>
<input type='hidden' id='eitoimi' name='ongelma' value='Ei toimi ollenkaan&#10;'>

<form id="vikalomake">

    <div id="ensimmainen" class="koe">
        <h3>ICA-linkin status? Tarkista L2-managerista että liittymän konfiguraatio on kunnossa</h3>
        <input type='radio' onclick='$("#tipahtaako").show();' id='id_1' name='ica' value='Link UP, konfiguraatio OK'><label for='id_1'>Link UP, konfiguraatio OK</label>
        <input type='radio' onclick='f_2();' id='id_2' name='ica' value='Konfiguraatio-ongelma SMO/L2-managerissa'><label for='id_2'>Konfiguraatio-ongelma SMO/L2-managerissa</label>
        <input type='radio' onclick='f_3();' id='id_3' name='ica' value='Kytkin ei vastaa / verkkovika'><label for='id_3'>Kytkin ei vastaa / verkkovika</label>
        <input type='radio' onclick='$("#nousuporttiin").show();' id='id_4' name='ica' value='Link DOWN, konfiguraatio OK'><label for='id_4'>Link DOWN, konfiguraatio OK</label>
    </div>

    <div id="tipahtaako" class="koe" hidden>
        <div id="testidivi">Info: HOAS/TOAS-kohteissa ei ole huoneistojakamoita. Tällöin asiakasta pyydetään testaamaan yhteyttä suoraan huoneen datarasiasta. Jos rasiassa on kaksi liitintä pyydä kokeilemaan molemmista.</div>
        <h3>Tipahtaako linkki alas kun asiakas irroittaa verkkokaapelin huoneistojakamokaapin nousuportista?</h3>
        <input type='radio' onclick='$("#jakamokaappi").show();' id='id_11' name='tipahtaako' value='Linkki ei tipahda, jos kaapeli irrotetaan nousuportista'><label for='id_11'>Ei</label>
        <input type='radio' onclick='f_12();' id='id_12' name='tipahtaako' value='Asiakas ei pysty/suostu testaamaan kaapelin irrottamista nousuportista'><label for='id_12'>Asiakas ei pysty tai suostu testaamaan</label>
        <input type='radio' onclick='f_13();' id='id_13' name='tipahtaako' value='Asiakas ei ole kotona eikä jakamosta ole testattu'><label for='id_13'>Asiakas ei ole kotona eikä jakamosta ole testattu</label>
        <input type='radio' onclick='$("#nousuportti").show();' id='id_14' name='tipahtaako' value='Linkki tipahtaa, jos kaapeli irrotetaan nousuportista'><label for='id_14'>Kyllä</label>
    </div>

    <div id="jakamokaappi" class="koe" hidden>
        <h3>Jos jakamokaapissa on kuitumuunnin pyydä että asiakas käynnistää sen uudelleen</h3>
        <input type='radio' onclick='f_111();' id='id_111' name='jakamokaappi' value='Linkki reagoi muuntimen boottiin ja yhteys alkoi toimimaa'><label for='id_111'>Linkki reagoi muuntimen boottiin ja yhteys alkoi toimimaan</label>
        <input type='radio' onclick='$("#saakoip").show();' id='id_112' name='jakamokaappi' value='Linkki reagoi muuntimen boottiin mutta yhteys ei kuitenkaan toimi'><label for='id_112'>Linkki reagoi muuntimen boottiin mutta yhteys ei
            kuitenkaan toimi</label>
        <input type='radio' onclick='generointi("tiketti");' id='id_113' name='jakamokaappi' value='Linkki ei reagoi kuitumuuntimen boottiin'><label for='id_113'>Linkki ei reagoi kuitumuuntimen boottiin</label>
        <input type='radio' onclick='generointi("maksu;tiketti");' id='id_114' name='jakamokaappi' value='Ei kuitumuunninta'><label for='id_114'>Ei kuitumuunninta</label>
    </div>

    <div id="nousuporttiin" class="koe" hidden>
        <div id="testidivi">Info: HOAS/TOAS-kohteissa ei ole huoneistojakamoita. Tällöin asiakasta pyydetään testaamaan yhteyttä suoraan huoneen datarasiasta. Jos rasiassa on kaksi liitintä pyydä kokeilemaan molemmista.</div>
        <h3>Pyydä asiakasta kytkemään tietokone tai reititin suoraan huoneistojakamokaapin nousuporttiin ja vaihtamaan verkkokaapeli</h3>
        <input type='radio' onclick='f_41();' id='id_41' name='nousuporttiin' value='Linkki reagoi muuntimen boottiin ja yhteys alkoi toimimaa'><label for='id_41'>Asiakas ei pysty tai suostu testaamaan</label>
        <input type='radio' onclick='$("#saakoip").show();' id='id_42' name='nousuporttiin' value='Linkki reagoi muuntimen boottiin mutta yhteys ei kuitenkaan toimi'><label for='id_42'>Testattu, linkki nousee jakamon nousuportista
            (tarkistettu ICA:sta/SMO:lta)</label>
        <input type='radio' onclick='f_43();' id='id_43' name='nousuporttiin' value='Linkki ei reagoi kuitumuuntimen boottiin'><label for='id_43'>Asiakas ei ole kotona eikä jakamosta ole testattu</label>
        <input type='radio' onclick='$("#toisellalaitteella").show();' id='id_44' name='nousuporttiin' value='Ei kuitumuunninta'><label for='id_44'>Testattu, linkki ei nouse jakamon nousuportista</label>
    </div>

    <div id="toisellalaitteella" class="koe" hidden>
        <h3>Onko testattu toisella laitteella suoraan nousuportista ja onko verkkokaapeli vaihdettu?</h3>
        <input type='radio' onclick='f_441();' id='id_441' name='toisellalaitteella' value='Testattu toisella laitteella nousuportista ja kaapeli vaihdettu'><label for='id_441'>Kyllä</label>
        <input type='radio' onclick='f_442();' id='id_442' name='toisellalaitteella' value='Ei testattu toisella laitteella / kaapelia ei vaihdettu'><label for='id_442'>Ei</label>
    </div>

    <div id="saakoip" class="koe" hidden>
        <h3>Saako IP:n?</h3>
        <input type='radio' onclick='f_1121();' id='id_1121' name='saakoip' value='Saa IP:n'><label for='id_1121'>Kyllä</label>
        <input type='radio' onclick='f_1122();' id='id_1122' name='saakoip' value='Ei saa IP:n'><label for='id_1122'>Ei</label>
    </div>

    <div id="nousuportti" class="koe" hidden>
        <h3>Saako IP:n tietokoneella suoraan nousuportista?</h3>
        <input type='radio' onclick='f_1141();' id='id_1141' name='saakoip' value='Saa IP:n nousuportista'><label for='id_1141'>Kyllä</label>
        <input type='radio' onclick='f_1142();' id='id_1142' name='saakoip' value='Ei saa IP:tä nousuportista'><label for='id_1142'>Ei</label>
    </div>
    <div id="toimintaohje" class="ohje" hidden></div>

    <script>
        function f_2() {
            huomautus("Kuvaus ongelmasta Agentin omat havainnot ja lisätiedot -kenttään. Jos on virheilmoitus L2:n Taskeissa, niin copy-paste. Jos on ohjaus SSA-kauppaan, niin  lisätään asiakkaalle myyty nopeus ja onko TV-palvelua käytössä.");
            generointi("tiketti");
        }

        function f_3() {
            huomautus("Valitse tämä vaihtoehto vain jos olet täysin varma verkkoviasta! Edelleen kirjataan asiakkaan vikakuvaus ja linkin status, jos se on saatavilla");
            generointi("tiketti");
        }

        function f_111() {
            huomautus("Mikäli samaa ongelmaa on esiintynyt jo aikaisemminkin ja mikäli kuitumuuntimen bootti auttaa aina ongelma on lähtökohtaisesti taloyhtiön sisäverkossa / kuitumuuntimessa. Asiakkaan on syytä olla yhteydessä taloyhtiön huoltoyhtiöön tai isännöitsijään.");
            generointi("");
        }
        function f_1121() {
            huomautus("Viankorjaus ei ole Soneran vastuulla, yhteys toimii asuntoon asti. Jos yhteys toimii tietokoneella muttei Soneran RGW:llä tai takuunalaisella reitittimellä ja verkkokaapeli on vaihdettu kirjaa asiasta tiketti");
            generointi("maksu;helppi;");
        }
        function f_1122() {
            huomautus("Pyydä kokeilemaan toisella laitteella ja varmistamaan että verkkokaapeli on kunnossa. Vika on todennäköisesti asiakkaan laitteessa tai jakamokaapin verkkokaapelissa.");
            generointi("maksu;helppi;sms_optio");
        }
        function f_12() {
            huomautus("Vika on todennäköisesti asunnon sisäverkossa, asiakkaan reitittimessä tai tietokoneessa mutta Soneran osuutta ei voida rajata pois ilman testausta suoraan noususta. Ei optiota koska as. ei pysty/suostu testaamaan. Asiakas pitää ohjata Helpsonille, 99e maininta mikäli as. vaatii tikettiä tai asentajakäyntiä");
            generointi("maksu;helppi;tiketti");

        }
        function f_13() {
            huomautus("Jotta mahdollinen asunnon sisäverkkovika tai asiakkaan laitevika saataisiin rajattua pois on tärkeää että asiakas kokeilee yhteyttä suoraan nousuportista mielellään parilla eri verkkokaapelilla ja laitteella. Jos jakamokaapissa on kuitumuunnin asiakkaan pitää ensin käynnistää se uudestaan ja sitten testata koneella suoraan verkkokaapelilla kuitumuuntimesta");
            generointi("maksu;sms_optio");
        }
        function f_41() {
            huomautus("Vika on todennäköisesti asunnon sisäverkossa, asiakkaan reitittimessä tai tietokoneessa mutta Soneran osuutta ei voida rajata pois ilman testausta suoraan noususta. Ei optiota koska as. ei pysty/suostu testaamaan. Asiakas pitää ohjata Helpsonille, 99e maininta mikäli as. vaatii tikettiä tai asentajakäyntiä. Jos ei ole toiminut koskaan ja toimituksesta alle 3kk, niin katso TT-ohje.");
            generointi("maksu;helppi;tiketti;tt");
        }
        function f_43() {
            huomautus("Jotta mahdollinen asunnon sisäverkkovika saataisiin rajattua pois on tärkeää että asiakas kokeilee yhteyttä suoraan nousuportista mielellään parilla eri verkkokaapelilla ja laitteella. Jos ei ole toiminut koskaan ja toimituksesta alle 3kk, niin katso TT-ohje.");
            generointi("maksu;tt;sms_optio");
        }

        function f_1141() {
            huomautus("Viankorjaus ei ole Soneran vastuulla, yhteys toimii asuntoon asti. Sisäverkko on asiakkaan / taloyhtiön vastuulla. Pyydä asiakasta olemaan yhteydessä isännöitsijään. Jos yhteys toimii tietokoneella muttei Soneran RGW:llä tai takuunalaisella reitittimellä ja verkkokaapeli on vaihdettu kirjaa asiasta tiketti");
            generointi("maksu;helppi");
        }

        function f_1142() {
            huomautus("Pyydä kokeilemaan toisella laitteella ja varmistamaan että verkkokaapeli on kunnossa. Vika on todennäköisesti asiakkaan laitteessa tai jakamokaapin verkkokaapelissa.");
            generointi("maksu;helppi;sms_optio");
        }
        function f_441() {
            huomautus("Jos ei ole toiminut koskaan ja toimituksesta alle 3kk, niin katso TT-ohje.");
            generointi("maksu;tiketti;tt");
        }
        function f_442() {
            huomautus("Jotta mahdollinen asunnon sisäverkkovika saataisiin rajattua pois on tärkeää että asiakas kokeilee yhteyttä suoraan nousuportista mielellään parilla eri verkkokaapelilla ja laitteella. Jos ei ole toiminut koskaan ja toimituksesta alle 3kk, niin katso TT-ohje. ");
            generointi("maksu;sms_optio;tiketti;tt");
        }
    </script>
</form>