<!doctype html>
<html lang="en">
<head>
	<title>Filter Board visual inspection (reception)</title>

	<meta http-equiv="Cache-control" content="no-cache">

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

	<style>
		textarea#texta1{
			display: none;
		}

		input#oth:checked ~ textarea#texta1 {
			display: block;
		}
	</style>

	<!-- To print the page with a default name -->
	<script type="text/javascript">
		function printall(){
			document.title = document.getElementsByName("fbselected")[0].value +
												document.getElementsByName("fbnumber")[0].value +
												"_reception_test_report";
			window.print();
			document.title = "Filter Board visual inspection (reception)";
		}
	</script>

</head>

<body class="special">

	<a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
  <br><br><br>

  <h1>Filter Board visual inspection (reception) - Report</h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<p>
				<?php include('ids/fbid.html')?> reception test
			</p>
	</fieldset>
	<br>
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

  <fieldset>
		<legend> Component IDs </legend>
			<p> Filter-Board ID: <?php include('ids/fbid.html')?> </p>
	</fieldset>

	<h2>Report</h2>
	<form action="">
		<fieldset>
 			<legend>Visible damages on the FB ?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">

	 			<input type="checkbox" name="bend" value="bend"/> Cracks on the board
	 			<br />
	 			<input type="checkbox" name="engr" value="engr"/> Engravings
				<br />
	 			<input type="checkbox" name="engr" value="engr"/> Soldering pad for PB on top layer damaged
				<br />
				<input type="checkbox" name="engr" value="engr"/> Soldering pad for PB on bottom layer damaged
				<br />
				<input type="checkbox" name="engr" value="engr"/> Soldering pad for BB damaged
				<br />
	 			<input type="checkbox" name="fbpad" value="fbpad"/> Decoupling capacitors
				<br />
	 			<input type="checkbox" name="cap" value="cap"/>  Connector pins are bent
				<br />
	 			<input type="checkbox" name="cap" value="cap"/>  Connector pins are missing
				<br />
				<input id="oth" type="checkbox" name="other" value="other"/> Other
				<textarea id="texta1" cols="50" rows="4" placeholder="specify"></textarea>


				<br><br>
				<span> Do they affect the Filter-Board functioning? <input type="checkbox"/> Yes <input type="checkbox"/> No <br>

				<?php
				include('imagetool/imagetool.html');
				?>

			</fieldset>

		</fieldset>

		<br>
		<fieldset>
 			<legend>Presence of shorts?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-shorts">
					<div id="template-shorts">
						<ul>
							<li> Describe: <br>
								<textarea rows="3" cols="100" placeholder="describe"></textarea>
							</li>
							<li> R [Ohm] wrt ground: <input type="text" placeholder="R [Ohm]"/></li>
							<li> R [Ohm] wrt another strip: <input type="text" placeholder="R [Ohm]"/> </li>

						</ul>

						<?php
						include('imagetool/imagetool.html');
						?>


						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-shorts','template-shorts');">Add new item</button></p>
			</fieldset>

		</fieldset>
		<br>
		<fieldset>
			<legend>Is this FB acceptable?</legend><br>
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

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="printall()"/>
	<a id="noprint" href="recfilterboard.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
