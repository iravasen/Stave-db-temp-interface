<!doctype html>
<html lang="en">
<head>
	<title>HIC powering after cut</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

	<br>
  <?php include('add/addscript.html');?>
  <br>
</head>

<body>

	<a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1>HIC powering after tab&wings cut - Report</h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<span id="noprint"> (Example: OB-HIC-id powering after cut</span>
			<input type="text" placeholder="name" style="width: 500px">
	</fieldset>

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
	<p> OB-HIC ID: <input type="text" placeholder="HIC id"/> </p>
	<br>

	<h2>Report</h2>

	<form action="">
		<fieldset>
 			<legend>Voltages and currents</legend><br>

			<ul>
				<li>AVDD: <input type="text" style="width: 120px"/> V <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

				<li>DVDD: <input type="text" style="width: 120px"/> V <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

				<li>I<sub>DVDD</sub>: <input type="text" style="width: 120px"/> A <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

				<li>I<sub>AVDD</sub>: <input type="text" style="width: 120px"/> A <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>
			</ul>

		</fieldset>

		<fieldset>
			<legend>Is this HIC acceptable after cut?</legend><br>
			<input type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
		</fieldset>
	</form>

	<h2> Other Comments </h2>
  <textarea rows="5" cols="100" name="modissection" placeholder="comments"></textarea>

	<!-- Images -->
	<h2> Pictures </h2>
	<?php
	include('imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="window.print()"/>
	<a href="poweringaftercut.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>
</body>
</html>
