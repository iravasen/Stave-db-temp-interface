<!doctype html>
<html lang="en">
<head>
	<title>Soldering/Desoldering</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

	<br>
  <?php include('add/addscript.html');?>
  <br>

</head>

<body class="special">

	<a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1> Bridge soldering, FPC extension gluing/soldering, resistor desoldering - Report </h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<span id="noprint"> (Example: Bridge-Resistors and FPC-Ext soldering/desoldering on OL/ML-HS-L/R-#)</span>
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

	<p> HS-id <input type="text" placeholder="OL/ML-HS-L/R-<number>"/> </p>
	<p> FPC Extension id <input type="text" placeholder="GS-XXX" style="width: 100px"/> </p>
	<p> Name of the tin and composition <input type="text" placeholder="tin and composition" style="width: 300px"/></p>
	<p> Diameter of the soldering tip: <input type="text" style="width: 80px"/>mm </p>

	<br><br>
  <h2>Bridge soldering</h2>

	<fieldset>
		<legend>Alignment problems of the bridge with respect to the FPC?</legend><br>

		<input type="checkbox" name="No" value="No"/> No
		<br />
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<div id="placeholder-align">
				<div id="template-align">
					<hr>
					<span>Connection between HIC in position <input type="text" style="width: 80px"/> and <input type="text" style="width: 80px"/></span> <br>
					<input type="checkbox" name="1" value="1"/> FPC not aligned in x axis
					<br>
					<input type="checkbox" name="2" value="2"/> FPC not aligned in z axis
					<br>
					<input type="checkbox" name="3" value="3"/> FPC aligned, but bridge not aligned
					<br>
					<input type="checkbox" name="4" value="4"/> Other, specify <textarea rows="3" cols="50" placeholder="describe"></textarea>
					<?php
					include('imagetool/imagetool.html');
					?>
					<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
					<hr>
				</div>
			</div>
			<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-align','template-align');">Add new item</button></p>

		</fieldset>

	</fieldset>

	<fieldset>
		<legend>Presence of (visible) shorts. Was there the need to rework to remove the shorts?</legend><br>
		<input type="checkbox" name="No" value="No"/> No
		<br />
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<div id="placeholder-shorts">
				<div id="template-shorts">
					<hr>
					<span>Connection between HIC in position <input type="text" style="width: 80px"/> and <input type="text" style="width: 80px"/></span> <br>
					<input type="checkbox" name="1" value="1"/> Short disappered
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
		<legend>Damages to wire-bonds?</legend><br>
		<input type="checkbox" name="No" value="No"/> No
		<br />
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<div id="placeholder-bonds">
				<div id="template-bonds">
					<hr>
					<span>Module in position <input type="text" style="width: 80px"/> </span> <br>
					<span>Chip number <input type="text" style="width: 80px"/> </span> <br>
					<span>ALPIDE pad type: <input type="text" style="width: 100px"/> </span> <br>
					<input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
					<br>
					<input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
					<?php
					include('imagetool/imagetool.html');
					?>
					<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
					<hr>
			 </div>
		 </div>
		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-bonds','template-bonds');">Add new item</button></p>
		</fieldset>
	</fieldset>

	<fieldset>
		<legend>Visible damages to FPC due to heat?</legend><br>
		<input type="checkbox" name="No" value="No"/> No
		<br>
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<div id="placeholder-fpc">
				<div id="template-fpc">
					<hr>
					<span>FPC of Module in position <input type="text" style="width: 80px"/> </span> <br>
					<input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
					<br>
					<input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
					<?php
					include('imagetool/imagetool.html');
					?>
					<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
					<hr>
			 </div>
		 </div>
		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-fpc','template-fpc');">Add new item</button></p>
		</fieldset>
	</fieldset>

	<fieldset>
		<legend>Damages to bridges due to heat?</legend><br>
		<input type="checkbox" name="No" value="No"/> No
		<br />
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
		<br />

		<fieldset id="ifproblem">
			<div id="placeholder-bridge">
				<div id="template-bridge">
					<span>Connection between HIC in position <input type="text" style="width: 80px"/> and <input type="text" style="width: 80px"/></span> <br>
					<span>Bridge position: <input type="text" placeholder="up or down" style="width: 150px"/></span><br>
					<hr>
					<span> <input type="text" style="width: 80px"/> </span> <br>
					<input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
					<br>
					<input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
					<?php
					include('imagetool/imagetool.html');
					?>
					<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
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
			<div id="placeholder-tlost">
				<div id="template-tlost">

					<hr>
					<span>Module position: <input type="text" style="width: 80px"/></span><br>
					<span>Number of lost R: <input type="text" placeholder="0 or 8" style="width: 80px"/></span><br>

					<input type="checkbox" name="1" value="1"/> Lost resistance may have caused shorts somewhere (to be tested)
					<br>

					<?php
					include('imagetool/imagetool.html');
					?>
					<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
					<hr>
			 </div>
		 </div>
		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-tlost','template-tlost');">Add new item</button></p>
		</fieldset>
	</fieldset>

	<fieldset>
		<legend>Damages to wire-bonds?</legend><br>

		<input type="checkbox" name="No" value="No"/> No
		<br>
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
		<br />

		<fieldset id="ifproblem">
			<div id="placeholder-modid">
				<div id="template-modid">
					<span>Module position: <input type="text" style="width: 80px"/></span><br>
					<span>Master: <input type="text" placeholder="0 or 8" style="width: 80px"/></span><br>
					<hr>

					<input type="checkbox" name="1" value="1"/> Damages to Chip_ID bonds (<input type="checkbox"/> still working (to be tested) <input type="checkbox"/> not working)
					<br>
					<input type="checkbox" name="2" value="2"/> Damages to power/ground bonds (<input type="checkbox"/> still working (to be tested) <input type="checkbox"/> not working)
					<br>
					<input type="checkbox" name="2" value="2"/> Other: <input type="text" placeholder="specify" style="width: 250px"/> (<input type="checkbox"/> still working (to be tested) <input type="checkbox"/> not working)
					<br>
					<?php
					include('imagetool/imagetool.html');
					?>
					<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
					<hr>
			 </div>
		 </div>
		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-modid','template-modid');">Add new item</button></p>
		</fieldset>
	</fieldset>

	<fieldset>
		<legend>Visible damages to FPC due to heat?</legend><br>
		<input type="checkbox" name="No" value="No"/> No
		<br>
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<div id="placeholder-fpc">
				<div id="template-fpc">
					<hr>
					<span>FPC of Module in position <input type="text" style="width: 80px"/> </span> <br>
					<input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
					<br>
					<input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
					<?php
					include('imagetool/imagetool.html');
					?>
					<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
					<hr>
			 </div>
		 </div>
		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-fpc','template-fpc');">Add new item</button></p>
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
			<div id="placeholder-idlost">
				<div id="template-idlost">

					<hr>
					<span>Module position: <input type="text" style="width: 80px"/></span><br>
					<span>Master: <input type="text" placeholder="0 or 8" style="width: 80px"/></span><br>
					<span>Number of lost R: <input type="text" placeholder="0 or 8" style="width: 80px"/></span><br>

					<input type="checkbox" name="1" value="1"/> Lost resistance may have caused shorts somewhere (to be tested)
					<br>

					<?php
					include('imagetool/imagetool.html');
					?>
					<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
					<hr>
			 </div>
		 </div>
		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-idlost','template-idlost');">Add new item</button></p>
		</fieldset>
	</fieldset>

	<fieldset>
		<legend>Damages to wire-bonds?</legend><br>

		<input type="checkbox" name="No" value="No"/> No
		<br>
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
		<br />

		<fieldset id="ifproblem">
			<div id="placeholder-modid">
				<div id="template-modid">
					<span>Module position: <input type="text" style="width: 80px"/></span><br>
					<span>Master: <input type="text" placeholder="0 or 8" style="width: 80px"/></span><br>
					<hr>

					<input type="checkbox" name="1" value="1"/> Damages to Chip_ID bonds (<input type="checkbox"/> still working (to be tested) <input type="checkbox"/> not working)
					<br>
					<input type="checkbox" name="2" value="2"/> Damages to power/ground bonds (<input type="checkbox"/> still working (to be tested) <input type="checkbox"/> not working)
					<br>
					<input type="checkbox" name="2" value="2"/> Other: <input type="text" placeholder="specify" style="width: 250px"/> (<input type="checkbox"/> still working (to be tested) <input type="checkbox"/> not working)
					<br>
					<?php
					include('imagetool/imagetool.html');
					?>
					<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
					<hr>
			 </div>
		 </div>
		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-modid','template-modid');">Add new item</button></p>
		</fieldset>
	</fieldset>

	<fieldset>
		<legend>Visible damages to FPC due to heat?</legend><br>
		<input type="checkbox" name="No" value="No"/> No
		<br>
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<div id="placeholder-fpc">
				<div id="template-fpc">
					<hr>
					<span>FPC of Module in position <input type="text" style="width: 80px"/> </span> <br>
					<input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
					<br>
					<input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
					<?php
					include('imagetool/imagetool.html');
					?>
					<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
					<hr>
			 </div>
		 </div>
		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-fpc','template-fpc');">Add new item</button></p>
		</fieldset>
	</fieldset>


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

	<fieldset>
		<legend>FPC extension soldering. Damages to wire-bonds?</legend><br>
		<input type="checkbox" name="No" value="No"/> No
		<br />
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<div id="placeholder-fpcext">
				<div id="template-fpcext">
					<hr>
					<span>Chip number <input type="text" style="width: 80px"/> </span> <br>
					<span>Bond type: <input type="text" style="width: 150px"/> </span> <br>

					<input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
					<br>
					<input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
					<?php
					include('imagetool/imagetool.html');
					?>
					<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
					<hr>
			 </div>
		 </div>
		 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-fpcext','template-fpcext');">Add new item</button></p>
		</fieldset>

	</fieldset>


	<h2> Other comments </h2>
  <textarea rows="5" cols="100" name="modissection" placeholder="comments"></textarea>

	<!-- Images -->
	<h2> Other pictures not included in the form </h2>
	<?php
	include('imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="window.print()"/>
	<a href="solder.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
