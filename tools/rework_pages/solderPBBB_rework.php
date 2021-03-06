<!doctype html>
<html lang="en">
<head>
	<title>PB and BB soldering to HS</title>

	<meta http-equiv="Cache-control" content="no-cache">

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../../css/fieldstyle.css"/>

	<style>
		p#p1{
			display: none;
		}

		p#p2{
			display: none;
		}

		p#p3{
			display: none;
		}

		span#si3{
			display: none;
		}

		span#si4{
			display: none;
		}

		input#i3:checked ~ span#si3 {
			display: block;
		}

		input#i4:checked ~ span#si4 {
			display: block;
		}

		input#check1:checked ~ p#p1 {
			display: block;
		}

		input#check2:checked ~ p#p2 {
			display: block;
		}

		input#check3:checked ~ p#p3 {
			display: block;
		}
	</style>

	<br>
  <?php include('../add/addscript.html');?>
  <br>

	<!-- To print the page with a default name -->
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
			/*if(document.getElementsByName("hscity-l")[0].value == "-" ||
				 document.getElementsByName("hsflavor-l")[0].value == "-" ||
			 	 document.getElementsByName("hsnumber-l")[0].value == ""){
					 	correctid = false;
						alert("Insert valid HS-Left id");
						return correctid;
			}*/
			//-->PB of HS left
			if(document.getElementsByName("pbselected")[0].value == "-" ||
		 		 document.getElementsByName("pbnumber")[0].value == ""){
					 	correctid = false;
						alert("Insert valid PB id for HS-Left");
						return correctid;
			}
			//-->BB of HS left
			if(document.getElementsByName("bbselected")[0].value == "-" ||
		 		 document.getElementsByName("bbnumber")[0].value == ""){
					 	correctid = false;
						alert("Insert valid BB id for HS-Left");
						return correctid;
			}
			//--> FB left
			/*if(document.getElementsByName("fbleftselected")[0].value == "-" ||
				 document.getElementsByName("fbleftnumber")[0].value == ""){
					 	correctid = false;
						alert("Insert valid FB-Left id");
						return correctid;
			}
			//-->Check HS right
			if(document.getElementsByName("hscity-r")[0].value == "-" ||
				 document.getElementsByName("hsflavor-r")[0].value == "-" ||
			 	 document.getElementsByName("hsnumber-r")[0].value == ""){
					 	correctid = false;
						alert("Insert valid HS-Right id");
						return correctid;
			}*/
			//-->PB of HS right
			if(document.getElementsByName("pbselected")[1].value == "-" ||
		 		 document.getElementsByName("pbnumber")[1].value == ""){
					 	correctid = false;
						alert("Insert valid PB id for HS-Right");
						return correctid;
			}
			//-->BB of HS right
			if(document.getElementsByName("bbselected")[1].value == "-" ||
		 		 document.getElementsByName("bbnumber")[1].value == ""){
					 	correctid = false;
						alert("Insert valid BB id for HS-Right");
						return correctid;
			}
			//--> FB right
			/*if(document.getElementsByName("fbrightselected")[0].value == "-" ||
				 document.getElementsByName("fbrightnumber")[0].value == ""){
					 	correctid = false;
						alert("Insert valid FB-Right id");
						return correctid;
			}*/

			//Check stave number - 3 digits
			if(document.getElementsByName("stavenumber")[0].value.toString().length<3 || document.getElementsByName("stavenumber")[0].value.toString().length>3){
				alert("Stave-id number must have 3 digits (e.g. Stave-003 for Stave-3). Please check.");
				return false;
			}

			//Check hs lower id - 3 digits
			/*if(document.getElementsByName("hsnumber-l")[0].value.toString().length<3 || document.getElementsByName("hsnumber-l")[0].value.toString().length>3){
				alert("HS-Lower-id number must have 3 digits (e.g. HS-003 for HS-3). Please check.");
				return false;
			}

			//Check hs upper id - 3 digits
			if(document.getElementsByName("hsnumber-r")[0].value.toString().length<3 || document.getElementsByName("hsnumber-r")[0].value.toString().length>3){
				alert("HS-Upper-id number must have 3 digits (e.g. HS-003 for HS-3). Please check.");
				return false;
			}*/

			//Check fb lower id - 4 digits
			/*if(document.getElementsByName("fbleftnumber")[0].value.toString().length<4 || document.getElementsByName("fbleftnumber")[0].value.toString().length>4){
				alert("FB-Lower-id number must have 4 digits (e.g. FB-0003 for FB-3). Please check.");
				return false;
			}

			//Check fb upper id - 4 digits
			if(document.getElementsByName("fbrightnumber")[0].value.toString().length<4 || document.getElementsByName("fbrightnumber")[0].value.toString().length>4){
				alert("FB-Upper-id number must have 4 digits (e.g. FB-0003 for FB-3). Please check.");
				return false;
			}*/

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
			 	 document.getElementsByName("pbselected")[0].value.indexOf("OL") == -1 ||
			 	 document.getElementsByName("bbselected")[0].value.indexOf("OL") == -1 ||
			 	 document.getElementsByName("pbselected")[1].value.indexOf("OL") == -1 ||
			 	 document.getElementsByName("bbselected")[1].value.indexOf("OL") == -1
			 ){

				 if(document.getElementsByName("selectedstave")[0].value.indexOf("ML") == -1 ||
						document.getElementsByName("pbselected")[0].value.indexOf("ML") == -1 ||
						document.getElementsByName("bbselected")[0].value.indexOf("ML") == -1 ||
						document.getElementsByName("pbselected")[1].value.indexOf("ML") == -1 ||
						document.getElementsByName("bbselected")[1].value.indexOf("ML") == -1
					){
						correctlyr = false;
						alert("OL and ML are mixed in the component IDs, please check");
						return correctlyr;
				}

			 }

			if(correctid && correctlyr){
				document.title = 	"Rework_" +
													document.getElementsByName("pbselected")[0].value + "-" +
													document.getElementsByName("bbselected")[0].value + "-" +
													"soldering_on_" +
													document.getElementsByName("stavecity")[0].value + "-" +
													document.getElementsByName("selectedstave")[0].value + "-" +
													document.getElementsByName("stavenumber")[0].value +
													"_report";
				window.print();
				document.title = "PB,BB soldering to HS";
			}

		}
	</script>

	<!-- For cloning objects -->
	<?php include('../clone_models/solderPBBB_rework_models.php')?>


</head>

<body class="special">

	<a id="noprint" href="../../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
	<img id="noprint" src="../../img/hslegend.png" alt="HS legend" style="float: right; width: 350px; height: 180px"/>
  <br><br><br>

	<h1> [REWORK] Power Bus, Bias Bus soldering to Stave - Report </h1>
	<br>

	<fieldset>
 	 <legend> Component IDs </legend>
 	 <p> Stave ID: <?php include('../ids/stvid.php') ?></p>
 	 <p> <strong> HS-Lower </strong> <br>
 		 <ul>
 			 <li> Power Bus ID: <?php include('../ids/pblid.php')?> </li>
 			 <li> Bias Bus ID: <?php include('../ids/bblid.php')?> </li>
 			 <!--<li> Filter Board ID: <//?php include('../ids/fblid.php')?> </li>-->
 		 </ul>
 	 </p>

 	 <p> <strong> HS-Upper </strong> <br>
 		 <ul>
 			 <li> Power Bus ID: <?php include('../ids/pbuid.php')?> </li>
 			 <li> Bias Bus ID: <?php include('../ids/bbuid.php')?> </li>
 			 <!--<li> Filter Board ID: </?php include('../ids/fbrid.php')?> </li>-->
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
	<!-- Location -->
	<?php include('../location/location.php');?>

	<!--People-->
 <br>
 <?php include('../people/people.html');?>
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

	<h2> Reworked components </h2>

	<fieldset>

		<div id="placeholder-align-0">
			<div id="template-align-0">
				<hr>

				<span style="color: red; font-size: 14pt"> Component </span><br>
				<p>
					<strong> Half-Stave </strong>: <input type="checkbox"/> Lower <input type="checkbox"/> Upper <br>
					<strong>HIC in position</strong> <input id="printnumb2" type="number" placeholder="#" style="width: 60px"/>
				</p>

				<ul>
					<li><input type="checkbox" id="check1"> Cross-cables of PB </li>
					<li><input type="checkbox"> Cross-cable of BB </li>
					<li><input type="checkbox"> PB replacement </li>
					<li><input type="checkbox"> BB replacement </li>
				</ul>

				<!--In case of a bridge-->

				<p id="p1">
					Type: <input type="checkbox"/> AVDD <input type="checkbox"/> DVDD <input type="checkbox"/> AVSS <input type="checkbox"/> DVSS
				</p><br>

				<span> Description of the problem </span><br>
				<textarea rows="5" cols="100" placeholder="describe problem"></textarea>
				<br><br>

				<span> Description of the activity performed on the component </span><br>
				<textarea rows="5" cols="100" placeholder="describe activity"></textarea>
				<br><br>

				<ul>
					<li><input type="checkbox"/> It seems to work now (to be retested) </li>
					<li><input type="checkbox"/> No possibility to solve the problem</li>
				</ul>

				<?php
				include('../imagetool/imagetool.html');
				?>

				<hr>
			</div>
		</div>
		<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-align','template-align');">Add new item</button></p>

	</fieldset>

	<h2> Other comments </h2>
  <textarea rows="10" cols="100" name="modissection" placeholder="comments"></textarea>

	<!-- Images -->
	<h2> Other pictures not included in the form </h2>
	<?php
	include('../imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="printall()"/>
	<a id="noprint" href="solderPBBB_rework.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>


</body>
</html>
