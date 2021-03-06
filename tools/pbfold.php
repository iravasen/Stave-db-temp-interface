<!doctype html>
<html lang="en">
<head>
	<title>PB+BB folding</title>

	<meta http-equiv="Cache-control" content="no-cache">

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

  <?php include('add/addscript.html');?>

	<style>
		span#siuarm{
			display: none;
		}
		input#iuarm:checked ~ span#siuarm{
			display: block;
		}
	</style>

	<!-- To print the page with a default name -->
	<?php include('jvscript_funct/check_yes_no.html') ?>
	<script type="text/javascript">

		function printall(){
			//Check component ids
			var correctid = true;
			//----> Stave
			if(document.getElementsByName("stavecity")[0].value == "-" ||
				 document.getElementsByName("selectedstave")[0].value == "-" ||
			 	 document.getElementsByName("stavenumber")[0].value == ""){
					 correctid = false;
					 alert("Insert Stave ID");
					 return correctid;
			}
			//----> HS-right
			/*if(document.getElementsByName("hscity-r")[0].value == "-" ||
				 document.getElementsByName("hsflavor-r")[0].value == "-" ||
			 	 document.getElementsByName("hsnumber-r")[0].value == ""){
					 correctid = false;
					 alert("Insert HS-Right ID");
					 return correctid;
			}

			//-->PB of HS right
			if(document.getElementsByName("pbselected")[0].value == "-" ||
		 		 document.getElementsByName("pbnumber")[0].value == ""){
					 	correctid = false;
						alert("Insert valid PB id for HS-Upper");
						return correctid;
			}
			//-->BB of HS right
			if(document.getElementsByName("bbselected")[0].value == "-" ||
		 		 document.getElementsByName("bbnumber")[0].value == ""){
					 	correctid = false;
						alert("Insert valid BB id for HS-Upper");
						return correctid;
			}

			//-->PB of HS left
			if(document.getElementsByName("pbselected")[1].value == "-" ||
		 		 document.getElementsByName("pbnumber")[1].value == ""){
					 	correctid = false;
						alert("Insert valid PB id for HS-Lower");
						return correctid;
			}
			//-->BB of HS left
			if(document.getElementsByName("bbselected")[1].value == "-" ||
		 		 document.getElementsByName("bbnumber")[1].value == ""){
					 	correctid = false;
						alert("Insert valid BB id for HS-Lower");
						return correctid;
			}

			//----> HS-left
			if(document.getElementsByName("hscity-l")[0].value == "-" ||
				 document.getElementsByName("hsflavor-l")[0].value == "-" ||
			 	 document.getElementsByName("hsnumber-l")[0].value == ""){
					 correctid = false;
					 alert("Insert HS-Left ID");
					 return correctid;
			}
			*/
			//Check stave number - 3 digits
			if(document.getElementsByName("stavenumber")[0].value.toString().length<3 || document.getElementsByName("stavenumber")[0].value.toString().length>3){
				alert("Stave-id number must have 3 digits (e.g. Stave-003 for Stave-3). Please check.");
				return false;
			}

			//Check hs upper id - 3 digits
			/*if(document.getElementsByName("hsnumber-r")[0].value.toString().length<3 || document.getElementsByName("hsnumber-r")[0].value.toString().length>3){
				alert("HS-Upper-id number must have 3 digits (e.g. HS-003 for HS-3). Please check.");
				return false;
			}

			//Check hs lower id - 3 digits
			if(document.getElementsByName("hsnumber-l")[0].value.toString().length<3 || document.getElementsByName("hsnumber-l")[0].value.toString().length>3){
				alert("HS-Lower-id number must have 3 digits (e.g. HS-003 for HS-3). Please check.");
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
			}*/



			//Check if the Stave and the two HS are "OL" or "ML"
			var correctlayer = true;

			/*if(document.getElementsByName("selectedstave")[0].value.indexOf("OL") == -1 ||
				 document.getElementsByName("hsflavor-r")[0].value.indexOf("OL") == -1 ||
			 	 document.getElementsByName("hsflavor-l")[0].value.indexOf("OL") == -1){

					 if(document.getElementsByName("selectedstave")[0].value.indexOf("ML") == -1 ||
							document.getElementsByName("hsflavor-r")[0].value.indexOf("ML") == -1 ||
							document.getElementsByName("hsflavor-l")[0].value.indexOf("ML") == -1){

								 correctlayer = false;
								 alert("The layer (OL or ML) definition in component ID section is wrong, please check");
								 return correctlayer;
					 }
			}*/


			//Check if at least 1 picture has been inserted
			var imagecheck = true;
			var caption = document.getElementsByName("imagecaption");

			if(caption[2].value == ""){
				imagecheck = false;
				alert("Insert at least one image (and caption) in the first box with the final result");
				return imagecheck;
			}

			//Check if all questions were answered
			var check = check_yes_no(2);

			if(check && correctid && imagecheck && correctlayer){
				document.title = "PB_and_BB_folding_on_" +
													document.getElementsByName("stavecity")[0].value + "-" +
													document.getElementsByName("selectedstave")[0].value + "-" +
													document.getElementsByName("stavenumber")[0].value +
													"_report";
				window.print();
				document.title = "PB+BB folding";
			}
		}
	</script>

	<style>
		textarea#uarmlwr_text{
			display: none;
		}

		input#uarmlwr:checked ~ textarea#uarmlwr_text{
			display: block;
		}

		textarea#uarmupr_text{
			display: none;
		}

		input#uarmupr:checked ~ textarea#uarmupr_text{
			display: block;
		}
	</style>

	<!-- For printing immediately -->
	<?php include('allokandprint/allok.html')?>

	<!--For cloning objects -->
	<?php include('clone_models/pbfold_models.php')?>

</head>

<body class="special">

  <a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
	<img id="noprint" src="../img/hslegend.png" alt="HS legend" style="float: right; width: 350px; height: 180px"/>
  <br><br><br>

  <h1>Power Bus + Bias Bus folding for Stave - Report</h1>
	<br>

	<fieldset>
		<legend> Component IDs </legend>
		  <p> Stave ID: <?php include('ids/stvid.php') ?></p>

			<!--
			<p><strong> Lower side </strong></p>
			<ul>
				<li> HS Id: <//?php include('ids/hslid.html')?> </li>
				<li> PB Id: <//?php include('ids/pbid.html')?></li>
				<li> BB Id: <//?php include('ids/bbid.html')?></li>
			</ul>

			<p> <strong>Upper side</strong> </p>
			<ul>
				<li> HS Id: <//?php include('ids/hsrid.html')?> </li>
				<li> PB Id: <//?php include('ids/pbid.html')?></li>
				<li> BB Id: <//?php include('ids/bbid.html')?></li>
			</ul>-->

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
	<?php include('location/location.php');?>

	<!--People-->
 <br>
 <?php include('people/people.html');?>
 <br>

 <!-- General info -->
 <fieldset>
 	<legend> General Info </legend>

			<fieldset>
		 	 	<legend>Type of (narrow) u-arm used</legend>
		 			<input type="checkbox"/> 2.5 mm wide (5.5 mm long) <br>
		 			<input id="iuarm" type="checkbox"/> Other

		 		<span id="siuarm"> <input type="text" placeholder="specify" style="width: 500px"/> </span>
		 	</fieldset>


			<br>
			<fieldset id="uarmpositions">
				<legend> <strong> Positions of the U-arms on each Module</strong> </legend>
				<span> <strong> Lower side </strong> </span>
  			<ul>
					<li>
						<input type="checkbox"/> default: middle of slave 6 for Modules 1-6, middle of slave 1 & 6 for Module 7
					</li>
					<li>
						<input id="uarmlwr" type="checkbox"/> Other  <br>
						<textarea id="uarmlwr_text" rows="15" cols="100" placeholder="specify configuration"></textarea>
					</li>
				</ul>
				<br>

				<span> <strong> Upper side </strong> </span>
  			<ul>
					<li>
						<input type="checkbox"/> default: before master 0 and middle of slave 6 for Module 1, middle of slave 6 for Modules 2-7
					</li>
					<li>
						<input id="uarmupr" type="checkbox"/> Other  <br>
						<textarea id="uarmupr_text" rows="15" cols="100" placeholder="specify configuration"></textarea>
					</li>
				</ul>
				<br>

  		</fieldset>

 </fieldset>


	<h2>Report</h2>
	<br>
	<form action="">

		<fieldset id="finalresult-fold">
 			<legend>Picture/s of the final result for HS-RIGHT and HS-LEFT. <span id="noprint" style="color: red;"> <strong> At least one picture </strong></span></legend><br>
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>
		<br>
		<input id="noprint" type="button" value="All ok & save" style="position: center" onClick="okandprintall()"/>
		<br>
		<fieldset>
 			<legend>Visible damages to the cross-cables?</legend><br>
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
 			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-ccdam-0">
					<div id="template-ccdam-0">
						<hr>
						<p>
							<ul>
								<li> For HS: <input type="checkbox"/> Lower <input type="checkbox"/> Upper </li>
								<li> For HIC in position: <input id="printnumb2" type="number" style="width: 70px"/> </li>
								<li> CC type:
									<input type="checkbox"/> AVDD
									<input type="checkbox"/> DVDD
									<input type="checkbox"/> AVSS
									<input type="checkbox"/> DVSS
									<input type="checkbox"/> BIAS
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

				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-ccdam','template-ccdam');">Add new item</button></p>
			</fieldset>

		</fieldset>
		<br>
		<fieldset>
 			<legend>Do you think to have damaged the HICs?</legend><br>
 			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-hicdam-0">
					<div id="template-hicdam-0">
						<hr>
						<p>
							<ul>
								<li> For HS: <input type="checkbox"/> Lower <input type="checkbox"/> Upper </li>
								<li> HIC in position: <input id="printnumb2" type="number" style="width: 70px"/> </li>
								<li> Description: <br>
									<textarea rows="3" cols="50" placeholder="describe"></textarea><br>
								</li>
								<li> Result <br>
									<input type="checkbox"/> Acceptable (to be tested) <br>
									<input type="checkbox"/> Not acceptable, serious damage
								</li>
							</ul>
						</p>

						<?php
						include('imagetool/imagetool.html');
						?>

						<hr>
					</div>
				</div>

				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-hicdam','template-hicdam');">Add new item</button></p>
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
	<a id="noprint" href="pbfold.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>


</body>
</html>
