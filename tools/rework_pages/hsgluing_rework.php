<!doctype html>
<html lang="en">
<head>
	<title>HS gluing on SF</title>

	<meta http-equiv="Cache-control" content="no-cache">

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../../css/fieldstyle.css"/>

	<br>
  <?php include('../add/addscript.html');?>
  <br>

	<style>
		span#s1{
			display: none;
		}

		span#s2{
			display: none;
		}

		textarea#texta1{
			display: none;
		}

		textarea#textyes{
			display: none;
		}

		ul#notemp-answ{
			display: none;
		}

		input#notemp:checked ~ ul#notemp-answ {
			display: block;
		}

		input#yesdam:checked ~ textarea#textyes {
			display: block;
		}

		input#oth:checked ~ textarea#texta1 {
			display: block;
		}

		input#i1:checked ~ span#s1 {
			display: block;
		}

		input#i2:checked ~ span#s2 {
			display: block;
		}


	</style>

	<!-- To print the page with a default name -->
	<?php include('../jvscript_funct/check_yes_no.html') ?>
	<script type="text/javascript">

		function printall(){

			//Check if the (new) HS IDs have been inserted
			var correctid = true;
			var hscity = document.getElementsByName("selectedcity")[0].value;
			var hsflav = document.getElementsByName("selectedhs")[0].value;
			var hsnumb = document.getElementsByName("hsnumber")[0].value;
			if(hscity == "-" || hsflav == "-" || hsnumb == ""){
				correctid = false;
				alert("Insert correct HS ID");
				return correctid;
			}
			//Check SF id
			var selsf = document.getElementsByName("selectedsf")[0].value;
			var sfnumb = document.getElementsByName("sfnumber")[0].value;
			if(selsf=="-" || sfnumb == ""){
				correctid = false;
				alert("Insert correct SF ID");
				return correctid;
			}

			//Check if (new) HS number has 3 digits
			if(document.getElementsByName("hsnumber")[0].value.toString().length < 3 || document.getElementsByName("hsnumber")[0].value.toString().length > 3 ){
				alert("HS-id number must have 3 digits (e.g. HS-003 for HS-3). Please check.");
				return false;
			}

			//Check if (old) HS id has been inserted
			if(document.getElementById("sites-old").value == "-" ||
				 document.getElementById("selhs-old").value == "-" ||
				 document.getElementsByName("hsnumber")[1].value == ""
			 ){
				 alert("Insert a correct (old) HS id");
				 return false;
			}

			//Check if (old) HS number has 3 digits
			if(document.getElementsByName("hsnumber")[1].value.toString().length < 3 || document.getElementsByName("hsnumber")[1].value.toString().length > 3){
				alert("(old) HS number must have 3 digits (e.g 003 for HS-3). Please check.");
				return false;
			}

			//Check if batch number of the glue was inserted
			var batchno = document.getElementById("batchnumber").value;
			if(batchno == ""){
				alert("Insert a valid glue batch number");
				return false;
			}

			//Check if a picture of the glue tube is present
			var gluepicture = true;
			var caption = document.getElementsByName("imagecaption");

			if(caption[0].value == ""){
				gluepicture = false;
				alert("The image of the glue tube or its caption are missing. See first box of the Report section");
				return gluepicture;
			}

			//Check if all questions were answered
			var check = check_yes_no(5);

			if(check && gluepicture){
				document.title = 	"Rework_" +
													document.getElementsByName("selectedcity")[0].value + "-" +
													document.getElementsByName("selectedhs")[0].value + "-" +
													document.getElementsByName("hsnumber")[0].value +
													"_gluing_on_" +
													document.getElementsByName("selectedsf")[0].value + "-" +
													document.getElementsByName("sfnumber")[0].value +
													"_report";
				window.print();
				document.title = "HS gluing on SF";
			}

		}
	</script>

	<!-- For printing immediately -->
	<script type="text/javascript">
	  function okandprintall(){
	    var okelem = document.getElementsByClassName("ok");
	    for(i=0; i<okelem.length; i++)
	      okelem[i].checked = true;
			var roomtemp = document.getElementById("roomtemp");
			roomtemp.value = "19-20";
	    printall();
	  }
	</script>

	<!-- For cloning objects -->
	<?php include('../clone_models/hsgluing_models.php')?>

</head>

<body class="special">

	<a id="noprint" href="../../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
	<img id="noprint" src="../../img/hslegend.png" alt="HS legend" style="float: right; width: 350px; height: 180px"/>
  <br><br><br>

  <h1>[REWORK] HS removal/gluing from/on Space Frame - Report </h1>
	<h3 id="noprint"> Part of the Stave assembly </h3>

	<fieldset>
		<legend> Component IDs </legend>
			<p> (New) Half-Stave ID: <?php include('../ids/hsid.php')?>
				<span style="color: red; display: block; float: right;" id="noprint">
					Legend: A = Amsterdam, B = Berkeley, D = Daresbury, F = Frascati, T = Turin
				</span>
			</p>
			<p> (Old) Half-Stave ID: <?php include('../ids/hsid_old.php')?>
				<span style="color: red; display: block; float: right;" id="noprint">
					Legend: A = Amsterdam, B = Berkeley, D = Daresbury, F = Frascati, T = Turin
				</span>
			</p>
			<p> Space-Frame ID: <?php include('../ids/sfid.php')?>
				<span id="noprint" style="color: red; float: right;"> SF ID is on one side of the SF, on the vertex opposite to the side on which HSs are glued </span>
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

  <h2>Report</h2>

	<form action="">
		<fieldset>
 			<legend>Glue. <strong id="noprint">Add picture of the tube with its label.</strong></legend><br>
 			<p> Batch number: <input id="batchnumber" type="text" placeholder="batch #"/></p>
			<p> Opening date: <input type="date"/></p>
			<p> Expiry date: <input type="date"/></p>

			<?php
			include('../imagetool/imagetool.html');
			?>
		</fieldset>
		<br>

		<input id="noprint" type="button" value="All ok & save" style="position: center" onClick="okandprintall()"/>

		<br>
		<br>
		<!-- HS removal from SF -->
		<fieldset>
 			<legend>Problems during HS removal from the SF (blade cut)?</legend><br>
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<ul>
					<li> Problem: <br>
						<textarea placeholder="Describe the problem" cols="100" rows="4"></textarea>
						<br />
					</li>
					<li> How did you solve it? <br>
						<textarea placeholder="Solution" cols="100" rows="4"></textarea>
					</li>
					<br>
					<li> Did you damage the HS and/or SF? <input id="yesdam" type="checkbox"/> Yes <input type="checkbox"/> No <br>
						<textarea id="textyes" placeholder="describe the damage" cols="100" rows="4"></textarea> <br>
					</li>
				</ul>
				<?php
				include('../imagetool/imagetool.html');
				?>
			</fieldset>
		</fieldset>

		<br>
		<fieldset>
 			<legend>Problems during HS handling?</legend><br>
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<ul>
					<li> Problem: <br>
						<textarea placeholder="Describe the problem" cols="100" rows="4"></textarea>
						<br />
					</li>
					<li> How did you solve it? <br>
						<textarea placeholder="Solution" cols="100" rows="4"></textarea>
					</li>
					<br>
					<li> Did you damage the HS? <input id="yesdam" type="checkbox"/> Yes <input type="checkbox"/> No <br>
						<textarea id="textyes" placeholder="describe the damage" cols="100" rows="4"></textarea> <br>
					</li>
				</ul>
				<?php
				include('../imagetool/imagetool.html');
				?>
			</fieldset>
		</fieldset>
		<br>
		<fieldset>
 			<legend>Problems during (new) HS gluing under the SF?</legend><br>
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<ul>
					<li> Problem: <br>
						<input id="i1"type="checkbox" name="1" value="1"/> Glue too dense
						<br />
						<span id="s1"/> Glue adhesion? <input type="checkbox"/> Good <input type="checkbox"/> Bad</span>
						<br />
						<input id="i2" type="checkbox" name="2" value="2"/> Glue too liquid
						<br />
						<span id="s2"/> Glue flowed down damaging the FPC? <input type="checkbox"/> No <input type="checkbox"/> Yes</span>
						<br />
						<input id="oth" type="checkbox"/> Other
						<textarea id="texta1" placeholder="specify" cols="50" rows="4"></textarea>
						<br />
					</li>
					<li> Result is acceptable? <input type="checkbox"/> Yes <input type="checkbox"/> No </li>
				</ul>
				<?php
				include('../imagetool/imagetool.html');
				?>
			</fieldset>
		</fieldset>
		<br>

		<fieldset>
 			<legend>Did you observe strong room temperature gradients during HS gluing?</legend><br>
			<input id="notemp" type="checkbox" name="no" value="No" class="ok"/> No
			<br />
 			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes
 			<br />

			<ul id="notemp-answ">
				<li> Room temperature during gluing: <input id="roomtemp" type="text" placeholder="T" style="width: 50px"/> °C </li>
			</ul>

			<fieldset id="ifproblem">
				<p> Indicate the maximum and minimum temperature observed </p>
				<ul>
					<li> Max temperature: <input type="text" placeholder="max T" style="width: 70px"/> °C </li>
					<li> Min temperature: <input type="text" placeholder="min T" style="width: 70px"/> °C </li>
				</ul>
			</fieldset>
		</fieldset>

		<br>

		<fieldset>
 			<legend>Do you think the procedure (with the handling bar) damaged the HS?</legend><br>
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
			<input id="check" type="checkbox" name="yes" value="Yes"/> Probably (to be tested)
 			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-dam-0">
					<div id="template-dam-0">
						<hr>
						<ul>
							<li> For HIC in position: <input id="printnumb2" type="number" style="width: 60px"/></li>
							<li> Describe the eventual problem: <br>
								 <textarea rows="5" cols="100" placeholder="describe"></textarea>
							</li>
							<li> Damages to FPC-Extension? <input type="checkbox"/> Yes <input type="checkbox"/> No </li>
						</ul>

						<?php
						include('../imagetool/imagetool.html');
						?>

						<hr>
					</div>
				</div>

				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-dam','template-dam');">Add new item</button></p>
			</fieldset>

		</fieldset>

	</form>
	<h2> Other comments </h2>
  <textarea rows="10" cols="100" name="modissection" placeholder="comments"></textarea>

	<!-- Images -->
	<h2> Other pictures not included in the form </h2>
	<?php
	include('../imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="printall()"/>
	<a id="noprint" href="hsgluing_rework.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>


</body>
</html>
