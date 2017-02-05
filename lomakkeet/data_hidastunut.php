<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META content="IE=5.0000" http-equiv="X-UA-Compatible">
<META http-equiv="content-type" content="text/html;charset=utf-8">
<META name="GENERATOR" content="MSHTML 11.00.9600.18349">
</HEAD>
<BODY>
	<H3>Data hidastunut</H3>
	<SCRIPT src="data_hidastunut_files/jquery.min.js"></SCRIPT>
	<FORM>
		<TABLE>
			<TBODY>
				<TR>
					<TD>Mitä verkkoa asiakas käyttää:</TD>
					<TD><select id="verkko" onchange="verkko_muutos()"><OPTION
								value="2G">2G</OPTION>
							<OPTION value="3G">3G</OPTION>
							<OPTION value="4G">4G</OPTION>
					</SELECT></TD>
				</TR>
				<TR>
					<TD>Millä nopeudella yhteys toimii:</TD>
					<TD><SELECT id="nopeus"><OPTION value="Alle vaihteluvälin">Alle
								vaihteluvälin</OPTION>
							<OPTION value="Vaihteluvälin piirissä mutta hidastunut aiemmasta">Vaihteluvälin
								piirissä</OPTION>
					</SELECT></TD>
				</TR>
				<TR>
					<TD>Onko datapalvelu kytketty oikein:</TD>
					<TD><SELECT id="datapalvelu"><OPTION
								value="QoS OK ja datapaketissa tilaa">QoS OK ja datapaketissa
								tilaa</OPTION>
							<OPTION value="Tilattu lisäpaketti">Tilattu lisäpaketti</OPTION>
							<option value="Kytketty palvelu uudelleen CNDB:lle">Kytketty
								palvelu uudelleen CNDB:lle</OPtion>
							<option value="Muu, kuvaa alle">Muu, kuvaa alle</option>
					</SELECT></TD>
				</TR>
				<TR>
					<TD>Millainen kuuluvuus alueella on:</TD>
					<TD><SELECT id="kuuluvuus"><OPTION value="Erinomainen">Erinomainen</OPTION>
							<OPTION value="Hyvä">Hyvä</OPTION>
							<option value="Välttävä">Välttävä</OPtion>
					</SELECT></TD>
				</TR>
				<TR>
					<TD>Mihin aikaan yhteys hidastuu:</TD>
					<TD><select id="ajankohta" onchange="ajankohta_muutos()"><OPTION
								value="Kellonajasta riippumatta">Kellonajasta riippumatta</OPTION>
							<OPTION value="Vain ruuhka-aikaan">Vain ruuhka-aikaan</OPTION>
					</SELECT></TD>
				</TR>
				<TR>
					<TD>Onko ongelma vain yhdessä paikassa:</TD>
					<TD><select id="paikka" onchange="paikka_muutos()"><OPTION
								value="Kyllä (tarkista onko tukiasemassa hälytys)">Kyllä</OPTION>
							<OPTION value="Ei">Ei (testaa toinen laite)</OPTION>
					</SELECT></TD>
				</TR>
				<TR>
					<TD>Onko yhteys lukittu käytettävään verkkoon:</TD>
					<TD><SELECT id="verkkolukitus"><OPTION value="Kyllä">Kyllä</OPTION>
							<OPTION value="Ei">Ei</OPTION>
					</SELECT></TD>
				</TR>
				<TR>
					<TD>Onko muilla samoja ongelmia:</TD>
					<TD><SELECT id="kayttajat"><OPTION value="Kyllä">Kyllä</OPTION>
							<OPTION value="Ei">Ei</OPTION>
							<OPTION value="Ei tiedossa">Ei tiedossa</OPTION>
					</SELECT></TD>
				</TR>
				<TR>
					<TD>Onko testattu toista laitetta:</TD>
					<TD><select id="laite" onchange="laite_muutos()"><OPTION
								value="Kyllä">Kyllä</OPTION>
							<OPTION value="Ei">Ei (testaa toinen laite)</OPTION>
					</SELECT></TD>
				</TR>
				<TR>
					<TD>Mikä kentänvoimakkuus laitteessa näkyy:</TD>
					<TD><SELECT id="kentänvoimakkuus"><OPTION value="1 tai 2">1 tai 2</OPTION>
							<OPTION value="3 tai 4">3 tai 4</OPTION>
							<OPTION value="Täydet palkit">Täydet palkit</OPTION>
					</SELECT></TD>
				</TR>
				<TR>
					<TD colspan="2"><INPUT class="lomake" id="solu" type="text"
						placeholder="Solu / tukiasema" value=""></TD>
				</TR>
				<TR>
					<TD colspan="2"><INPUT class="lomake" id="päätelaite" type="text"
						placeholder="Päätelaite" value=""></TD>
				</TR>
				<TR>
					<TD colspan="2"><INPUT class="lomake" id="kommentti" type="text"
						placeholder="Toimenpiteet" value=""></TD>
				</TR>
			</TBODY>
		</TABLE>
		<INPUT onclick="generoi()" type="button" value="Generoi"><INPUT
			onclick="tyhjenna()" type="button" value="Tyhjennä"><BR> <BR>
		<TEXTAREA id="tuloste" style="width: 96%;"></TEXTAREA>

		<DIV id="opaste" style="color: red;"></DIV>
		<SCRIPT>
		function tyhjenna() {
			document.getElementById('verkko').value = "";
			document.getElementById('nopeus').value = "";
			document.getElementById('ajankohta').value = "";
			document.getElementById('paikka').value = "";
			document.getElementById('verkkolukitus').value = "";
			document.getElementById('kayttajat').value = "";
			document.getElementById('laite').value = "";
			document.getElementById('kentänvoimakkuus').value = "";
			document.getElementById('solu').value = "";
			document.getElementById('päätelaite').value = "";
			document.getElementById('kommentti').value = "";
			document.getElementById('tuloste').value = "";
			document.getElementById('opaste').innerHTML = "";
			document.getElementById('datapalvelu').value = "";
			document.getElementById('kuuluvuus').value = "";
		}
		
		function generoi() {
			var verkko = document.getElementById('verkko').value;
			var nopeus = document.getElementById('nopeus').value;
			var ajankohta = document.getElementById('ajankohta').value;
			var paikka = document.getElementById('paikka').value;
			var datapalvelu = document.getElementById('datapalvelu').value;
			var verkkolukitus = document.getElementById('verkkolukitus').value;
			var kayttajat = document.getElementById('kayttajat').value;
			var laite = document.getElementById('laite').value;
			var kentänvoimakkuus = document.getElementById('kentänvoimakkuus').value;
			var solu = document.getElementById('solu').value;
			var päätelaite = document.getElementById('päätelaite').value;
			var kommentti = document.getElementById('kommentti').value;
			var kuuluvuus = document.getElementById('kuuluvuus').value;
			
			document.getElementById('tuloste').value = "Mitä verkkoa asiakas käyttää: " + verkko + "\nMillä nopeudella yhteys toimii: " + nopeus + "\nMihin aikaan yhteys hidastuu: " 
			+ ajankohta + "\nOnko ongelma vain yhdessä paikassa: " + paikka + "\nOnko yhteys lukittu käytettävään verkkoon: " + verkkolukitus + "\nOnko muilla samoja ongelmia: " + 
			kayttajat + "\nOnko testattu toista laitetta: " + laite + "\nMikä kentänvoimakkuus laitteessa näkyy: " + kentänvoimakkuus + "\nTukiasema: " + solu + "\nPäätelaite: " + päätelaite+ "\nKommentti: " + kommentti;	

			document.getElementById('tuloste').focus();
			document.getElementById('tuloste').select();
			document.execCommand("copy");
		}
		function laite_muutos() {
			if (document.getElementById('laite').value == "Ei") {
				document.getElementById('opaste').innerHTML += "Pyydä asiakasta testaamaan yhteys toisella laitteella ennen vikailmoituksen kirjaamista.<br>";
			} 
		}
		
		function paikka_muutos() {
			if (document.getElementById('paikka').value == "Ei"){
				document.getElementById('opaste').innerHTML += "Tarkista tukiasemien hälytykset Alarmmapilta ja MBOSSilta, muut avoimet vikailmoitukset Tiksusta ja huoltotyöt MOLOsta.<br>"
			}
			 
		}
		
		function ajankohta_muutos() {
			if (document.getElementById('ajankohta').value == "Vain ruuhka-aikaan"){
				document.getElementById('opaste').innerHTML += "Tarkista tukiaseman käyttöaste ja nopeus QlikViewstä ja kirjaa tarvittaessa kuuluvuuspalaute..<br>"
			}
		}
		tyhjenna();
	</SCRIPT>
	</FORM>
</BODY>
</HTML>
