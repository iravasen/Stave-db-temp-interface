<!doctype html>
<html lang="en">
<head>
	<title>Flter Board visual inspection (reception)</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

</head>

<body class="special">

	<a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1>Filter Board visual inspection (reception) - Report</h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<span id="noprint"> (Example: OL/ML-FB-id reception test)</span>
			<input type="text" placeholder="name" style="width: 500px">
	</fieldset>

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

  <br>
	<p> Filter-Board ID: <input type="text" placeholder="FB id"/> </p>
	<br>

	<h2>Report</h2>
	<form action="">
		<fieldset>
 			<legend>Visible damages on the FB ?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">

	 			<input type="checkbox" name="bend" value="bend"/> Cracks on the board
	 			<br />
	 			<input type="checkbox" name="engr" value="engr"/> Engravings
				<br />
	 			<input type="checkbox" name="engr" value="engr"/> Soldering pad for PB on top layer damaged
				<br />
				<input type="checkbox" name="engr" value="engr"/> Soldering pad for PB on bottom layer damaged
				<br />
				<input type="checkbox" name="engr" value="engr"/> Soldering pad for BB damaged
				<br />
	 			<input type="checkbox" name="fbpad" value="fbpad"/> Decoupling capacitors
				<br />
	 			<input type="checkbox" name="cap" value="cap"/>  Connector pins are bent
				<br />
	 			<input type="checkbox" name="cap" value="cap"/>  Connector pins are missing
				<br />
				<input type="checkbox" name="other" value="other"/> Other: <input type="text" style="width: 400px" placeholder="specify"/>

				<br><br>
				<span> Do they affect the Filter-Board functioning? <input type="checkbox"/> Yes <input type="checkbox"/> No <br>

				<?php
				include('imagetool/imagetool.html');
				?>

			</fieldset>

		</fieldset>


		<fieldset>
 			<legend>Presence of shorts?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-shorts">
					<div id="template-shorts">
						<ul>
							<li> Describe: <br>
								<textarea rows="3" cols="100" placeholder="describe"></textarea>
							</li>
							<li> R [Ohm] wrt ground: <input type="text" placeholder="R [Ohm]"/></li>
							<li> R [Ohm] wrt another strip: <input type="text" placeholder="R [Ohm]"/> </li>

						</ul>

						<?php
						include('imagetool/imagetool.html');
						?>

						<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-shorts','template-shorts');">Add new item</button></p>
			</fieldset>

		</fieldset>

		<fieldset>
			<legend>Is this FB acceptable?</legend><br>
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
	<a id="noprint" href="recfilterboard.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
