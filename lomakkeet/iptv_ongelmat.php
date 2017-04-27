<input type='hidden' name='tech' value='IPTV-ongelmat'>
<input type='hidden' id='eitoimi' name='ongelma' value='IPTV-ongelmat&#10;'>

<form id="vikalomake">
    <div id="ensimmainen" class="koe">
        <h3>Netti toimii normaalisti? Kirjaa lisätietoihin mikä yhteystyyppi käytössä ja liittymänro</h3>
        <input type='radio' onclick='$("#vikailmenee").show();' id='id1' name='nettinormaalisti' value='Internet-yhteys toimii'><label for='id1'>Kyllä</label>
        <input type='radio' onclick='f2();' id='id2' name='nettinormaalisti' value='Internet-yhteys ei myöskään toimi'><label for='id2'>Ei</label>
    </div>


    <script>
        function f2() {
            huomautus("Jos nettiyhteydessä havaitaan ongelmia, aiheuttaa tämä varmuudella ongelmaa myös Telia TV mobiilissa-palveluun.")
            generointi("Siirry asiakkaan yhteyden mukaiseen vikalomakkeeseen");
        }


    </script>
</form>