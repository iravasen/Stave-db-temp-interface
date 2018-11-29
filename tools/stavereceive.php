<!doctype html>
<html lang="en">
<head>
	<title>Stave reception</title>

	<meta http-equiv="Cache-control" content="no-cache">

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>


	<style>
		span#s1{
			display: none;
		}

		input#i1:checked ~ span#s1 {
			display: block;
		}

		p#tah-param{
			display: none;
		}

		input#meastime:checked ~ p#tah-param {
			display: block;
		}

		textarea#shock-param{
			display: none;
		}

		input#measshock:checked ~ textarea#shock-param {
			display: block;
		}

	</style>

	<!-- To print the page with a default name -->
	<?php include('jvscript_funct/check_yes_no.html') ?>
	<script type="text/javascript">
		function printall(){

			//Check component id
			var correctid = true;
			if(document.getElementsByName("stavecity")[0].value == "-" ||
				 document.getElementsByName("selectedstave")[0].value == "-" ||
			 	 document.getElementsByName("stavenumber")[0].value == ""){
					 	correctid = false;
						alert("Insert a valid Stave ID");
						return correctid;
			}

			//Check stave number - 3 digits
			if(document.getElementsByName("stavenumber")[0].value.toString().length<3 || document.getElementsByName("stavenumber")[0].value.toString().length>3){
				alert("Stave-id number must have 3 digits (e.g. Stave-003 for Stave-3). Please check.");
				return false;
			}

			//Check if the two images have been inserted
			var inspicture = true;
			var caption = document.getElementsByName("imagecaption");

			if(caption[1].value == ""){
				inspicture = false;
				alert("Insert image (and caption) of stave out of the transport box");
				return inspicture;
			}

			//Check if all questions were answered
			var check = check_yes_no(3);

			if(check && correctid && inspicture){
				document.title = document.getElementsByName("stavecity")[0].value +
													document.getElementsByName("selectedstave")[0].value +
													document.getElementsByName("stavenumber")[0].value +
													"_reception_after_shipment_report";
				window.print();
				document.title = "Stave shipment";
			}
		}
	</script>

	<?php include('add/addscript.html');?>



	<!--For cloning objects -->
	<?php include('clone_models/stavereceive_models.php');?>

	<script type="text/javascript">
		function show_content(){
			document.getElementById("hidden-content").style.display = "block";
		}
	</script>

</head>

<body class="special">

  <a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
	<img id="noprint" src="../img/hslegend.png" alt="HS legend" style="float: right; width: 350px; height: 180px"/>
  <br><br><br>

  <h1>Stave reception - Report</h1>
	<br>
	<fieldset>
		<legend> Component IDs </legend>
			<p> Stave ID: <?php include('ids/stvid.php')?>  </p>
			<p style="color: red; display: block; float: right;" id="noprint">
				Legend: A = Amsterdam, B = Berkeley, D = Daresbury, F = Frascati, T = Turin
			</p>
	</fieldset>

	<br>
	<fieldset>
		<legend style="color: red; font-size: 14pt;">Date</legend>
		<p>
			Reception date: <input type="date" required="required"/>
		</p>
	</fieldset>

	<br>
	<!-- Location -->
	<?php include('location/location.php');?>

<!--People-->
 <br>
 <?php include('people/people.html');?>
 <br>

<h2> Report </h2>
<br>

<form action="">
	<fieldset>
		<legend>Picture of the Stave out of the transport box.</legend><br>
		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>

	<br>

	<fieldset>
		<legend>Visible damages to Stave?</legend><br>

		<input type="checkbox" name="no" value="No"/> No
		<br />
		<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<div id="placeholder-dam-0">
				<div id="template-dam-0">
					<hr>
					<p>
						<ul>
							<li> HS flavor: <br>
								<input type="checkbox"/> Lower <br>
								<input type="checkbox"/> Upper
							</li>
							<li> Damaged component: <br>
								 <input id="i1" type="checkbox"/> HIC <br>
								 <span id="s1">Position: <input type="text" style="width: 90px"/></span>
								 <input type="checkbox"/> Space-Frame <br>
								 <input type="checkbox"/> Cold-Plate <br>
								 <input type="checkbox"/> PB and BB extensions <br>
								 <input type="checkbox"/> FPC extension <br>
							</li>

							<li> Description: <br>
								<textarea rows="10" cols="50" placeholder="describe"></textarea><br>
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
			<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-dam','template-dam');">Add new item</button></p>
		</fieldset>
	</fieldset>

	<br>

	<fieldset>
		<legend>Is there a measurement of temperature, acceleration and humidity to report (even with disposable indicators)?</legend><br>

		<input type="checkbox" name="no" value="No"/> No
		<br />
		<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
					<ul>
						<li> <input id="meastime" type="checkbox"/> Measurements as a function of time <br>

							<p id="tah-param">

								Max temperature:  <input type="text" placeholder="max T" style="width: 80px"/> °C <br>
								Min temperature:  <input type="text" placeholder="min T" style="width: 80px"/> °C <br>
								Max acceleration: <input type="text" placeholder="max acc" style="width: 80px"/> g <br>
								Max humidity: <input type="text" placeholder="max hum" style="width: 80px"/> % <br>
								<!--<input id="noprint" type="button" value="Show it!" onClick="show_content()"/>-->

							</p>
						</li>
						<li><input id="measshock" type="checkbox"/> Measurement with disposable indicators <br>
								<textarea id="shock-param" rows="15" cols="100" placeholder="Insert short report"></textarea>
						</li>
						<li> Result: <br>
							<input type="checkbox"/> Acceptable <br>
							<input type="checkbox"/> Not acceptable
						</li>
				</ul>

					<?php
					include('imagetool/imagetool.html');
					?>
		</fieldset>
	</fieldset>

	<br>

	<fieldset>
		<legend>Is this Stave acceptable?</legend><br>

		<input type="checkbox" name="yes" value="Yes"/> Yes
		<br>
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
<a id="noprint" href="stavereceive.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>
</body>
</html>
