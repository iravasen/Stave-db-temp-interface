<!doctype html>
<html lang="en">
<head>
	<title>HS assembly</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

</head>

<body class="special">

	<a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h2>HS assembly - Report</h2>

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

	<p> Half-Stave ID: <input type="text" placeholder="HIC id"/> </p>
	<br>
	<h3> Half-Stave composition </h3>
	<p> Position 1: <input style="width: 500px" type="text" placeholder="HIC pos 1 id"/></p>
	<p> Position 2: <input style="width: 500px" type="text" placeholder="HIC pos 2 id"/></p>
	<p> Position 3: <input style="width: 500px" type="text" placeholder="HIC pos 3 id"/></p>
	<p> Position 4: <input style="width: 500px" type="text" placeholder="HIC pos 4 id"/></p>
	<p> Position 5: <input style="width: 500px" type="text" placeholder="HIC pos 5 id"/></p>
	<p> Position 6: <input style="width: 500px" type="text" placeholder="HIC pos 6 id"/></p>
	<p> Position 7: <input style="width: 500px" type="text" placeholder="HIC pos 7 id"/></p>
	<br><br>

	<h2>Report</h2>
  <br>
	
	<form action="">
		<fieldset>
 			<legend>Glue serial number + opening date and picture.</legend><br>
 			<p> Serial number: <input type="text" placeholder="s/n"/></p>
			<p> Opening date: <input type="text" placeholder="open date"/></p>
			<p> Exipirity date: <input type="text" placeholder="exp. date"/></p>

			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Problems during glue-mask deposition?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
			<legend>If yes, indicate the type of problem.</legend>
				<input type="checkbox" name="1" value="1"/> Glue too dense
				<br />
				<input type="checkbox" name="No" value="No"/> Glue too liquid
				<br />
				<input type="checkbox" name="No" value="No"/> Glue accidentally touched with fingers
				<br />
				<input type="checkbox" name="No" value="No"/> Glue uniformity on the Cold-Plate
				<?php
				include('imagetool/imagetool.html');
				?>
		</fieldset>

		<fieldset>
 			<legend>Problems during HIC gluing?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes <span> - HIC positions: <input type="text" placeholder="hic positions"/></span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
			<legend>If yes, indicate the type of problem</legend>
				<input type="checkbox" name="1" value="1"/> Wrong alignment
				<br />
				<input type="checkbox" name="2" value="2"/> Little Shift in y wrt nominal position <span> - HIC and Value: <input type="text" placeholder="HIC: xxx - y value"/></span>
				<br />
				<input type="checkbox" name="3" value="3"/> Little Shift in x wrt nominal position <span> - Value: <input type="text" placeholder="HIC: xxx - x value"/></span>
				<?php
				include('imagetool/imagetool.html');
				?>
		</fieldset>

	</form>
	<h2> Other Comments </h2>
  <textarea rows="5" cols="100" name="modissection" placeholder="Insert short report"></textarea>

	<!-- Images -->
	<h2> Other pictures not included in the form </h2>
	<?php
	include('imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="window.print()"/>


</body>
</html>
