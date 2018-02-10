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
			if(document.getElementsByName("hscity-l")[0].value == "-" ||
				 document.getElementsByName("hsflavor-l")[0].value == "-" ||
			 	 document.getElementsByName("hsnumber-l")[0].value == ""){
					 	correctid = false;
						alert("Insert valid HS-Left id");
						return correctid;
			}
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
			if(document.getElementsByName("fbleftselected")[0].value == "-" ||
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
			}
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
			if(document.getElementsByName("fbrightselected")[0].value == "-" ||
				 document.getElementsByName("fbrightnumber")[0].value == ""){
					 	correctid = false;
						alert("Insert valid FB-Right id");
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

			if(correcid && correctlyr){
				document.title = 	"Rework_" +
													document.getElementsByName("bbtype")[0].value +
													"_and_" +
													document.getElementsByName("pbtype")[0].value +
													"_soldering_on_" +
													document.getElementsByName("stavecity")[0].value +
													document.getElementsByName("selectedstave")[0].value +
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
 	 <p> Stave ID: <?php include('../ids/stvid.html') ?></p>
 	 <p> <strong> HS-Left </strong> <br>
 		 <ul>
 			 <li> ID: <?php include('../ids/hslid.html')?> </li>
 			 <li> Power Bus ID: <?php include('../ids/pbid.html')?> </li>
 			 <li> Bias Bus ID: <?php include('../ids/bbid.html')?> </li>
 			 <li> Filter Board ID: <?php include('../ids/fblid.html')?> </li>
 		 </ul>
 	 </p>

 	 <p> <strong> HS-Right </strong> <br>
 		 <ul>
 			 <li> ID: <?php include('../ids/hsrid.html')?> </li>
 			 <li> Power Bus ID: <?php include('../ids/pbid.html')?> </li>
 			 <li> Bias Bus ID: <?php include('../ids/bbid.html')?> </li>
 			 <li> Filter Board ID: <?php include('../ids/fbrid.html')?> </li>
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
					<strong> Half-Stave </strong>: <input type="checkbox"/> Left <input type="checkbox"/> Right <br>
					<strong>HIC in position</strong> <input id="printnumb2" type="number" placeholder="#" style="width: 60px"/>
				</p>

				<ul>
					<li><input type="checkbox" id="check1"> Cross-cables of PB </li>
					<li><input type="checkbox"> Cross-cable of BB </li>
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
