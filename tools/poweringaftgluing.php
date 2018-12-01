<!doctype html>
<html lang="en">
<head>
	<title>HIC powering after gluing</title>

	<meta http-equiv="Cache-control" content="no-cache">

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

  <?php include('add/addscript.html');?>

	<style>
		p#pyes{
			display: none;
		}

		input#iy:checked ~ p#pyes {
			display: block;
		}

	</style>

	<!-- To print the page with a default name -->
	<?php include('jvscript_funct/check_yes_no.html') ?>
	<script type="text/javascript">
		function printall(){

			//Check that component ids have been inserted
			var correctid = true;
			if(document.getElementsByName("hicnumber")[0].value == "" || document.getElementsByName("hicflavor")[0].value == "-"){
				correctid = false;
				alert("Insert correct HIC id");
				return correctid;
			}

			//Check if hic number has six digits
			var checkhicnumber = true;
			if(document.getElementsByName("hicnumber")[0].value.toString().length<6 ||document.getElementsByName("hicnumber")[0].value.toString().length>6){
				checkhicnumber = false;
				alert("HIC number must has 6 digits (e.g. 000012 for HIC-12)");
				return checkhicnumber;
			}

			if(document.getElementsByName("selectedcp")[0].value == "-" || document.getElementsByName("cpidname")[0].value == ""){
				correctid = false;
				alert("Insert correct CP id");
				return correctid;
			}

			//Check hic position on cp
			var hicposition = true;
			if(document.getElementsByName("hicpositiononcp")[0].value == ""){
				hicposition = false;
				alert("Insert HIC position on CP");
				return hicposition;
			}

			//Check if AVDD, DVDD, IDVDD and IAVDD were inserted
			var vicorrect = true;
			var avdd  = document.getElementById("AVDD").value;
			var dvdd  = document.getElementById("DVDD").value;
			var iavdd = document.getElementById("IAVDD").value;
			var idvdd = document.getElementById("IDVDD").value;
			if(avdd == "" || avdd<1.62 || avdd > 1.99){
				vicorrect = false;
				alert("Insert correct AVDD");
				return vicorrect;
			}
			if(dvdd == "" || dvdd<1.62 || dvdd > 1.99){
				vicorrect = false;
				alert("Insert correct DVDD");
				return vicorrect;
			}
			if(iavdd == ""){
				vicorrect = false;
				alert("Insert I_AVDD");
				return vicorrect;
			}
			if(idvdd == ""){
				vicorrect = false;
				alert("Insert I_DVDD");
				return vicorrect;
			}

			//Check if all questions were answered
			var check = check_yes_no(1);

			//Check the IAVDD and IDVDD
			if(iavdd<100){

				if(confirm("I_AVDD = " + iavdd + " mA is low, are you sure of this value? If yes, press ok") == false){
					return false;
				}
			}
			if(iavdd>300){
				if(confirm("I_AVDD = " + iavdd + " mA is high, are you sure of this value? If yes, press ok") == false){
					return false;
				}
			}
			if(idvdd<150){
				if(confirm("I_DVDD = " + idvdd + " mA is low, are you sure of this value? If yes, press ok") == false){
					return false;
				}
			}
			if(idvdd>300){
				if(confirm("I_DVDD = " + idvdd + " mA is high, are you sure of this value? If yes, press ok") == false){
					return false;
				}
			}



			if(check && correctid && hicposition && vicorrect && checkhicnumber){
				document.title = 	"OBHIC-" +
													document.getElementsByName("hicflavor")[0].value + "-" +
													document.getElementsByName("hicnumber")[0].value +
													"_powering_test_on_" +
													document.getElementsByName("selectedcp")[0].value + "-" +
													document.getElementsByName("cpidname")[0].value +
													"_report";
				window.print();
				document.title = "HIC powering after gluing";
			}

		}
	</script>

	<!-- For printing immediately -->
	<?php include('allokandprint/allok.html')?>

</head>

<body>

	<a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
  <br><br><br>

  <h1>HIC powering after gluing on CP - Report</h1>
	<br>

	<fieldset>
		<legend> Component IDs </legend>
			<p> OB-HIC ID: <?php include('ids/hicid.php')?> </p>
			<p> CP ID: <?php include('ids/cpid.php')?></p>
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

	<fieldset>
		<legend> General info </legend>
			<p> OB-HIC position on CP: <input id="printnumb2" name="hicpositiononcp" type="number" placeholder="#" style="width: 50px"/> </p>
	</fieldset>

	<h2>Report</h2>

	<form action="">
		<fieldset>
 			<legend>Voltages and currents</legend><br>

			<ul>
				<li>AVDD: <input id="AVDD" type="text" style="width: 50px"/> V <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

				<li>I<sub>AVDD</sub>: <input id="IAVDD" type="text" style="width: 50px"/> mA <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

				<hr>

				<li>DVDD: <input id="DVDD" type="text" style="width: 50px"/> V <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

				<li>I<sub>DVDD</sub>: <input id="IDVDD" type="text" style="width: 50px"/> mA <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

			</ul>

		</fieldset>
		<br>
		<input id="noprint" type="button" value="All ok & save" style="position: center" onClick="okandprintall()"/>
		<br>
		<br>
		<fieldset>
			<legend>Is this HIC on CP acceptable?</legend><br>
			<input type="checkbox" name="yes" value="Yes" class="ok"/> Yes
 			<br />
 			<input id="check" type="checkbox" name="no" value="No"/> No

			<fieldset id="ifproblem">
				<ul>
					<li> Did you remove it from the CP? <input id="iy" type="checkbox"/> Yes <input type="checkbox"/> No <br>
						<p id="pyes"> Describe eventual damages to CP and/or adjacent HICs <br>
							<textarea rows="5" cols="50" placeholder="describe"></textarea>
							<br>
							<span>Acceptable? <input type="checkbox"/> Yes <input type="checkbox"/> No </span>
						</p>
					</li>
				</ul>

			</fieldset>

		</fieldset>
	</form>

	<h2> Other Comments </h2>
  <textarea id="finalcomments" rows="10" cols="100" placeholder="comments"></textarea>

	<!-- Images -->
	<h2> Pictures </h2>
	<?php
	include('imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="printall()"/>
	<a id="noprint" href="poweringaftgluing.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>
</body>
</html>
