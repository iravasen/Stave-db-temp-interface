<!doctype html>
<html lang="en">
<head>
	<title>U-arm gluing</title>

	<meta http-equiv="Cache-control" content="no-cache">

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

  <?php include('add/addscript.html');?>

	<!-- To print the page with a default name -->
	<?php include('jvscript_funct/check_yes_no.html') ?>
	<script type="text/javascript">
		function printall(){

			//Check if HS id has been inserted
			var correcthsid = true;
			if(document.getElementsByName("selectedcity")[0].value == "-" ||
				 document.getElementsByName("selectedhs")[0].value == "-" ||
				 document.getElementsByName("hsnumber")[0].value == ""
			 ){
				 correcthsid = false;
				 alert("Insert HS ID");
				 return correcthsid;
			}

			//Check is HS number has 3 digits
			if(document.getElementsByName("hsnumber")[0].value.toString().length < 3 || document.getElementsByName("hsnumber")[0].value.toString().length > 3 ){
				alert("HS-id number must have 3 digits (e.g. HS-003 for HS-3). Please check.");
				return false;
			}
			 
			//Check if all questions were answered
 			var check = check_yes_no(1);

			if(check && correcthsid){
				document.title = "Uarm_gluing_on_" +
                         document.getElementsByName("selectedcity")[0].value +
												 document.getElementsByName("selectedhs")[0].value +
												 document.getElementsByName("hsnumber")[0].value +
												 "_report";
				window.print();
				document.title = "U-arm gluing";
			}

		}
	</script>

	<!-- For cloning the objects -->
	<?php include('clone_models/uarmgluing_models.php'); ?>

</head>

<body class="special">

	<a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
	<img id="noprint" src="../img/hslegend.png" alt="HS legend" style="float: right; width: 350px; height: 180px"/>
  <br><br><br>

  <h1>U-arm gluing on HS - Report</h1><br>
	<br>

	<fieldset>
 	 <legend> Component IDs </legend>
 		 <p> Half-Stave ID: <?php include('ids/hsid.html')?>
			 <span style="color: red; display: block; float: right;" id="noprint">
				 Legend: A = Amsterdam, B = Berkeley, D = Daresbury, F = Frascati, T = Turin
			 </span>
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


	<h2>Report</h2>
  <br>

	<form action="">

		<fieldset>
 			<legend>Damages to HICs?</legend><br>
			<input type="checkbox" name="no" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-hicdam-0">
					<div id="template-hicdam-0">
						<hr>
						<ul>
              <li> HIC in position: <input type="number" style="width: 60px"/> </li>
              <li> Close to/ On chip number: <input type="number" style="width: 70px"/> </li>
              <li> Describe the damage type <br>
                <textarea cols="100" rows="10" placeholder="Describe"></textarea>
              </li>
              <li> Does it affect HIC functioning? <br>
                <input type="checkbox"/> No <br>
                <input type="checkbox"/> Yes <br>
              </li>
            </ul>

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
	<h2> Other Comments </h2>
  <textarea rows="10" cols="100" name="modissection" placeholder="Insert short report"></textarea>

	<!-- Images -->
	<h2> Other pictures not included in the form </h2>
	<?php
	include('imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="printall()"/>
	<a id="noprint" href="uarmgluing.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
