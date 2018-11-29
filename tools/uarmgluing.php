<!doctype html>
<html lang="en">
<head>
	<title>U-arm gluing</title>

	<meta http-equiv="Cache-control" content="no-cache">

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

  <?php include('add/addscript.html');?>

	<style>
		span#siuarm{
			display: none;
		}
		input#iuarm:checked ~ span#siuarm{
			display: block;
		}
	</style>

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

	<!-- For printing immediately -->
	<?php include('allokandprint/allok.html')?>

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
 		 <p> Half-Stave ID: <?php include('ids/hsid.php')?>
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
	<!-- Location -->
	<?php include('location/location.php');?>

	<!--People-->
 <br>
 <?php include('people/people.html');?>
 <br>

 <!-- General info -->
 <fieldset>
 	<legend> General Info </legend>

		<fieldset>

	 	<legend> Type of u-arm used </legend>
	 			<input type="checkbox"/> 5.5 mm long (4 mm wide, U-shaped) <br>
				<input type="checkbox"/> 7.0 mm long (4 mm wide, L-shaped) <br>
	 			<input id="iuarm" type="checkbox"/> Other <br>

	 		<span id="siuarm"> <input type="text" placeholder="specify" style="width: 500px"/> </span>
	 	</p>
	</fieldset><br>



			<fieldset id="uarmpositions">
				<legend> <strong> Positions of the u-arm wrt the CC for each Module</strong> <br>
		 			*default* means that u-arms are on both DVDD CCs and on Back-Bias CC <br>
				</legend>
  				 <div id="template-uarm-0">
  			 		<div id="placeh-uarm-0">
  			 			<hr>

							<p> Module position: <input id="printnumb2" type="number" style="width: 40px"/> - U-arm conf.:

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
  			</fieldset>

 </fieldset>


	<h2>Report</h2>
	<br>
	<input id="noprint" type="button" value="All ok & save" style="position: center" onClick="okandprintall()"/>
  <br>

	<form action="">

		<fieldset>
 			<legend>Damages to HICs?</legend><br>
			<input type="checkbox" name="no" value="No" class="ok"/> No
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
              <li> Does it affect HIC/chip functioning? <br>
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
