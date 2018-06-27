<!doctype html>
<html lang="en">
<head>
	<title>FB and capacitor soldering</title>

	<meta http-equiv="Cache-control" content="no-cache">

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/> <!--For the printer-->

	<br>
  <?php include('add/addscript.html');?>
  <br>

	<style>
		span#s1{
			display: none;
		}

		span#s2{
			display: none;
		}

		p#p3{
			display: none;
		}

		span#stin{
			display: none;
		}

		span#sdiam{
			display: none;
		}

		textarea#texta1{
			display: none;
		}

		input#oth:checked ~ textarea#texta1{
			display: block;
		}

		input#idiam:checked ~ span#sdiam {
			display: block;
		}

		input#itin:checked ~ span#stin {
			display: block;
		}


		input#i1:checked ~ span#s1 {
			display: block;
		}

		input#i2:checked ~ span#s2 {
			display: block;
		}

		input#i3:checked ~ p#p3 {
			display: block;
		}
	</style>

	<!-- To print the page with a default name -->
	<?php include('jvscript_funct/check_yes_no.html') ?>
	<script type="text/javascript">
		function printall(){

			//Check if the component ids have been inserted
			var idcorrect = true;
			if(document.getElementsByName("fbselected")[0].value == "-" ||
				 document.getElementsByName("fbnumber")[0].value == ""){
					 	idcorrect = false;
						alert("Insert a valid FB id");
						return idcorrect;
			}
			if(document.getElementsByName("pbselected")[0].value == "-" ||
				 document.getElementsByName("pbnumber")[0].value == ""){
					 idcorrect = false;
					 alert("Insert a valid PB id");
					 return idcorrect;
			}
			if(document.getElementsByName("bbselected")[0].value == "-" ||
				 document.getElementsByName("bbnumber")[0].value == ""){
				 	 idcorrect = false;
				 	 alert("Insert a valid BB id");
				 	 return idcorrect;
			}

			//Check digits in FB number
			if(document.getElementsByName("fbnumber")[0].value.toString().length < 4 || document.getElementsByName("fbnumber")[0].value.toString().length > 4){
				alert("FB id number must have four digits (e.g 0001). Please check.");
				return false;
			}

			//Check number of digits PB
			if(document.getElementsByName("pbnumber")[0].value.toString().length < 3 || document.getElementsByName("pbnumber")[0].value.toString().length > 3){
				alert("PB-id number must have 3 digits (i.e. PB-003 for PB-3). Please check.");
				return false;
			}

			//Check number of digits BB
			if(document.getElementsByName("bbnumber")[0].value.toString().length < 3 || document.getElementsByName("bbnumber")[0].value.toString().length > 3){
				alert("BB-id number must have 3 digits (i.e. BB-003 for BB-3). Please check.");
				return false;
			}


			//Check if all questions were answered
			var check = check_yes_no(10);

			if(check && idcorrect){
				document.title =  "Capacitor_and_" +
													document.getElementsByName("fbselected")[0].value +
													document.getElementsByName("fbnumber")[0].value +
													"_soldering_on_" +
													document.getElementsByName("pbselected")[0].value +
													document.getElementsByName("pbnumber")[0].value +
													"_and_" +
													document.getElementsByName("bbselected")[0].value +
													document.getElementsByName("bbnumber")[0].value +
													"_report";
				window.print();
				document.title = "FB and capacitor soldering";
			}

		}
	</script>

	<!-- For printing immediately -->
	<?php include('allokandprint/allok.html')?>

	<!--For cloning objects -->
	<?php include('clone_models/filterandcap_models.php');?>

</head>

<body class="special">

	<a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
  <br><br><br>

  <h1>Capacitor soldering on PB, Filter Board soldering on PB and BB - Report</h1>

	<br>
	<fieldset>
		<legend> Component IDs </legend>
		<p> Power Bus ID: <?php include('ids/pbid.html')?> </p>
		<p> Bias Bus ID: <?php include('ids/bbid.html')?> </p>
		<p> Filter Board ID: <?php include('ids/fbid.html')?> </p>
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

	<fieldset>
		<legend> General info </legend>

			<p> <strong>Name of the tin and composition</strong> <br>
					<input type="checkbox"/> Edsyn Sn62Pb36Ag2 <br>
					<input id="itin" type="checkbox"/> Other <br>

				<span id="stin"> Tin and its composition: <input type="text" placeholder="tin and composition" style="width: 500px"/> </span>
			</p>
			<p> <strong>Diameter of the soldering tip</strong>: <br>
				<input type="checkbox"/> 0.2 mm <br>
				<input type="checkbox"/> 0.1 mm	<br>
				<input type="checkbox"/> 0.4 mm <br>
				<input id="idiam" type="checkbox"/> Other <br>
				<span id="sdiam"> Diameter: <input type="text" style="width: 50px"/> mm</span>

			</p>
	</fieldset>


	<br>
	<h2>Report</h2>
	<input id="noprint" type="button" value="All ok & save" style="position: center" onClick="okandprintall()"/>
  <br>
	<br>

	<h2>Soldering of decoupling capacitors on PB</h2>

	<form action="">

		<fieldset>
 			<legend>Presence of shorts after capacitor soldering?</legend><br>
 			<input type="checkbox" name="no" value="No" class="ok"/> No
 			<br />
 			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-shorts-0">
					<div id="template-shorts-0">
						<hr>
						<span>Close to HIC in position <input id="printnumb2" type="number" style="width: 70px"/> </span> <br>
						<input type="checkbox" name="1" value="1"/> Short disappeared after rework
						<br>
						<input type="checkbox" name="2" value="2"/> Cannot remove the short <br>
						<textarea cols="50" rows="4" placeholder="Describe"></textarea>
						<?php
						include('imagetool/imagetool.html');
						?>

						<hr>
				 </div>
			 </div>

			 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-shorts','template-shorts');">Add new item</button></p>
			</fieldset>
		</fieldset>
		<br>
		<fieldset>
 			<legend>Damages to the PB due to heat? </legend><br>
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
 			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-pbheat-0">
					<div id="template-pbheat-0">
						<hr>
						<ul>
							<li>Close to HIC in position <input id="printnumb2" type="number" style="width: 70px"/> </li>
							<li> Problem: <br>
								<input type="checkbox" name="1" value="1"/> Damages to PB kapton layer
								<br>
								<input type="checkbox" name="2" value="2"/> Capacitor pad detached
								<br>
								<input id="oth" type="checkbox" name="3" value="3"/> Other
								<textarea id="texta1" cols="50" rows="4" placeholder="Describe"></textarea>
							</li>
							<li> Result: <br>
								<input type="checkbox" name="1" value="1"/> Damaged, but it works
								<br>
								<input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
								<br>
								<input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
							</li>
						</ul>

						<?php
						include('imagetool/imagetool.html');
						?>

						<hr>
				 </div>
			 </div>

			 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-pbheat','template-pbheat');">Add new item</button></p>
			</fieldset>
		</fieldset>

	</form>

<!--
	<h2> Soldering of decoupling capacitors on BB</h2>
	<form action="">

		<fieldset>
 			<legend>Presence of shorts after capacitor soldering?</legend><br>
 			<input type="checkbox" name="no" value="No"/> No
 			<br />
 			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-bbshorts-0">
					<div id="template-bbshorts-0">
						<hr>
						<span>Close to HIC in position <input id="printnumb2" type="number" style="width: 70px"/> </span> <br>
						<input type="checkbox" name="1" value="1"/> Short disappered after rework
						<br>
						<input type="checkbox" name="2" value="2"/> Cannot remove the short <br>
						<textarea cols="50" rows="4" placeholder="Describe"></textarea>

						<?php
						//include('imagetool/imagetool.html');
						?>

						<hr>
				 </div>
			 </div>

			 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-bbshorts','template-bbshorts');">Add new item</button></p>
			</fieldset>
		</fieldset>
		<br>
		<fieldset>
 			<legend>Damages to the BB due to heat? </legend><br>
			<input type="checkbox" name="no" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-bbheat-0">
					<div id="template-bbheat-0">
						<hr>
						<ul>
							<li>Close to HIC in position <input id="printnumb2" type="number" style="width: 70px"/> </li>
							<li> Problem: <br>
								<input type="checkbox" name="1" value="1"/> Damages to BB kapton layer
								<br>
								<input type="checkbox" name="2" value="2"/> Capacitor pad detached
								<br>
								<input id="oth" type="checkbox" name="3" value="3"/> Other
								<textarea id="texta1" cols="50" rows="4" placeholder="Describe"></textarea>
							</li>
							<li> Result: <br>
								<input type="checkbox" name="1" value="1"/> Damaged, but it works
								<br>
								<input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
								<br>
								<input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
							</li>
						</ul>

						<?php
						//include('imagetool/imagetool.html');
						?>

						<hr>
				 </div>
			 </div>

			 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-bbheat','template-bbheat');">Add new item</button></p>
			</fieldset>
		</fieldset>

	</form>
-->
	<h2>Soldering of the PB to the Filter Board</h2>

	<form action="">

		<fieldset>
 			<legend>Presence of shorts after PB soldering to FB?</legend><br>
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes
 			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-fbshorts-0">
					<div id="template-fbshorts-0">
						<hr>
						<ul>
							<li> Line type: <input id="i3" type="checkbox"/> AVDD <input id="i3" type="checkbox"/> DVDD
								<p id="p3">
									Of HIC in position <input type="text" style="width: 80px"/> <br>
									In short with: <input type="checkbox"/> Ground <input type="checkbox"/> Another strip
								</p>
							</li>
							<li> Result: <br>
								<input type="checkbox" name="1" value="1"/> Short disappered after rework
								<br>
								<input type="checkbox" name="2" value="2"/> Cannot remove the short
							</li>
						</ul>
						<?php
						include('imagetool/imagetool.html');
						?>

						<hr>
				 </div>
			 </div>

			 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-fbshorts','template-fbshorts');">Add new item</button></p>
			</fieldset>
		</fieldset>
		<br>
		<fieldset>
 			<legend>Damages to the PB termination pads due wrong handling?</legend><br>
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
				<ul>
					<li>Damage type: <br>
						<input id="i1" type="checkbox"/> Some pads detached <br>
						<span id="s1"> Number of pads: <input type="text" style="width: 90px"/> </span><br>
						<input id=i2 type="checkbox"/> Cracks in some pads <br>
						<span id="s2"> Number of pads: <input type="text" style="width: 90px"/> </span><br>
						<input id="oth" type="checkbox"/> Other
						<textarea id="texta1" cols="50" rows="4" placeholder="Describe"></textarea> <br>
					</li>
					<li> Result: <br>
						<input type="checkbox"/> Acceptable <br>
						<input type="checkbox"/> Not acceptable
					</li>
				</ul>

				<!-- Images -->
				<?php
				include('imagetool/imagetool.html');
				?>
			</fieldset>

		</fieldset>
		<br>

		<fieldset>
 			<legend>Damages to the bridge of PB extensions (TOP and/or BOTTOM) due to heat?</legend><br>
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-bridgedam-0">
					<div id="template-bridgedam-0">
						<ul>
							<li>Extension: <br>
								<input type="checkbox"/> TOP (only DVDD pads) <br>
								<input type="checkbox"/> BOTTOM (DVDD and AVDD pads)
							</li>
							<li>Damage type: <br>
								<input id="i1" type="checkbox"/> Some AVDD and/or DVDD pads detached <br>
								<span id="s1"> Number of pads: <input type="text" style="width: 90px"/> </span><br>
								<input type="checkbox"/> Ground pads detached <br>
								<input type="checkbox"/> Damages to bridge coverlay <br>
								<input id="oth" type="checkbox"/> Other
								<textarea id="texta1" cols="50" rows="4" placeholder="Describe"></textarea> <br>
							</li>
							<li> Result: <br>
								<input type="checkbox"/> Acceptable <br>
								<input type="checkbox"/> Not acceptable
							</li>
						</ul>

						<!-- Images -->
						<?php
						include('imagetool/imagetool.html');
						?>
						<hr>
				 </div>
			 </div>

			 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-bridgedam','template-bridgedam');">Add new item</button></p>
			</fieldset>

		</fieldset>

		<br>
		<fieldset>
 			<legend>Damages to the FB due to heat?</legend><br>
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
 			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<ul>
					<li>Damage type: <br>
						<input type="checkbox"/> Damage to FB coverlay <br>
						<input type="checkbox"/> Damage to FB soldering pads <br>
						<input id="oth" type="checkbox"/> Other
						<textarea id="texta1" cols="50" rows="4" placeholder="Describe"></textarea> <br>
					</li>
					<li>Result: <br>
						<input type="checkbox"/> Acceptable <br>
						<input type="checkbox"/> Not acceptable
					</li>
				</ul>

				<!-- Images -->
				<?php
				include('imagetool/imagetool.html');
				?>
			</fieldset>
		</fieldset>


	</form>

	<h2>Soldering of the BB to the Filter Board</h2>

	<form action="">

		<fieldset>
			<legend>Presence of shorts after BB soldering to FB?</legend><br>
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-bbfbshorts-0">
					<div id="template-bbfbshorts-0">
						<hr>
						<ul>
							<li> Line of HIC in position: <input id="printnumb2" type="number" style="width: 70px"/> <br>
									In short with: <input type="checkbox"/> Ground <input type="checkbox"/> Another strip
							</li>
							<li> Result: <br>
								<input type="checkbox" name="1" value="1"/> Short disappered after rework
								<br>
								<input type="checkbox" name="2" value="2"/> Cannot remove the short
							</li>
						</ul>
						<?php
						include('imagetool/imagetool.html');
						?>

						<hr>
				 </div>
			 </div>

			 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-bbfbshorts','template-bbfbshorts');">Add new item</button></p>
			</fieldset>
		</fieldset>
		<br>
		<fieldset>
			<legend>Damages to the BB termination pads due to wrong handling?</legend><br>
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
				<ul>
					<li>Damage type: <br>
						<input id="i1" type="checkbox"/> Some pads detached <br>
						<span id="s1"> Number of pads: <input type="text" style="width: 90px"/> </span><br>
						<input id=i2 type="checkbox"/> Cracks in some pads <br>
						<span id="s2"> Number of pads: <input type="text" style="width: 90px"/> </span><br>
						<input id="oth" type="checkbox"/> Other
						<textarea id="texta1" cols="50" rows="4" placeholder="Describe"></textarea> <br>
					</li>
					<li> Result: <br>
						<input type="checkbox"/> Acceptable <br>
						<input type="checkbox"/> Not acceptable
					</li>
				</ul>

				<!-- Images -->
				<?php
				include('imagetool/imagetool.html');
				?>
			</fieldset>

		</fieldset>
		<br>

		<fieldset>
 			<legend>Damages to the bridge of BB extension due to heat?</legend><br>
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-bridgebbdam-0">
					<div id="template-bridgebbdam-0">
						<ul>
							<li>Damage type: <br>
								<input id="i1" type="checkbox"/> Some pads detached <br>
								<span id="s1"> Number of pads: <input type="text" style="width: 90px"/> </span><br>
								<input type="checkbox"/> Ground pads detached <br>
								<input type="checkbox"/> Damages to bridge coverlay <br>
								<input id="oth" type="checkbox"/> Other
								<textarea id="texta1" cols="50" rows="4" placeholder="Describe"></textarea> <br>
							</li>
							<li> Result: <br>
								<input type="checkbox"/> Acceptable <br>
								<input type="checkbox"/> Not acceptable
							</li>
						</ul>

						<!-- Images -->
						<?php
						include('imagetool/imagetool.html');
						?>
						<hr>
				 </div>
			 </div>

			 <p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-bridgebbdam','template-bridgebbdam');">Add new item</button></p>
			</fieldset>

		</fieldset>

		<br>
		<fieldset>
			<legend>Damages to the FB due to heat?</legend><br>
			<input type="checkbox" name="no" value="No" class="ok"/> No
			<br />
			<input id="check" type="checkbox" name="yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<ul>
					<li>Damage type: <br>
						<input type="checkbox"/> Damage to FB coverlay <br>
						<input type="checkbox"/> Damage to FB soldering pads <br>
						<input id="oth" type="checkbox"/> Other
						<textarea id="texta1" cols="50" rows="4" placeholder="Describe"></textarea> <br>
					</li>
					<li>Result: <br>
						<input type="checkbox"/> Acceptable <br>
						<input type="checkbox"/> Not acceptable
					</li>
				</ul>

				<!-- Images -->
				<?php
				include('imagetool/imagetool.html');
				?>
			</fieldset>
		</fieldset>



	</form>

	<h2> Other comments </h2>
  <textarea rows="10" cols="100" name="modissection" placeholder="Insert short report"></textarea>

	<!-- Images -->
	<h2> Other pictures not included in the form </h2>
	<?php
	include('imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="printall()"/>
	<a id="noprint" href="filterandcap.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
