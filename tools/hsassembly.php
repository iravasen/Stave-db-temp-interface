<!doctype html>
<html lang="en">
<head>
	<title>HS assembly</title>

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

		input#i1:checked ~ span#s1 {
			display: block;
		}
	</style>

</head>

<body class="special">

	<a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1>HS assembly - Report</h1><br>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<span id="noprint"> (Example: OL/ML-HS-L/R-id assembly)</span>
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

 <p> Half-Stave ID: <input type="text" placeholder="HS id"/> </p>
 <p> Cold-Plate ID: <input type="text" placeholder="CP id"/> </p>

	<br>
	<h2> Half-Stave composition </h2>
	<div id="template-pos">
		<div id="placeh-pos">
			<hr>

			<span> Position <input type="text" style="width: 50px"/>: <input style="width: 300px" type="text" placeholder="OB-HIC id"/></p>
			<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
			<hr>
		</div>
	</div>
	<p id="noprint"><button type="button" name="Submit" onclick="Add('placeh-pos','template-pos');">Add new item</button></p>
	<br>

	<h2>Report</h2>
  <br>

	<form action="">
		<fieldset>
 			<legend>Glue serial number + opening date. <strong id="noprint"> Add picture </strong></legend><br>
 			<p> Serial number: <input type="text" placeholder="s/n"/></p>
			<p> Opening date: <input type="date"/></p>
			<p> Exipirity date: <input type="date"/></p>

			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>

		<fieldset>
 			<legend>Problems during glue-mask deposition?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-cappad">
					<div id="template-cappad">
						<hr>
						<p>
							<ul>
								<li><strong>For HIC in position</strong>: <input type="text" style="width: 90px"/> </li>
								<li> Type of problem: <br>
									<input type="checkbox" name="1" value="1"/> Glue too dense
									<br />
									<input type="checkbox" name="No" value="No"/> Glue too liquid
									<br />
									<input type="checkbox" name="No" value="No"/> Glue accidentally touched with fingers
									<br />
									<input type="checkbox" name="No" value="No"/> Glue uniformity on the Cold-Plate
									<br />
									<input type="checkbox" name="oth" value="oth"/> Other: <input type="text" style="width: 400px" placeholder="specify"/>
								</li>
								<li> Solution adopted: <br>
									<textarea rows="3" cols="50" placeholder="describe solution"></textarea><br>
								</li>
								<li> <input type="checkbox"/> Solved <input type="checkbox"/> Not solved </li>
							</ul>
						</p>
						<?php
						include('imagetool/imagetool.html');
						?>
						<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-cappad','template-cappad');">Add new item</button></p>
			</fieldset>
		</fieldset>

		<fieldset>
 			<legend>Problems during HIC gluing?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-hicg">
					<div id="template-hicg">
						<hr>
						<p>
							<ul>
								<li><strong>For HIC in position</strong>: <input type="text" style="width: 90px"/> </li>
								<li> Type of problem: <br>
									<input id="i1" type="checkbox"/> Shift wrt nominal position
										<span id="s1"> Shift along x: <input type="text" style="width: 90px"/> um</span> <br>
										<span id="s1"> Shift along y: <input type="text" style="width: 90px"/> um</span>
									<br />
									<input type="checkbox" name="oth" value="oth"/> Other: <input type="text" style="width: 400px" placeholder="specify"/>
								</li>
								<li> <input type="checkbox"/> Acceptable <input type="checkbox"/> Not acceptable </li>
							</ul>
						</p>

						<?php
						include('imagetool/imagetool.html');
						?>
						<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
						<hr>
					</div>
				</div>
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-hicg','template-hicg');">Add new item</button></p>
			</fieldset>

		</fieldset>

	</form>
	<h2> Other Comments </h2>
  <textarea rows="5" cols="100" name="modissection" placeholder="Insert short report"></textarea>

	<!-- Images -->
	<h2> Other pictures not included in the form </h2>
	<?php
	include('imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="window.print()"/>
	<a id="noprint" href="hsassembly.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
