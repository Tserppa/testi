<input type='hidden' name='tech' value='Ethernet'>
<input type='hidden' id='eitoimi' name='ongelma' value='Ei toimi ollenkaan&#10;'>

<form id="vikalomake">
    <div id="testidivi"><svg class="huomautus"  height="40px" width="40px" fill="#990AE3">
                <use xlink:href='../layout/svg.svg#speech-bubble'/>
            </svg>Hae asiakas mbossille ja tarkista alueen kuuluvuustilanne.
        Tarkista hälytykset Alarmmapilta. Tarkista, että liittymää ei ole suljettu operaattorin toimesta tai itsepalveluna (UAD näyttää: NAK koodit KKI, SAP, SIP). Liittymän ollessa suljettu operaattorin tai omistajan toimesta kyseessä ei
        ole vika.
    </div>

    <div id="ensimmainen" class="koe">
        <h3>Onko asiakas kuuluvuusalueella?</h3>
        <input type='radio' onclick='$("#uudkaynnis").show();' id='id_1' name='kuuluvuus' value='Asiakas on kuuluvuusalueella.'><label for='id_1'>Asiakas on kuuluvuusalueella.</label>
        <input type='radio' onclick='f_2();' id='id_2' name='kuuluvuus' value='Asiakas ei ole kuuluvuusalueella.'><label for='id_2'>Asiakas ei ole kuuluvuusalueella.</label>
    </div>

    <div id="uudkaynnis" class="koe" hidden>
        <h3>Onko laite käynnistetty uudelleen?</h3>
        <input type='radio' onclick='$("#loytaako").show();' id='id_11' name='uudkaynnis' value='Laitetta ei ole käynnistetty uudelleen'><label for='id_11'>Laitetta ei ole käynnistetty uudelleen.</label>
        <input type='radio' onclick='$("#simkortti").show();' id='id_12' name='uudkaynnis' value='Laite on käynnsitetty uudelleen.'><label for='id_12'>Laite on käynnsitetty uudelleen.</label>
    </div>


    <div id="loytaako" class="koe" hidden>
        <div id="testidivi"><svg class="huomautus"  height="40px" width="40px" fill="#990AE3">
                <use xlink:href='../layout/svg.svg#speech-bubble'/>
            </svg>Useimmiten "ei verkkoa" viat korjaantuvat laitteen uudelleenkäynnistyksellä. Pyydä asiakasta käyttämään laitetta virrattomana.</div>
        <h3>Löytääkö puhelin uudelleenkäynnistyksen jälkeen verkon?</h3>
        <input type='radio' onclick='$("#simkortti").show();' id='id_121' name='loytaako' value='Puhelin ei löydä verkkoa uudelleenkäynnistyksen jälkeen.'><label for='id_121'>Puhelin ei löydä verkkoa uudelleenkäynnistyksen jälkeen..</label>
        <input type='radio' onclick='f_122();' id='id_122' name='loytaako' value='Laite löytää verkon uudelleenkäynnistyksen jälkeen..'><label for='id_122'>Laite löytää verkon uudelleenkäynnistyksen jälkeen..</label>
    </div>

    <div id="simkortti" class="koe" hidden>
        <div id="testidivi"><svg class="huomautus"  height="40px" width="40px" fill="#990AE3">
                <use xlink:href='../layout/svg.svg#speech-bubble'/>
            </svg>Tarkista kysyykö päätelaite pinkoodin, jos pinkoodikysely on päällä. Huom, MBB liittymillä yleensä no-pin kortit (tarkista NAKista SEID = pinkoodi, NOPN = ei pinkoodia).</div>
        <h3>Tunnistaako laite simkortin?</h3>
        <input type='radio' onclick='f_111();' id='id_111' name='simkortti' value='Laite ei tunnista simkorttia.'><label for='id_111'>Laite ei tunnista simkorttia.</label>
        <input type='radio' onclick='$("#simnumero").show();' id='id_112' name='simkortti' value='Laite tunnistaa simkortin.'><label for='id_112'>Laite tunnistaa simkortin.</label>
    </div>

    <div id="simnumero" class="koe" hidden>
        <div id="testidivi"><svg class="huomautus"  height="40px" width="40px" fill="#990AE3">
                <use xlink:href='../layout/svg.svg#speech-bubble'/>
            </svg>Tarkista, että asiakkaan simkortin (asiakas lukee kortista) numero on sama kuin NAKissa.  </div>
        <h3>Onko asiakkaan simkortin numero oikein?</h3>
        <input type='radio' onclick='f_1111();' id='id_1111' name='simnumero' value='Asiakkaan simkortin numero on väärin.'><label for='id_1111'>Asiakkaan simkortin numero on väärin.</label>
        <input type='radio' onclick='$("#aktiivinen").show();' id='id_1112' name='simnumero' value='Simkortin numero on oikein.'><label for='id_1112'>Simkortin numero on oikein.</label>
    </div>

    <div id="aktiivinen" class="koe" hidden>
        <div id="testidivi"><svg class="huomautus"  height="40px" width="40px" fill="#990AE3">
                <use xlink:href='../layout/svg.svg#speech-bubble'/>
            </svg>Tarkista, että liittymä on aktiivinen NM210 järjestelmästä: Sequence -> GSM HLR -> CNDB -> Perustiedot: Activation status: FALSE väärin, TRUE tai tyhjä OK. </div>
        <h3>Onko liittymä aktiivinen NM210 järjestelmässä?</h3>
        <input type='radio' onclick='f_11111();' id='id_11111' name='aktiivinen' value='Liittymä ei ole aktiivinen NM210 Järjstelmässä.'><label for='id_11111'>Liittymä ei ole aktiivinen NM210 Järjstelmässä.</label>
        <input type='radio' onclick='$("#toimiiko").show();' id='id_11112' name='aktiivinen' value='Liittymä on aktiivinen NM210-järjestelmässä.'><label for='id_11112'>Liittymä on aktiivinen NM210-järjestelmässä.</label>
    </div>

    <div id="toimiiko" class="koe" hidden>
        <h3>Toimiiko liittymä toisessa laitteessa?</h3>
        <input type='radio' onclick='f_111111();' id='id_111111' name='toimiiko' value='Asiakas ei pysty testaamaan toisella laitteella.'><label for='id_111111'>Asiakas ei pysty testaamaan toisella laitteella.</label>
        <input type='radio' onclick='f_111112();' id='id_111112' name='toimiiko' value='Liittymä ei toimi toisellakaan laitteella.'><label for='id_111112'>Liittymä ei toimi toisellakaan laitteella.</label>
        <input type='radio' onclick='f_111113();' id='id_111113' name='toimiiko' value='Liittymä toimii toisella laitteella.'><label for='id_111113'>Liittymä toimii toisella laitteella.</label>
    </div>

    <script>
        function f_2() {
            huomautus("Pitkään samassa paikassa jatkuneet ongelmat johtuvat todennäköisesti kuuluvuusongelmasta");
            generointi("Käy läpi kuuluvuustilanne asiakkaan kanssa. Tarkista tulevat parannukset eMobile-järjestelmästä  Kirjaa kuuluvuuspalaute Mboss-järjestelmään kohdasta Create CT.");
        }
        function f_122() {
            generointi("Kyseessä on päätelaitteesta johtuva ongelma. Ongelman toistuessa kannattaa ohjata asiakasta testaamaan toista päätelaitetta.  Jos ongelma ei toistu muilla päätelaitteilla ja sama vika jatkuu yhdessä laitteessa, on" +
                " päätelaite viallinen. Tällöin neuvo asiakkaalle laitteen huolto: http://intranet.teliasonera.net/Workroom/finnish/asiakaspalvelu/tupa/mobiili/Pages/Sonera-huolto-ohjeet.aspx");
        }
        function f_111() {
            generointi("Jos laite ei tunnista simkorttia, voi itse kortti tai päätelaitteen kortinlukija olla viallinen. Neuvo asiakasta testaamaan korttia toisella päätelaitteella. Jos kortti toimii toisessa päätelaitteessa, on " +
                "asiakkaan laite viallinen. Jos kortti ei toimi toisellakaan laitteella, todennäköisesti kortti on viallinen. Lähetä asiakkaalle uusi SIM-kortti SIMS-järjestelmästä tai neuvo asiakasta hakemaan uusi kortti lähimmältä " +
                "jälleenmyyjältä. Sovi asiakkaan kanssa jatkotoimenpiteet, jos tilanne ei korjaannu uudella simkortilla (telia.fi -> häiriöilmoitus, chat, SMS-optio, vastaus lähettämääsi sähköpostiin).");
        }
        function f_1111() {
            generointi("Aktivoi oikea simkortinnumero NAKiin. Neuvo asiakasta käyttämään puhelinta virrattomana. ");
        }
        function f_11111() {
            generointi("Käytä liittymällä luokitusta SAP NAKissa ja poista se heti. Neuvo asiakasta käynnistämään puhelin uudelleen. Tarkista vielä liittymän status NM210 järjestelmästä. Jos tilanne ei korjaannu, kirjaa tiksu.");
        }
        function f_111111() {
            huomautus("Haluamme välttää turhia tikettejä emmekä voi todentaa laitevikaa muuten kuin laitetestillä. Tämän vuoksi laitetesti tulee suorittaa ennen vikailmoituksen kirjaamista.");
            generointi("Neuvo asiakasta olemaan yhteydessä, jos vika jatkuu toisella laitteella (Soitto linjaan, chat, SMS-optio, vastaus lähettämääsi sähköpostiin, telia.fi tai Yritysportaali).");
        }
        function f_111112() {
            huomautus("Tarkista MOLOsta, että lähimmässä tukiasemassa ei ole muutostöitäj uuri meneillään.");
            generointi("Ongelma vaikuttaa verkkovialta ja asiaa on hyvä tutkia tarkemmin Kirjaa tiksu. Lisää tiksuun omat havainnot/tiedot.");
        }
        function f_111113() {
            generointi("Ongelma jää asiakkaan laitteeseen. Ei tarvetta tiksulle. Neuvo asiakkaalle verkkoasetusten nollaus ja/tai manuaalinen verkon haku. Päätelaitteen asetusongelmissa suosittele asiakkaalle Helppiä. Laitteen ollessa " +
                "viallinen anna asiakkaalle huolto-ohjeet: http://intranet.teliasonera.net/Workroom/finnish/asiakaspalvelu/tupa/mobiili/Pages/Sonera-huolto-ohjeet.aspx");
        }

    </script>
</form>