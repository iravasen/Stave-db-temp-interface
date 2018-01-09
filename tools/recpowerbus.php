<!doctype html>
<html lang="en">
<head>
	<title>Power Bus inspection (reception)</title>

	<meta http-equiv="Cache-control" content="no-cache">

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

	<!-- To print the page with a default name -->
	<script type="text/javascript">
		function printall(){
			document.title = document.getElementsByName("pbselected")[0].value +
												document.getElementsByName("pbnumber")[0].value +
												"_reception_test_report";
			window.print();
			document.title = "Power Bus inspection (reception)";
		}
	</script>



  <?php include('add/addscript.html');?>

	<!--For cloning objects -->
	<?php include('clone_models/recpowerbus_models.php')?>
</head>

<body class="special">

	<a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
  <br><br><br>

  <h1>Power Bus inspection (reception) - Report</h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<p>
				<?php include('ids/pbid.html')?> reception test
			</p>

	</fieldset>
	<br>
	<fieldset>
		<legend style="color: red; font-size: 14pt;">Date</legend>
		<p>
			Start: <input type="date" required="required"/> <br>
			End: <input type="date" required="required"/>
		</p>
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

 <fieldset>
 	<legend> Component IDs </legend>
 		<p> Power-Bus ID: <?php include('ids/pbid.html')?> </p>
 </fieldset>

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
					<div id="placeholder-pbdam-0">
						<div id="template-pbdam-0">
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

							<hr>
						</div>
					</div>
					<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-pbdam','template-pbdam');">Add new item</button></p>
				</fieldset>

				<!-- Capacitor pads -->
				<fieldset id="f2">
					<div id="placeholder-cappad-0">
						<div id="template-cappad-0">
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

		<br>
		<fieldset>
 			<legend>Check on the continuity of lines. Problems?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-interline-0">
					<div id="template-interline-0">
						<ul>
							<li> Interrupted line type: <input type="checkbox"/> AVDD <input type="checkbox"/> DVDD </li>
							<li> For HIC in position: <input id="printnumb2" type="number" placeholder="#" style="width: 60px"/></li>
						</ul>

						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-interline','template-interline');">Add new item</button></p>
			</fieldset>

		</fieldset>
		<br>
		<fieldset>
 			<legend>Resistance of the lines. Problems?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-res-0">
					<div id="template-res-0">
						<ul>
							<li> Line type: <input type="checkbox"/> AVDD <input type="checkbox"/> DVDD </li>
							<li> For HIC in position: <input id="printnumb2" type="number" placeholder="#" style="width: 60px"/></li>
							<li> R [Ohm]: <input type="text" placeholder="R [Ohm]"/></li>
							<li> <textarea cols="50" rows="5" placeholder="description"></textarea></li>

						</ul>


						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-res','template-res');">Add new item</button></p>
			</fieldset>

		</fieldset>
		<br>
		<fieldset>
 			<legend>Presence of shorts?</legend><br>
 			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-shorts-0">
					<div id="template-shorts-0">
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


						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-shorts','template-shorts');">Add new item</button></p>
			</fieldset>
		</fieldset>
		<br>
		<fieldset>
			<legend>Is this PB acceptable?</legend><br>
			<input type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
		</fieldset>
	</form>

	<h2> Other comments </h2>
  <textarea rows="10" cols="100" name="modissection" placeholder="comments"></textarea>

	<!-- Images -->
	<h2> Other pictures not included in the form </h2>
	<?php
	include('imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="printall()"/>
	<a id="noprint" href="recpowerbus.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
