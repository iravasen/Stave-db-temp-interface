<!doctype html>
<html lang="en">
<head>
	<title>Cold Plate visual inspection</title>

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

</head>

<body class="special">

	<a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1>Cold Plate visual inspection and planarity - Report</h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<p>
				<?php include('ids/cpid.html')?> planarity and inspection
			</p>
	</fieldset>

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

	<br>
	<p> Cold-Plate ID: <?php include('ids/cpid.html')?>
	</p>
	<br>

	<h2>Visual inspection and planarity</h2>
  <br>

	<form action="">
		<fieldset>
 			<legend>Visible damages to CP carbon-fiber structure?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
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

		<fieldset>
 			<legend>Visible damages to cooling pipes?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

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

		<fieldset>
			<legend>Visible damages to external CP rubber tubes?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

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

		<fieldset>
			<legend> Is this Cold-Plate acceptable after the visual inspection? (if yes, measure planarity) </legend>
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
			<br />
			<input type="checkbox" name="No" value="No"/> No

			<fieldset id="ifproblem">
				<span> Planarity: <input type="text" style="width: 50px"/> um</span><br>
				<input type="checkbox"/> Acceptable <br>
				<input type="checkbox"/> Acceptable, but we put it aside in case of need <br>
				<input type="checkbox"/> Not acceptable <br>
			</fieldset>

		</fieldset>

	</form>

	<h2> Other comments </h2>
  <textarea rows="5" cols="100" name="modissection" placeholder="comments"></textarea>

	<!-- Images -->
	<h2> Other pictures not included in the form </h2>
	<?php
	include('imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="window.print()"/>
	<a id="noprint" href="cpvisual.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
