<!doctype html>
<html lang="en">
<head>
	<title>Cold Plate visual inspection</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

</head>

<body class="special">

	<a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1>Cold Plate visual inspection - Report</h1>

  <h2>Visual inspection</h2>
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

	<br>
	<p> Cold-Plate ID: <input type="text" placeholder="HIC id"/> </p>
	<br>

	<form action="">
		<fieldset>
 			<legend>Visible damages to CP structure (as cracks, damages to corners etc ...)?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes (add photo) <span> - Type: <input type="text" placeholder="Ins. type"/> </span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Visible damages to cooling pipes along the CP?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes (add photo) <span> - Type: <input type="text" placeholder="Ins. type"/> </span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
			<legend>Visible damages to external CP rubber tubes?</legend><br>
			<input type="checkbox" name="Yes" value="Yes"/> Yes (add photo) <span> - Type: <input type="text" placeholder="Ins. type"/> </span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<?php
			include('imagetool/imagetool.html');
			?>
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

</body>
</html>
