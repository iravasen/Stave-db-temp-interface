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
	<?php include('jvscript_funct/check_yes_no.html') ?>
	<script type="text/javascript">
		function printall(){

			//Check component IDs
			var correctid = true;
			//--> Stave
			if(document.getElementsByName("stavecity")[0].value == "-" ||
				 document.getElementsByName("selectedstave")[0].value == "-" ||
			 	 document.getElementsByName("stavenumber")[0].value == ""){
					 	correctid = false;
						alert("Insert valid Stave id");
						return correctid;
			}
			//-->Check HS left
			if(document.getElementsByName("hscity-l")[0].value == "-" ||
				 document.getElementsByName("hsflavor-l")[0].value == "-" ||
			 	 document.getElementsByName("hsnumber-l")[0].value == ""){
					 	correctid = false;
						alert("Insert valid HS-Lower id");
						return correctid;
			}
			//-->PB of HS left
			if(document.getElementsByName("pbselected")[0].value == "-" ||
		 		 document.getElementsByName("pbnumber")[0].value == ""){
					 	correctid = false;
						alert("Insert valid PB id for HS-Lower");
						return correctid;
			}
			//-->BB of HS left
			if(document.getElementsByName("bbselected")[0].value == "-" ||
		 		 document.getElementsByName("bbnumber")[0].value == ""){
					 	correctid = false;
						alert("Insert valid BB id for HS-Lower");
						return correctid;
			}
			//--> FB left
			if(document.getElementsByName("fbleftselected")[0].value == "-" ||
				 document.getElementsByName("fbleftnumber")[0].value == ""){
					 	correctid = false;
						alert("Insert valid FB-Lower id");
						return correctid;
			}
			//-->Check HS right
			if(document.getElementsByName("hscity-r")[0].value == "-" ||
				 document.getElementsByName("hsflavor-r")[0].value == "-" ||
			 	 document.getElementsByName("hsnumber-r")[0].value == ""){
					 	correctid = false;
						alert("Insert valid HS-Upper id");
						return correctid;
			}
			//-->PB of HS right
			if(document.getElementsByName("pbselected")[1].value == "-" ||
		 		 document.getElementsByName("pbnumber")[1].value == ""){
					 	correctid = false;
						alert("Insert valid PB id for HS-Upper");
						return correctid;
			}
			//-->BB of HS right
			if(document.getElementsByName("bbselected")[1].value == "-" ||
		 		 document.getElementsByName("bbnumber")[1].value == ""){
					 	correctid = false;
						alert("Insert valid BB id for HS-Upper");
						return correctid;
			}
			//--> FB right
			if(document.getElementsByName("fbrightselected")[0].value == "-" ||
				 document.getElementsByName("fbrightnumber")[0].value == ""){
					 	correctid = false;
						alert("Insert valid FB-Upper id");
						return correctid;
			}

			//Check stave number - 3 digits
			if(document.getElementsByName("stavenumber")[0].value.toString().length<3 || document.getElementsByName("stavenumber")[0].value.toString().length>3){
				alert("Stave-id number must have 3 digits (e.g. Stave-003 for Stave-3). Please check.");
				return false;
			}

			//Check hs lower id - 3 digits
			if(document.getElementsByName("hsnumber-l")[0].value.toString().length<3 || document.getElementsByName("hsnumber-l")[0].value.toString().length>3){
				alert("HS-Lower-id number must have 3 digits (e.g. HS-003 for HS-3). Please check.");
				return false;
			}

			//Check hs upper id - 3 digits
			if(document.getElementsByName("hsnumber-r")[0].value.toString().length<3 || document.getElementsByName("hsnumber-r")[0].value.toString().length>3){
				alert("HS-Upper-id number must have 3 digits (e.g. HS-003 for HS-3). Please check.");
				return false;
			}

			//Check fb lower id - 4 digits
			if(document.getElementsByName("fbleftnumber")[0].value.toString().length<4 || document.getElementsByName("fbleftnumber")[0].value.toString().length>4){
				alert("FB-Lower-id number must have 4 digits (e.g. FB-0003 for FB-3). Please check.");
				return false;
			}

			//Check fb upper id - 4 digits
			if(document.getElementsByName("fbrightnumber")[0].value.toString().length<4 || document.getElementsByName("fbrightnumber")[0].value.toString().length>4){
				alert("FB-Upper-id number must have 4 digits (e.g. FB-0003 for FB-3). Please check.");
				return false;
			}

			//Check number of digits PB low
			if(document.getElementsByName("pbnumber")[0].value.toString().length < 3 || document.getElementsByName("pbnumber")[0].value.toString().length > 3){
				alert("PB-id number for HS-L must have 3 digits (i.e. PB-003 for PB-3). Please check.");
				return false;
			}

			//Check number of digits PB up
			if(document.getElementsByName("pbnumber")[1].value.toString().length < 3 || document.getElementsByName("pbnumber")[1].value.toString().length > 3){
				alert("PB-id number for HS-U must have 3 digits (i.e. PB-003 for PB-3). Please check.");
				return false;
			}

			//Check number of digits BB low
			if(document.getElementsByName("bbnumber")[0].value.toString().length < 3 || document.getElementsByName("bbnumber")[0].value.toString().length > 3){
				alert("BB-id number for HS-L must have 3 digits (i.e. BB-003 for BB-3). Please check.");
				return false;
			}

			//Check number of digits BB up
			if(document.getElementsByName("bbnumber")[1].value.toString().length < 3 || document.getElementsByName("bbnumber")[1].value.toString().length > 3){
				alert("BB-id number for HS-U must have 3 digits (i.e. BB-003 for BB-3). Please check.");
				return false;
			}

			//Check if PB low id number is different from PB-Up id number
			if(document.getElementsByName("pbnumber")[0].value == document.getElementsByName("pbnumber")[1].value.toString()){
				alert("the PB-Low and PB-Up have the same number. Please check.");
				return false;
			}

			//Check if BB low id number is different from BB-Up id number
			if(document.getElementsByName("bbnumber")[0].value == document.getElementsByName("bbnumber")[1].value.toString()){
				alert("the BB-Low and BB-Up have the same number. Please check.");
				return false;
			}


			//Check if all the components have the same layer (OL or ML)
			var correctlyr = true;
			if(document.getElementsByName("selectedstave")[0].value.indexOf("OL") == -1 ||
				 document.getElementsByName("hsflavor-l")[0].value.indexOf("OL") == -1 ||
			 	 document.getElementsByName("pbselected")[0].value.indexOf("OL") == -1 ||
			 	 document.getElementsByName("bbselected")[0].value.indexOf("OL") == -1 ||
				 document.getElementsByName("fbleftselected")[0].value.indexOf("OL") == -1 ||
				 document.getElementsByName("hsflavor-r")[0].value.indexOf("OL") == -1 ||
			 	 document.getElementsByName("pbselected")[1].value.indexOf("OL") == -1 ||
			 	 document.getElementsByName("bbselected")[1].value.indexOf("OL") == -1 ||
				 document.getElementsByName("fbrightselected")[0].value.indexOf("OL") == -1
			 ){

				 if(document.getElementsByName("selectedstave")[0].value.indexOf("ML") == -1 ||
						document.getElementsByName("hsflavor-l")[0].value.indexOf("ML") == -1 ||
						document.getElementsByName("pbselected")[0].value.indexOf("ML") == -1 ||
						document.getElementsByName("bbselected")[0].value.indexOf("ML") == -1 ||
						document.getElementsByName("fbleftselected")[0].value.indexOf("ML") == -1 ||
						document.getElementsByName("hsflavor-r")[0].value.indexOf("ML") == -1 ||
						document.getElementsByName("pbselected")[1].value.indexOf("ML") == -1 ||
						document.getElementsByName("bbselected")[1].value.indexOf("ML") == -1 ||
						document.getElementsByName("fbrightselected")[0].value.indexOf("ML") == -1
					){
						correctlyr = false;
						alert("OL and ML are mixed in the component IDs, please check");
						return correctlyr;
				}

			 }



			//Check if all questions were answered
			var check = check_yes_no(4);

			if(check && correctid && correctlyr){
				document.title =  document.getElementsByName("pbselected")[0].value +
													document.getElementsByName("bbselected")[0].value +
													"soldering_on_" +
													document.getElementsByName("stavecity")[0].value +
													document.getElementsByName("selectedstave")[0].value +
													document.getElementsByName("stavenumber")[0].value +
													"_report";
				window.print();
				document.title = "PB,BB soldering to HS";
			}
		}
	</script>

	<!-- For printing immediately -->
	<?php include('allokandprint/allok.html')?>

	<!-- For cloning objects -->
	<?php include('clone_models/solderPBBB_models.php')?>

</head>

<body class="special">

  <a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
	<img id="noprint" src="../img/hslegend.png" alt="HS legend" style="float: right; width: 350px; height: 180px"/>
  <br><br><br>

  <h1>Power Bus, Bias Bus soldering to Stave - Report</h1>
	<p id="noprint" style="color: red; font-size: 14pt; border: solid 5px red;">
		!!WARNING!! This form is for both Half-Staves composing the Stave
	</p>

	<br>
	<fieldset>
		<legend> Component IDs </legend>
			<p> Stave ID: <?php include('ids/stvid.html') ?></p>
			<p> <strong> HS-Lower </strong> <br>
				<ul>
					<li> ID: <?php include('ids/hslid.html')?> </li>
					<li> Power Bus ID: <?php include('ids/pbid.html')?> </li>
					<li> Bias Bus ID: <?php include('ids/bbid.html')?> </li>
					<li> Filter Board ID: <?php include('ids/fblid.html')?> </li>
				</ul>
			</p>

			<p> <strong> HS-Upper </strong> <br>
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
	<br>
	<input id="noprint" type="button" value="All ok & save" style="position: center" onClick="okandprintall()"/>
	<br><br>
  <h2>Bias Bus Soldering to Stave</h2>
	<form action="">
		<fieldset>
 			<legend>Visible damages to cross-cables?</legend><br>

			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-ccbbdam-0">
					<div id="template-ccbbdam-0">
						<hr>
						<p>
							<ul>
								<li> For HS: <input type="checkbox"/> Lower <input type="checkbox"/> Upper </li>
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

			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes
 			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-bbpaddam-0">
					<div id="template-bbpaddam-0">
						<hr>
						<p>
							<ul>
								<li> For HS: <input type="checkbox"/> Lower <input type="checkbox"/> Upper </li>
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
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes
 			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-ccpbdam-0">
					<div id="template-ccpbdam-0">
						<hr>
						<p>
							<ul>
								<li> For HS: <input type="checkbox"/> Lower <input type="checkbox"/> Upper </li>
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
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-pbpaddam-0">
					<div id="template-pbpaddam-0">
						<hr>
						<p>
							<ul>
								<li> For HS: <input type="checkbox"/> Lower <input type="checkbox"/> Upper </li>
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
