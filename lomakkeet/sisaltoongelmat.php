<input type='hidden' name='tech' value='Sisältöongelmat'>

<form id="vikalomake">
    <div id="ensimmainen" class="koe">
        <div id="testidivi"><svg class="huomautus"  height="40px" width="40px" fill="black">
                <use xlink:href='../layout/svg.svg#speech-bubble'/>
            </svg>Varmista UAD:lta/ TCAT:sta että asiakkaalla tilauspuoli on kunnossa. Varmista, että käytössä oleva laite on käynnistetty uudelleen. Lopuksi kirjaa vikailmoitus Alphaan sille tuotteelle, jota vika koskettaa.</div>
        <h3>Viallinen sisältö -kategoria:</h3>
        <input type='radio' onclick='$("#toinen").show();' id='id1' name='viallinensisalto' value='EPG'><label for='id1'>EPG</label>
        <input type='radio' onclick='f2();' id='id2' name='viallinensisalto' value='Vodit'><label for='id2'>Vodit</label>
        <input type='radio' onclick='$("#kolmas").show();' id='id3' name='viallinensisalto' value='Yksittäinen kanava'><label for='id3'>Yksittäinen kanava</label>
    </div>

    <div id="toinen" class="koe" hidden>
        <h3>Kanava ja ajankohta:</h3>
        <input type="text" oninput="f1();"class="lyhyt" id="malli" name="malli" placeholder="Kanava ja ajankohta">
    </div>

    <div id="kolmas" class="koe" hidden>
        <h3>Kanava:</h3>
        <input type="text" oninput="f3();" class="lyhyt" id="malli" name="malli" placeholder="Kanava">
    </div>

    <script>
        function f1() {
            huomautus("Info tarvittavista lisätiedoista!!!!")
            generointi("vikari5");
        }
        function f2() {
            huomautus("Tarkka info toimimattomasta sisällöstä lisätietoihin. Lisäksi tarkka kuvaus ongelmasta esimerkkeineen.")
            generointi("vikari5");
        }
        function f3() {
            huomautus("Info tarvittavista lisätiedoista!!! esim. vikatyyppi, pätkii vai ei toimi?")
            generointi("vikari5");
        }

    </script>
</form>