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

		input#othPBBB{
			display: none;
		}

		input#othExt{
			display: none;
		}

		input#othFB{
			display: none;
		}

		input#othUarm{
			display: none;
		}

		input#othPins{
			display: none;
		}

		input#othBridge{
			display: none;
		}

		input#othCool{
			display: none;
		}

		input#checkOthCool:checked ~ input#othCool{
			display: block;
		}

		input#checkOthPins:checked ~ input#othPins{
			display: block;
		}

		input#checkOthBridge:checked ~ input#othBridge{
			display: block;
		}

		input#checkOthUarm:checked ~ input#othUarm{
			display: block;
		}

		input#checkOthExt:checked ~ input#othExt{
			display: block;
		}

		input#checkOthPBBB:checked ~ input#othPBBB{
			display: block;
		}

		input#checkOthFB:checked ~ input#othFB{
			display: block;
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

			//Check the database checkbox
			if(!document.getElementById("databasecheck").checked){
				alert("Check the checkbox for DB activites to confirm that all the activities for this Stave are in the DB");
				return false;
			}

			//Check if all questions were answered
			var check = check_yes_no(4);

			if(check && correctid && instransport){
				document.title = document.getElementsByName("stavecity")[0].value + "-" +
													document.getElementsByName("selectedstave")[0].value + "-" +
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

	<!-- List of DB activities -->
	<script type="text/javascript">
		function activitylist(){
			alert("Reception of PB for HS-Lower \n" +
						 "Reception of PB for HS-Upper and Lower \n" +
						 "Reception of BB for HS-Upper and Lower \n" +
						 "Reception of FB for HS-Upper and Lower \n" +
						 "Reception of CP for HS-Upper and Lower \n" +
						 "Reception of SF \n" +
						 "HIC-Tab-cut for 7 HICs of HS-Upper and Lower \n" +
						 "CP planarity for HS-Upper and Lower \n" +
						 "HS-Upper and Lower assembly \n" +
						 "HS-Upper and Lower soldering/desoldering (bridge, ext, resistors) \n"+
						 "U-arm gluing on HS-Upper and Lower \n"+
						 "Stave w/o PB&BB assembly \n"+
						 "Stave final metrology \n"+
						 "PB+BB soldering to FB for HS-Upper and Lower \n"+
						 "PB+BB soldering to Stave (both HSs) \n"+
						 "PB+BB folding for Stave (both HSs) \n"+
						 "Stave qualification test HS-Upper and Lower \n"+
						 "Stave storage and shipment (this activity!)");
				return true;
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
 	 	<p> Stave ID: <?php include('ids/stvid.php')?> </p>
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
	<?php include('location/location.php');?>

<!--People-->
 <br>
 <?php include('people/people.html');?>
 <br>

 <form>
	 <fieldset>
 		<legend> General info </legend>
 		Vehicle used for transportation of the Stave to CERN <span id="noprint" style="color: red"> (trasport document to be attached in the GUI)</span><br>
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
	<br><br>

	<h2>- Database activities </h2>
	<fieldset>
		<legend> Database activities for Stave assembly </legend>
		<p id="noprint">
			Click <a id="noprint" style="text-decoration: none;" onClick="activitylist()"> <input type="button" value="here"/> </a>
			if you want to see the full list of activities for a Stave.
		</p>
		<br><br>
		<input type="checkbox" id="databasecheck"/> <span style="font-weight: bold;">All the activities for this Stave are in the database and are closed </span><br>
		<br><br>
		<textarea rows="11" cols="80" placeholder="Comments"></textarea>
	</fieldset>

	<br><br>
	<h2>- Final checks before shipment </h2>
	<h3 id="noprint"> INFO: Please go through the items and check the boxes concerning things which you had to be rework. <span id="noprint" style="font-weight: bold;">Please attach pictures of the reworks </span>
	</h3>

		<fieldset style="background-color: #ADFF2F;">
			<legend style="color: black; font-weight: bold; border-color: black; background-color: #ADFF2F;"> Power Bus and Bias Bus </legend>

			<textarea rows="18" cols="80" placeholder="Comments" style="float: right; width: 60%; margin-bottom: -30em;"></textarea>

			<p style="padding-right: 900px">
				<input type="checkbox" name="checkbefship"/> Capacitors wrapped in the kapton <br>
				<input type="checkbox" name="checkbefship"/> Capacitors not properly soldered (too much tin, alignment on pads, tin horns, ...) <br>
				<input type="checkbox" name="checkbefship"/> PB and/or BB extension stucked to FPC extension (mechanical stress) <br>
				<input type="checkbox" name="checkbefship"/> BB attachment to PB improved <br>
				<input type="checkbox" name="checkbefship"/> Bendings of the extensions <br>
				<input type="checkbox" name="checkbefship"/> Cross-cables wrongly folded (inside) <br>
				<input type="checkbox" name="checkbefship"/> Flatness of the busses not optimal (wavy busses)<br>
				<input type="checkbox" name="checkbefship"/> Power Bus shifted longitudinally <br>
				<input type="checkbox" name="checkbefship"/> Power Bus not well inserted in the u-arms <br>
				<input type="checkbox" name="checkbefship"/> Delamination of the PB and/or BB <br>
				<input type="checkbox" name="checkbefship"/> Bridge on FB not properly soldered <br>
				<input type="checkbox" name="checkbefship"/> PB extension not properly trimmed to size after soldering on FB <br>
				<input type="checkbox" name="checkbefship"/> PB very close to some HIC wire-bonds <br>
				<input type="checkbox" name="checkbefship" id="checkOthPBBB"/> Other <input id="othPBBB" type="text" style="width: 600px" placeholder="specify"/>

				<?php include('imagetool/imagetool.html');?>
			</p>
		</fieldset>

		<br><br>

		<fieldset style="background-color: #87CEFA;">
			<legend style="color: black; font-weight: bold; border-color: black; background-color: #87CEFA;"> FPC extension </legend>

			<textarea rows="10" cols="80" placeholder="Comments" style="float: right; width: 60%; margin-bottom: -30em;"></textarea>

			<p style="padding-right: 900px">
					<input type="checkbox" name="checkbefship"/> FPC extension not glued or poorly glued to CP <br>
					<input type="checkbox" name="checkbefship"/> Problems/Damages to Firefly connectors <br>
					<input type="checkbox" name="checkbefship"/> FPC extension(s) not properly glued on support piece(s) <br>
					<input type="checkbox" name="checkbefship"/> Damages to support pieces <br>
					<input type="checkbox" name="checkbefship"/> General damages to FPC extension <br>
					<input type="checkbox" name="checkbefship"/> Firefly connectors positioning inside the SEH <br>
					<input type="checkbox" name="checkbefship" id="checkOthExt"/> Other <input id="othExt" type="text" style="width: 600px" placeholder="specify"/>
					<?php include('imagetool/imagetool.html');?>
				</p>
		 </fieldset>
		 <br><br>

		<fieldset style="background-color: #BA55D3">
			<legend style="color: black; font-weight: bold; border-color: black; background-color: #BA55D3;"> Filter Board and SEH</legend>
			<textarea rows="10" cols="80" placeholder="Comments" style="float: right; width: 60%; margin-bottom: -30em;"></textarea>
			<p style="padding-right: 900px">
				<input type="checkbox" name="checkbefship"/> Damaged connector <br>
				<input type="checkbox" name="checkbefship"/> Non-proper fixation to SEH screws <br>
				<input type="checkbox" name="checkbefship"/> Board links not properly inserted/glued/aligned <br>
				<input type="checkbox" name="checkbefship"/> Old SEH version used <br>
				<input type="checkbox" name="checkbefship" id="checkOthFB"/> Other <input id="othFB" type="text" style="width: 600px" placeholder="specify"/>
        <br><br><br>
				<?php include('imagetool/imagetool.html');?>
			</p>

		</fieldset>
		<br><br>

		<fieldset style="background-color: #FFA500">
			<legend style="color: black; font-weight: bold; border-color: black; background-color: #FFA500;"> U-arms </legend>

			<textarea rows="10" cols="80" placeholder="Comments" style="float: right; width: 60%; margin-bottom: -30em;"></textarea>

			<p style="padding-right: 900px">
				<input type="checkbox" name="checkbefship"/> U-arms of wrong size <br>
				<input type="checkbox" name="checkbefship"/> Too few U-arms (wrt default number) <br>
				<input type="checkbox" name="checkbefship"/> U-arms not in the default position <br>
				<input type="checkbox" name="checkbefship"/> U-arms not properly aligned (problems with PB insertion) <br>
				<input type="checkbox" name="checkbefship" id="checkOthUarm"/> Other <input id="othUarm" type="text" style="width: 600px" placeholder="specify"/>
			</p>
			<br><br><br>
			<?php include('imagetool/imagetool.html');?>
		</fieldset>
		<br><br>

		<fieldset style="background-color: #D8BFD8">
			<legend style="color: black; font-weight: bold; border-color: black; background-color: #D8BFD8;"> HIC and HIC-to-HIC bridges </legend>

			<textarea rows="10" cols="80" placeholder="Comments" style="float: right; width: 60%; margin-bottom: -30em;"></textarea>

			<p style="padding-right: 900px">
				<input type="checkbox" name="checkbefship"/> Tin horns on some bridges<br>
				<input type="checkbox" name="checkbefship"/> Too few tin on bridge pads <br>
				<input type="checkbox" name="checkbefship"/> TAB-B HIC not glued on the side of the FPC extension <br>
				<input type="checkbox" name="checkbefship" id="checkOthBridge"/> Other <input id="othBridge" type="text" style="width: 600px" placeholder="specify"/>
			</p>
			<br><br><br>
			<?php include('imagetool/imagetool.html');?>
		</fieldset>
		<br><br>

		<fieldset style="background-color: #CD853F">
			<legend style="color: black; font-weight: bold; border-color: black; background-color: #CD853F;"> Pins </legend>
			<textarea rows="10" cols="80" placeholder="Comments" style="float: right; width: 60%; margin-bottom: -30em;"></textarea>
			<p style="padding-right: 900px">
				<input type="checkbox" name="checkbefship"/> Uncorrect/missing pins between Space-Frame and Cold-Plate<br>
				<input type="checkbox" name="checkbefship"/> Uncorrect/missing pins in the transport box <br>
				<input type="checkbox" name="checkbefship" id="checkOthPins"/> Other <input id="othPins" type="text" style="width: 600px" placeholder="specify"/>
			</p>
			<br><br><br><br>
			<?php include('imagetool/imagetool.html');?>
		</fieldset>
		<br><br>

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
