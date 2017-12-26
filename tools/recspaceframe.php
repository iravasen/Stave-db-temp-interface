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

		textarea#texta1{
			display: none;
		}

		input#oth:checked ~ textarea#texta1 {
			display: block;
		}
	</style>

</head>

<body class="special">

	<a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
  <br><br><br>

  <h1>Space Frame visual inspection (reception) - Report</h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<p>
				<?php include('ids/sfid.html')?> reception test
			</p>

	</fieldset>

	<fieldset>
		<legend style="color: red; font-size: 14pt;">Date</legend>
		<p>
			Start: <input type="date" required="required"/> <br>
			End: <input type="date" required="required"/>
		</p>
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
 <p> Space-Frame ID:<?php include('ids/sfid.html')?></p>
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
				<p id="p1">
					Number of missing u-legs: <input type="text" style="width: 90px"/> <br>
				</p>
				<input type="checkbox"/> Damages to the carbon lattice <br>
				<input id="oth" type="checkbox"/> Other
				<textarea id="texta1" cols="50" rows="5" placeholder="specify"></textarea>


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
	<a id="noprint" href="recspaceframe.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
