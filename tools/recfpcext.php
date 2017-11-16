<!doctype html>
<html lang="en">
<head>
	<title>FPC extension inspection (reception)</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

</head>

<body class="special">

	<a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1>FPC extension inspection (reception) - Report</h1>
	<br>
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

	<!--People-->
 <br>
 <?php include('people/people.html');?>
 <br>

  <br>
	<p> FPC extension ID: <input type="text" placeholder="ext id"/> </p>
	<br>

	<h2>Report</h2>
	<br>

	<form action="">
		<fieldset>
 			<legend>Visible damages of the Extension ?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes, but don't affect functioning
			<br />
			<input type="checkbox" name="Yes" value="Yes"/> Yes, and affect functioning
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
		</fieldset>

		<fieldset>
 			<legend>If yes, specify the type of damage</legend><br>
 			<input type="checkbox" name="bend" value="bend"/> Strong bending
 			<br />
 			<input type="checkbox" name="engr" value="engr"/> Engravings on coverlay
			<br />
 			<input type="checkbox" name="engr" value="engr"/> Soldering pad for HIC connection
			<br />
 			<input type="checkbox" name="fbpad" value="fbpad"/> SMA connector alignment and soldering
			<br />
			<input type="checkbox" name="other" value="other"/> Other <input type="text" style="width: 500px"/>

			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Check on the continuity of lines passed?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />
 			<input type="checkbox" name="No" value="No"/> No <span> - Interrupted line: <input type="text" placeholder="line"/></span>
		</fieldset>

		<fieldset>
 			<legend>Resistance of the lines is acceptable?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes (around 3 Ohm per strip)
 			<br />
 			<input type="checkbox" name="No" value="No"/> No <span> - Strip and value: <input type="text" style="width: 400px" placeholder="strip and value"/></span>
		</fieldset>

		<fieldset>
 			<legend>Presence of shorts?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes <span> - Description <textarea rows="5" cols="50" placeholder="descibe"></textarea>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No

			<?php
			include('imagetool/imagetool.html');
			?>

		</fieldset>

		<fieldset>
			<legend>Is this OB-FPC-Extension acceptable?</legend><br>
			<input type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
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
