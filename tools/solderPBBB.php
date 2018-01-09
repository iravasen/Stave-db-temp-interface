<!doctype html>
<html lang="en">
<head>
	<title>PB,BB soldering to HS</title>

	<meta http-equiv="Cache-control" content="no-cache">

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>


  <?php include('add/addscript.html');?>


	<style>
		p#p1{
			display: none;
		}

		span#si3{
			display: none;
		}

		span#si4{
			display: none;
		}

		textarea#texta1{
			display: none;
		}

		input#oth:checked ~ textarea#texta1{
			display: block;
		}

		input#i3:checked ~ span#si3 {
			display: block;
		}

		input#i4:checked ~ span#si4 {
			display: block;
		}

		input#i1:checked ~ p#p1 {
			display: block;
		}

	</style>

	<!-- To print the page with a default name -->
	<script type="text/javascript">
		function printall(){
			document.title = document.getElementsByName("bbtype")[0].value +
												"_and_" +
												document.getElementsByName("pbtype")[0].value +
												"_soldering_on_" +
												document.getElementsByName("stavecity")[0].value +
												document.getElementsByName("selectedstave")[0].value +
												document.getElementsByName("stavenumber")[0].value +
												"_report";
			window.print();
			document.title = "PB,BB soldering to HS";
		}
	</script>

	<!-- For cloning objects -->
	<?php include('clone_models/solderPBBB_models.php')?>

</head>

<body class="special">

  <a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
  <br><br><br>

  <h1>Power Bus, Bias Bus soldering to Stave - Report</h1>
	<p id="noprint" style="color: red; font-size: 14pt; border: solid 5px red;">
		!!WARNING!! This form is for both Half-Staves composing the Stave
	</p>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<p>
				<?php include('ids/pbid_nonum.html')?> and <?php include('ids/bbid_nonum.html')?> soldering on <?php include('ids/stvid.html')?>
			</p>

			<p style="display: block; float: right;" id="noprint">
				Legend: A = Amsterdam, B = Berkeley, D = Daresbury, F = Frascati, T = Turin
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
			<p> Stave ID: <?php include('ids/stvid.html') ?></p>
			<p> <strong> HS-Left </strong> <br>
				<ul>
					<li> ID: <?php include('ids/hslid.html')?> </li>
					<li> Power Bus ID: <?php include('ids/pbid.html')?> </li>
					<li> Bias Bus ID: <?php include('ids/bbid.html')?> </li>
					<li> Filter Board ID: <?php include('ids/fblid.html')?> </li>
				</ul>
			</p>

			<p> <strong> HS-Right </strong> <br>
				<ul>
					<li> ID: <?php include('ids/hsrid.html')?> </li>
					<li> Power Bus ID: <?php include('ids/pbid.html')?> </li>
					<li> Bias Bus ID: <?php include('ids/bbid.html')?> </li>
					<li> Filter Board ID: <?php include('ids/fbrid.html')?> </li>
				</ul>
			</p>

			<p style="display: block; float: right;" id="noprint">
				Legend: A = Amsterdam, B = Berkeley, D = Daresbury, F = Frascati, T = Turin
			</p>
	</fieldset>
	<br>
	<fieldset>
		<legend> General info </legend>

			<p> <strong>Name of the tin and composition</strong> <br>
					<input type="checkbox"/> Edsyn Sn62Pb36Ag2 <br>
					<input id="i3" type="checkbox"/> Other <br>

				<span id="si3"> Tin and its composition <input type="text" placeholder="tin and composition" style="width: 500px"/> </span>
			</p>
			<p> <strong>Diameter of the soldering tip</strong>: <br>
				<input type="checkbox"/> 0.2 mm <br>
				<input type="checkbox"/> 0.1 mm	<br>
				<input type="checkbox"/> 0.4 mm <br>
				<input id="i4" type="checkbox"/> Other <br>
				<span id="si4"> Diameter <input type="text" style="width: 80px"/> mm</span>

			</p>
	</fieldset>

	<br>

	<h2>Report</h2>
	<br><br>
  <h2>Bias Bus Soldering to Stave</h2>
	<form action="">
		<fieldset>
 			<legend>Visible damages to cross-cables?</legend><br>

			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-ccbbdam-0">
					<div id="template-ccbbdam-0">
						<hr>
						<p>
							<ul>
								<li> For HS: <input type="checkbox"/> Left <input type="checkbox"/> Right </li>
								<li> For HIC in position: <input id="printnumb2" type="number" style="width: 70px"/> </li>
								<li> Description: <br>
									<textarea rows="3" cols="50" placeholder="describe"></textarea><br>
								</li>
								<li> Result <br>
									<input type="checkbox"/> Acceptable <br>
									<input type="checkbox"/> Not acceptable
								</li>
							</ul>
						</p>

						<?php
						include('imagetool/imagetool.html');
						?>

						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-ccbbdam','template-ccbbdam');">Add new item</button></p>
			</fieldset>
		</fieldset>
		<br>
		<fieldset>
 			<legend>Visible damages to BB?</legend><br>

			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-bbpaddam-0">
					<div id="template-bbpaddam-0">
						<hr>
						<p>
							<ul>
								<li> For HS: <input type="checkbox"/> Left <input type="checkbox"/> Right </li>
								<li> For/Close to HIC in position: <input id="printnumb2" type="number" style="width: 70px"/> </li>
								<li> Damage type: <br>
									<input type="checkbox"/> Soldering pad for CC detached <br>
									<input type="checkbox"/> Melting of BB kapton layer <br>
									<input id="oth" type="checkbox"/> Other
									<textarea id="texta1" cols="50" rows="4" placeholder="Specify"> </textarea> <br>
								</li>
								<li> Result <br>
									<input type="checkbox"/> Acceptable <br>
									<input type="checkbox"/> Not acceptable
								</li>
							</ul>
						</p>

						<?php
						include('imagetool/imagetool.html');
						?>

						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-bbpaddam','template-bbpaddam');">Add new item</button></p>
			</fieldset>

		</fieldset>

	</form>

  <h2>Power Bus soldering to Stave</h2>
	<form action="">
		<fieldset>
 			<legend>Visible damages to cross-cables?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-ccpbdam-0">
					<div id="template-ccpbdam-0">
						<hr>
						<p>
							<ul>
								<li> For HS: <input type="checkbox"/> Left <input type="checkbox"/> Right </li>
								<li> For HIC in position: <input id="printnumb2" type="number" style="width: 70px"/> </li>
								<li> Damaged pad type <br>
									<input type="checkbox"/> AVDD <br>
									<input type="checkbox"/> DVDD <br>
									<input type="checkbox"/> AVSS <br>
									<input type="checkbox"/> DVSS
								</li>
								<li> Description: <br>
									<textarea rows="3" cols="50" placeholder="describe"></textarea><br>
								</li>
								<li> Result: <br>
									<input type="checkbox"/> Acceptable <br>
									<input type="checkbox"/> Not acceptable
								</li>
							</ul>
						</p>

						<?php
						include('imagetool/imagetool.html');
						?>

						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-ccpbdam','template-ccpbdam');">Add new item</button></p>
			</fieldset>

		</fieldset>
		<br>
		<fieldset>
 			<legend>Visible damages to PB?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-pbpaddam-0">
					<div id="template-pbpaddam-0">
						<hr>
						<p>
							<ul>
								<li> For HS: <input type="checkbox"/> Left <input type="checkbox"/> Right </li>
								<li> For/Close to HIC in position: <input id="printnumb2" type="number" style="width: 70px"/> </li>
								<li> Damage type: <br>
									<input id="i1" type="checkbox"/> Soldering pad for CC detached <br>
									<p id="p1"> &nbsp &nbsp &nbsp &nbsp <input type="checkbox"/> AVDD <input type="checkbox"/> DVDD <input type="checkbox"/> AVSS <input type="checkbox"/> DVSS </p>

									<input type="checkbox"/> Melting of PB kapton layer <br>
									<input id="oth" type="checkbox"/> Other
									<textarea id="texta1" rows="5" cols="50" placeholder="Specify"></textarea>
								</li>
								<li> Result: <br>
									<input type="checkbox"/> Acceptable <br>
									<input type="checkbox"/> Not acceptable
								</li>
							</ul>
						</p>

						<?php
						include('imagetool/imagetool.html');
						?>

						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-pbpaddam','template-pbpaddam');">Add new item</button></p>
			</fieldset>

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
	<a id="noprint" href="solderPBBB.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
