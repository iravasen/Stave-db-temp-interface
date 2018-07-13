<!doctype html>
<html lang="en">
<head>

	<meta http-equiv="Cache-control" content="no-cache">

	<title>HIC cut</title>

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
	<?php include('jvscript_funct/check_yes_no.html') ?>
	<script type="text/javascript">
		function printall(){

			//Check if all component ids were inserted
			var idcorrect = true;
			if(document.getElementsByName("hicnumber")[0].value=="" || document.getElementsByName("hicflavor")[0].value=="-"){
				idcorrect=false;
				alert("Some component IDs are missing, please check before printing");
				return idcorrect;
			}

			//Check if hic number has six digits
			var checkhicnumber = true;
			if(document.getElementsByName("hicnumber")[0].value.toString().length<6 ||document.getElementsByName("hicnumber")[0].value.toString().length>6){
				checkhicnumber = false;
				alert("HIC number must has 6 digits (e.g. 000012 for HIC-12)");
				return checkhicnumber;
			}

			//Check if FPC tab type and cut distance were inserted
			var tabcutcorrect = true;
			if(document.getElementById("iA").checked){
				if(document.getElementById("cutdistancevalue").value == ""){
					tabcutcorrect = false;
					alert("Insert cut distance for TAB A");
					return tabcutcorrect;
				}
			}
			else if(!document.getElementById("iB").checked || !document.getElementById("iB").checked){
				tabcutcorrect = false;
				alert("Specify the FPC TAB Type in the first box of the Report section");
				return tabcutcorrect;
			}

			//Check if at least 1 image of the cut was inserted
			var cutpicture = true;
			var caption = document.getElementsByName("imagecaption");

			if(document.getElementById("iA").checked && caption[2].value == ""){
				cutpicture = false;
				alert("Insert a image (and caption) of the cut. See first box of the Report section");
				return cutpicture;
			}

			//Check if AVDD, DVDD, IDVDD and IAVDD were inserted
			/*var vicorrect = true;
			var avdd  = document.getElementById("AVDD").value;
			var dvdd  = document.getElementById("DVDD").value;
			var iavdd = document.getElementById("IAVDD").value;
			var idvdd = document.getElementById("IDVDD").value;
			if(avdd == "" || avdd<1.62 || avdd>1.99){
				vicorrect = false;
				alert("Insert correct AVDD");
				return vicorrect;
			}
			if(dvdd == "" || dvdd<1.62 || dvdd>1.99){
				vicorrect = false;
				alert("Insert correct DVDD");
				return vicorrect;
			}
			if(iavdd == ""){
				vicorrect = false;
				alert("Insert I_AVDD");
				return vicorrect;
			}
			if(idvdd == ""){
				vicorrect = false;
				alert("Insert I_DVDD");
				return vicorrect;
			}

			//Check the IAVDD and IDVDD
			if(iavdd<100){

				if(confirm("I_AVDD = " + iavdd + " mA is low, are you sure of this value? If yes, press ok") == false){
					return false;
				}
			}
			if(iavdd>300){
				if(confirm("I_AVDD = " + iavdd + " mA is high, are you sure of this value? If yes, press ok") == false){
					return false;
				}
			}
			if(idvdd<150){
				if(confirm("I_DVDD = " + idvdd + " mA is low, are you sure of this value? If yes, press ok") == false){
					return false;
				}
			}
			if(idvdd>300){
				if(confirm("I_DVDD = " + idvdd + " mA is high, are you sure of this value? If yes, press ok") == false){
					return false;
				}
			}*/

			//Check if all questions were answered
			var check = check_yes_no(5);

			//Print if everything ok
			if(check && idcorrect && tabcutcorrect && cutpicture && checkhicnumber){
				document.title = 	"OBHIC-" +
													document.getElementsByName("hicflavor")[0].value +
													document.getElementsByName("hicnumber")[0].value +
													"_tab_wing_cut_inspection_report";
				window.print();
				document.title = "HIC cut";
			}

		}
	</script>

	<!-- For printing immediately -->
	<script type="text/javascript">
	  function okandprintall(){
	    var okelem = document.getElementsByClassName("ok");
	    for(i=0; i<okelem.length; i++)
	      okelem[i].checked = true;

			var bb = document.getElementById("brokenbonds");
			bb.value = "0";
	    printall();
	  }
	</script>

	<!-- For cloning objects -->
	<?php include('clone_models/hiccut_models.php')?>

</head>

<body class="special">

	<a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
  <br><br><br>

  <h1>HIC cut inspection (cut of FPC tab and wings) - Report</h1>
	<br>

	<fieldset>
 	 <legend> Component IDs </legend>
 	 	<p> OB-HIC ID: <?php include('ids/hicid.html')?> </p>
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
	<!-- Location -->
	<?php include('location/location.html');?>

	<!--People-->
 <br>
 <?php include('people/people.html');?>
 <br>

 <h2> Report </h2>
	<br>

  <h2>Inspection of the cut and of the most critical bonds</h2>

	<form action="">
		<fieldset>
			<legend>Distance of the cut (rough, with usb camera). <strong id="noprint"> Upload a picture of the FPC edge on the side of the cut (only for TAB A).</strong></legend><br>
			<p> FPC TAB type <input id="iA" type="checkbox"/> A <input id="iB" type="checkbox"/>B <br><br>
				<span id="sA"> Cut distance: <input id="cutdistancevalue" type="text" placeholder="value" style="width: 50px"/> um </span>
				<span id="sB"> Cut distance not available. </span>
			</p>
			<br>

			<p>Is the cut distance/result acceptable?</p>
			<input type="checkbox" name="yes" value="Yes" class="ok"/> Yes
 			<br />
 			<input type="checkbox" name="no" value="No"/> No

			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>
		<br>

		<input id="noprint" type="button" value="All ok & save" style="position: center" onClick="okandprintall()"/>
		<br><br>
		<fieldset>
 			<legend>Visible (macroscopic) damages to the HIC due to the cut procedure?</legend><br>
 			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
 			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes
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
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
 			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-bond-0">
					<div id="template-bond-0">
						<hr>
						<img id="noprint" src="../img/chip.png" heigh="200px" width="500px" style="float: right; position: relative; bottom: .5em;"/>
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

			<br><span> <strong> Total number of broken bonds</strong>: <input id="brokenbonds" type="text" placeholder="#" style="width: 100px"/> </span> <br>
		</fieldset>
		<br>
		<fieldset>
 			<legend>Are there suspicious wire-bonds to report?</legend><br>
 			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
 			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-bondrisk-0">
					<div id="template-bondrisk-0">
						<hr>
						<img id="noprint" src="../img/chip.png" heigh="200px" width="500px" style="float: right; position: relative; bottom: .5em;"/>
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

<!--
	<h2> HIC Powering test after cut </h2>
	<form>
		<fieldset>
 			<legend>Voltages and currents</legend><br>

			<ul>
				<li>AVDD: <input id="AVDD" type="text" style="width: 65px"/> V <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

				<li>I<sub>AVDD</sub>: <input id="IAVDD" type="text" style="width: 65px"/> mA <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

				<hr>

				<li>DVDD: <input id="DVDD" type="text" style="width: 65px"/> V <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

				<li>I<sub>DVDD</sub>: <input id="IDVDD" type="text" style="width: 65px"/> mA <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>
			</ul>

		</fieldset>
	</form>-->

	<h2> Final response </h2>

	<form>
		<fieldset>
			<legend>Is this HIC acceptable after tab and wings cut?</legend><br>
			<input type="checkbox" name="yes" value="Yes" class="ok"/> Yes
 			<br />
 			<input type="checkbox" name="no" value="No"/> No
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
