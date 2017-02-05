<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META content="IE=5.0000" http-equiv="X-UA-Compatible">
<META http-equiv="content-type" content="text/html;charset=utf-8">
<META name="GENERATOR" content="MSHTML 11.00.9600.18349">
<link href="style.css" rel="stylesheet" type="text/css" />

</HEAD>
<BODY>
	<H3>BB-vikalomake</H3>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<FORM>

		<INPUT class="lomake" id="liittymänumero" type="text" placeholder="Liittymänumero" value="">
		<INPUT class="lomake" id="yhtnro" type="text" placeholder="Yhteysnumero" value="">
		<INPUT class="lomake" id="userid" type="text" placeholder="Käyttäjätunnus" value="">
		
		<TEXTAREA id="Vikakuvaus" style="width: 100%; height: 200px;" placeholder="Vikakuvaus"></TEXTAREA>
		
		<INPUT class="lomake" id="vika_alkanut" type="text" placeholder="Milloin alkanut" value="">
		<br>
		
		
		<input type='radio' onclick='' id='liittymätyyppi' name='tech' value='gpon'><label for='gpon'>GPON 350</label>
		
		<br><br>
		
		
		<input type='radio' onclick='vikatyyppi_muutos()' id='vikatyyppi' name='fault' value='Pätkii'><label for='Pätkii'>Pätkii</label>
		<input type='radio' onclick='vikatyyppi_muutos()' id='vikatyyppi' name='fault' value='Hidastelee'><label for='Hidastelee'>Hidastelee</label>
		<input type='radio' onclick='vikatyyppi_muutos()' id='vikatyyppi' name='fault' value='eitoimi'><label for='eitoimi'>Ei toimi ollenkaan</label>
		<input type='radio' onclick='vikatyyppi_muutos()' id='vikatyyppi' name='fault' value='Muu_ongelma'><label for='Muu_ongelma'>Muu ongelma</label>
					</form>
		<div id="lisaa"></div>
<?php
	//include '/adsl_eitoimi.php';

	?>
		<script>
		
		function vikatyyppi_muutos() {
			$("#lisaa").load("adsl_eitoimi.html");
		}
		
	
	</SCRIPT>
	</FORM>
</BODY>
</HTML>
