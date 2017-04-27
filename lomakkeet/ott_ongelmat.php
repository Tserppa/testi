<input type='hidden' name='tech' value='Telia TV -mobiilissa'>
<input type='hidden' id='eitoimi' name='ongelma' value='OTT-ongelma&#10;'>

<form id="vikalomake">
    <div id="ensimmainen" class="koe">
        <h3>Netti toimii normaalisti? Kirjaa lisätietoihin mikä yhteystyyppi käytössä ja liittymänro</h3>
        <input type='radio' onclick='$("#vikailmenee").show();' id='id1' name='nettinormaalisti' value='Internet-yhteys toimii'><label for='id1'>Kyllä</label>
        <input type='radio' onclick='f2();' id='id2' name='nettinormaalisti' value='Internet-yhteys ei myöskään toimi'><label for='id2'>Ei</label>
    </div>

    <div id="vikailmenee" class="koe" hidden>
        <h3>Vikaa ilmenee?</h3>
        <input type='radio' onclick='$("#laitteentiedot2").show();' id='id11' name='vikaailmenee' value='Vika yksittäisellä laitteella'><label for='id11'>Yksittäisellä laitteella</label>
        <input type='radio' onclick='$("#laitteentiedot").show();' id='id12' name='vikaailmenee' value='Vika useammalla laitteella'><label for='id12'>Useammalla laitteella</label>
    </div>

    <div id="laitteentiedot" class="koe" hidden>
        <h3>Asiakkaan laitteiden tiedot (laitteen merkki, malli, käyttöjärjestelmä, selain): </h3>
        <input type="text"  id="malli" name="malli" placeholder=""><br><br>

        <input type='radio' onclick='f121();' id='id121' name='vikatyyppi' value='Yhteys pätkii'><label for='id121'>Pätkii</label>
        <input type='radio' onclick='f122();' id='id122' name='vikatyyppi' value='Yhteys ei toimi'><label for='id122'>Ei toimi</label>
    </div>

    <div id="laitteentiedot2" class="koe" hidden>
        <div id="testidivi">Mahdolliset toimenpiteet: Toisella laitteella testaaminen, Laitteiden uudelleen-käynnistys, mahdollinen applikaation uudelleen-asennus</div>
        <h3>Asiakkaan laitteiden tiedot (laitteen merkki, malli, käyttöjärjestelmä, selain): </h3>
        <input type="text"  id="malli" name="malli" placeholder=""><br><br>

        <input type='radio' onclick='$("#toimet2").show();' id='id221' name='vikatyyppi2' value='Yhteys pätkii'><label for='id221'>Pätkii</label>
        <input type='radio' onclick='$("#toimet").show();' id='id222' name='vikatyyppi2' value='Yhteys ei toimi'><label for='id222'>Ei toimi</label>
    </div>

    <div id="toimet" class="koe" hidden>
        <div id="testidivi">Varmista, että asiakkaan tilaus on voimassa. Kirjaa virheilmoitus lisätietoihin.Jos mahdollista, testaa testilaitteella.</div>
        <h3>Asiakas tehnyt tarvittavat toimet? </h3>
        <input type='radio' onclick='generointi("ottvikari2");' id='id2221' name='toimet' value='Asiakas tehnyt tarvittavat toimet'><label for='id2221'>Kyllä</label>
        <input type='radio' onclick='f2222();' id='id2222' name='toimet' value='Asiakas ei ole tehnyt tarvittavia toimia'><label for='id2222'>Ei</label>
    </div>

    <div id="toimet2" class="koe" hidden>
        <div id="testidivi">Kirjaa lisätietoihin: Mikä sisältö pätkiii? Pätkiikö jatkuvasti? Mahdolliset virheilmoitukset. Jos mahdollista, testaa testilaitteella.</div>
        <h3>Asiakas tehnyt tarvittavat toimet? </h3>
        <input type='radio' onclick='generointi("ottvikari2");' id='id22221' name='toimet2' value='Asiakas tehnyt tarvittavat toimet'><label for='id22221'>Kyllä</label>
        <input type='radio' onclick='f2222();' id='id22222' name='toimet2' value='Asiakas ei ole tehnyt tarvittavia toimia'><label for='id22222'>Ei</label>
    </div>

    <script>
        function f2() {
            huomautus("Jos nettiyhteydessä havaitaan ongelmia, aiheuttaa tämä varmuudella ongelmaa myös Telia TV mobiilissa-palveluun.")
            generointi("Siirry asiakkaan yhteyden mukaiseen vikalomakkeeseen");
        }

        function f122() {
            huomautus("Varmista, että asiakkaan tilaus on voimassa. Kirjaa virheilmoitus lisätietoihin.")
            generointi("ottvikari2");
        }

        function f121() {
            huomautus("Kirjaa lisätietoihin. Mikä sisältö pätkii? Pätkiikö jatkuvasti? Mahdolliset virheilmoitukset.")
            generointi("ottvikari5");
        }

        function f2222() {
            generointi("testaukset");
        }
    </script>
</form>