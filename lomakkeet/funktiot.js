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
        document.getElementById('datepicker').innerHTML = "öö";
    }
}

function huomautus(sisalto) {
    document.getElementById('asiakasinfo').innerHTML = sisalto + "\n\n";
}

function generointi(vaihtoehdot) {
    var purettu = vaihtoehdot.split(";");
    var purettuPituus = purettu.length;

    for (var i = 0; i < purettuPituus; i++) {
        document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + (i + 1) + ". ";
        switch (purettu[i]) {
            case "maksu":
                document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "99e: Kerro asiakkaalle, että turha asentajakäynti maksaa 99 € mikäli vika jää asiakkaan laitteisiin, johtoihin tai" +
                    " kytkentöihin.\n";
                break;
            case "tiketti":
                document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "Vikailmoitus: Tarvittavat laitetestit on käyty läpi tai asiakas ei halua testata laitteitaan. Kirjaa tiketti Alphaan ja laita" +
                    " tapahtumatiedot ja vika-analyysi UAD:lle.\n";
                break;
            case "helpson":
                document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "Helpson: Ohjaa asiakas Helpsonille ja kirjaa vika-analyysi UAD:lle\n";
                break;
            case "tt":
                document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "Toimituksen tarkastus: Kirjaa toimituksentarkastus Alphaan ja laita tapahtumatiedot ja vika-analyysi UAD:lle\n";
                break;
            case "sms_optio":
                document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + "SMS-optio: Asiakas testaa vielä laitteensa. Kirjaa tiketti Alphaan ja laita tapahtumatiedot ja vika-analyysi UAD:lle\n";
                $("#generoitu").append("\nSMS-Optio")
                $("#sms").show();
                break;
            default:
                document.getElementById('asiakasinfo').innerHTML = document.getElementById('asiakasinfo').value + vaihtoehdot;
                break;
        }
    }
    generoi();
    $("#vikaripohja").show();
    $("#vakiopohjan_loppu").show();
}

$(function () {
    $("#datepicker").datepicker();
});

function expand() {
    $("#vakiopohjan_alku").toggleClass("laajennus");
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
