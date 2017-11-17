<!doctype html>
<html lang="en">
<head>
	<title>HIC cut visual inspection</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

</head>

<body class="special">

	<a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h2>HIC cut inspection (cut of FPC tab and wings) - Report</h2>
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
 <p> OB-HIC ID: <input type="text" placeholder="HIC id"/> </p>
 <br>

 <h2> Report </h2>
	<br>

  <h2>Inspection of most critical bonds and of the cut</h2>

	<form action="">
		<fieldset>
 			<legend>Visible damages to the HIC?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes, but don't affect functioning <span> - Where? <input type="text" placeholder="where"/></span>
			<br />
			<input type="checkbox" name="Yes" value="Yes"/> Yes, and affect functioning <span> - Where? <input type="text" placeholder="where"/></span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No

			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Visible damages to cross-cables?</legend><br>
			<input type="checkbox" name="Yes" value="Yes"/> Yes, but don't affect functioning <span> - Type <input type="text" placeholder="type"/></span>
			<br />
			<input type="checkbox" name="Yes" value="Yes"/> Yes, and affect functioning <span> - Where? <input type="text" placeholder="type"/></span>
 			<br />
 			<input type="checkbox" name="No" value="No"/> No

			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Visible damages to bonds?</legend><br>
 			<input type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
		</fieldset>

		<fieldset>
 			<legend>If yes, which bonds/chips are damaged?</legend><br>
 			<input type="checkbox" name="mclk_p" value="mclk_p"/> MCLK_P <span> - Chip number: <input type="text" placeholder="On chip..."/> </span>
 			<br />
 			<input type="checkbox" name="mclk_n" value="mclk_n"/> MCLK_N <span> - Chip number: <input type="text" placeholder="On chip..."/> </span>
			<br />
 			<input type="checkbox" name="por_dis" value="por_dis"/> POR_DIS <span> - Chip number: <input type="text" placeholder="On chip..."/> </span>
			<br />
 			<input type="checkbox" name="dctrl_p" value="dctrl_p"/> DCTRL_P <span> - Chip number: <input type="text" placeholder="On chip..."/> </span>
			<br />
 			<input type="checkbox" name="dctrl_n" value="dctrl_n"/> DCTRL_N <span> - Chip number: <input type="text" placeholder="On chip..."/> </span>
			<br />
 			<input type="checkbox" name="dclk_p" value="dclk_p"/> DCLK_P <span> - Chip number: <input type="text" placeholder="On chip..."/> </span>
			<br />
 			<input type="checkbox" name="dclk_n" value="dclk_n"/> DCLK_N <span> - Chip number: <input type="text" placeholder="On chip..."/> </span>
			<br />
 			<input type="checkbox" name="hsdata_p" value="hsdata_p"/> HSDATA_P <span> - Chip number: <input type="text" placeholder="On chip..."/> </span>
			<br />
 			<input type="checkbox" name="hsdata_n" value="hsdata_n"/> HSDATA_N <span> - Chip number: <input type="text" placeholder="On chip..."/> </span>
			<br />
 			<input type="checkbox" name="CTRL" value="CTRL"/> CTRL <span> - Chip number: <input type="text" placeholder="On chip..."/> </span>
			<br />
 			<input type="checkbox" name="BUSY" value="BUSY"/> BUSY <span> - Chip number: <input type="text" placeholder="On chip..."/> </span>
			<br />
 			<input type="checkbox" name="DATA" value="DATA"/> DATA <span> - Chip number: <input type="text" placeholder="On chip..."/> </span>
			<br />
 			<input type="checkbox" name="chipid" value="chipid"/> CHIP_ID <span> - Chip number: <input type="text" placeholder="On chip..."/> </span>

			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
			<legend>Distance of the cut (rough, with usb camera)</legend><br>
			<p> Insert value: <input type="text" placeholder="value" style="width: 100px"/> um </p>
			<p>Is the cut distance acceptable?</p>
			<input type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />
 			<input type="checkbox" name="No" value="No"/> No

			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
			<legend>Is this HIC acceptable after tab and wings cut?</legend><br>
			<input type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />
 			<input type="checkbox" name="No" value="No"/> No
		</fieldset>
	</form>

	<h2> Database parameters </h2>
	<span> Distance of the cut (rough, from usb camera): <input type="text" style="width: 100px"/> um</span> <br>
	<span> Number of broken bonds: <input type="text" style="width: 100px"/> </span> <br>

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
