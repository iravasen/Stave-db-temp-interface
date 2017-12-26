<!doctype html>
<html lang="en">
<head>
	<title>PB+BB folding</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

	<br>
  <?php include('add/addscript.html');?>
  <br>

</head>

<body class="special">

  <a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
  <br><br><br>

  <h1>Power Bus + Bias Bus folding on the Half-Stave - Report</h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<p>
				<?php include('ids/pbid.html')?> folding on <?php include('ids/hsid.html')?>
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
	<p> HS Id: <?php include('ids/hsid.html')?> </p>
	<p> Stave ID: <?php include('ids/stvid.html') ?></p>
	<br>

	<h2>Report</h2>

	<form action="">

		<fieldset>
 			<legend>Picture/s of the bar with PB and BB on top.</legend><br>
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Picture/s while folding the PB+BB.</legend><br>
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Picture/s of the final result.</legend><br>
			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Visible damages to the cross-cables?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-ccdam">
					<div id="template-ccdam">
						<hr>
						<p>
							<ul>
								<li> For HIC in position: <input id="printnumb2" type="number" style="width: 70px"/> </li>
								<li> CC type:
									<input type="checkbox"/> AVDD
									<input type="checkbox"/> DVDD
									<input type="checkbox"/> AVSS
									<input type="checkbox"/> DVSS
									<input type="checkbox"/> BIAS
								</li>
								<li> Description: <br>
									<textarea rows="3" cols="50" placeholder="describe"></textarea><br>
								</li>
								<li> Result: <br>
									<input type="checkbox"/> Acceptable <br>
									<input type="checkbox"/> Not acceptable
								</li>
							</ul>
						</p>

						<?php
						include('imagetool/imagetool.html');
						?>

						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-ccdam','template-ccdam');">Add new item</button></p>
			</fieldset>

		</fieldset>

		<fieldset>
 			<legend>Do you think to have damaged a HIC?</legend><br>
 			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-hicdam">
					<div id="template-hicdam">
						<hr>
						<p>
							<ul>
								<li> HIC in position: <input id="printnumb2" type="number" style="width: 70px"/> </li>
								<li> Description: <br>
									<textarea rows="3" cols="50" placeholder="describe"></textarea><br>
								</li>
								<li> Result <br>
									<input type="checkbox"/> Acceptable (to be tested) <br>
									<input type="checkbox"/> Not acceptable, serious damage
								</li>
							</ul>
						</p>

						<?php
						include('imagetool/imagetool.html');
						?>

						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-hicdam','template-hicdam');">Add new item</button></p>
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
	<a id="noprint" href="pbfold.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
