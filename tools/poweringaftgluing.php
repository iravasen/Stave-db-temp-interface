<!doctype html>
<html lang="en">
<head>
	<title>HIC powering after gluing</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

	<br>
  <?php include('add/addscript.html');?>
  <br>

	<style>
		p#pyes{
			display: none;
		}

		input#iy:checked ~ p#pyes {
			display: block;
		}

	</style>
</head>

<body>

	<a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1>HIC powering after gluing on CP - Report</h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<p>
				<?php include('ids/hicid.html')?> powering on <?php include('ids/cpid.html')?>
			</p>
	</fieldset>

	<fieldset>
		<legend style="color: red; font-size: 14pt;">Date</legend>
		<p>
			Start: <input type="date" required="required"/> <br>
			End: <input type="date" required="required"/>
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
	<p> OB-HIC ID: <?php include('ids/hicid.html')?> </p>
	<p> CP ID: <?php include('ids/cpid.html')?></p>
	<br>
	<p> OB-HIC position on CP: <input id="printnumb2" type="number" placeholder="#" style="width: 50px"/> </p>

	<h2>Report</h2>

	<form action="">
		<fieldset>
 			<legend>Voltages and currents</legend><br>

			<ul>
				<li>AVDD: <input type="text" style="width: 65px"/> V <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

				<li>I<sub>AVDD</sub>: <input type="text" style="width: 65px"/> A <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

				<li>DVDD: <input type="text" style="width: 65px"/> V <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

				<li>I<sub>DVDD</sub>: <input type="text" style="width: 65px"/> A <br>
					<input type="checkbox"/> ok <input type="checkbox"/> nok
				</li>

			</ul>

		</fieldset>

		<fieldset>
			<legend>Is this HIC on CP acceptable?</legend><br>
			<input type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />
 			<input id="check" type="checkbox" name="No" value="No"/> No

			<fieldset id="ifproblem">
				<ul>
					<li> Did you remove it from the CP? <input id="iy" type="checkbox"/> Yes <input type="checkbox"/> No <br>
						<p id="pyes"> Describe eventual damages to CP and/or adjacent HICs <br>
							<textarea rows="5" cols="50" placeholder="describe"></textarea>
							<br>
							<span>Acceptable? <input type="checkbox"/> Yes <input type="checkbox"/> No </span>
						</p>
					</li>
				</ul>

			</fieldset>

		</fieldset>
	</form>

	<h2> Other Comments </h2>
  <textarea rows="5" cols="100" name="modissection" placeholder="comments"></textarea>

	<!-- Images -->
	<h2> Pictures </h2>
	<?php
	include('imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="window.print()"/>
	<a id="noprint" href="poweringaftercut.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>
</body>
</html>
