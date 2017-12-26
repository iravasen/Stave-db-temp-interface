<!doctype html>
<html lang="en">
<head>
	<title>HS gluing on SF</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

	<br>
  <?php include('add/addscript.html');?>
  <br>

	<style>
		span#s1{
			display: none;
		}

		span#s2{
			display: none;
		}

		textarea#texta1{
			display: none;
		}

		textarea#textyes{
			display: none;
		}

		input#yesdam:checked ~ textarea#textyes {
			display: block;
		}

		input#oth:checked ~ textarea#texta1 {
			display: block;
		}

		input#i1:checked ~ span#s1 {
			display: block;
		}

		input#i2:checked ~ span#s2 {
			display: block;
		}


	</style>

</head>

<body class="special">

	<a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
  <br><br><br>

  <h1>HS gluing on Space Frame - Report </h1>
	<h3 id="noprint"> Part of the Stave assembly </h3>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<p>
				<?php include('ids/hsid.html')?> gluing on SF
			</p>

			<p style="display: block; float: right;" id="noprint">
				Legend: A = Amsterdam, B = Berkeley, D = Daresbury, F = Frascati, T = Turin
			</p>
	</fieldset>

	<fieldset>
		<legend style="color: red; font-size: 14pt;">Date</legend>
		<p>
			Start: <input type="date" required="required"/> <br>
			End: <input type="date" required="required"/>
		</p>
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

  <h2>Report</h2>

  <br>
	<p> Half-Stave ID: <?php include('ids/hsid.html')?> </p>
	<p> Space-Frame ID: <?php include('ids/sfid.html')?> </p>
	<br>

	<form action="">
		<fieldset>
 			<legend>Glue. <strong id="noprint">Add picture of the tube with its label.</strong></legend><br>
 			<p> Batch number: <input type="text" placeholder="batch #"/></p>
			<p> Opening date: <input type="date"/></p>
			<p> Expiry date: <input type="date"/></p>

			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Problems during HS lifting from the base with the handling bar?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<ul>
					<li> Problem: <br>
						<textarea placeholder="Describe the problem" cols="100" rows="4"></textarea>
						<br />
					</li>
					<li> How did you solve it? <br>
						<textarea placeholder="Solution" cols="100" rows="4"></textarea>
					</li>
					<br>
					<li> Did you damage the HS? <input id="yesdam" type="checkbox"/> Yes <input type="checkbox"/> No <br>
						<textarea id="textyes" placeholder="describe the damage" cols="100" rows="4"></textarea> <br>
					</li>
				</ul>
				<?php
				include('imagetool/imagetool.html');
				?>
			</fieldset>
		</fieldset>

		<fieldset>
 			<legend>Problems during HS gluing under the SF?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<ul>
					<li> Problem: <br>
						<input id="i1"type="checkbox" name="1" value="1"/> Glue too dense
						<br />
						<span id="s1"/> Glue adhesion? <input type="checkbox"/> Good <input type="checkbox"/> Bad</span>
						<br />
						<input id="i2" type="checkbox" name="2" value="2"/> Glue too liquid
						<br />
						<span id="s2"/> Glue flowed down damaging the FPC? <input type="checkbox"/> No <input type="checkbox"/> Yes</span>
						<br />
						<input id="oth" type="checkbox"/> Other
						<textarea id="texta1" placeholder="specify" cols="50" rows="4"></textarea>
						<br />
					</li>
					<li> Result is acceptable? <input type="checkbox"/> Yes <input type="checkbox"/> No </li>
				</ul>
				<?php
				include('imagetool/imagetool.html');
				?>
			</fieldset>
		</fieldset>



		<fieldset>
 			<legend>Do you think the procedure (with the handling bar) damaged the HS?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Probably (to be tested)
 			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-dam">
					<div id="template-dam">
						<hr>
						<ul>
							<li> For HIC in position: <input id="printnumb2" type="number" style="width: 60px"/></li>
							<li> Describe the eventual problem: <br>
								 <textarea rows="5" cols="100" placeholder="describe"></textarea>
							</li>
							<li> Damages to FPC-Extension? <input type="checkbox"/> Yes <input type="checkbox"/> No </li>
						</ul>

						<?php
						include('imagetool/imagetool.html');
						?>

						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-dam','template-dam');">Add new item</button></p>
			</fieldset>

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
	<a id="noprint" href="hsgluing.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>


</body>
</html>
