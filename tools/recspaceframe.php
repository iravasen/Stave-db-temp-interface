<!doctype html>
<html lang="en">
<head>
	<title>Space Frame visual inspection (reception)</title>

	<meta http-equiv="Cache-control" content="no-cache">

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

	<style>
		p#p1{
			display: none;
		}

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

			//Check component id
			var correctid = true;
			if(document.getElementsByName("selectedsf")[0].value == "-" ||
				 document.getElementsByName("sfnumber")[0].value == ""){
					 	correctid = false;
						alert("Insert valid id for Space-Frame");
						return correctid;
			}

			//Check if all questions were answered
			var check = check_yes_no(2);

			if(check && correctid){
				document.title = document.getElementsByName("selectedsf")[0].value +
													document.getElementsByName("sfnumber")[0].value +
													"_inspection_report";
				window.print();
				document.title = "Space Frame visual inspection (reception)";
			}
		}
	</script>

	<!-- For printing immediately -->
	<?php include('allokandprint/allok.html')?>

</head>

<body class="special">

	<a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
  <br><br><br>

  <h1>Space Frame visual inspection (reception) - Report</h1>
	<br>
	<fieldset>
 	 <legend> Component IDs </legend>
  		<p> Space-Frame ID:<?php include('ids/sfid.html')?></p>
 		<p style="color: red; display: block; float: right;" id="noprint">
 			The SF id is written on one of its extremities on the vertex opposite to the base on which HSs are glued
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
 			<legend>Visible damages to SF structure?</legend><br>
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
 			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<span> Type of damage: </span> <br>
				<input id="uleg" type="checkbox"/> Some U-legs missing <br>
				<p id="p1">
					Number of missing u-legs: <input type="text" style="width: 90px"/> <br>
				</p>
				<input type="checkbox"/> Damages to the carbon lattice <br>
				<input id="oth" type="checkbox"/> Other
				<textarea id="texta1" cols="50" rows="5" placeholder="specify"></textarea>


				<?php
				include('imagetool/imagetool.html');
				?>
			</fieldset>

		</fieldset>
		<br>
		<fieldset>
			<legend>Is this SF acceptable?</legend><br>
				<input id="check" name="yes" type="checkbox" class="ok"/> Yes <br>
				<input name="no" type="checkbox"/> No <br>

				<fieldset id="ifproblem">
					<input type="checkbox" class="ok"> and it's usable for Stave assembly <br>
					<input type="checkbox"> but we put it aside in case of need <br>
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
	<a id="noprint" href="recspaceframe.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
