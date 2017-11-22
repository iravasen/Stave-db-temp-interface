<!doctype html>
<html lang="en">
<head>
	<title>FB and capacitor soldering</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/> <!--For the printer-->

	<br>
  <?php include('add/addscript.html');?>
  <br>

	<style>
		span#s1{
			display: none;
		}

		span#s2{
			display: none;
		}

		p#p3{
			display: none;
		}


		input#i1:checked ~ span#s1 {
			display: block;
		}

		input#i2:checked ~ span#s2 {
			display: block;
		}

		input#i3:checked ~ p#p3 {
			display: block;
		}


	</style>

</head>

<body class="special">

	<a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1>Capacitor soldering on PB and BB, Filter Board soldering on PB and BB - Report</h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<span id="noprint"> (Example: OL/ML-FB-id & capacitors soldering on OL/ML-PB-id and OL/ML-BB-id)</span>
			<input type="text" placeholder="name" style="width: 800px">
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

	<p> Power Bus ID: <input type="text" placeholder="PB id"/> </p>
	<p> Bias Bus ID: <input type="text" placeholder="BB id"/> </p>
	<p> Filter Board ID: <input type="text" placeholder="FB id"/> </p>
	<p> Name of the tin and composition <input type="text" placeholder="tin and composition"/></p>
	<p> Diameter of the soldering tip: <input style="width: 5%" type="text"/>mm </p>
	<br>
	<h2>Report</h2>
  <br>
	<br>

	<h2>Soldering of decoupling capacitors on PB</h2>

	<form action="">

		<fieldset>
 			<legend>Presence of shorts after capacitor soldering?</legend><br>
 			<input type="checkbox" name="No" value="No"/> No
 			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-shorts">
					<div id="template-shorts">
						<hr>
						<span>Close to HIC in position <input type="text" style="width: 80px"/> </span> <br>
						<input type="checkbox" name="1" value="1"/> Short disappered after rework
						<br>
						<input type="checkbox" name="2" value="2"/> Cannot remove the short
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
 			<legend>Damages to the PB due to heat? </legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-pbheat">
					<div id="template-pbheat">
						<hr>
						<ul>
							<li>Close to HIC in position <input type="text" style="width: 80px"/> </li>
							<li> Problem: <br>
								<input type="checkbox" name="1" value="1"/> Damages to PB kapton layer
								<br>
								<input type="checkbox" name="2" value="2"/> Capacitor pad detached
								<br>
								<input type="checkbox" name="3" value="3"/> Other: <input type="text" placeholder="specify" style="width: 400px"/>
							</li>
							<li> Result: <br>
								<input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
								<br>
								<input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
							</li>
						</ul>

						<?php
						include('imagetool/imagetool.html');
						?>
						<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
						<hr>
				 </div>
			 </div>
			 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-pbheat','template-pbheat');">Add new item</button></p>
			</fieldset>
		</fieldset>

	</form>

	<h2> Soldering of decoupling capacitors on BB</h2>
	<form action="">

		<fieldset>
 			<legend>Presence of shorts after capacitor soldering?</legend><br>
 			<input type="checkbox" name="No" value="No"/> No
 			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-bbshorts">
					<div id="template-bbshorts">
						<hr>
						<span>Close to HIC in position <input type="text" style="width: 80px"/> </span> <br>
						<input type="checkbox" name="1" value="1"/> Short disappered after rework
						<br>
						<input type="checkbox" name="2" value="2"/> Cannot remove the short
						<?php
						include('imagetool/imagetool.html');
						?>
						<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
						<hr>
				 </div>
			 </div>
			 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-bbshorts','template-bbshorts');">Add new item</button></p>
			</fieldset>
		</fieldset>

		<fieldset>
 			<legend>Damages to the BB due to heat? </legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-bbheat">
					<div id="template-bbheat">
						<hr>
						<ul>
							<li>Close to HIC in position <input type="text" style="width: 80px"/> </li>
							<li> Problem: <br>
								<input type="checkbox" name="1" value="1"/> Damages to BB kapton layer
								<br>
								<input type="checkbox" name="2" value="2"/> Capacitor pad detached
								<br>
								<input type="checkbox" name="3" value="3"/> Other: <input type="text" placeholder="specify" style="width: 400px"/>
							</li>
							<li> Result: <br>
								<input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
								<br>
								<input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
							</li>
						</ul>

						<?php
						include('imagetool/imagetool.html');
						?>
						<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
						<hr>
				 </div>
			 </div>
			 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-bbheat','template-bbheat');">Add new item</button></p>
			</fieldset>
		</fieldset>

	</form>

	<h2>Soldering of the PB to the Filter Board</h2>

	<form action="">

		<fieldset>
 			<legend>Presence of shorts after PB soldering to FB?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-fbshorts">
					<div id="template-fbshorts">
						<hr>
						<ul>
							<li> Line type: <input id="i3" type="checkbox"/> AVDD <input id="i3" type="checkbox"/> DVDD
								<p id="p3">
									Of HIC in position <input type="text" style="width: 80px"/> <br>
									In short with: <input type="checkbox"/> Ground <input type="checkbox"/> Another strip
								</p>
							</li>
							<li> Result: <br>
								<input type="checkbox" name="1" value="1"/> Short disappered after rework
								<br>
								<input type="checkbox" name="2" value="2"/> Cannot remove the short
							</li>
						</ul>
						<?php
						include('imagetool/imagetool.html');
						?>
						<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
						<hr>
				 </div>
			 </div>
			 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-fbshorts','template-fbshorts');">Add new item</button></p>
			</fieldset>
		</fieldset>

		<fieldset>
 			<legend>Damages to the PB termination pads due to heat or wrong handling?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
				<ul>
					<li>Damage type: <br>
						<input id="i1" type="checkbox"/> Some pads detached <br>
						<span id="s1"> Number of pads: <input type="text" style="width: 90px"/> </span><br>
						<input id=i2 type="checkbox"/> Cracks in some pads <br>
						<span id="s2"> Number of pads: <input type="text" style="width: 90px"/> </span><br>
						<input type="checkbox"/> Other <input type="text" style="width: 400px" placeholder="specify"/> <br>
					</li>
					<li> Motivation: <br>
						<input type="checkbox"/> Heat <br>
						<input type="checkbox"/> Handling <br>
						<input type="checkbox"/> Other <input type="text" style="width: 400px" placeholder="specify"/><br>
					</li>
					<li> Result: <input type="checkbox"/> Acceptable <input type="checkbox"/> Not acceptable </li>
				</ul>

				<!-- Images -->
				<?php
				include('imagetool/imagetool.html');
				?>
			</fieldset>

		</fieldset>

		<fieldset>
 			<legend>Damages to the FB due to heat?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<ul>
					<li>Damage type: <br>
						<input type="checkbox"/> Damage to FB coverlay <br>
						<input type="checkbox"/> Damage to FB soldering pads <br>
						<input type="checkbox"/> Other: <input type="text" style="width: 400px" placeholder="specify"/> <br>
					</li>
					<li>Result: <input type="checkbox"/> Acceptable <input type="checkbox"/> Not acceptable </li>
				</ul>

				<!-- Images -->
				<?php
				include('imagetool/imagetool.html');
				?>
			</fieldset>
		</fieldset>


	</form>

	<h2>Soldering of the BB to the Filter Board</h2>

	<form action="">

		<fieldset>
			<legend>Presence of shorts after BB soldering to FB?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-bbfbshorts">
					<div id="template-bbfbshorts">
						<hr>
						<ul>
							<li> Line of HIC in position: <input type="text" style="width: 90px"/> <br>
									In short with: <input type="checkbox"/> Ground <input type="checkbox"/> Another strip
							</li>
							<li> Result: <br>
								<input type="checkbox" name="1" value="1"/> Short disappered after rework
								<br>
								<input type="checkbox" name="2" value="2"/> Cannot remove the short
							</li>
						</ul>
						<?php
						include('imagetool/imagetool.html');
						?>
						<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
						<hr>
				 </div>
			 </div>
			 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-bbfbshorts','template-bbfbshorts');">Add new item</button></p>
			</fieldset>
		</fieldset>

		<fieldset>
			<legend>Damages to the BB termination pads due to heat or wrong handling?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
				<ul>
					<li>Damage type: <br>
						<input id="i1" type="checkbox"/> Some pads detached <br>
						<span id="s1"> Number of pads: <input type="text" style="width: 90px"/> </span><br>
						<input id=i2 type="checkbox"/> Cracks in some pads <br>
						<span id="s2"> Number of pads: <input type="text" style="width: 90px"/> </span><br>
						<input type="checkbox"/> Other <input type="text" style="width: 400px" placeholder="specify"/> <br>
					</li>
					<li> Motivation: <br>
						<input type="checkbox"/> Heat <br>
						<input type="checkbox"/> Handling <br>
						<input type="checkbox"/> Other <input type="text" style="width: 400px" placeholder="specify"/><br>
					</li>
					<li> Result: <input type="checkbox"/> Acceptable <input type="checkbox"/> Not acceptable </li>
				</ul>

				<!-- Images -->
				<?php
				include('imagetool/imagetool.html');
				?>
			</fieldset>

		</fieldset>

		<fieldset>
			<legend>Damages to the FB due to heat?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<ul>
					<li>Damage type: <br>
						<input type="checkbox"/> Damage to FB coverlay <br>
						<input type="checkbox"/> Damage to FB soldering pads <br>
						<input type="checkbox"/> Other: <input type="text" style="width: 400px" placeholder="specify"/> <br>
					</li>
					<li>Result: <input type="checkbox"/> Acceptable <input type="checkbox"/> Not acceptable </li>
				</ul>

				<!-- Images -->
				<?php
				include('imagetool/imagetool.html');
				?>
			</fieldset>
		</fieldset>



	</form>

	<h2> Other comments </h2>
  <textarea rows="5" cols="100" name="modissection" placeholder="Insert short report"></textarea>

	<!-- Images -->
	<h2> Other pictures not included in the form </h2>
	<?php
	include('imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="window.print()"/>
	<a href="filterandcap.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
