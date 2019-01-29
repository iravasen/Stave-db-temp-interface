<!doctype html>
<html lang="en">
<head>
	<title>Stave rework</title>

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

		input#oth1:checked ~ span#spanoth1 {
			display: block;
		}

		input#oth2:checked ~ span#spanoth2 {
			display: block;
		}

		input#uarmpb1:checked ~ fieldset#uarmpositions {
			display: block;
		}

		input#uarmpb2:checked ~ fieldset#uarmpositions {
			display: block;
		}

		input#uarmsopt:checked ~ fieldset#uarmsfield {
			display: block;
		}

		fieldset#uarmsfield {
			display: none;
		}

		fieldset#uarmpositions {
			display: none;
		}

		span#spanoth2{
			display: none;
		}

		span#spanoth1{
			display: none;
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

			//Check if all questions were answered
			var check = check_yes_no(1);

			//if all ok, print
			if(check){
				document.title = document.getElementsByName("stavecity")[0].value + "-" +
													document.getElementsByName("selectedstave")[0].value + "-" +
													document.getElementsByName("stavenumber")[0].value +
													"_rework_after_shipment_report";
				window.print();
				document.title = "Stave shipment";
			}

		}
	</script>

	<?php include('add/addscript.html');?>



	<!--For cloning objects -->
	<?php include('clone_models/staverework_models.php');?>

</head>

<body class="special">

  <a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
	<img id="noprint" src="../img/hslegend.png" alt="HS legend" style="float: right; width: 350px; height: 180px"/>
  <br><br><br>

  <h1>Stave rework after shipment - Report</h1>
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

<h2> Report </h2>
<br>

<form action="">
	<fieldset>
		<legend>Reworked component(s).</legend><br>
		<input type="checkbox"/> Power Bus <br>
		<input type="checkbox"/> Bias Bus <br>
		<input type="checkbox"/> Cross-cables <br>
		<input type="checkbox" id="uarmsopt"/> U-arms <br>
		<input type="checkbox"/> FPC extension(s) <br>
		<input type="checkbox"/> HIC-to-HIC bridges <br>
		<input type="checkbox"/> PB/BB-to-FB bridges <br>
		<input type="checkbox"/> Filter Board(s) <br>
		<input type="checkbox"/> Capacitors on PB and/or BB and/or FB <br>
		<input type="checkbox"/> Stave extension holder <br>
		<input type="checkbox" id="oth1"/> Other <br>
		<span id="spanoth1"> <input type="text" placeholder="specify" style="width: 500px"/> </span>
		<br>
		<fieldset id="uarmsfield">
	 	<legend> Type of u-arm used </legend>
	 			<input type="checkbox" id="uarmpb1"/> 5.5 mm long (4 mm wide, U-shaped) <br>
				<input type="checkbox" id="uarmpb2"/> 7.0 mm long (4 mm wide, L-shaped) <br>
				<input type="checkbox"/> 5.5 mm long (2.5 mm wide, U-shaped) <br>
	 			<input id="oth2" type="checkbox"/> Other <br>
	 		<span id="spanoth2"> <input type="text" placeholder="specify" style="width: 500px"/> </span>


			<fieldset id="uarmpositions">
				<legend> <strong> New </strong> positions of the u-arm wrt the CC for each Module <br>
		 			*default* means that u-arms are on both DVDD CCs and on Back-Bias CC <br>
				</legend>
  				 <div id="template-uarm-0">
  			 		<div id="placeh-uarm-0">
  			 			<hr>

							<p> HS-<select><option>-</option><option>U</option><option>L</option></select> - Module: <input id="printnumb2" type="number" style="width: 40px"/> - U-arm conf.:

					      <input type="checkbox" class="def" onClick="checks()"/> default |
					      <input type="checkbox" class="def"/> DVDD (M8)
					      <input type="checkbox" class="nodef"/> AVSS-DVSS (M8)
					      <input type="checkbox" class="def"/> Back-Bias
					      <input type="checkbox" class="nodef"/> AVDD
					      <input type="checkbox" class="nodef"/> AVSS-DVSS (M0)
					      <input type="checkbox" class="def"/> DVDD (M0)

					    </p>

					    <script type="text/javascript">

					      	function checks(){
					         var divext = document.getElementById("template-uarm-0");
					      		var divint = divext.getElementsByTagName("div");

					         for(j=0; j<divint.length; j++){
					        		var checkboxes = divint[j].getElementsByClassName("def");
					           var checkboxes_nodef = divint[j].getElementsByClassName("nodef")
					           if(checkboxes[0].checked){//if "default" is checked
					        			for(i=1; i<checkboxes.length; i++){
					        				checkboxes[i].checked = true;
					        			}
					             for(k=0; k<checkboxes_nodef.length; k++){
					               checkboxes_nodef[k].disabled = true;
					             }
					           }//end if
					           else{
					             for(i=1; i<checkboxes.length; i++){
					        				checkboxes[i].checked = false;
					        			}
					             for(k=0; k<checkboxes_nodef.length; k++){
					               checkboxes_nodef[k].disabled = false;
					             }
					           }
					         }//end loop on divint elements
					      	}//end function checks
					  	</script>

  			 			<hr>
  			 		</div>
  			 	</div>

  			 	<p id="noprint"><button type="button" name="Submit" onclick="Add('template-uarm','placeh-uarm');">Add new item</button></p>
  			</fieldset> <!-- end uarm position on HS -->

	</fieldset><br>

		<p> Description of the rework <span id="noprint"> (specify the HS id and the component id of the reworked component (if any))</p>
		<textarea rows="10" cols="150" name="modissection" placeholder="Description"></textarea>
		<br>
		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>

	<br>

	<fieldset>
		<legend>Is this Stave acceptable after rework?</legend><br>

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
<a id="noprint" href="staverework.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>
</body>
</html>
