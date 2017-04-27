function show_sms() {
    var $liittymatunnus = $("#liittymanumero").val();
    var $vastaanottaja = $("#yhtnro").val();
    mywindow = window.open("sms.php?yhtnro=" + $vastaanottaja + "&ltunnus=" + $liittymatunnus, "mywindow", "location=1,status=1,scrollbars=1,  width=350,height=350");
    mywindow.moveTo(0, 0);
}

function reset_asiakas() {
    if (confirm("Tyhjennetäänkö asiakastiedot?") == true) {
        document.getElementById('info').innerHTML = "";
        document.getElementById("liittymanumero").value = "";
        document.getElementById('yhtnro').value = "";
        document.getElementById('userid').value = "";
        document.getElementById('vikakuvaus').innerHTML = "";
        document.getElementById('datepicker').innerHTML = "";
    }
}

function huomautus(sisalto) {
    document.getElementById('asiakasinfo').innerHTML = sisalto + "\n\n";
}

function generointi(vaihtoehdot) {
    var purettu = vaihtoehdot.split(";");
    var purettuPituus = purettu.length;
    generoi();
    for (var i = 0; i < purettuPituus; i++) {
        document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + (i + 1) + ". ";
        switch (purettu[i]) {
            case "maksu":
                document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "100e: Kerro asiakkaalle, että turha asentajakäynti maksaa 100 € mikäli vika jää asiakkaan laitteisiin, johtoihin tai" +
                    " kytkentöihin.\n";
                break;
            case "tiketti":
                document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "Vikailmoitus: Tarvittavat laitetestit on käyty läpi tai asiakas ei halua testata laitteitaan. Kirjaa tiketti Alphaan ja laita" +
                    " tapahtumatiedot ja vika-analyysi UAD:lle.\n";
                break;
            case "helppi":
                document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "Helppi: Ohjaa asiakas Helppiin ja kirjaa vika-analyysi UAD:lle\n";
                break;
            case "tt":
                document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "Toimituksen tarkastus: Kirjaa toimituksentarkastus Alphaan ja laita tapahtumatiedot ja vika-analyysi UAD:lle\n";
                break;
            case "sms_optio":
                document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "SMS-optio: Asiakas testaa vielä laitteensa. Kirjaa tiketti Alphaan ja laita tapahtumatiedot ja vika-analyysi UAD:lle\n";
                $("#generoitu").append("\nSMS-Optio");
                $("#sms").show();
                break;
            case "ottvikari2":
                document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "Lomakepohjan perusteella generoidaan vikailmoitus, joka tallennetaan Alpha2-järjestelmään. Puhelun yhteydessä asiakkaalle informoidaan alustava viankorjausaika kaksi arkipäivää. Tekstari asiakkaalle: Hei, Telia TV mobiilissa-palvelustasi on kirjattu vikailmoitus. Viankorjauksen alustava korjausaika on kaksi arkipäivää. T. Telia";
                break;
            case "ottvikari5":
                document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "Lomakepohjan perusteella generoidaan vikailmoitus, joka tallennetaan Alpha2-järjestelmään. Puhelun yhteydessä asiakkaalle" +
                    " informoidaan alustava viankorjausaika viisi arkipäivää. Tekstari asiakkaalle: Hei, Telia TV mobiilissa-palvelustasi on kirjattu vikailmoitus. Viankorjauksen alustava korjausaika on kaksi arkipäivää. T. Telia";
                break;
            case "vikari5":
                document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "Lomakepohjan perusteella generoidaan vikailmoitus, joka tallennetaan Alpha2-järjestelmään. Puhelun yhteydessä asiakkaalle informoidaan alustava viankorjausaika viisi arkipäivää. Tekstari asiakkaalle: Hei, Telia TV -palvelustasi on kirjattu vikailmoitus. Viankorjauksen alustava korjausaika on viisi arkipäivää. T. Telia";
                break;
            case "testaukset":
                document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "Lomakepohjan perusteella generoidaan SMS-optio, joka tallennetaan UAD:lle kommenttina. Puhelun aikana asiakkaalle" +
                    " ohjeistus puuttuvien asioiden testauksesta. Tämän jälkeen vastaa viestiin. Tekstari asiakkaalle: Hei, mikäli vikatilanteesi jatkuu ohjeistamiemme laitetestienkin jälkeen";
                $("#generoitu").append("\nSMS-Optio");
                $("#sms").show();
                break;
            default:
                document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + vaihtoehdot;
                break;
        }
    }

    $("#vikaripohja").show();
    $("#vakiopohjan_loppu").show();
    window.scrollTo(10000,10000);

}

$(function () {
    $("#datepicker").datepicker();
});

function expand(that) {
    $(that).parent().toggleClass("laajennus");
}

function tarkistatiedot() {
    if ($("#liittymanumero").val() == "") {
        $("#varoitus").text("Puutteita");
    }
}

function generoi() {
    var fields = $(":input").serializeArray();
    $("#generoitu").empty();
    $("#generoitu").append("** KOPIOI ALLA OLEVA TULOSTE TIKETILLE / UAD:lle **\n\n");
    jQuery.each(fields, function (i, field) {
        if (field.value != "") {
            $("#generoitu").append(field.value + "\n");
        }
    });

}


function tyhjenna() {
    if (confirm("Aloitetaanko alusta?") == true) {
        $('#vikalomake')[0].reset();
        $(".koe").hide();
        $(".ohje").hide();
        $("#ensimmainen").show();
        $("#vakiopohjan_loppu").hide();
        $("#vikaripohja").hide();
        document.getElementById('asiakasinfo').innerHTML = "";
        document.getElementById('generoitu').innerHTML = "";
    }
}
