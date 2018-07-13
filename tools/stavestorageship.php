<!doctype html>
<html lang="en">
<head>
	<title>Stave storage and ship</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

	<?php include('add/addscript.html');?>

	<style>
		span#s1{
			display: none;
		}

		input#i1:checked ~ span#s1 {
			display: block;
		}

		span#s2{
			display: none;
		}

		input#i2:checked ~ span#s2 {
			display: block;
		}

		p#vehicletype{
			display: none;
		}

		input#vehicle:checked ~ p#vehicletype {
			display: block;
		}

		input#couriertype{
			display: none;
		}

		input#courier:checked ~ input#couriertype {
			display: block;
		}

		ul#expcourchoice{
			display: none;
		}

		input#expcour:checked ~ ul#expcourchoice {
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

			//Check if at least 1 transport vehicle was inserted
			var instransport = true;
			if(!document.getElementById("van").checked &&
				 !document.getElementById("expcour").checked &&
			 	 !document.getElementById("vehicle").checked){
					 	instransport = false;
						alert("Insert at least one transport vehicle");
						return instransport;
			}

			//Check if all questions were answered
			var check = check_yes_no(4);

			if(check && correctid && instransport){
				document.title = document.getElementsByName("stavecity")[0].value +
													document.getElementsByName("selectedstave")[0].value +
													document.getElementsByName("stavenumber")[0].value +
													"_storage_shipment_report";
				window.print();
				document.title = "Stave storage and ship";
			}
		}
	</script>

	<!-- For storage ok -->
	<script type="text/javascript">
	  function ok(){
	    var okelem = document.getElementsByClassName("ok");
	    for(i=0; i<okelem.length; i++)
	      okelem[i].checked = true;
	  }
	</script>

	<!--For cloning objects-->
	<?php include('clone_models/stavestorageship_models.php')?>

</head>

<body class="special">

  <a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
	<img id="noprint" src="../img/hslegend.png" alt="HS legend" style="float: right; width: 350px; height: 180px"/>
  <br><br><br>

  <h1>Stave storage and shipment- Report</h1>
	<br>

	<fieldset>
 	 <legend> Component IDs </legend>
 	 	<p> Stave ID: <?php include('ids/stvid.html')?> </p>
 		<p style="color: red; display: block; float: right;" id="noprint">
 			Legend: A = Amsterdam, B = Berkeley, D = Daresbury, F = Frascati, T = Turin
 		</p>
  </fieldset>

	<br>
	<fieldset>
		<legend style="color: red; font-size: 14pt;">Date</legend>
		<p>
			<h4> Storage </h4>
			Start: <input type="date" required="required"/> <br>
			End: <input type="date" required="required"/> <br>
			<hr>
			<h4> Shipment </h4>
			Start: <input type="date" required="required"/> <br>
			End (approx.): <input type="date" required="required"/>
		</p>
	</fieldset>

	<br>
	<!-- Location -->
	<?php include('location/location.html');?>

<!--People-->
 <br>
 <?php include('people/people.html');?>
 <br>

 <form>
	 <fieldset>
 		<legend> General info </legend>
 		Vehicle used for transportation of the Stave to CERN (<span id="noprint" style="color: red"> trasport document to be attched in the GUI</span>)<br>
 		<input id="van" type="checkbox"/> Van of the university / lab <br>
 		<input id="expcour" type="checkbox"/> Express courier <br>
 			<ul id="expcourchoice">
 				<li> <input type="checkbox"/> DHL </li>
 				<li> <input type="checkbox"/> FedEx </li>
 				<li> <input id="courier" type="checkbox"/> Other
 					<input id="couriertype" type="text" style="width: 400px" placeholder="specify"/>
 				</li>
 			</ul>
 		<input id="vehicle" type="checkbox"/> Other
 		<p id="vehicletype">
 			<input type="text" style="width: 400px" placeholder="specify"/>
 		</p>
 	</fieldset>
</form>
<br>

<h2> Report </h2>
<br><br>
<h2>- Storage section </h2>
<br>
<input id="noprint" type="button" value="Storage ok" style="position: center" onClick="ok()"/>
<br>
<form action="">
	<fieldset>
		<legend>Visible damages to Stave during storage period ?</legend><br>
		<input type="checkbox" name="no" value="No" class="ok"/> No
		<br />
		<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<div id="placeholder-storage-0">
				<div id="template-storage-0">
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
			<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-storage','template-storage');">Add new item</button></p>
		</fieldset>

	</fieldset>
	<br>
	<fieldset>
		<legend>Did you measure high temperature variations inside the storage room?</legend><br>
		<input type="checkbox" name="no" value="No" class="ok"/> No
		<br />
		<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<ul>
				<li> Max temperature: <input type="text" placeholder="max temp" style="width: 90px"/> °C</li>
				<li> Min temperature: <input type="text" placeholder="min temp" style="width: 90px"/> °C </li>
			</ul>

			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>
	</fieldset>
	<br>

	<fieldset>
		<legend>Were the conditions during the storage period considered acceptable?</legend><br>
		<input type="checkbox" name="yes" value="Yes" class="ok"/> Yes
		<br>
		<input id="check" type="checkbox" name="no" value="No"/> No

		<fieldset id="ifproblem">
			<p> Where will the stave go? </p>
			<textarea rows="10" cols="100" name="modissection" placeholder="Comment"></textarea>

		</fieldset>
	</fieldset>

	<br><br>
	<h2>- Shipment section </h2>
	<fieldset>
		<legend>Visible damages to stave when inserting it in the transport box?</legend><br>

		<input type="checkbox" name="no" value="No"/> No
		<br />
		<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<div id="placeholder-ship-0">
				<div id="template-ship-0">
					<hr>
					<p>
						<ul>
							<li> HS flavor: <br>
								<input type="checkbox"/> Lower <br>
								<input type="checkbox"/> Upper
							</li>
							<li> Damaged component: <br>
								 <input id="i2" type="checkbox"/> HIC <br>
								 <span id="s2">Position: <input type="text" style="width: 90px"/></span>
								 <input type="checkbox"/> Space-Frame <br>
								 <input type="checkbox"/> Cold-Plate <br>
								 <input type="checkbox"/> PB and BB extensions <br>
								 <input type="checkbox"/> FPC extension <br>
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
			<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-ship','template-ship');">Add new item</button></p>
		</fieldset>
	</fieldset>
	<br>
	<fieldset>
		<legend>Picture of the Stave inside the transport box before closing it.</legend><br>
		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>
	<br>
	<fieldset>
		<legend>Picture of the transport box before shipping it.</legend><br>
		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>




</form>

<h2> Other comments </h2>
<textarea rows="15" cols="100" name="modissection" placeholder="comments"></textarea>

<!-- Images -->
<h2> Other pictures not included in the form </h2>
<?php
include('imagetool/imagetool.html');
?>

<input id="noprint" type="button" value="Save page" style="position: center" onClick="printall()"/>
<a id="noprint" href="stavestorage.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
