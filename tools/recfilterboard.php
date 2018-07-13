<!doctype html>
<html lang="en">
<head>
	<title>Filter Board visual inspection (reception)</title>

	<meta http-equiv="Cache-control" content="no-cache">

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

	<style>
		textarea#texta1{
			display: none;
		}

		input#oth:checked ~ textarea#texta1 {
			display: block;
		}
	</style>

	<!-- To print the page with a default name -->
	<?php include('jvscript_funct/check_yes_no.html') ?>
	<script type="text/javascript">
		function printall(){

			//Check if component ids were inserted
			var correctid = true;
			if(document.getElementsByName("fbselected")[0].value == "-" ||
				 document.getElementsByName("fbnumber")[0].value == ""){
					 	correctid=false;
						alert("Insert valid FB id");
						return correctid;
			}

			//Check digits in FB number
			var checkdigit = true;
			if(document.getElementsByName("fbnumber")[0].value.toString().length < 4 || document.getElementsByName("fbnumber")[0].value.toString().length > 4){
				checkdigit = false;
				alert("FB id number must have four digits (e.g 0001). Please check.");
				return checkdigit;
			}

			//Check if all questions were answered
			var check = check_yes_no(2);

			if(check && correctid && checkdigit){
				document.title = document.getElementsByName("fbselected")[0].value +
													document.getElementsByName("fbnumber")[0].value +
													"_reception_test_report";
				window.print();
				document.title = "Filter Board visual inspection (reception)";
			}

		}
	</script>

	<?php include('add/addscript.html');?>

	<!-- For printing immediately -->
	<?php include('allokandprint/allok.html')?>

	<!-- For cloning objects -->
	<?php include('clone_models/recfilterboard_models.php')?>

</head>

<body class="special">

	<a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
  <br><br><br>

  <h1>Filter Board visual inspection (reception) - Report</h1>
	<br>

	<fieldset>
		<legend> Component IDs </legend>
			<p> Filter-Board ID: <?php include('ids/fbid.html')?> </p>
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

	<h2>Report</h2>
	<br>
	<input id="noprint" type="button" value="All ok & save" style="position: center" onClick="okandprintall()"/>
	<br>
	<form action="">
		<fieldset>
 			<legend>Visible damages on the FB ?</legend><br>
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

			<fieldset id="ifproblem">

				<ul>
					<li> Options (<span id="noprint">you can chose more than one option if needed </span>)<br>

			 			<input type="checkbox" name="bend" value="bend"/> Cracks on the board
			 			<br />
			 			<input type="checkbox" name="engr" value="engr"/> Engravings
						<br />
			 			<input type="checkbox" name="engr" value="engr"/> Soldering pads for PB on top layer damaged (side of the capacitors)
						<br />
						<input type="checkbox" name="engr" value="engr"/> Soldering pad for PB on bottom layer damaged
						<br />
						<input type="checkbox" name="engr" value="engr"/> Soldering pad for BB damaged
						<br />
			 			<input type="checkbox" name="fbpad" value="fbpad"/> Decoupling capacitors
						<br />
			 			<input type="checkbox" name="cap" value="cap"/>  Some connector pins are bent
						<br />
			 			<input type="checkbox" name="cap" value="cap"/>  Some connector pins are missing
						<br />
						<input id="oth" type="checkbox" name="other" value="other"/> Other
						<textarea id="texta1" cols="50" rows="4" placeholder="specify"></textarea>
					</li>
					<li>
						Do they affect the Filter-Board functioning? <input type="checkbox"/> Yes <input type="checkbox"/> No
					</li>
				</ul>

				<?php include('imagetool/imagetool.html');?>

			</fieldset>

		</fieldset>

		<br>
		<!--
		<fieldset>
 			<legend>Presence of shorts?</legend><br>
			<input type="checkbox" name="no" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-shorts-0">
					<div id="template-shorts-0">
						<ul>
							<li> Describe: <br>
								<textarea rows="3" cols="100" placeholder="describe"></textarea>
							</li>
							<li> R [Ohm] wrt ground: <input type="text" placeholder="R [Ohm]"/></li>
							<li> R [Ohm] wrt another strip: <input type="text" placeholder="R [Ohm]"/> </li>

						</ul>

						<?php
						//include('imagetool/imagetool.html');
						?>


						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-shorts','template-shorts');">Add new item</button></p>
			</fieldset>

		</fieldset>-->
		<br>
		<fieldset>
			<legend>Is this FB acceptable?</legend><br>
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
	<a id="noprint" href="recfilterboard.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
