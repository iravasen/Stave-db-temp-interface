<!doctype html>
<html lang="en">
<head>
	<title>Soldering/Desoldering</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../../css/fieldstyle.css"/>

	<style>
		p#p1{
			display: none;
		}

		p#p2{
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

		input#idiam:checked ~ span#sdiam {
			display: block;
		}

		input#itin:checked ~ span#stin {
			display: block;
		}

		input#check1:checked ~ p#p1 {
			display: block;
		}

		input#check2:checked ~ p#p2 {
			display: block;
		}

		input#check3:checked ~ p#p3 {
			display: block;
		}
	</style>

	<br>
  <?php include('../add/addscript.html');?>
  <br>

</head>

<body class="special">

	<a id="noprint" href="../../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
  <br><br><br>

	<h1> [REWORK] Capacitor soldering on PB and BB, Filter Board soldering on PB and BB - Report </h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<p>
				[REWORK] <?php include('../ids/fbid.html')?> and capacitor soldering on <?php include('../ids/pbid.html')?> and <?php include('../ids/bbid.html')?>
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
 <?php include('../people/people.html');?>
 <br>

 <fieldset>
	 <legend> Component IDs </legend>

		 <p> Power Bus ID: <?php include('../ids/pbid.html')?> </p>
		 <p> Bias Bus ID: <?php include('../ids/bbid.html')?> </p>
		 <p> Filter Board ID: <?php include('../ids/fbid.html')?> </p>
 </fieldset>
 <br>

 <fieldset>
	 <legend> General info </legend>
		 <p> <strong>Name of the tin and composition</strong> <br>
				 <input type="checkbox"/> Edsyn Sn62Pb36Ag2 <br>
				 <input id="itin" type="checkbox"/> Other <br>

			 <span id="stin"> Tin and its composition <input type="text" placeholder="tin and composition" style="width: 500px"/> </span>
		 </p>
		 <p> <strong>Diameter of the soldering tip</strong>: <br>
			 <input type="checkbox"/> 0.2 mm <br>
			 <input type="checkbox"/> 0.1 mm	<br>
			 <input type="checkbox"/> 0.4 mm <br>
			 <input id="idiam" type="checkbox"/> Other <br>
			 <span id="sdiam"> Diameter <input type="text" style="width: 80px"/> mm</span>

		 </p>
 </fieldset>


 <br>
 <h2>Reworked components</h2>
 <br>

	<fieldset>

		<div id="placeholder-rew">
			<div id="template-rew">
				<hr>

				<span style="color: red; font-size: 14pt"> Component </span><br>
				<input type="checkbox"> Power Bus termination pads on TOP layer of FB <br>
				<input type="checkbox"> Power Bus termination pads on BOTTOM layer of FB <br>
				<input type="checkbox"> Bias Bus termination pads <br>
				<input type="checkbox" id="check1"> Capacitors <br>

				<!-- In case of capacitors -->
				<p id="p1">
					Close to HIC in position: <input id="printnumb2" type="number" placeholder="#" style="width: 60px"/> <br>
				</p>

				<span> Description of the problem </span><br>
				<textarea rows="5" cols="100" placeholder="describe problem"></textarea>
				<br><br>

				<span> Description of the activity performed on the component </span><br>
				<textarea rows="5" cols="100" placeholder="describe activity"></textarea>
				<br><br>

				<input type="checkbox"/> It seems to work now (to be retested) <br>
				<input type="checkbox"/> No possibility to solve the problem

				<?php
				include('../imagetool/imagetool.html');
				?>


				<hr>
			</div>
		</div>
		<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-rew','template-rew');">Add new item</button></p>

	</fieldset>

	<h2> Other comments </h2>
  <textarea rows="5" cols="100" name="modissection" placeholder="comments"></textarea>

	<!-- Images -->
	<h2> Other pictures not included in the form </h2>
	<?php
	include('../imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="window.print()"/>
	<a id="noprint" href="filterandcap_rework.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>



</body>
</html>
