<!doctype html>
<html lang="en">
<head>

	<meta http-equiv="Cache-control" content="no-cache">

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

		textarea#texta1{
			display: none;
		}

		input#oth:checked ~ textarea#texta1 {
			display: block;
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

	<!-- To print the page with a default name -->
	<script type="text/javascript">
		function printall(){
			document.title = 	"OB-HIC-" +
												document.getElementsByName("hicnumber")[0].value +
												document.getElementsByName("hicflavor")[0].value +
												"_tab_wing_cut_inspection_and_power_test_report";
			window.print();
			document.title = "HIC cut + power";
		}
	</script>

	<!-- For cloning objects -->
	<?php include('clone_models/hiccut_models.php')?>

</head>

<body class="special">

	<a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
  <br><br><br>

  <h1>HIC cut inspection (cut of FPC tab and wings) and power test - Report</h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<p>
				<?php include('ids/hicid.html')?> cut and power test
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
	 	<p> OB-HIC ID: <?php include('ids/hicid.html')?> </p>
 </fieldset>

 <h2> Report </h2>
	<br>

  <h2>Inspection of most critical bonds and of the cut</h2>

	<form action="">
		<fieldset>
			<legend>Distance of the cut (rough, with usb camera). <strong id="noprint"> Upload a picture of the FPC edge on the side of the cut</strong></legend><br>
			<p> FPC TAB type <input id="iA" type="checkbox"/> A <input id="iB" type="checkbox"/>B <br><br>
				<span id="sA"> Cut distance: <input type="text" placeholder="value" style="width: 50px"/> um </span>
				<span id="sB"> Cut distance not available, only picture close to FPC edge to see the cut quality. </span>
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
		<br>
		<fieldset>
 			<legend>Visible (macroscopic) damages to the HIC due to the cut procedure?</legend><br>
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
				<p id="p1"> CC type: <input type="checkbox"/> DVDD <input type="checkbox"/> DVSS <input type="checkbox"/> AVDD <input type="checkbox"/> AVSS <input type="checkbox"/> BACK-BIAS</p>
				<br />
				<input id="oth" type="checkbox" name="other" value="other"/> Other
				<textarea id="texta1" cols="50" rows="4" placeholder="Specify"></textarea>
				<br><br>

				<span> Do they affect the HIC functioning? <input type="checkbox"/> Yes <input type="checkbox"/> No <br>
				<?php
				include('imagetool/imagetool.html');
				?>
			</fieldset>

		</fieldset>
		<br>
		<fieldset>
 			<legend>Visible damages to bonds due to TAB cut procedure?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-bond-0">
					<div id="template-bond-0">
						<hr>
						<ul>
							<li> Chip number: <input id="printnumb2" type="number" style="width: 60px"/></li>
							<li> Bond type (only most critical): <br>
								<ul>
									<li>
										<input type="checkbox" name="mclk_p" value="mclk_p"/> MCLK_P
					 					<input type="checkbox" name="mclk_n" value="mclk_n"/> MCLK_N
									</li>
									<li>
					 					<input type="checkbox" name="por_dis" value="por_dis"/> POR_DIS
									</li>
									<li>
					 					<input type="checkbox" name="dctrl_p" value="dctrl_p"/> DCTRL_P
					 					<input type="checkbox" name="dctrl_n" value="dctrl_n"/> DCTRL_N
									</li>
									<li>
					 					<input type="checkbox" name="dclk_p" value="dclk_p"/> DCLK_P
					 					<input type="checkbox" name="dclk_n" value="dclk_n"/> DCLK_N
									</li>
									<li>
					 					<input type="checkbox" name="hsdata_p" value="hsdata_p"/> HSDATA_P
					 					<input type="checkbox" name="hsdata_n" value="hsdata_n"/> HSDATA_N
									</li>
									<li>
					 					<input type="checkbox" name="CTRL" value="CTRL"/> CTRL
									</li>
									<li>
					 					<input type="checkbox" name="BUSY" value="BUSY"/> BUSY
									</li>
									<li>
					 					<input type="checkbox" name="DATA" value="DATA"/> DATA
									</li>
									<li>
					 					<input type="checkbox" name="chipid" value="chipid"/> CHIP_ID
									</li>
								</ul>
							</li>
							<li> Damage type
								<ul>

									<li><input type="checkbox"/> One detached</li>
									<li><input type="checkbox"/> Two detached</li>
									<li><input type="checkbox"/> All detached </li>
								</ul>
							</li>
							<li> Does it affect HIC functioning?
								<ul>
									<li><input type="checkbox"/> Yes </li>
									<li><input type="checkbox"/> No </li>
								</ul>
							</li>
						</ul>
						<?php
						include('imagetool/imagetool.html');
						?>


						<hr>
					</div>
				</div>

				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-bond','template-bond');">Add new item</button></p>
			</fieldset>

			<br><span> <strong> Total number of broken bonds</strong>: <input type="text" placeholder="#" style="width: 100px"/> </span> <br>
		</fieldset>
		<br>
		<fieldset>
 			<legend>Are there suspicious wire-bonds to report?</legend><br>
 			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-bondrisk-0">
					<div id="template-bondrisk-0">
						<hr>
						<ul>
							<li> Chip number: <input id="printnumb2" type="number" style="width: 60px"/></li>
							<li> Bond type (only most critical): <br>
								<ul>
									<li>
										<input type="checkbox" name="mclk_p" value="mclk_p"/> MCLK_P
					 					<input type="checkbox" name="mclk_n" value="mclk_n"/> MCLK_N
									</li>
									<li>
					 					<input type="checkbox" name="por_dis" value="por_dis"/> POR_DIS
									</li>
									<li>
					 					<input type="checkbox" name="dctrl_p" value="dctrl_p"/> DCTRL_P
					 					<input type="checkbox" name="dctrl_n" value="dctrl_n"/> DCTRL_N
									</li>
									<li>
					 					<input type="checkbox" name="dclk_p" value="dclk_p"/> DCLK_P
					 					<input type="checkbox" name="dclk_n" value="dclk_n"/> DCLK_N
									</li>
									<li>
					 					<input type="checkbox" name="hsdata_p" value="hsdata_p"/> HSDATA_P
					 					<input type="checkbox" name="hsdata_n" value="hsdata_n"/> HSDATA_N
									</li>
									<li>
					 					<input type="checkbox" name="CTRL" value="CTRL"/> CTRL
									</li>
									<li>
					 					<input type="checkbox" name="BUSY" value="BUSY"/> BUSY
									</li>
									<li>
					 					<input type="checkbox" name="DATA" value="DATA"/> DATA
									</li>
									<li>
					 					<input type="checkbox" name="chipid" value="chipid"/> CHIP_ID
									</li>
								</ul>
							</li>
							<li> Description: <br>
								 <textarea rows="5" cols="100" name="modissection" placeholder="comments"></textarea>
							</li>
							<li> Does it affect HIC functioning?
								<ul>
									<li><input type="checkbox"/> Yes </li>
									<li><input type="checkbox"/> No </li>
								</ul>
							</li>
						</ul>
						<?php
						include('imagetool/imagetool.html');
						?>


						<hr>
					</div>
				</div>

				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-bondrisk','template-bondrisk');">Add new item</button></p>
			</fieldset>

		</fieldset>
		<br>
	</form>

	<h2> HIC Powering test after cut </h2>
	<form>
		<fieldset>
 			<legend>Voltages and currents</legend><br>

			<ul>
				<li>AVDD: <input type="text" style="width: 65px"/> V <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

				<li>I<sub>AVDD</sub>: <input type="text" style="width: 65px"/> A <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

				<hr>

				<li>DVDD: <input type="text" style="width: 65px"/> V <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

				<li>I<sub>DVDD</sub>: <input type="text" style="width: 65px"/> A <br>
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
  <textarea rows="10" cols="100" name="modissection" placeholder="comments"></textarea>

	<!-- Images -->
	<h2> Other pictures not included in the form </h2>
	<?php
	include('imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="printall()"/>
	<a id="noprint" href="hiccut.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>


</body>
</html>
