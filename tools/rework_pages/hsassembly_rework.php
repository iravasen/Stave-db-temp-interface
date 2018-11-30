<!doctype html>
<html lang="en">
<head>
	<title>HS assembly</title>

	<meta http-equiv="Cache-control" content="no-cache">

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../../css/fieldstyle.css"/>

  <?php include('../add/addscript.html');?>

	<style>
		span#s1{
			display: none;
		}

		textarea#texta1{
			display: none;
		}

		ul#notemp-answ{
			display: none;
		}
		/*span#newhicid{
			display: none;
		}

		input#replacedid:checked ~ span#newhicid{
			display: block;
			display: inline;
		}*/

		input#notemp:checked ~ ul#notemp-answ {
			display: block;
		}

		input#oth:checked ~ textarea#texta1 {
			display: block;
		}

		input#i1:checked ~ span#s1 {
			display: block;
		}
	</style>

	<!-- To print the page with a default name -->
	<?php include('../jvscript_funct/check_yes_no.html') ?>
	<script type="text/javascript">
		function printall(){

			//Check if (new) HS id has been inserted
			var correcthsid = true;
			if(document.getElementsByName("selectedcity")[0].value == "-" ||
				 document.getElementsByName("selectedhs")[0].value == "-" ||
				 document.getElementsByName("hsnumber")[0].value == ""
			 ){
				 correcthsid = false;
				 alert("Insert a correct (new) HS id");
				 return correcthsid;
			}

			//Check if (new) HS number has 3 digits
			var checkhsnumber = true;
			if(document.getElementsByName("hsnumber")[0].value.toString().length < 3 || document.getElementsByName("hsnumber")[0].value.toString().length > 3){
				checkhsnumber = false;
				alert("(new) HS number must have 3 digits (e.g 003 for HS-3). Please check.");
				return checkhsnumber;
			}

			//Check if (old) HS id has been inserted
			var correcthsid = true;
			if(document.getElementById("sites-old").value == "-" ||
				 document.getElementById("selhs-old").value == "-" ||
				 document.getElementsByName("hsnumber")[1].value == ""
			 ){
				 correcthsid = false;
				 alert("Insert a correct (old) HS id");
				 return correcthsid;
			}

			//Check if (old) HS number has 3 digits
			var checkhsnumber = true;
			if(document.getElementsByName("hsnumber")[1].value.toString().length < 3 || document.getElementsByName("hsnumber")[1].value.toString().length > 3){
				checkhsnumber = false;
				alert("(old) HS number must have 3 digits (e.g 003 for HS-3). Please check.");
				return checkhsnumber;
			}

			//Check that the city id of the two HSs (new and old) are the same
			if(document.getElementById("sites").value != document.getElementById("sites-old").value){
				alert("The two HSs (new and old) have different city id. Please check.");
				return false;
			}
			//Check that the two HSs (new and old) have the same flavor
			if(document.getElementById("selhs").value != document.getElementById("selhs-old").value){
				alert("The two HSs (new and old) have different flavors. Please check.");
				return false;
			}

			//Check the number of the two HSs (no convention - warning)
			if(document.getElementsByName("hsnumber")[0].value == document.getElementsByName("hsnumber")[1].value){
				alert("The two HSs (new and old) have the same id. Are you sure? If not, press cancel and check.");
			}

			//Check if CP id has been inserted
			var correctcpid = true;
			var cpid = document.getElementsByName("selectedcp")[0].value;
			var cpnumber = document.getElementsByName("cpidname")[0].value;
			if(cpid=="-" || cpnumber=="") {
				correctcpid=false;
				alert("Insert Cold Plate ID");
				return correctcpid;
			}

			 //Check if the HIC positions and id on HS have been inserted
			 var correcthic = true;
			 var fieldpos = document.getElementById("hicpositions");
			 var positions = fieldpos.getElementsByTagName("input");
			 var hicflavor = fieldpos.getElementsByTagName("select");
			 var counthic = 0;
			 var countML = [0, 0, 0, 0];
			 var countOL = [0, 0, 0, 0, 0, 0, 0];

			 //--> Check if all position numbers are present and if there are no repetitions
			 /*for(ipos=0; ipos<positions.length; ipos++){
				 if((positions[ipos].type.toLowerCase() == "number")){
					 //ML
					 if(document.getElementsByName("selectedhs")[0].value == "ML-HS-L" || document.getElementsByName("selectedhs")[0].value == "ML-HS-U"){
						 var pos = positions[ipos].value;
						 if(pos==1) countML[0]++;
						 if(pos==2) countML[1]++;
						 if(pos==3) countML[2]++;
						 if(pos==4) countML[3]++;
					 }
					 //OL
					 if(document.getElementsByName("selectedhs")[0].value == "OL-HS-L" || document.getElementsByName("selectedhs")[0].value == "OL-HS-U"){
						 var pos = positions[ipos].value;
						 if(pos==1) countOL[0]++;
						 if(pos==2) countOL[1]++;
						 if(pos==3) countOL[2]++;
						 if(pos==4) countOL[3]++;
						 if(pos==5) countOL[4]++;
						 if(pos==6) countOL[5]++;
						 if(pos==7) countOL[6]++;

					 }*/

					 //Module is position 1 must have flavor BR or BL
				 if(hicflavor[0].value == "AR" || hicflavor[0].value == "AL"){
					 correcthic = false;
					 alert("Module in position 1 must have flavor BL or BR");
					 return correcthic;
				 }

				 //
				 for(ipos=0; ipos<positions.length; ipos+=2){
					 var pos = positions[ipos].value;
					 if(ipos>6 && document.getElementsByName("selectedhs")[0].value.includes('ML')) continue;
					 if(pos.toString().length<6 || pos.toString().length>6){
						 alert(" HIC-id numbers must have 6 digits (e.g. 000012 for HIC-12). Please check them.");
						 return false;
					 }
					 if(hicflavor[ipos/2].value == "-"){//Hic flavor check
						 correcthic = false;
						 alert("Some HIC flavors are missing");
						 return correcthic;
					 }
				 }

				 //Check that at least 1 "New" checkbox is checked
				 var countcheck = 0;
				 for(ipos=1; ipos<positions.length; ipos+=2){
					 var pos = positions[ipos];
					 if(pos.checked) countcheck++;
				 }
				 if(countcheck==0){
					 alert("Please indicate which HIC is new wrt the old HS.");
					 return false;
				 }

			// }//end of for loop on ipos

			/* if((document.getElementsByName("selectedhs")[0].value == "ML-HS-L" || document.getElementsByName("selectedhs")[0].value == "ML-HS-U")){
				 for(j=0; j<4; j++){
					 if(countML[j]==0 || countML[j]>1){
						 correcthic = false;
						 alert("HIC positions on HS are wrong, please check");
						 return correcthic;
					 }
				 }
				 if(counthic>0){
					 correcthic = false;
					 alert("Check HIC ID number on HS");
					 return correcthic;
				 }
			 }

			 if((document.getElementsByName("selectedhs")[0].value == "OL-HS-L" || document.getElementsByName("selectedhs")[0].value == "OL-HS-U")){
				 for(j=0; j<7; j++){
					 if(countOL[j]==0 || countOL[j]>1){
						 correcthic = false;
						 alert("HIC positions on HS are wrong, please check");
						 return correcthic;
					 }
				 }
				 if(counthic>0){
					 correcthic = false;
					 alert("Check HIC IDs on HS");
					 return correcthic;
				 }
			 }*/

			//Check that there are not repetitions on HIC number (ID)
			var norepetInHICnumber = true;
			var counthicnumb = 0;
			var last = document.getElementsByName("selectedhs")[0].value.includes('ML') ? 7:positions.length;
			for(ihic=0; ihic<last; ihic+=2){
				var sample = positions[ihic].value;
				for(ihic2=0; ihic2<last; ihic2+=2){
					if(ihic2==ihic) continue;
					if(sample == positions[ihic2].value) counthicnumb++;
				}
			}
			if(counthicnumb>0){
				norepetInHICnumber = false;
				alert("A HIC ID number was inserted twice, please check");
				return norepetInHICnumber;
			}

			//Check that if flavor of HS corresponds to flavor of modules
			var correctflavor = true;
			//--> Flavor Left
			if(document.getElementsByName("selectedhs")[0].value == "ML-HS-L" || document.getElementsByName("selectedhs")[0].value == "OL-HS-L"){
				for(iflav=0; iflav<hicflavor.length; iflav++){
 				 	if(hicflavor[iflav].value == "AR" || hicflavor[iflav].value == "BR"){
						correctflavor = false;
						alert("A Module is Right but HS is Lower, please check");
						return correctflavor;
					}
				}
			}
			//--> Flavor Right
			if(document.getElementsByName("selectedhs")[0].value == "ML-HS-U" || document.getElementsByName("selectedhs")[0].value == "OL-HS-U"){
				for(iflav=0; iflav<hicflavor.length; iflav++){
 				 	if(hicflavor[iflav].value == "AL" || hicflavor[iflav].value == "BL"){
						correctflavor = false;
						alert("A Module is Left but HS is Upper, please check");
						return correctflavor;
					}
				}
			}

			//Check if all questions were answered
 			var check = check_yes_no(3);

			if(check && correctcpid && correcthsid && correcthic && correctflavor && norepetInHICnumber){
				document.title = 	"Rework_" +
													document.getElementsByName("selectedcity")[0].value +
													document.getElementsByName("selectedhs")[0].value +
													document.getElementsByName("hsnumber")[0].value +
													"_assembly_report";
				window.print();
				document.title = "HS assembly";
			}

		}
	</script>

	<!-- For printing immediately -->
	<script type="text/javascript">
	  function okandprintall(){
	    var okelem = document.getElementsByClassName("ok");
	    for(i=0; i<okelem.length; i++)
	      okelem[i].checked = true;
	    printall();
	  }
	</script>

	<!-- For cloning the objects -->
	<?php include('../clone_models/hsassembly_models_rwk.php'); ?>

</head>

<body class="special">

	<a id="noprint" href="../../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
	<img id="noprint" src="../../img/hslegend.png" alt="HS legend" style="float: right; width: 350px; height: 180px"/>

  <br><br><br>

  <h1>[REWORK] HS assembly - Report</h1><br>
	<br>

	<fieldset>
 	 <legend> Component IDs </legend>
 		 <p> (New) Half-Stave ID: <?php include('../ids/hsid.php')?>
		 <p> (Old) Half-Stave ID <?php include('../ids/hsid_old.php')?>
			 <span style="color: red; display: block; float: right;" id="noprint">
 				Legend: A = Amsterdam, B = Berkeley, D = Daresbury, F = Frascati, T = Turin
 			</span>
		 </p>
 		 <p> Cold-Plate ID: <?php include('../ids/cpid.php')?> </p>


 		 <fieldset id="hicpositions">
 			 <legend> (New) Half-Stave composition </legend>
				 <span> Position 1: <?php include('../ids/hicid2.php')?> <input type="checkbox" id="new1"/> New </span> <br>
				 <span> Position 2: <?php include('../ids/hicid2.php')?> <input type="checkbox" id="new2"/> New </span> <br>
				 <span> Position 3: <?php include('../ids/hicid2.php')?> <input type="checkbox" id="new3"/> New </span> <br>
				 <span> Position 4: <?php include('../ids/hicid2.php')?> <input type="checkbox" id="new4"/> New </span> <br>
				 <span> Position 5: <?php include('../ids/hicid2.php')?> <input type="checkbox" id="new5"/> New </span> <br>
				 <span> Position 6: <?php include('../ids/hicid2.php')?> <input type="checkbox" id="new6"/> New </span> <br>
				 <span> Position 7: <?php include('../ids/hicid2.php')?> <input type="checkbox" id="new7"/> New </span> <br>

				 <script type="text/javascript">
 					document.addEventListener('DOMContentLoaded', function(){
 						var hicflav = document.getElementsByName("hicflavor");
 						var hsflav = document.getElementById("selhs");
 						var i;
 						for (i = 0; i < hicflav.length; i++) {
 							if(hsflav.value=="OL-HS-L"){
 								if(!i) hicflav[i].value = "BL";
 								else hicflav[i].value = "AL";
 							}
 							else if(hsflav.value=="ML-HS-L"){
 								if(!i) hicflav[i].value = "BL";
 								else if(i>0 && i<4) hicflav[i].value = "AL";
 								else hicflav[i].value = "-";
 							}
 							else if(hsflav.value=="OL-HS-U"){
 								if(!i) hicflav[i].value = "BR";
 								else hicflav[i].value = "AR";
 							}
 							else if(hsflav.value=="ML-HS-U"){
 								if(!i) hicflav[i].value = "BR";
 								else if(i>0 && i<4) hicflav[i].value = "AR";
 								else hicflav[i].value = "-";
 							}
 						}
 					});
 				</script>
 				<script>
 					var url = new URL(document.location);

 					// Get query parameters object
 					var params = url.searchParams;

 					var hicnum = document.getElementsByName("hicnumber");
 					// Get value of paper
 					var i;
 					for(i=0; i<hicnum.length; i++){
 						var opt = params.get("hicidnum"+(i+1));
 						if(opt) $('input[name="hicnumber"]').eq(i).val(opt);
 						else $('input[name="hicnumber"]').eq(i).val("------");
 					}

					for(i=0; i<hicnum.length; i++){
 						var opt = params.get("new"+(i+1));
 						if(opt) $('#new'+(i+1)).attr('checked', true);
 					}

 				</script>
			 	 <!--
 				 <div id="template-pos-0">
 			 		<div id="placeh-pos-0">
 			 			<hr>

 			 			<p> Position <input id="printnumb2" type="number" style="width: 40px"/>: <//?php include('../ids/hicid.html')?>
								<input type="checkbox" id="replacedid"/> New
								<span id="newhicid"> Old HIC id: <input type="text" placeholder="OLD HIC ID" style="width: 150px"/></span>
						</p>

 			 			<hr>
 			 		</div>
 			 	</div>

 			 	<p id="noprint"><button type="button" name="Submit" onclick="Add('template-pos','placeh-pos');">Add new item</button></p>
			-->
 			</fieldset>

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
	<?php include('../location/location.php');?>

	<!--People-->
 <br>
 <?php include('../people/people.html');?>
 <br>


	<h2>Report for the reworked HIC(s)</h2>
  <br>

	<form action="">

		<fieldset>
			<legend> ID(s) of the removed HIC(s) </legend>
			<textarea rows="7" cols="100" name="oldhics" placeholder="Insert IDs"></textarea>
		</fieldset>

		<br>
		<fieldset>
 			<legend>Damages during the removal of the HIC(s)?</legend><br>
			<input type="checkbox" name="no" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-damagehs-0">
					<div id="template-damagehs-0">
						<hr>
						<p>
							<ul>
								<li><strong>For HIC in position</strong>: <input id="printnumb2" type="number" style="width: 60px"/> </li>
								<li> Type of damage: <br>
									<input type="checkbox" name="1" value="1"/> Neighbour HIC(s) damaged
									<br />
									<input type="checkbox" name="No" value="No"/> CP damaged (cracks, bendings, ...)
									<br />
									<input id="oth" type="checkbox" name="oth" value="oth"/> Other
									<textarea id="texta1" cols="50" rows="4" placeholder="specify"></textarea>
								</li>
								<li> Detailed description: <br>
									<textarea rows="10" cols="50" placeholder="describe the damage"></textarea><br>
								</li>
								<li> Solution adopted: <br>
									<textarea rows="10" cols="50" placeholder="describe solution"></textarea><br>
								</li>

								<li> <input type="checkbox"/> Solved <br> <input type="checkbox"/> Not solved </li>
							</ul>
						</p>

						<?php
						include('../imagetool/imagetool.html');
						?>

						<hr>
					</div>
				</div>

				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-damagehs','template-damagehs');">Add new item</button></p>
			</fieldset>
		</fieldset>
		<br><br>

		<fieldset>
			<legend> Picture of the CP surface after HIC(s) removal (BEFORE CLEANING) </legend>
			<?php
			include('../imagetool/imagetool.html');
			?>
		</fieldset>
		<br><br>
		<fieldset>
			<legend> Picture of the CP surface after HIC(s) removal (AFTER CLEANING) </legend>
			<?php
			include('../imagetool/imagetool.html');
			?>
		</fieldset>
		<br><br>
		<input id="noprint" type="button" value="New HIC(s) alignment ok & save" style="position: center" onClick="okandprintall()"/>

		<br><br>
		<fieldset>
 			<legend>Problems during glue-mask deposition/removal?</legend><br>
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
 			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-cappad-0">
					<div id="template-cappad-0">
						<hr>
						<p>
							<ul>
								<li><strong>For HIC in position</strong>: <input id="printnumb2" type="number" style="width: 60px"/> </li>
								<li> Type of problem: <br>
									<input type="checkbox" name="1" value="1"/> Glue too dense
									<br />
									<input type="checkbox" name="No" value="No"/> Glue too liquid
									<br />
									<input type="checkbox" name="No" value="No"/> Glue accidentally touched with fingers
									<br />
									<input type="checkbox" name="No" value="No"/> Glue uniformity on the Cold-Plate
									<br />
									<input type="checkbox"/> Parylene detached from CP
									<br />
									<input id="oth" type="checkbox" name="oth" value="oth"/> Other
									<textarea id="texta1" cols="50" rows="4" placeholder="specify"></textarea>
								</li>
								<li> Solution adopted: <br>
									<textarea rows="3" cols="50" placeholder="describe solution"></textarea><br>
								</li>
								<li> <input type="checkbox"/> Solved <input type="checkbox"/> Not solved </li>
							</ul>
						</p>

						<?php
						include('../imagetool/imagetool.html');
						?>

						<hr>
					</div>
				</div>

				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-cappad','template-cappad');">Add new item</button></p>
			</fieldset>
		</fieldset>
		<br>
		<fieldset>
 			<legend>Problems during HIC gluing?</legend><br>
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
 			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes
 			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-hicg-0">
					<div id="template-hicg-0">
						<hr>
						<p>
							<ul>
								<li><strong>For HIC in position</strong>: <input id="printnumb2" type="number" style="width: 60px"/> </li>
								<li> Type of problem: <br>
									<input id="i1" type="checkbox"/> Shift wrt nominal position
										<span id="s1"> Shift along x: <input type="text" style="width: 70px"/> um</span> <br>
										<span id="s1"> Shift along y: <input type="text" style="width: 70px"/> um</span>
									<br />
									<input id="oth" type="checkbox" name="oth" value="oth"/> Other
									<textarea id="texta1" cols="50" rows="4" placeholder="specify"></textarea>
								</li>
								<br>
								<li> <input type="checkbox"/> Acceptable <input type="checkbox"/> Not acceptable </li>
							</ul>
						</p>

						<?php
						include('../imagetool/imagetool.html');
						?>

						<hr>
					</div>
				</div>

				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-hicg','template-hicg');">Add new item</button></p>
			</fieldset>

		</fieldset>

		<br>

	</form>
	<h2> Other Comments </h2>
  <textarea rows="10" cols="100" name="modissection" placeholder="Insert short report"></textarea>

	<!-- Images -->
	<h2> Other pictures not included in the form </h2>
	<?php
	include('../imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="printall()"/>
	<a id="noprint" href="hsassembly.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
