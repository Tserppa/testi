<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0072)http://sose.stadi.helppi.fi/sose/sose_beta/lomakkeet/data_hidastunut.php -->
<HTML>
<HEAD>
<META content="IE=5.0000" http-equiv="X-UA-Compatible">

<META http-equiv="content-type" content="text/html;charset=utf-8">
<META name="GENERATOR" content="MSHTML 11.00.9600.18349">
</HEAD>
<BODY>
	<H3>Data ei liiku</H3>
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<FORM>
		<TABLE>
			<TBODY>
				<TR>
					<TD>Mitä verkkoa asiakas käyttää:</TD>
					<TD><SELECT id="verkko3" onchange="verkko_muutos()"><OPTION
								value="2G">2G</OPTION>
							<OPTION value="3G">3G</OPTION>
							<OPTION value="4G">4G</OPTION>
					</SELECT></TD>
				</TR>
				<TR>
					<TD>Onko yhteys lukittu käytettävään verkkoon:</TD>
					<TD><SELECT id="verkkolukitus3"><OPTION value="Kyllä">Kyllä</OPTION>
							<OPTION value="Ei">Ei</OPTION>
					</SELECT></TD>
				</TR>
				<TR>
					<TD>Onko testattu toista laitetta:</TD>
					<TD><SELECT id="laite3"><OPTION value="Kyllä">Kyllä</OPTION>
							<OPTION value="Ei (testaa toinen laite)">Ei (testaa toinen laite)</OPTION>
					</SELECT></TD>
				</TR>
				<TR>
					<TD>Onko ongelma alkanut äkillisesti:</TD>
					<TD><SELECT id="alkaminen3"><OPTION value="Lähipäivinä">Lähipäivinä</OPTION>
							<OPTION value="Viikon sisään">Viikon aikana</OPTION>
							<option value="Kuukauden sisään">Kuukauden aikana</option>
							<option value="Jatkunut kuukausia / ollut aina">Jatkunut
								kuukausia / ollut aina</option>
					</SELECT></TD>
				</TR>
				<TR>
					<TD>Millainen kuuluvuus alueella on:</TD>
					<TD><SELECT id="kuuluvuus3"><OPTION value="Erinomainen">Erinomainen</OPTION>
							<OPTION value="Hyvä">Hyvä</OPTION>
							<option value="Välttävä">Välttävä</option></SELECT></TD>
				</TR>

				<TR>
					<TD>Onko ongelma vain yhdessä paikassa:</TD>
					<TD><SELECT id="paikka3"><OPTION
								value="Kyllä (tarkista onko tukiasemassa hälytys)">Kyllä</OPTION>
							<OPTION value="Ei">Ei (testaa toinen laite)</OPTION>
					</SELECT></TD>
				</TR>

				<TR>
					<TD>Onko muilla samoja ongelmia:</TD>
					<TD><SELECT id="kayttajat3"><OPTION value="Kyllä">Kyllä</OPTION>
							<OPTION value="Ei">Ei</OPTION>
							<OPTION value="Ei tiedossa">Ei tiedossa</OPTION>
					</SELECT></TD>
				</TR>

				<TR>
					<TD>Mikä kentänvoimakkuus laitteessa näkyy:</TD>
					<TD><SELECT id="kentänvoimakkuus3"><option value="Ei kuuluvuutta">Ei
								kuuluvuutta</option>
							<OPTION value="1 tai 2">1 tai 2</OPTION>
							<OPTION value="3 tai 4">3 tai 4</OPTION>
							<OPTION value="Täydet palkit">Täydet palkit</OPTION>
					</SELECT></TD>
				</TR>
				<TR>
					<TD colspan="2"><INPUT class="lomake" id="solu3" type="text"
						placeholder="Solu / tukiasema" value=""></TD>
				</TR>
				<TR>
					<TD colspan="2"><INPUT class="lomake" id="päätelaite3" type="text"
						placeholder="Päätelaite" value=""></TD>
				</TR>
				<TR>
					<TD colspan="2"><INPUT class="lomake" id="kommentti3" type="text"
						placeholder="Toimenpiteet" value=""></TD>
				</TR>
			</TBODY>
		</TABLE>
		<INPUT onclick="generoi3()" type="button" value="Generoi"><INPUT
			onclick="tyhjenna3()" type="button" value="Tyhjennä"><BR> <BR>
		<TEXTAREA id="tulosti" style="width: 96%;"></TEXTAREA>

		<DIV id="opaste3" style="color: red;"></DIV>
		<SCRIPT>
		function tyhjenna3() {
			document.getElementById('verkko3').value = "";
			document.getElementById('verkkolukitus3').value = "";
			document.getElementById('laite3').value = "";
			document.getElementById('alkaminen3').value = "";
			document.getElementById('paikka3').value = "";
			document.getElementById('kuuluvuus3').value = "";
			document.getElementById('kayttajat3').value = "";
			document.getElementById('kentänvoimakkuus3').value = "";
			document.getElementById('solu3').value = "";
			document.getElementById('päätelaite3').value = "";
			document.getElementById('kommentti3').value = "";
			document.getElementById('tulosti').value = "";
			document.getElementById('opaste3').innerHTML = "";
		}
		
		function generoi3() {
			var verkko = document.getElementById('verkko3').value;
			var verkkolukitus = document.getElementById('verkkolukitus3').value;
			var laite = document.getElementById('laite3').value;
			var alkaminen = document.getElementById('alkaminen3').value;
			var paikka = document.getElementById('paikka3').value;
			var kuuluvuus = document.getElementById('kuuluvuus3').value;
			var kayttajat = document.getElementById('kayttajat3').value;
			var kentänvoimakkuus = document.getElementById('kentänvoimakkuus3').value;
			var solu = document.getElementById('solu3').value;
			var päätelaite = document.getElementById('päätelaite3').value;
			var kommentti = document.getElementById('kommentti3').value;

			
			document.getElementById('tulosti').value = "Mitä verkkoa asiakas käyttää: " + verkko + "\nOnko yhteys lukittu käytettävään verkkoon: " + verkkolukitus + "\nOnko testattu toista laitetta: " + laite + "\nOnko ongelma alkanut äkillisesti: " + alkaminen + "\nMillainen kuuluvuus alueella on: " 
			+ kuuluvuus + "\nOnko ongelma vain yhdessä paikassa: " + paikka +  "\nOnko muilla samoja ongelmia: " + 
			kayttajat + "\nMikä kentänvoimakkuus laitteessa näkyy: " + kentänvoimakkuus + "\nTukiasema: " + solu + "\nPäätelaite: " + päätelaite+ "\nKommentti: " + kommentti;	

			document.getElementById('tulosti').focus();
			document.getElementById('tulosti').select();
			document.execCommand("copy");
		}

	</SCRIPT>
	</FORM>
</BODY>
</HTML>
