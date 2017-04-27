<script>
    function show_sms() {
        var $liittymatunnus = $("#liittymanumero").val();
        var $vastaanottaja = $("#yhtnro").val();
        mywindow = window.open("sms.php?yhtnro=" + $vastaanottaja + "&ltunnus=" + $liittymatunnus, "mywindow", "location=1,status=1,scrollbars=1,  width=350,height=350");
        mywindow.moveTo(0, 0);
    }
    function helpson() {
        document.getElementById('generoitu').innerHTML = "Asiakas ohjattu Helpsonille\n" + document.getElementById('generoitu').value;
        document.getElementById('asiakasinfo').innerHTML = "Ohjaa asiakas Helpsonille ja kirjaa vika-analyysi UAD:lle\n\n";
    }
    function tt() {
        document.getElementById('generoitu').innerHTML = "Toimituksentarkastus\n" + document.getElementById('generoitu').value;
        document.getElementById('asiakasinfo').innerHTML = "Kirjaa toimituksentarkastus Alphaan ja laita tapahtumatiedot ja vika-analyysi UAD:lle\n\n";
    }
    function sms_optio() {
        document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "Asiakas testaa vielä laitteensa. Kirjaa tiketti Alphaan ja laita tapahtumatiedot ja vika-analyysi UAD:lle\n\n";
        document.getElementById('generoitu').innerHTML = "SMS-optio\n" + document.getElementById('generoitu').value;
        $("#sms").show();
    }
    function tiketti() {
        document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "Tarvittavat laitetestit on käyty läpi tai asiakas ei halua testata laitteitaan. Kirjaa tiketti Alphaan ja laita tapahtumatiedot ja vika-analyysi UAD:lle.\n\n";
    }
    function maksu() {
        document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "Kerro asiakkaalle, että turha asentajakäynti maksaa 99 € mikäli vika jää asiakkaan laitteisiin, johtoihin tai kytkentöihin.\n\n";
    }
</script>