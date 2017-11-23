<!doctype html>
<html lang="en">
<head>
	<title>PB and BB to HS</title>

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

	<a id="noprint" href="../../START.php"><img src="../../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

	<h1> [REWORK] Power Bus, Bias Bus soldering to HS- Report </h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<span id="noprint"> (Example: [REWORK] OL/ML-PB-id and OL/ML-BB-id soldering on OL/ML-HS-id)</span>
			<input type="text" placeholder="name" style="width: 500px">
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
 <p> HS ID: <input type="text" placeholder="HS id"/></p>
 <p> Power Bus ID: <input type="text" placeholder="PB id"/> </p>
 <p> Bias Bus ID: <input type="text" placeholder="BB id"/> </p>
 <p> Filter Board ID: <input type="text" placeholder="FB id"/> </p>
 <p> Name of the tin and composition <input type="text" placeholder="tin and composition"/></p>
 <p> Diameter of the soldering tip: <input style="width: 5%" type="text"/>mm </p>
 <br>

	<h2> Reworked components </h2>

	<fieldset>

		<div id="placeholder-align">
			<div id="template-align">
				<hr>

				<span style="color: red; font-size: 14pt"> Component </span><br>
				<input type="checkbox" id="check1"> Cross-cables of PB <br>
				<input type="checkbox"> Cross-cable of BB <br>

				<!--In case of a bridge-->
				<p>
					HIC in position <input type="text" style="width: 80px"/>
				</p><br>

				<p id="p1">
					Type: <input type="checkbox"/> AVDD <input type="checkbox"/> DVDD <input type="checkbox"/> AVSS <input type="checkbox"/> DVSS
				</p><br>

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

				<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
				<hr>
			</div>
		</div>
		<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-align','template-align');">Add new item</button></p>

	</fieldset>

	<h2> Other comments </h2>
  <textarea rows="5" cols="100" name="modissection" placeholder="comments"></textarea>

	<!-- Images -->
	<h2> Other pictures not included in the form </h2>
	<?php
	include('../imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="window.print()"/>
	<a id="noprint" href="solderPBBB_rework.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>


</body>
</html>
