<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0072)http://sose.stadi.sonera.fi/sose/sose_beta/lomakkeet/data_hidastunut.php -->
<HTML>
<HEAD>
<META content="IE=5.0000" http-equiv="X-UA-Compatible">
<META http-equiv="content-type" content="text/html;charset=utf-8">
<META name="GENERATOR" content="MSHTML 11.00.9600.18349">
</HEAD>
<BODY>
	<H3>Data pätkii</H3>
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<FORM>
		<TABLE>
			<TBODY>
				<TR>
					<TD>Mitä verkkoa asiakas käyttää:</TD>
					<TD><SELECT id="verkko2" onchange="verkko_muutos()"><OPTION
								value="2G">2G</OPTION>
							<OPTION value="3G">3G</OPTION>
							<OPTION value="4G">4G</OPTION>
					</SELECT></TD>
				</TR>
				<TR>
					<TD>Onko yhteys lukittu käytettävään verkkoon:</TD>
					<TD><SELECT id="verkkolukitus2"><OPTION value="Kyllä">Kyllä</OPTION>
							<OPTION value="Ei">Ei</OPTION>
					</SELECT></TD>
				</TR>
				<TR>
					<TD>Kuinka usein yhteys pätkii:</TD>
					<TD><SELECT id="patkiminen2"><OPTION
								value="Useita kertoja tunnissa">Useita kertoja tunnissa</OPTION>
							<OPTION value="Muutaman kerran päivässä">Muutaman kerran
								päivässä</OPTION>
							<option value="Harvemmin kuin päivittäin">Harvemmin kuin
								päivittäin</option>
					</SELECT></TD>
				</TR>
				<TR>
					<TD>Millainen kuuluvuus alueella on:</TD>
					<TD><SELECT id="kuuluvuus2"><OPTION
								value="Erinomainen">Erinomainen</OPTION>
							<OPTION value="Hyvä">Hyvä</OPTION>
							<option value="Välttävä">Välttävä
								</OP</SELECT></TD>
				</TR>

				<TR>
					<TD>Onko ongelma vain yhdessä paikassa:</TD>
					<TD><SELECT id="paikka2"><OPTION
								value="Kyllä (tarkista onko tukiasemassa hälytys)">Kyllä
							</OPTION>
							<OPTION value="Ei">Ei (testaa toinen laite)</OPTION>
					</SELECT></TD>
				</TR>

				<TR>
					<TD>Onko muilla samoja ongelmia:</TD>
					<TD><SELECT id="kayttajat2"><OPTION value="Kyllä">Kyllä</OPTION>
							<OPTION value="Ei">Ei</OPTION>
							<OPTION value="Ei tiedossa">Ei tiedossa</OPTION>
					</SELECT></TD>
				</TR>
				<TR>
					<TD>Onko testattu toista laitetta:</TD>
					<TD><SELECT id="laite2"><OPTION value="Kyllä">Kyllä</OPTION>
							<OPTION value="Ei (testaa toinen laite)">Ei (testaa
								toinen laite)</OPTION>
					</SELECT></TD>
				</TR>
				<TR>
					<TD>Mikä kentänvoimakkuus laitteessa näkyy:</TD>
					<TD><SELECT id="kentänvoimakkuus2"><option
								value="Katoaa kokonaan">Katoaa kokonaan</option>
							<OPTION value="1 tai 2">1 tai 2</OPTION>
							<OPTION value="3 tai 4">3 tai 4</OPTION>
							<OPTION value="Täydet palkit">Täydet palkit</OPTION>
					</SELECT></TD>
				</TR>
				<TR>
					<TD colspan="2"><INPUT class="lomake" id="solu2" type="text"
						placeholder="Solu / tukiasema" value=""></TD>
				</TR>
				<TR>
					<TD colspan="2"><INPUT class="lomake" id="päätelaite2"
						type="text" placeholder="Päätelaite" value=""></TD>
				</TR>
				<TR>
					<TD colspan="2"><INPUT class="lomake" id="kommentti2"
						type="text" placeholder="Toimenpiteet" value=""></TD>
				</TR>
			</TBODY>
		</TABLE>
		<INPUT onclick="generoi2()" type="button" value="Generoi"><INPUT
			onclick="tyhjenna2()" type="button" value="Tyhjennä"><BR>
		<BR>
		<TEXTAREA id="tulosta" style="width: 96%;"></TEXTAREA>

		<DIV id="opaste" style="color: red;"></DIV>
		<SCRIPT>
			function tyhjenna2() {
				document.getElementById('verkko2').value = "";
				document.getElementById('verkkolukitus2').value = "";
				document.getElementById('patkiminen2').value = "";
				document.getElementById('kuuluvuus2').value = "";
				document.getElementById('paikka2').value = "";
				document.getElementById('kayttajat2').value = "";
				document.getElementById('laite2').value = "";
				document.getElementById('kentänvoimakkuus2').value = "";
				document.getElementById('solu2').value = "";
				document.getElementById('päätelaite2').value = "";
				document.getElementById('kommentti2').value = "";
				document.getElementById('tulosta').value = "";
				document.getElementById('opaste2').innerHTML = "";
			}

			function generoi2() {
				var verkko = document.getElementById('verkko2').value;
				var verkkolukitus = document.getElementById('verkkolukitus2').value;
				var patkiminen = document.getElementById('patkiminen2').value;
				var kuuluvuus = document.getElementById('kuuluvuus2').value;
				var paikka = document.getElementById('paikka2').value;
				var kayttajat = document.getElementById('kayttajat2').value;
				var laite = document.getElementById('laite2').value;
				var kentänvoimakkuus = document.getElementById('kentänvoimakkuus2').value;
				var solu = document.getElementById('solu2').value;
				var päätelaite = document.getElementById('päätelaite2').value;
				var kommentti = document.getElementById('kommentti2').value;

				document.getElementById('tulosta').value = "Mitä verkkoa asiakas käyttää: "
						+ verkko
						+ "\nOnko yhteys lukittu käytettävään verkkoon: "
						+ verkkolukitus
						+ "\nKuinka usein yhteys pätkii: "
						+ patkiminen
						+ "\nMillainen kuuluvuus alueella on: "
						+ kuuluvuus
						+ "\nOnko ongelma vain yhdessä paikassa: "
						+ paikka
						+ "\nOnko muilla samoja ongelmia: "
						+ kayttajat
						+ "\nOnko testattu toista laitetta: "
						+ laite
						+ "\nMikä kentänvoimakkuus laitteessa näkyy: "
						+ kentänvoimakkuus
						+ "\nTukiasema: "
						+ solu
						+ "\nPäätelaite: "
						+ päätelaite
						+ "\nKommentti: "
						+ kommentti;

				document.getElementById('tulosta').focus();
				document.getElementById('tulosta').select();
				document.execCommand("copy");
			}
		</SCRIPT>
	</FORM>
</BODY>
</HTML>
