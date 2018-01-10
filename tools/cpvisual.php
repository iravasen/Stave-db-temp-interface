<!doctype html>
<html lang="en">
<head>

	<meta http-equiv="Cache-control" content="no-cache">

	<title>CP insp and plan</title>

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

			//Check if the component ids have been inserted
			var cpid = document.getElementsByName("selectedcp")[0].value;
			var cpnumber = document.getElementsByName("cpidname")[0].value;
			var idcorrect=true;
			if(cpid=="-" || cpnumber=="") {
				idcorrect=false;
				alert("Some component IDs are missing, please check before printing");
				return idcorrect;
			}

			//Check if all questions were answered
			var check = check_yes_no(4);

			//Check if the planarity was inserted
			var yes_planfield = document.getElementsByName("yes")[3].checked;
			var plancorrect = true;
			if(yes_planfield){
				var planfield = document.getElementById("planarity").value;
				if(planfield==""){
					plancorrect = false;
					alert("Please insert the planarity of the Cold Plate");
					return plancorrect;
				}
			}

			if(check && idcorrect && plancorrect){//if all it's correct, print
				document.title = document.getElementsByName("selectedcp")[0].value +
													document.getElementsByName("cpidname")[0].value +
													"_inspection_and_planarity_report";
				window.print();
				document.title = "CP insp and plan";
			}
		}
	</script>

</head>

<body class="special">

	<!--<a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>-->
	<a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
  <br><br><br>

  <h1>Cold Plate visual inspection and planarity - Report</h1>

	<br>
	<fieldset>
		<legend> Component IDs </legend>
			<p> Cold-Plate ID: <?php include('ids/cpid.html')?> </p>
			<p style="display: block; float: right;" id="noprint">
				The CP id can be found on a CP corner on the side of the cooling pipes
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

	<h2>Visual inspection and planarity</h2>
  <br>

	<form action="">
		<fieldset>
 			<legend>Visible damages to CP carbon-fiber structure?</legend><br>
			<input type="checkbox" name="no" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes
 			<br />

			<fieldset id="ifproblem">
				<span> Type of damage: </span> <br>
				<input type="checkbox"/> Cracks in the carbon-fiber structure <br>
				<input type="checkbox"/> Damages to corners <br>
				<input type="checkbox"/> Damages on the edge <br>
				<input id="oth" type="checkbox"/> Other
			  <textarea id="texta1" placeholder="specify" cols="50" rows="3"></textarea> <br>
				<?php
				include('imagetool/imagetool.html');
				?>
			</fieldset>

		</fieldset>
		<br>
		<fieldset>
 			<legend>Visible damages to cooling pipes?</legend><br>
			<input type="checkbox" name="no" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<span> Type of damages: </span> <br>
				<input type="checkbox"/> Bending of the pipes <br>
				<input type="checkbox"/> Visible cracks <br>
				<input type="checkbox"/> Pipes detached from the carbon-fiber plate <br>
				<input id="oth" type="checkbox"/> Other
				<textarea id="texta1" placeholder="specify" cols="50" rows="3"></textarea> <br>
				<?php
				include('imagetool/imagetool.html');
				?>
			</fieldset>

		</fieldset>
		<br>
		<fieldset>
			<legend>Visible damages to external CP rubber tubes?</legend><br>
			<input type="checkbox" name="no" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<span> Type of damages: </span> <br>
				<input type="checkbox"/> Strong bending of the pipes <br>
				<input type="checkbox"/> Visible cracks <br>
				<input type="checkbox"/> Pipes damaged at the CP connection point <br>
				<input id="oth" type="checkbox"/> Other
				<textarea id="texta1" placeholder="specify" cols="50" rows="3"></textarea> <br>
				<?php
				include('imagetool/imagetool.html');
				?>
			</fieldset>
		</fieldset>
		<br>
		<fieldset>
			<legend> Is this Cold-Plate acceptable after the visual inspection? (if yes, measure planarity) </legend>
			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes
			<br />
			<input type="checkbox" name="no" value="No"/> No

			<fieldset id="ifproblem">
				<span> Planarity: <input id="planarity" type="text" style="width: 50px"/> um</span><br>
				<input type="checkbox"/> Acceptable <br>
				<input type="checkbox"/> Acceptable, but we put it aside in case of need <br>
				<input type="checkbox"/> Not acceptable <br>
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
	<a id="noprint" href="cpvisual.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
