<!doctype html>
<html lang="en">
<head>
	<title>HIC cut visual inspection</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

	<br>
  <?php include('add/addscript.html');?>
  <br>

	<style>
		p#p1{
			display: none;
		}

		input#i1:checked ~ p#p1 {
			display: block;
		}
	</style>
</head>

<body class="special">

	<a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1>HIC cut inspection (cut of FPC tab and wings) - Report</h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<span id="noprint"> (Example: OB-HIC-id tab&wings cut)</span>
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
 			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
	 			<input type="checkbox"/> Broken chips in the region of the cut
	 			<br />
	 			<input type="checkbox"/> Damages to FPC due to the cut
				<br />
				<input id="i1" type="checkbox"/> Damages to cross-cables
				<p id="p1"> CC type: <input type="checkbox"/> DVDD <input type="checkbox"/> DVSS <input type="checkbox"/> AVDD <input type="checkbox"/> AVSS <input type="checkbox"/> BACK-BIAS</p> <br>
				<br />
				<input type="checkbox" name="other" value="other"/> Other <input type="text" style="width: 400px"/>
				<br><br>

				<span> Do they affect the HIC functioning? <input type="checkbox"/> Yes <input type="checkbox"/> No <br>
				<?php
				include('imagetool/imagetool.html');
				?>
			</fieldset>

		</fieldset>

		<fieldset>
 			<legend>Visible damages to bonds?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-bond">
					<div id="template-bond">
						<hr>
						<ul>
							<li> Chip number: <input type="text" style="width: 90px"/></li>
							<li> Bond type (only most critical): <br>
								<input type="checkbox" name="mclk_p" value="mclk_p"/> MCLK_P
					 			<input type="checkbox" name="mclk_n" value="mclk_n"/> MCLK_N
								<br />
					 			<input type="checkbox" name="por_dis" value="por_dis"/> POR_DIS
								<br />
					 			<input type="checkbox" name="dctrl_p" value="dctrl_p"/> DCTRL_P
					 			<input type="checkbox" name="dctrl_n" value="dctrl_n"/> DCTRL_N
								<br />
					 			<input type="checkbox" name="dclk_p" value="dclk_p"/> DCLK_P
					 			<input type="checkbox" name="dclk_n" value="dclk_n"/> DCLK_N
								<br />
					 			<input type="checkbox" name="hsdata_p" value="hsdata_p"/> HSDATA_P
					 			<input type="checkbox" name="hsdata_n" value="hsdata_n"/> HSDATA_N
								<br />
					 			<input type="checkbox" name="CTRL" value="CTRL"/> CTRL
								<br />
					 			<input type="checkbox" name="BUSY" value="BUSY"/> BUSY
								<br />
					 			<input type="checkbox" name="DATA" value="DATA"/> DATA
								<br />
					 			<input type="checkbox" name="chipid" value="chipid"/> CHIP_ID
							</li>
							<li> Damage type: <input type="checkbox"/> One detached <input type="checkbox"/> Two detached <input type="checkbox"/> All detached </li>
							<li> Does it affect HIC functioning? <input type="checkbox"/> Yes <input type="checkbox"/> No </li>
						</ul>
						<?php
						include('imagetool/imagetool.html');
						?>

						<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-bond','template-bond');">Add new item</button></p>
			</fieldset>

			<br><span> <strong> Total number of broken bonds</strong>: <input type="text" style="width: 100px"/> </span> <br>
		</fieldset>

		<fieldset>
			<legend>Distance of the cut (rough, with usb camera)</legend><br>
			<p> Value: <input type="text" placeholder="value" style="width: 100px"/> um </p>
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


	<h2> Other comments </h2>
  <textarea rows="5" cols="100" name="modissection" placeholder="comments"></textarea>

	<!-- Images -->
	<h2> Other pictures not included in the form </h2>
	<?php
	include('imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="window.print()"/>
	<a href="hiccut.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>


</body>
</html>
