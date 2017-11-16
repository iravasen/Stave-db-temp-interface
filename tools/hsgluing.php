<!doctype html>
<html lang="en">
<head>
	<title>HS gluing on SF</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

</head>

<body class="special">

	<a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1>HS gluing on Space Frame - Report</h1>

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

  <h2>Report</h2>

  <br>
	<p> Half-Stave ID: <input type="text" placeholder="HIC id"/> </p>
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
 			<legend>Problems during HS alignment under the SF?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes
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
				<input type="checkbox" name="2" value="2"/> Little Shift in y wrt nominal position <span> - Shift value: <input type="text" placeholder="y value"/></span>
				<br />
				<input type="checkbox" name="3" value="3"/> Little Shift in x wrt nominal position <span> - Value: <input type="text" placeholder="x value"/></span>

				<?php
				include('imagetool/imagetool.html');
				?>
		</fieldset>

		<fieldset>
 			<legend>Visible damages to the HS due to movements with the handling bar?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes <span> - Short description: <textarea rows="5" cols="50" placeholder="describe"/></textarea></span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No

			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Problems during HS gluing?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
			<legend>If yes, indicate the type of problem</legend>
				<input type="checkbox" name="1" value="1"/> Glue too dense
				<br />
				<input type="checkbox" name="2" value="2"/> Glue too liquid
				<br />
				<input type="checkbox" name="3" value="3"/> Too much glue for each SF leg
				<br />
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
