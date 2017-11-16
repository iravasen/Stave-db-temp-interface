<!doctype html>
<html lang="en">
<head>
	<title>Soldering/Desoldering</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

</head>

<body class="special">

	<a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1> Bridge soldering, FPC extension gluing/soldering, resistor desoldering - Report </h1>

	<br>
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

	<p> HS-Id <input type="text" placeholder="hs id"/> </p>
	<p> FPC Extension id <input type="text" placeholder="fpc ext id"/> </p>
	<p> Name of the tin and composition <input type="text" placeholder="tin and composition"/></p>
	<p> Diameter of the soldering tip: <input type="text" style="width: 2%"/>mm </p>

  <h2>Desoldering of MOD_ID resistors</h2>
	<fieldset>
		<legend>Damages to FPC due to heat?</legend><br>
		<input type="checkbox" name="Yes" value="Yes"/> Yes
		<br />
		<input type="checkbox" name="No" value="No"/> No
		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>

	<fieldset>
		<legend>Damages to wire-bonds due to heat?</legend><br>
		<input type="checkbox" name="Yes" value="Yes"/> Yes
		<br />
		<input type="checkbox" name="No" value="No"/> No
		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>

	<fieldset>
		<legend>If yes, which bonds were damaged?</legend><br>
		<input type="checkbox" name="chipid" value="chipid"/> Chip-ID
		<br />
		<input type="checkbox" name="pg" value="pg"/> Power/ground
		<br>
		<p> Indicate the type of damage: <input type="text" placeholder="type of damage"/></p>
		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>

  <br><br>
  <h2>Bridge soldering</h2>
	<fieldset>
		<legend>Damages to FPC due to heat?</legend><br>
		<input type="checkbox" name="Yes" value="Yes"/> Yes, but acceptable
		<br />
		<input type="checkbox" name="Yes" value="Yes"/> Yes, serious <span> - Short description <input type="text" placeholder="describe"/></span>
		<br />
		<input type="checkbox" name="No" value="No"/> No

		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>

	<fieldset>
		<legend>Damages to bridges due to heat?</legend><br>
		<input type="checkbox" name="Yes" value="Yes"/> Yes, but acceptable
		<br />
		<input type="checkbox" name="Yes" value="Yes"/> Yes, serious <span> - Short description <input type="text" placeholder="describe"/></span>
		<br />
		<input type="checkbox" name="No" value="No"/> No

		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>

	<fieldset>
		<legend>Presence of (visible) shorts. Was there the need to rework to remove the shorts?</legend><br>
		<input type="checkbox" name="Yes" value="Yes"/> Yes
		<br />
		<input type="checkbox" name="No" value="No"/> No

		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>

	<fieldset>
		<legend>Alignment problems of the bridge with respect to the FPC?</legend><br>
		<input type="checkbox" name="Yes" value="Yes"/> Yes
		<br />
		<input type="checkbox" name="No" value="No"/> No

		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>

	<fieldset>
		<legend>Damages to wire-bonds?</legend><br>
		<input type="checkbox" name="Yes" value="Yes"/> Yes <span> - Module + Chip_id + bond type <textarea rows="3" cols="50" placeholder="describe"></textarea></span>
		<br />
		<input type="checkbox" name="No" value="No"/> No

		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>

  <br><br>
  <h2>FPC extension alignment, gluing and soldering</h2>

	<fieldset>
		<legend>Alignment between FPC extension and Module 1. Problems?</legend><br>
		<input type="checkbox" name="Yes" value="Yes"/> Yes, but acceptable
		<br />
		<input type="checkbox" name="Yes" value="Yes"/> Yes, serious
		<br/>
		<input type="checkbox" name="No" value="No"/> No

		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>

	<fieldset>
		<legend>FPC extension gluing. Good adhesion? (add photo)</legend><br>
		<input type="checkbox" name="Yes" value="Yes"/> Yes
		<br />
		<input type="checkbox" name="No" value="No"/> No <span> - Why? <textarea rows="3" cols="50" placeholder="describe why"></textarea></span>

		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>

	<fieldset>
		<legend>FPC extension soldering. Damages to the extension due to heat?</legend><br>
		<input type="checkbox" name="Yes" value="Yes"/> Yes, but acceptable
		<br />
		<input type="checkbox" name="Yes" value="Yes"/> Yes, serious
		<br />
		<input type="checkbox" name="No" value="No"/> No

		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>

	<fieldset>
		<legend>FPC extension soldering. Damages to the FPC-TAB-B?</legend><br>
		<input type="checkbox" name="Yes" value="Yes"/> Yes, but acceptable
		<br />
		<input type="checkbox" name="Yes" value="Yes"/> Yes, serious
		<br />
		<input type="checkbox" name="No" value="No"/> No

		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>

	<fieldset>
		<legend>FPC extension soldering. Damages to wire-bonds?</legend><br>
		<input type="checkbox" name="Yes" value="Yes"/> Yes <span> - Chip_id and bond type <textarea rows="3" cols="50" placeholder="describe"></textarea></span>
		<br />
		<input type="checkbox" name="No" value="No"/> No

		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>


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
