<!doctype html>
<html lang="en">
<head>
	<title>Space Frame visual inspection (reception)</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

	<style>
		p#p1{
			display: none;
		}

		input#uleg:checked ~ p#p1 {
			display: block;
		}
	</style>

</head>

<body class="special">

	<a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1>Space Frame visual inspection (reception) - Report</h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<span id="noprint"> (Example: OL/ML-SF-id reception test)</span>
			<input type="text" placeholder="name" style="width: 500px">
	</fieldset>

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

	<!--People-->
 <br>
 <?php include('people/people.html');?>
 <br>

 <br>
 <p> Space-Frame ID: <input type="text" placeholder="SF id"/> </p>
 <br>

 <h2>Report</h2>
	<br>
	<form action="">
		<fieldset>
 			<legend>Visible damages to SF structure?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<span> Type of damage: </span> <br>
				<input id="uleg" type="checkbox"/> Some U-legs missing <br>
				<input type="checkbox"/> Damages to the carbon lattice <br>
				<input type="checkbox"/> Other: <input type="text" placeholder="specify" style="width: 400px"/> <br><br>

				<p id="p1">
					Number of missing u-legs: <input type="text" style="width: 90px"/> <br>
				</p>

				<?php
				include('imagetool/imagetool.html');
				?>
			</fieldset>

		</fieldset>

		<fieldset>
			<legend>Is this SF acceptable?</legend><br>
				<input type="checkbox"/> Yes <br>
				<input type="checkbox"/> Yes, but we put it aside in case of need <br>
				<input type="checkbox"/> No <br>
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
	<a href="recspaceframe.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
