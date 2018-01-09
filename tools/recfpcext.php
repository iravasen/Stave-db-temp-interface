<!doctype html>
<html lang="en">
<head>
	<title>FPC extension inspection (reception)</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

  <?php include('add/addscript.html');?>

</head>

<body class="special">

	<a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
  <br><br><br>

  <h1>FPC extension inspection (reception) - Report</h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<span id="noprint"> (Example: OB-FPC-Extension-id reception test)</span>
			<input type="text" placeholder="name" style="width: 500px">
	</fieldset>

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
	<fieldset>
		<legend> Component IDs </legend>
			<p> FPC extension ID: <input type="text" placeholder="fpc-ext id"/> </p>
			<span id="noprint" style="align: right"> The lot id can be found near the connectors </span>
	</fieldset>

	<h2>Report</h2>
	<br>

	<form action="">
		<fieldset>
 			<legend>Visible damages of the Extension?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
	 			<input type="checkbox" name="bend" value="bend"/> Strong bending
	 			<br />
	 			<input type="checkbox" name="engr" value="engr"/> Engravings on coverlay
				<br />
	 			<input type="checkbox" name="engr" value="engr"/> Soldering pad for HIC connection (row for ground)
				<br />
				<input type="checkbox" name="engr" value="engr"/> Soldering pad for HIC connection (row for data/clk/ctrl)
				<br />
	 			<input type="checkbox" name="fbpad" value="fbpad"/> FireFly connector alignment and soldering
				<br />
				<input type="checkbox" name="other" value="other"/> Other <input type="text" style="width: 500px"/>
				<br><br>
				<span> Do they affect the FPC extension functioning? <input type="checkbox"/> Yes <input type="checkbox"/> No <br>
				<?php
				include('imagetool/imagetool.html');
				?>
			</fieldset>

		</fieldset>

<!--
		<fieldset>
 			<legend>Check on the continuity of lines. Problems?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
			<fieldset id="ifproblem">
				<div id="placeholder-interline">
					<div id="template-interline">
						<ul>
							<li> Interrupted line type: <input type="checkbox"/> Data <input type="checkbox"/> Clock <input type="checkbox"/> Control </li>
							<li> For HIC in position: <input type="text" style="width: 90px"/> on the HS</li>
						</ul>

						<?php
						//include('imagetool/imagetool.html');
						?>

						<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-interline','template-interline');">Add new item</button></p>
			</fieldset>
 			<br />
		</fieldset>

		<fieldset>
 			<legend>Resistance of the lines. Problems?</legend>
			<span id="noprint"> <strong>Info: a single strip have a resistance around 3 Ohm</strong></span><br>
			<br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-res">
					<div id="template-res">
						<hr>
						<ul>
							<li> Line type: <input type="checkbox"/> Data <input type="checkbox"/> Clock <input type="checkbox"/> Control </li>
							<li> For HIC in position: <input type="text" style="width: 90px"/> on the HS</li>
							<li> R [Ohm]: <input type="text" placeholder="R [Ohm]"/></li>
							<li> <input type="checkbox"/> Too high <input type="checkbox"/> Too low </li>

						</ul>

						<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-res','template-res');">Add new item</button></p>
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
						<hr>
						<ul>
							<li> Line type: <input type="checkbox"/> Data <input type="checkbox"/> Clock <input type="checkbox"/> Control </li>
							<li> For HIC in position: <input type="text" style="width: 90px"/> on the HS</li>
							<li> Describe: <br>
								<textarea rows="3" cols="100" placeholder="describe"></textarea>
							</li>
							<li> R [Ohm] wrt ground: <input type="text" placeholder="R [Ohm]"/></li>
							<li> R [Ohm] wrt another strip: <input type="text" placeholder="R [Ohm]"/> </li>

						</ul>

						<?php
						//include('imagetool/imagetool.html');
						?>

						<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-shorts','template-shorts');">Add new item</button></p>
			</fieldset>
		</fieldset>

		</fieldset>
-->
		<br>
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
	<a id="noprint" href="recfpcext.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>


</body>
</html>
