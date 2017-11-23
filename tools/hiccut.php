<!doctype html>
<html lang="en">
<head>
	<title>HIC cut + power</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

	<br>
  <?php include('add/addscript.html');?>
  <br>

	<style>
		p#p1{
			display: none;
		}

		p#p2{
			display: none;
		}

		span#sA{
			display: none;
		}

		span#sB{
			display: none;
		}

		input#i1:checked ~ p#p1 {
			display: block;
		}

		input#i2:checked ~ p#p2 {
			display: block;
		}

		input#iA:checked ~ span#sA {
			display: block;
		}

		input#iB:checked ~ span#sB {
			display: block;
		}
	</style>
</head>

<body class="special">

	<a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1>HIC cut inspection (cut of FPC tab and wings) and power test - Report</h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<span id="noprint"> (Example: OB-HIC-id cut and power test)</span>
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
 <p> OB-HIC ID: <input type="text" placeholder="HIC id"/> </p>
 <br>

 <h2> Report </h2>
	<br>

  <h2>Inspection of most critical bonds and of the cut</h2>

	<form action="">
		<fieldset>
 			<legend>Visible damages to the HIC?</legend><br>
 			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
	 			<input type="checkbox"/> Broken chips in the region of the cut of the tab
	 			<br />
				<input id="i2" type="checkbox"/> Broken chips in the region of the wing cut
				<p id="p2"> Wing close to chip number <input type="text" style="width: 100px"/></p>

				<br />
	 			<input type="checkbox"/> Damages to FPC due to the cut
				<br />
				<input id="i1" type="checkbox"/> Damages to cross-cables
				<p id="p1"> CC type: <input type="checkbox"/> DVDD <input type="checkbox"/> DVSS <input type="checkbox"/> AVDD <input type="checkbox"/> AVSS <input type="checkbox"/> BACK-BIAS</p> <br>
				<br />
				<input type="checkbox" name="other" value="other"/> Other <input type="text" style="width: 400px"/>
				<br><br>

				<span> Do they affect the HIC functioning? <input type="checkbox"/> Yes <input type="checkbox"/> No <br>
				<?php
				include('imagetool/imagetool.html');
				?>
			</fieldset>

		</fieldset>

		<fieldset>
 			<legend>Visible damages to bonds?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-bond">
					<div id="template-bond">
						<hr>
						<ul>
							<li> Chip number: <input type="text" style="width: 90px"/></li>
							<li> Bond type (only most critical): <br>
								<input type="checkbox" name="mclk_p" value="mclk_p"/> MCLK_P
					 			<input type="checkbox" name="mclk_n" value="mclk_n"/> MCLK_N
								<br />
					 			<input type="checkbox" name="por_dis" value="por_dis"/> POR_DIS
								<br />
					 			<input type="checkbox" name="dctrl_p" value="dctrl_p"/> DCTRL_P
					 			<input type="checkbox" name="dctrl_n" value="dctrl_n"/> DCTRL_N
								<br />
					 			<input type="checkbox" name="dclk_p" value="dclk_p"/> DCLK_P
					 			<input type="checkbox" name="dclk_n" value="dclk_n"/> DCLK_N
								<br />
					 			<input type="checkbox" name="hsdata_p" value="hsdata_p"/> HSDATA_P
					 			<input type="checkbox" name="hsdata_n" value="hsdata_n"/> HSDATA_N
								<br />
					 			<input type="checkbox" name="CTRL" value="CTRL"/> CTRL
								<br />
					 			<input type="checkbox" name="BUSY" value="BUSY"/> BUSY
								<br />
					 			<input type="checkbox" name="DATA" value="DATA"/> DATA
								<br />
					 			<input type="checkbox" name="chipid" value="chipid"/> CHIP_ID
							</li>
							<li> Damage type: <input type="checkbox"/> One detached <input type="checkbox"/> Two detached <input type="checkbox"/> All detached </li>
							<li> Does it affect HIC functioning? <input type="checkbox"/> Yes <input type="checkbox"/> No </li>
						</ul>
						<?php
						include('imagetool/imagetool.html');
						?>

						<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-bond','template-bond');">Add new item</button></p>
			</fieldset>

			<br><span> <strong> Total number of broken bonds</strong>: <input type="text" style="width: 100px"/> </span> <br>
		</fieldset>

		<fieldset>
			<legend>Distance of the cut (rough, with usb camera). <strong id="noprint"> Upload a picture of the FPC and chip edges on the side of the cut (for TAB_B, 2 pictures needed)</strong></legend><br>
			<p> FPC TAB type <input id="iA" type="checkbox"/> A <input id="iB" type="checkbox"/>B <br><br>
				<span id="sA"> Cut distance: <input type="text" placeholder="value" style="width: 100px"/> um </span>
				<span id="sB"> Cut distance not available, only pictures close to chip and close to FPC edge. </span>
			</p>
			<br>

			<p>Is the cut distance/result acceptable?</p>
			<input type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />
 			<input type="checkbox" name="No" value="No"/> No

			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>
	</form>

	<h2> HIC Powering test after cut </h2>
	<form>
		<fieldset>
 			<legend>Voltages and currents</legend><br>

			<ul>
				<li>AVDD: <input type="text" style="width: 120px"/> V <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

				<li>I<sub>AVDD</sub>: <input type="text" style="width: 120px"/> A <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

				<hr>

				<li>DVDD: <input type="text" style="width: 120px"/> V <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

				<li>I<sub>DVDD</sub>: <input type="text" style="width: 120px"/> A <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>
			</ul>

		</fieldset>
	</form>

	<h2> Final response </h2>

	<form>
		<fieldset>
			<legend>Is this HIC acceptable after tab and wings cut?</legend><br>
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
	<a id="noprint" href="hiccut.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>


</body>
</html>
