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

	<h1> [REWORK] Bridge soldering, FPC extension gluing/soldering, resistor desoldering - Report </h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<span id="noprint"> (Example: [REWORK] Bridge-Resistors and FPC-Ext soldering/desoldering on OL/ML-HS-L/R-#)</span>
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

	<p> HS-id <input type="text" placeholder="OL/ML-HS-L/R-<number>"/> </p>
	<p> FPC Extension id <input type="text" placeholder="GS-XXX" style="width: 100px"/> </p>
	<p> Name of the tin and composition <input type="text" placeholder="tin and composition" style="width: 300px"/></p>
	<p> Diameter of the soldering tip: <input type="text" style="width: 80px"/>mm </p>

	<br>
	<h2> Reworked components </h2>

	<fieldset>

		<div id="placeholder-align">
			<div id="template-align">
				<hr>

				<span style="color: red; font-size: 14pt"> Component </span><br>
				<input type="checkbox" id="check1"> Bridge <br>
				<input type="checkbox"> FPC extension <br>
				<input type="checkbox" id="check2"> MOD_ID resistor <br>
				<input type="checkbox" id="check3"> Termination resistor <br>

				<!--In case of a bridge-->
				<p id="p1">
					Connection between HIC in position <input type="text" style="width: 80px"/> and <input type="text" style="width: 80px"/>
				</p><br>

				<!--In case of a MOD_ID resistor-->
				<p id="p2">
					On HIC in position: <input type="text" placeholder="pos" style="width: 100px"/> <br>
					On Master <input type="text" placeholder="0 or 8" style="width: 100px"/> <br>
				</p>

				<p id="p3">
					On HIC in position: <input type="text" placeholder="pos" style="width: 100px"/> <br>
					On Chip number <input type="text" placeholder="chip #" style="width: 100px"/> <br>
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




</body>
</html>
