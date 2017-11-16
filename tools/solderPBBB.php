<!doctype html>
<html lang="en">
<head>
	<title>PB,BB soldering</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

</head>

<body class="special">

  <a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1>Power Bus, Bias Bus soldering to HS- Report</h1>

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
	<p> HS ID: <input type="text" placeholder="HS id"/></p>
	<p> Power Bus ID: <input type="text" placeholder="PB id"/> </p>
	<p> Bias Bus ID: <input type="text" placeholder="BB id"/> </p>
	<p> Filter Board ID: <input type="text" placeholder="FB id"/> </p>
	<p> Name of the tin and composition <input type="text" placeholder="tin and composition"/></p>
	<p> Diameter of the soldering tip: <input style="width: 2%" type="text"/>mm </p>
	<br>

  <h2>Bias Bus Soldering to HS</h2>
	<form action="">
		<fieldset>
 			<legend>Visible damages to cross-cables?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes, but don't affect functioning <span> - Type and HIC: <input type="text" placeholder="Ins. type and HIC"/> </span>
			<br />
			<input type="checkbox" name="Yes" value="Yes"/> Yes, and affect functioning <span> - Type and HIC: <input type="text" placeholder="Ins. type and HIC"/> </span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Visible damages to BB soldering pads?</legend><br>
			<input type="checkbox" name="Yes" value="Yes"/> Yes, but don't affect functioning <span> - Type and HIC: <input type="text" placeholder="Ins. type and HIC"/> </span>
			<br />
			<input type="checkbox" name="Yes" value="Yes"/> Yes, and affect functioning <span> - Type and HIC: <input type="text" placeholder="Ins. type and HIC"/> </span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Visible damages to BB due to heat?</legend><br>
			<input type="checkbox" name="Yes" value="Yes"/> Yes, but don't affect functioning <span> - Close to HIC: <input type="text" placeholder="Ins. HIC"/> </span>
			<br />
			<input type="checkbox" name="Yes" value="Yes"/> Yes, and affect functioning <span> - Close to HIC: <input type="text" placeholder="Ins. HIC"/> </span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

	</form>

  <h2>Power Bus soldering to HS</h2>
	<form action="">
		<fieldset>
 			<legend>Visible damages to cross-cables?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes, but don't affect functioning <span> - Type and HIC: <input type="text" placeholder="Ins. type and HIC"/> </span>
			<br />
			<input type="checkbox" name="Yes" value="Yes"/> Yes, and affect functioning <span> - Type and HIC: <input type="text" placeholder="Ins. type and HIC"/> </span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Visible damages to PB soldering pads?</legend><br>
			<input type="checkbox" name="Yes" value="Yes"/> Yes, but don't affect functioning <span> - Type and HIC: <input type="text" placeholder="Ins. type and HIC"/> </span>
			<br />
			<input type="checkbox" name="Yes" value="Yes"/> Yes, and affect functioning <span> - Type and HIC: <input type="text" placeholder="Ins. type and HIC"/> </span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Visible damages to PB due to heat?</legend><br>
			<input type="checkbox" name="Yes" value="Yes"/> Yes, but don't affect functioning <span> - Close to HIC: <input type="text" placeholder="Ins. HIC"/> </span>
			<br />
			<input type="checkbox" name="Yes" value="Yes"/> Yes, and affect functioning <span> - Close to HIC: <input type="text" placeholder="Ins. HIC"/> </span>
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
