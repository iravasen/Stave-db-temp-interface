<!doctype html>
<html lang="en">
<head>
	<title>PB+BB folding</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/solder.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

</head>

<body class="special">

  <a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1>Power Bus + Bias Bus folding on the Half-Stave - Report</h1>

  <h2>Power Bus + Bias Bus folding</h2>
  <p id="noprint"> Insert a <b>short report</b> indicating how the procedure went. Damages to HS? Damages to CC? <br> Insert <b>photos</b> at the bottom if needed </p>

	<form>
	<fieldset>
	<legend> Location </legend>
		<select name="Sites" >
			<option value="-"> - </option>
 			<option value="Sezione INFN, Turin"> Sezione INFN, Turin  </option>
 			<option value="INFN e Laboratori Nazionali di Frascati, Frascati">INFN e Laboratori Nazionali di Frascati, Frascati </option>
 			<option value="Nikhef, Nationaal Instituut voor subatomaire fysica, Amsterdam"> Nikhef, Nationaal Instituut voor subatomaire fysica, Amsterdam </option>
			<option value="STFC Daresbury Laboratory, Daresbury"> STFC Daresbury Laboratory, Daresbury </option>
			<option value="Lawrence Berkeley National Laboratory, Berkeley, California"> Lawrence Berkeley National Laboratory, Berkeley, California </option>

		</select>
	</fieldset>
	</form>

	<!--People-->
 <br>
 <?php include('people/people.html');?>
 <br>

	<br>
	<p> HS Id: <input type="text" placeholder="HS id"/> </p>
	<p> PB Id: <input type="text" placeholder="PB id"/> </p>
	<p> BB Id: <input type="text" placeholder="BB id"/> </p>
	<br>

	<form action="">

		<fieldset>
 			<legend>Picture with PB and BB with the bar on top.</legend><br>
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Picture while folding the PB+BB.</legend><br>
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Picture of the final result.</legend><br>
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Visible damages to the cross-cables?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes, but they don't affect functioning <span> - HIC and cc type: <input type="text" placeholder="HIC and cc type"/> </span>
 			<br />
			<input type="checkbox" name="Yes" value="Yes"/> Yes, and they affect functioning <span> - HIC and cc type: <input type="text" placeholder="HIC and cc type"/> </span>
			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Visible damages to the PB?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes, but they don't affect functioning <span> - Close to these HICs: <input type="text" placeholder="HICs"/> </span>
 			<br />
			<input type="checkbox" name="Yes" value="Yes"/> Yes, and they affect functioning <span> - close to these HICs: <input type="text" placeholder="HICs"/> </span>
			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Visible damages to the BB?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes, but they don't affect funtioning <span> - Close to these HICs: <input type="text" placeholder="HICs"/> </span>
			<br />
			<input type="checkbox" name="Yes" value="Yes"/> Yes, and they affect funtioning <span> - Close to these HICs: <input type="text" placeholder="HICs"/> </span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Visible damages to the HICs?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes, but they don't affect functioning <span> - HIC number: <input type="text" placeholder="HIC and cc type"/> </span>
 			<br />
			<input type="checkbox" name="Yes" value="Yes"/> Yes, and they affect functioning <span> - HIC number: <input type="text" placeholder="HIC and cc type"/> </span>
			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

	</form>

	<h2> Other comments </h2>
  <textarea rows="5" cols="100" name="modissection" placeholder="comments"></textarea>

	<!-- Images -->
	<h2> Other pictures not included in the form </h2>
	<?php
	include('imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="window.print()"/>
</body>
</html>
