<!doctype html>
<html lang="en">
<head>
	<title>FB and capacitor soldering</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/> <!--For the printer-->

</head>

<body class="special">

	<a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1>Capacitor soldering on PB and BB, Filter Board soldering on PB and BB - Report</h1>

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
	<p> Power Bus ID: <input type="text" placeholder="PB id"/> </p>
	<p> Bias Bus ID: <input type="text" placeholder="BB id"/> </p>
	<p> Filter Board ID: <input type="text" placeholder="FB id"/> </p>
	<p> Name of the tin and composition <input type="text" placeholder="tin and composition"/></p>
	<p> Diameter of the soldering tip: <input style="width: 2%" type="text"/>mm </p>
	<br>

	<h2>Soldering of decoupling capacitors on PB</h2>

	<form action="">

		<fieldset>
 			<legend>Damages to the PB due to heat? </legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes, but acceptable
 			<br />
			<input type="checkbox" name ="Yess" value="Yess"/> Yes, serious <span> - Short description <textarea rows="3" cols="50" placeholder="describe"></textarea></span>
			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<!-- Images -->
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Presence of shorts after PB soldering?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes <span> - Short description: <textarea rows="5" cols="50" placeholder="describe"/></textarea></span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<!-- Images -->
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>If yes, after the rework, were there damages to PB due to heat?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes <span> - Short description: <textarea rows="5" cols="50" placeholder="describe"/></textarea></span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<!-- Images -->
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

	</form>

	<h2> Soldering of decoupling capacitors on BB</h2>
	<form action="">

		<fieldset>
 			<legend>Damages to the BB due to heat?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes, but acceptable
 			<br />
			<input type="checkbox" name ="Yess" value="Yess"/> Yes, serious <span> - Short description <textarea rows="3" cols="50" placeholder="describe"></textarea></span>
			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<!-- Images -->
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Presence of shorts after BB soldering?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes <span> - Short description: <textarea rows="5" cols="50" placeholder="describe"/></textarea></span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<!-- Images -->
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>If yes, after the rework, were there damages to BB due to heat?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes <span> - Short description: <textarea rows="5" cols="50" placeholder="describe"/></textarea></span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<!-- Images -->
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

	</form>

	<h2>Soldering of the PB to the Filter Board</h2>

	<form action="">

		<fieldset>
 			<legend>Damages to the PB pads due to heat?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes, but acceptable
 			<br />
			<input type="checkbox" name ="Yess" value="Yess"/> Yes, serious <span> - Short description (indicate the type of PB extension) <textarea rows="3" cols="50" placeholder="describe"></textarea></span>
			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<!-- Images -->
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Damages to the FB due to heat?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes, but acceptable
 			<br />
			<input type="checkbox" name ="Yess" value="Yess"/> Yes, serious <span> - Short description (indicate the side) <textarea rows="3" cols="50" placeholder="describe"></textarea></span>
			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<!-- Images -->
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Presence of shorts after PB soldering?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes <span> - Short description (indicate where): <textarea rows="5" cols="50" placeholder="describe"/></textarea></span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<!-- Images -->
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>If yes, after the rework, were there damages to PB due to heat?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes <span> - Short description (indicate the type of PB extension): <textarea rows="5" cols="50" placeholder="describe"/></textarea></span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<!-- Images -->
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>If yes, after the rework, were there damages to FB due to heat?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes <span> - Short description (indicate the side): <textarea rows="5" cols="50" placeholder="describe"/></textarea></span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
			<!-- Images -->
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

	</form>

	<h2>Soldering of the BB to the Filter Board</h2>

	<form action="">

		<fieldset>
			<legend>Damages to the BB pads due to heat?</legend><br>
			<input type="checkbox" name="Yes" value="Yes"/> Yes, but acceptable
			<br />
			<input type="checkbox" name ="Yess" value="Yess"/> Yes, serious <span> - Short description <textarea rows="3" cols="50" placeholder="describe"></textarea></span>
			<br />
			<input type="checkbox" name="No" value="No"/> No
			<!-- Images -->
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
			<legend>Damages to the FB due to heat?</legend><br>
			<input type="checkbox" name="Yes" value="Yes"/> Yes, but acceptable
			<br />
			<input type="checkbox" name ="Yess" value="Yess"/> Yes, serious <span> - Short description <textarea rows="3" cols="50" placeholder="describe"></textarea></span>
			<br />
			<input type="checkbox" name="No" value="No"/> No
			<!-- Images -->
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
			<legend>Presence of shorts after BB soldering?</legend><br>
			<input type="checkbox" name="Yes" value="Yes"/> Yes <span> - Short description: <textarea rows="5" cols="50" placeholder="describe"/></textarea></span>
			<br />
			<input type="checkbox" name="No" value="No"/> No

			<fieldset>
				<legend>If yes, after the rework, were there damages to BB due to heat?</legend><br>
				<input type="checkbox" name="Yes" value="Yes"/> Yes <span> - Short description: <textarea rows="5" cols="50" placeholder="describe"/></textarea></span>
				<br />
				<input type="checkbox" name="No" value="No"/> No
			</fieldset>

			<fieldset>
				<legend>If yes, after the rework, were there damages to FB due to heat?</legend><br>
				<input type="checkbox" name="Yes" value="Yes"/> Yes <span> - Short description: <textarea rows="5" cols="50" placeholder="describe"/></textarea></span>
				<br />
				<input type="checkbox" name="No" value="No"/> No
			</fieldset>

			<!-- Images -->
			<?php
			include('imagetool/imagetool.html');
			?>

		</fieldset>



	</form>

	<h2> Other comments </h2>
  <textarea rows="5" cols="100" name="modissection" placeholder="Insert short report"></textarea>

	<!-- Images -->
	<h2> Other pictures not included in the form </h2>
	<?php
	include('imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="window.print()"/>

</body>
</html>
