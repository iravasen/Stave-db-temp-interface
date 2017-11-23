<!doctype html>
<html lang="en">
<head>
	<title>PB,BB soldering to HS</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>


  <?php include('add/addscript.html');?>


	<style>
		p#p1{
			display: none;
		}

		input#i1:checked ~ p#p1 {
			display: block;
		}

	</style>


</head>

<body class="special">

  <a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1>Power Bus, Bias Bus soldering to HS- Report</h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<span id="noprint"> (Example: OL/ML-PB-id and OL/ML-BB-id soldering on OL/ML-HS-id)</span>
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
	<p> HS ID: <input type="text" placeholder="HS id"/></p>
	<p> Power Bus ID: <input type="text" placeholder="PB id"/> </p>
	<p> Bias Bus ID: <input type="text" placeholder="BB id"/> </p>
	<p> Filter Board ID: <input type="text" placeholder="FB id"/> </p>
	<p> Name of the tin and composition <input type="text" placeholder="tin and composition"/></p>
	<p> Diameter of the soldering tip: <input style="width: 5%" type="text"/>mm </p>
	<br>

	<h2>Report</h2>
	<br><br>
  <h2>Bias Bus Soldering to HS</h2>
	<form action="">
		<fieldset>
 			<legend>Visible damages to cross-cables?</legend><br>

			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-ccbbdam">
					<div id="template-ccbbdam">
						<hr>
						<p>
							<ul>
								<li> For HIC in position: <input type="text" style="width: 90px"/> </li>
								<li> Description: <br>
									<textarea rows="3" cols="50" placeholder="describe"></textarea><br>
								</li>
								<li> Result: <input type="checkbox"/> Acceptable <input type="checkbox"/> Not acceptable
							</ul>
						</p>

						<?php
						include('imagetool/imagetool.html');
						?>
						<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-ccbbdam','template-ccbbdam');">Add new item</button></p>
			</fieldset>
		</fieldset>

		<fieldset>
 			<legend>Visible damages to BB?</legend><br>

			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-bbpaddam">
					<div id="template-bbpaddam">
						<hr>
						<p>
							<ul>
								<li> For/Close to HIC in position: <input type="text" style="width: 90px"/> </li>
								<li> Damage type: <br>
									<input type="checkbox"/> Soldering pad for CC detached <br>
									<input type="checkbox"/> Melting of BB kapton layer <br>
									<input type="checkbox"/> Other: <input type="text" placeholder="specify" style="width: 400px"/> <br>
								</li>
								<li> Result: <input type="checkbox"/> Acceptable <input type="checkbox"/> Not acceptable
							</ul>
						</p>

						<?php
						include('imagetool/imagetool.html');
						?>
						<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-bbpaddam','template-bbpaddam');">Add new item</button></p>
			</fieldset>

		</fieldset>

	</form>

  <h2>Power Bus soldering to HS</h2>
	<form action="">
		<fieldset>
 			<legend>Visible damages to cross-cables?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-ccpbdam">
					<div id="template-ccpbdam">
						<hr>
						<p>
							<ul>
								<li> For HIC in position: <input type="text" style="width: 90px"/> </li>
								<li> Damaged pad type:
									<input type="checkbox"/> AVDD
									<input type="checkbox"/> DVDD
									<input type="checkbox"/> AVSS
									<input type="checkbox"/> DVSS
								</li>
								<li> Description: <br>
									<textarea rows="3" cols="50" placeholder="describe"></textarea><br>
								</li>
								<li> Result: <input type="checkbox"/> Acceptable <input type="checkbox"/> Not acceptable
							</ul>
						</p>

						<?php
						include('imagetool/imagetool.html');
						?>
						<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-ccpbdam','template-ccpbdam');">Add new item</button></p>
			</fieldset>

		</fieldset>

		<fieldset>
 			<legend>Visible damages to PB?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-pbpaddam">
					<div id="template-pbpaddam">
						<hr>
						<p>
							<ul>
								<li> For/Close to HIC in position: <input type="text" style="width: 90px"/> </li>
								<li> Damage type: <br>
									<input id="i1" type="checkbox"/> Soldering pad for CC detached <br>
									<p id="p1"> &nbsp &nbsp &nbsp &nbsp <input type="checkbox"/> AVDD <input type="checkbox"/> DVDD <input type="checkbox"/> AVSS <input type="checkbox"/> DVSS </p></li>

									<input type="checkbox"/> Melting of PB kapton layer <br>
									<input type="checkbox"/> Other: <input type="text" placeholder="specify" style="width: 400px"/> <br>
								</li>
								<li> Result: <input type="checkbox"/> Acceptable <input type="checkbox"/> Not acceptable
							</ul>
						</p>

						<?php
						include('imagetool/imagetool.html');
						?>
						<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-pbpaddam','template-pbpaddam');">Add new item</button></p>
			</fieldset>

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
	<a id="noprint" href="solderPBBB.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
