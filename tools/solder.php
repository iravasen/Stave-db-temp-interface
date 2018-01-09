<!doctype html>
<html lang="en">
<head>
	<title>Soldering/Desoldering</title>

	<meta http-equiv="Cache-control" content="no-cache">

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

	<br>
  <?php include('add/addscript.html');?>
  <br>

	<style>
		span#si3{
			display: none;
		}

		span#si4{
			display: none;
		}

		textarea#textx{
			display: none;
		}

		textarea#textz{
			display: none;
		}

		textarea#textmisal{
			display: none;
		}

		ul#bonds1{
			display: none;
		}

		ul#bonds2{
			display: none;
		}

		ul#bonds3{
			display: none;
		}

		ul#awa{
			display: none;
		}

		ul#awb{
			display: none;
		}

		ul#apwr{
			display: none;
		}

		ul#aoth{
			display: none;
		}

		textarea#textoth{
			display: none;
		}

		input#ioth:checked ~ ul#aoth {
			display: block;
		}

		input#iwb:checked ~ ul#awb {
			display: block;
		}

		input#iwa:checked ~ ul#awa {
			display: block;
		}

		input#ipwr:checked ~ ul#apwr {
			display: block;
		}

		input#wb1:checked ~ ul#bonds1 {
			display: block;
		}

		input#wb2:checked ~ ul#bonds2 {
			display: block;
		}

		input#wb3:checked ~ ul#bonds3 {
			display: block;
		}

		input#i3:checked ~ span#si3 {
			display: block;
		}

		input#i4:checked ~ span#si4 {
			display: block;
		}

		input#z:checked ~ textarea#textz {
			display: block;
		}

		input#x:checked ~ textarea#textx {
			display: block;
		}

		input#oth:checked ~ textarea#textoth {
			display: block;
		}

		input#misal:checked ~ textarea#textmisal {
			display: block;
		}

	</style>

	<!-- To print the page with a default name -->
	<script type="text/javascript">
		function printall(){
			document.title = 	"Bridge_resistors_fpc-ext-gs-" +
			  								document.getElementsByName("extlotnumber")[0].value +
												"-" +
												document.getElementsByName("extflavor")[0].value +
												"_soldering_desoldering_on_" +
												document.getElementsByName("selectedcity")[0].value +
												document.getElementsByName("selectedhs")[0].value +
												document.getElementsByName("hsnumber")[0].value +
												"_report";
			window.print();
			document.title = "Soldering/Desoldering";
		}
	</script>

	<!--For cloning objects -->
	<?php include('clone_models/solder_models.php')?>
</head>

<body class="special">

	<a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
  <br><br><br>

  <h1> Bridge soldering, FPC extension gluing/soldering, resistor desoldering - Report </h1>

	<p id="noprint" style="color: red; font-size: 14pt; border: solid 5px red;">
		!!WARNING!! <br>
			- FPC extension UP on HS-RIGHT <br>
			- FPC extension DOWN on HS-LEFT
		</ul>
	</p>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<p> Bridge-Resistors and FPC-Ext soldering/desoldering on
				<?php include('ids/hsid.html');?>
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
		<p> <strong>HS-id</strong>: <?php include('ids/hsid.html');?> </p>
		<p> <strong>FPC-Extension id</strong>: GS <input name="extlotnumber" type="text" placeholder="XXX" style="width: 100px"/>
			<select name="extflavor" id="upd">
				<option> - </option>
				<option> up </option>
				<option> down </option>
			</select>
			<span style="display: block; float: right; color: red;" id="noprint">
			-> GSXXX can be found near the FireFly connectors
			</span>
		</p>
</fieldset>
<br>
<fieldset>
	<legend> General Info </legend>
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

<br><br>
	<h2> Report </h2>
	<br><br>

	<h2>FPC extension alignment, gluing and soldering</h2>

	<fieldset>
		<legend>Alignment between FPC extension and Module 1. Problems?</legend><br>
		<input type="checkbox" name="No" value="No"/> No
		<br />
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
		<br>
		<fieldset id="ifproblem">
			<span>Description:</span><br>
			<textarea rows="10" cols="100" placeholder="describe why"></textarea>
			<br>
			<input type="checkbox"/> still working (to be tested)
			<input type="checkbox"/> not working
			<br>
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>
	</fieldset>
	<br>
	<fieldset>
		<legend>FPC extension gluing. Problems?</legend><br>
		<input type="checkbox" name="No" value="No"/> No
		<br />
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
		<br>

		<fieldset id="ifproblem">
			<span>Description:</span><br>
			<textarea rows="10" cols="100" placeholder="describe why"></textarea>
			<br>
			<input type="checkbox"/> acceptable <input type="checkbox"/> not acceptable
			<br>
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>
	</fieldset>
	<br>
	<fieldset>
		<legend>FPC extension soldering. Damages to the extension due to heat?</legend><br>

		<input type="checkbox" name="No" value="No"/> No
		<br />
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
		<br />

		<fieldset id="ifproblem">
			<span>Description:</span><br>
			<textarea rows="10" cols="100" placeholder="describe why"></textarea><br>
			<input type="checkbox"/> still working (to be tested) <input type="checkbox"/> not working
			<br>
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

	</fieldset>
	<br>
	<fieldset>
		<legend>FPC extension soldering. Damages to the FPC-TAB-B due to heat?</legend><br>
		<input type="checkbox" name="No" value="No"/> No
		<br />
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
		<br>

		<fieldset id="ifproblem">
			<span>Description:</span><br>
			<textarea rows="10" cols="100" placeholder="describe why"></textarea><br>
			<input type="checkbox"/> still working (to be tested) <input type="checkbox"/> not working
			<br>
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>
	</fieldset>
	<br>
	<fieldset>
		<legend>FPC extension soldering. Damages to wire-bonds of Module in position 1?</legend><br>
		<input type="checkbox" name="No" value="No"/> No
		<br />
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<div id="placeholder-fpcext-0">
				<div id="template-fpcext-0">
					<hr>

					<img id="noprint" src="../img/chip.png" heigh="200px" width="500px" style="float: right; position: relative; bottom: .5em;"/>
					<span>Chip number <input type="text" style="width: 80px"/> </span> <br>
					<span>Bond type: <input type="text" style="width: 150px"/> </span> <br>

					<input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
					<br>
					<input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
					<?php
					include('imagetool/imagetool.html');
					?>

					<hr>
			 </div>
		 </div>
		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-fpcext','template-fpcext');">Add new item</button></p>
		</fieldset>

	</fieldset>

	<br><br>
  <h2>Bridge soldering</h2>

	<fieldset>
		<legend>Alignment problems of the two neighbour FPCs?</legend><br>

		<input type="checkbox" name="No" value="No"/> No
		<br />
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<div id="placeholder-align-0">
				<div id="template-align-0">
					<hr>
					<span>Connection between HIC in position <input id="printnumb2" type="number" style="width: 30px;"/> and <input id="printnumb2" type="number" style="width: 30px;"/></span> <br>
					<input id="x" type="checkbox" name="1" value="1"/> FPCs not aligned in x axis
					<br>
					<textarea id="textx" cols="50" rows="3" placeholder="comments"></textarea>
					<input id="z" type="checkbox" name="2" value="2"/> FPCs not aligned in z axis
					<br>
					<textarea id="textz" cols="50" rows="3" placeholder="comments"></textarea>
					<input id="oth" type="checkbox" name="4" value="4"/> Other
					<br>
					 <textarea id="textoth" rows="3" cols="50" placeholder="describe"></textarea>
					<br>
					<ul>
						<li> Misalignment compensated with the bridge soldering: <input type="checkbox"/> Yes <input id="misal" type="checkbox"/> No <br>
							<textarea id="textmisal" cols="50" rows="3" placeholder="comments"></textarea>
						</li>
					</ul>
					<br>
					<?php
					include('imagetool/imagetool.html');
					?>

					<hr>
				</div>
			</div>

			<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-align','template-align');">Add new item</button></p>

		</fieldset>

	</fieldset>
	<br>
	<fieldset>
		<legend>Presence of (visible) shorts?</legend><br>
		<input type="checkbox" name="No" value="No"/> No
		<br />
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<div id="placeholder-shorts-0">
				<div id="template-shorts-0">
					<hr>
					<span>Connection between HIC in position <input id="printnumb2" type="number" style="width: 30px;"/> and <input id="printnumb2" type="number" style="width: 30px;"/></span> <br>
					<input type="checkbox" name="1" value="1"/> Short disappered after rework
					<br>
					<input type="checkbox" name="2" value="2"/> Cannot remove the short
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
		<legend>Damages to wire-bonds?</legend><br>
		<input type="checkbox" name="No" value="No"/> No
		<br />
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<div id="placeholder-bonds-0">
				<div id="template-bonds-0">
					<hr>
					<span>Module in position <input type="text" style="width: 80px"/> </span> <br>
					<span>Chip number <input type="text" style="width: 80px"/> </span> <br>
					<span>ALPIDE pad type: <input type="text" style="width: 100px"/> </span> <br>

					<img id="noprint" src="../img/chip.png" heigh="300px" width="600px" style="float: right; position: relative; bottom: 4em;"/>
					<input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
					<br>
					<input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
					<?php
					include('imagetool/imagetool.html');
					?>

					<hr>
			 </div>
		 </div>

		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-bonds','template-bonds');">Add new item</button></p>
		</fieldset>
	</fieldset>
	<br>
	<fieldset>
		<legend>Visible damages to FPC due to heat?</legend><br>
		<input type="checkbox" name="No" value="No"/> No
		<br>
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<div id="placeholder-fpc1-0">
				<div id="template-fpc1-0">
					<hr>
					<span>FPC of Module in position <input type="text" style="width: 80px"/> </span> <br>
					<input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
					<br>
					<input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
					<?php
					include('imagetool/imagetool.html');
					?>

					<hr>
			 </div>
		 </div>
		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-fpc1','template-fpc1');">Add new item</button></p>
		</fieldset>
	</fieldset>
	<br>
	<fieldset>
		<legend>Damages to bridges due to heat?</legend><br>
		<input type="checkbox" name="No" value="No"/> No
		<br />
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
		<br />

		<fieldset id="ifproblem">
			<div id="placeholder-bridge-0">
				<div id="template-bridge-0">
					<span>Connection between HIC in position <input id="printnumb2" type="number" style="width: 30px;"/> and <input id="printnumb2" type="number" style="width: 30px;"/></span> <br>
					<span>Bridge position in the field of view: <br> <input type="checkbox"/> Up <br> <input type="checkbox"/> Down</span><br>
					<br>
					<p> Damage type: <br>
					<input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
					<br>
					<input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
					</p>
					<?php
					include('imagetool/imagetool.html');
					?>

					<hr>
			 </div>
		 </div>

		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-bridge','template-bridge');">Add new item</button></p>
		</fieldset>

	</fieldset>

	<br><br>
  <h2>Desoldering of termination resistors</h2>

	<fieldset>
		<legend>Have you lost some resistance after desoldering?</legend><br>

		<input type="checkbox" name="No" value="No"/> No
		<br>
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
		<br />

		<fieldset id="ifproblem">
			<div id="placeholder-tlost-0">
				<div id="template-tlost-0">

					<hr>
					<span>Module position: <input type="text" style="width: 80px"/></span><br>
					<span>Resistance id (number): <input type="text" style="width: 80px"/></span><br>

					<input type="checkbox" name="1" value="1"/> Lost resistance may have caused shorts somewhere (to be tested)
					<br>

					<?php
					include('imagetool/imagetool.html');
					?>

					<hr>
			 </div>
		 </div>

		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-tlost','template-tlost');">Add new item</button></p>
		</fieldset>
	</fieldset>
	<br>
	<fieldset>
		<legend>Damages to wire-bonds?</legend><br>

		<input type="checkbox" name="No" value="No"/> No
		<br>
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
		<br />

		<fieldset id="ifproblem">
			<div id="placeholder-modid-0">
				<div id="template-modid-0">
					<hr>
					<span>Module position: <input type="text" style="width: 80px"/></span><br>
					<span>Master: <input type="text" placeholder="0 or 8" style="width: 80px"/></span><br>

					<img id="noprint" src="../img/chip.png" heigh="200px" width="500px" style="float: right; position: relative; bottom: 4em;"/>

					<input id="wb1" type="checkbox" name="1" value="1"/> Damages to Chip_ID bonds
					<ul id="bonds1">
						<li><input type="checkbox"/> still working (to be tested) </li>
					  <li><input type="checkbox"/> not working</li>
					</ul>

					<br>
					<input id="wb2" type="checkbox" name="2" value="2"/> Damages to power/ground bonds
					<ul id="bonds2">
						<li><input type="checkbox"/> still working (to be tested) </li>
					  <li><input type="checkbox"/> not working</li>
					</ul>
					<br>
					<input id="wb3" type="checkbox" name="2" value="2"/> Other
					<ul id="bonds3">
						<li><textarea cols="50" rows="3" placeholder="specify"></textarea></li>
						<li><input type="checkbox"/> still working (to be tested) </li>
					  <li><input type="checkbox"/> not working</li>
					</ul>
					<br>
					<?php
					include('imagetool/imagetool.html');
					?>

					<hr>
			 </div>
		 </div>

		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-modid','template-modid');">Add new item</button></p>
		</fieldset>
	</fieldset>
	<br>
	<fieldset>
		<legend>Visible damages to FPC due to heat?</legend><br>
		<input type="checkbox" name="No" value="No"/> No
		<br>
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<div id="placeholder-fpc2-0">
				<div id="template-fpc2-0">
					<hr>
					<span>FPC of Module in position <input type="text" style="width: 80px"/> </span> <br>
					<input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
					<br>
					<input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
					<?php
					include('imagetool/imagetool.html');
					?>

					<hr>
			 </div>
		 </div>

		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-fpc2','template-fpc2');">Add new item</button></p>
		</fieldset>
	</fieldset>

	<br><br>
  <h2>Desoldering of MOD_ID resistors</h2>

	<fieldset>
		<legend>Have you lost some resistance after desoldering?</legend><br>

		<input type="checkbox" name="No" value="No"/> No
		<br>
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
		<br />

		<fieldset id="ifproblem">
			<div id="placeholder-idlost-0">
				<div id="template-idlost-0">

					<hr>
					<span>Module position: <input type="text" style="width: 80px"/></span><br>
					<span>Master: <input type="text" placeholder="0 or 8" style="width: 80px"/></span><br>
					<span>Resistance id (number): <input type="text" style="width: 80px"/></span><br>

					<input type="checkbox" name="1" value="1"/> Lost resistance may have caused shorts somewhere (to be tested)
					<br>

					<?php
					include('imagetool/imagetool.html');
					?>

					<hr>
			 </div>
		 </div>

		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-idlost','template-idlost');">Add new item</button></p>
		</fieldset>
	</fieldset>
	<br>
	<fieldset>
		<legend>Did you wrongly remove a MOD_ID resistance (then resoldered)?</legend><br>

		<input type="checkbox" name="No" value="No"/> No
		<br>
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
		<br />

		<fieldset id="ifproblem">
			<div id="placeholder-Rwrong-0">
				<div id="template-Rwrong-0">

					<img id="noprint" src="../img/chip.png" heigh="150px" width="450px" style="float: right; position: relative; bottom: -1.5em;"/>

					<hr>
					<span>Module position: <input type="text" style="width: 80px"/></span><br>
					<span>Master: <input type="text" placeholder="0 or 8" style="width: 80px"/></span><br>
					<span>Resistance id (number): <input type="text" style="width: 80px"/></span><br>

					<ul>
						<li> <input id="iwa" type="checkbox" name="1" value="1"/> Resistance resoldered without problems
							<ul id="awa">
								<li><input type="checkbox"/> still working (to be tested) </li>
								<li><input type="checkbox"/> not working</li>
							</ul>
						</li>
						<li> <input id="iwb" type="checkbox" name="1" value="1"/> Resistance resoldered damaging CHIP_ID wire-bonds
							<ul id="awb">
								<li><input type="checkbox"/> still working (to be tested) </li>
							  <li><input type="checkbox"/> not working</li>
							</ul>
						</li>
						<li> <input id="ipwr" type="checkbox" name="1" value="1"/> Resistance resoldered damaging Power/ground wire-bonds
							<ul id="apwr">
								<li><input type="checkbox"/> still working (to be tested) </li>
							  <li><input type="checkbox"/> not working</li>
							</ul>
						</li>

						<li> <input id="ioth" type="checkbox" name="1" value="1"/> Other
							<ul id="aoth">
								<li><textarea cols="50" rows="3" placeholder="specify" style="width: 50%"></textarea></li>
								<li><input type="checkbox"/> still working (to be tested) </li>
							  <li><input type="checkbox"/> not working</li>
							</ul>
						</li>
					</ul>


					<br>

					<?php
					include('imagetool/imagetool.html');
					?>

					<hr>
			 </div>
		 </div>

		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-Rwrong','template-Rwrong');">Add new item</button></p>
		</fieldset>
	</fieldset>
	<br>
	<fieldset>
		<legend>Damages to wire-bonds?</legend><br>

		<input type="checkbox" name="No" value="No"/> No
		<br>
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
		<br />

		<fieldset id="ifproblem">
			<div id="placeholder-modid1-0">
				<div id="template-modid1-0">
					<hr>
					<span>Module position: <input type="text" style="width: 80px"/></span><br>
					<span>Master: <input type="text" placeholder="0 or 8" style="width: 80px"/></span><br>

					<img id="noprint" src="../img/chip.png" heigh="200px" width="500px" style="float: right; position: relative; bottom: 3em;"/>

					<input id="wb1" type="checkbox" name="1" value="1"/> Damages to Chip_ID bonds
					<ul id="bonds1">
						<li><input type="checkbox"/> still working (to be tested) </li>
					  <li><input type="checkbox"/> not working</li>
					</ul>

					<br>
					<input id="wb2" type="checkbox" name="2" value="2"/> Damages to power/ground bonds
					<ul id="bonds2">
						<li><input type="checkbox"/> still working (to be tested) </li>
					  <li><input type="checkbox"/> not working</li>
					</ul>
					<br>
					<input id="wb3" type="checkbox" name="2" value="2"/> Other
					<ul id="bonds3">
						<li><textarea cols="50" rows="3" placeholder="specify"></textarea></li>
						<li><input type="checkbox"/> still working (to be tested) </li>
					  <li><input type="checkbox"/> not working</li>
					</ul>
					<br>
					<br>
					<?php
					include('imagetool/imagetool.html');
					?>

					<hr>
			 </div>
		 </div>
		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-modid1','template-modid1');">Add new item</button></p>
		</fieldset>
	</fieldset>
	<br>
	<fieldset>
		<legend>Visible damages to FPC due to heat?</legend><br>
		<input type="checkbox" name="No" value="No"/> No
		<br>
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<div id="placeholder-fpc-0">
				<div id="template-fpc-0">
					<hr>
					<span>FPC of Module in position <input type="text" style="width: 80px"/> </span> <br>
					<input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
					<br>
					<input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
					<?php
					include('imagetool/imagetool.html');
					?>

					<hr>
			 </div>
		 </div>
		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-fpc','template-fpc');">Add new item</button></p>
		</fieldset>
	</fieldset>

  <br>

	<h2> Other problems/comments </h2>
  <textarea rows="15" cols="100" name="modissection" placeholder="comments"></textarea>

	<!-- Images -->
	<h2> Other pictures not included in the form </h2>
	<?php
	include('imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="printall()"/>
	<a id="noprint" href="solder.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
