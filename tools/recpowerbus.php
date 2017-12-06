<!doctype html>
<html lang="en">
<head>
	<title>Power Bus inspection (reception)</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

	<style>
		fieldset#f1{
			display: none;
		}

		fieldset#f2{
			display: none;
		}

		textarea#texta1{
			display: none;
		}

		input#oth:checked ~ textarea#texta1 {
			display: block;
		}

		input#pbpad:checked ~ fieldset#f1 {
			display: block;
		}

		input#cappad:checked ~ fieldset#f2 {
			display: block;
		}


	</style>

	<br>
  <?php include('add/addscript.html');?>
  <br>

</head>

<body class="special">

	<a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1>Power Bus inspection (reception) - Report</h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<p>
				<?php include('ids/pbid.html')?> reception test
			</p>

	</fieldset>

	<fieldset>
		<legend style="color: red; font-size: 14pt;">Date</legend>
		<p>
			Start: <input type="date" required="required"/> <br>
			End: <input type="date" required="required"/>
		</p>
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
 <p> Power-Bus ID: <?php include('ids/pbid.html')?> </p>
 <br>

 <h2>Report</h2>

	<br>
	<form action="">
		<fieldset>
 			<legend>Visible damages to the PB ?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">

	 			<input type="checkbox" name="bend" value="bend"/> Strong bending
	 			<br />
	 			<input type="checkbox" name="engr" value="engr"/> Engravings on kapton layer
				<br />
	 			<input id="pbpad" type="checkbox" name="engr" value="engr"/> Soldering pad for cross-cables
				<br />
	 			<input type="checkbox" name="fbpad" value="fbpad"/> Soldering pads for Filter Board
				<br />
	 			<input type="checkbox" name="fbwing" value="fbwing"/>  Wings for Filter Board (ground) soldering
				<br />
	 			<input id="cappad" type="checkbox" name="fbwing" value="fbwing"/>  Soldering pads of capacitors
				<br />
				<input id="oth" type="checkbox" name="other" value="other"/>  Other
				<textarea id="texta1" cols="50" rows="5" placeholder="specify"></textarea>
				<br>

				<!-- Power bus pads fro cross-cables -->
				<fieldset id="f1">
					<div id="placeholder-pbdam">
						<div id="template-pbdam">
							<hr>
							<h4 style="color: red"> CROSS-CABLE PADS </h4>
							<p>
								<ul>
									<li> For HIC in position: <input id="printnumb2" type="number" placeholder="#" style="width: 60px"/> </li>
									<li> Damaged pad type:
										<input type="checkbox"/> AVDD
										<input type="checkbox"/> DVDD
										<input type="checkbox"/> AVSS
										<input type="checkbox"/> DVSS
										<input type="checkbox"/> BIAS
									</li>
									<li> Description: <br>
										<textarea rows="3" cols="50" placeholder="describe"></textarea><br>
									</li>
								</ul>
							</p>

							<?php
							include('imagetool/imagetool.html');
							?>
							<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
							<hr>
						</div>
					</div>
					<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-pbdam','template-pbdam');">Add new item</button></p>
				</fieldset>

				<!-- Capacitor pads -->
				<fieldset id="f2">
					<div id="placeholder-cappad">
						<div id="template-cappad">
							<hr>
							<h4 style="color: red"> CAPACITOR PADS </h4>
							<p>
								<ul>
									<li>Close to HIC in position: <input id="printnumb2" type="number" placeholder="#" style="width: 60px"/> </li>
									<li> Description: <br>
										<textarea rows="3" cols="50" placeholder="describe"></textarea><br>
									</li>
								</ul>
							</p>
							<?php
							include('imagetool/imagetool.html');
							?>
							<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
							<hr>
						</div>
					</div>
					<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-cappad','template-cappad');">Add new item</button></p>
				</fieldset>

				<span> Do they affect the Power-Bus functioning? <input type="checkbox"/> Yes <input type="checkbox"/> No <br>

				<?php
				include('imagetool/imagetool.html');
				?>

			</fieldset>
		</fieldset>


		<fieldset>
 			<legend>Check on the continuity of lines. Problems?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-interline">
					<div id="template-interline">
						<ul>
							<li> Interrupted line type: <input type="checkbox"/> AVDD <input type="checkbox"/> DVDD </li>
							<li> For HIC in position: <input id="printnumb2" type="number" placeholder="#" style="width: 60px"/></li>
						</ul>

						<?php
						include('imagetool/imagetool.html');
						?>
						<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-interline','template-interline');">Add new item</button></p>
			</fieldset>

		</fieldset>

		<fieldset>
 			<legend>Resistance of the lines. Problems?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-res">
					<div id="template-res">
						<ul>
							<li> Line type: <input type="checkbox"/> AVDD <input type="checkbox"/> DVDD </li>
							<li> For HIC in position: <input id="printnumb2" type="number" placeholder="#" style="width: 60px"/></li>
							<li> R [Ohm]: <input type="text" placeholder="R [Ohm]"/></li>
							<li> <textarea cols="50" rows="5" placeholder="description"></textarea></li>

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
						<ul>
							<li> Line type: <input type="checkbox"/> AVDD <input type="checkbox"/> DVDD </li>
							<li> For HIC in position: <input id="printnumb2" type="number" placeholder="#" style="width: 60px"/></li>
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
			<legend>Is this PB acceptable?</legend><br>
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
	<a id="noprint" href="recpowerbus.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
