<!doctype html>
<html lang="en">
<head>
	<title>HS assembly</title>

	<meta http-equiv="Cache-control" content="no-cache">

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

  <?php include('add/addscript.html');?>

	<style>
		span#s1{
			display: none;
		}

		textarea#texta1{
			display: none;
		}

		input#oth:checked ~ textarea#texta1 {
			display: block;
		}

		input#i1:checked ~ span#s1 {
			display: block;
		}
	</style>

	<!-- To print the page with a default name -->
	<script type="text/javascript">
		function printall(){
			document.title = document.getElementsByName("selectedcity")[0].value +
												document.getElementsByName("selectedhs")[0].value +
												document.getElementsByName("hsnumber")[0].value +
												"_assembly_report";
			window.print();
			document.title = "HS assembly";
		}
	</script>

	<!-- For cloning the objects -->
	<?php include('clone_models/hsassembly_models.php'); ?>

</head>

<body class="special">

	<a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
  <br><br><br>

  <h1>HS assembly - Report</h1><br>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<p>
				<?php include('ids/hsid.html')?> assembly
			</p>

			<p style="display: block; float: right;" id="noprint">
				Legend: A = Amsterdam, B = Berkeley, D = Daresbury, F = Frascati, T = Turin
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
		 <p> Half-Stave ID: <?php include('ids/hsid.html')?> </p>
		 <p> Cold-Plate ID: <?php include('ids/cpid.html')?> </p>


		 <fieldset>
			 <legend> Half-Stave composition </legend>
				 <div id="template-pos-0">
			 		<div id="placeh-pos-0">
			 			<hr>

			 			<span> Position <input id="printnumb2" type="number" style="width: 40px"/>: <?php include('ids/hicid.html')?></span>

			 			<hr>
			 		</div>
			 	</div>

			 	<p id="noprint"><button type="button" name="Submit" onclick="Add('template-pos','placeh-pos');">Add new item</button></p>
			</fieldset>

 </fieldset>


	<h2>Report</h2>
  <br>

	<form action="">
		<fieldset>
 			<legend>Glue. <strong id="noprint"> Add picture of the tube with its label.</strong></legend><br>
 			<p> Batch number: <input type="text" placeholder="batch #"/></p>
			<p> Opening date: <input type="date"/></p>
			<p> Expiry date: <input type="date"/></p>

			<?php
			include('imagetool/imagetool.html');
			?>
		</fieldset>
		<br>
		<fieldset>
 			<legend>Problems during glue-mask deposition/removal?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

			<fieldset id="ifproblem">
				<div id="placeholder-cappad-0">
					<div id="template-cappad-0">
						<hr>
						<p>
							<ul>
								<li><strong>For HIC in position</strong>: <input id="printnumb2" type="number" style="width: 60px"/> </li>
								<li> Type of problem: <br>
									<input type="checkbox" name="1" value="1"/> Glue too dense
									<br />
									<input type="checkbox" name="No" value="No"/> Glue too liquid
									<br />
									<input type="checkbox" name="No" value="No"/> Glue accidentally touched with fingers
									<br />
									<input type="checkbox" name="No" value="No"/> Glue uniformity on the Cold-Plate
									<br />
									<input type="checkbox"/> Parylene detached from CP
									<br />
									<input id="oth" type="checkbox" name="oth" value="oth"/> Other
									<textarea id="texta1" cols="50" rows="4" placeholder="specify"></textarea>
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

						<hr>
					</div>
				</div>

				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-cappad','template-cappad');">Add new item</button></p>
			</fieldset>
		</fieldset>
		<br>
		<fieldset>
 			<legend>Problems during HIC gluing?</legend><br>
			<input type="checkbox" name="No" value="No"/> No
			<br />
 			<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes
 			<br />

			<fieldset id="ifproblem">
				<div id="placeholder-hicg-0">
					<div id="template-hicg-0">
						<hr>
						<p>
							<ul>
								<li><strong>For HIC in position</strong>: <input id="printnumb2" type="number" style="width: 60px"/> </li>
								<li> Type of problem: <br>
									<input id="i1" type="checkbox"/> Shift wrt nominal position
										<span id="s1"> Shift along x: <input type="text" style="width: 70px"/> um</span> <br>
										<span id="s1"> Shift along y: <input type="text" style="width: 70px"/> um</span>
									<br />
									<input id="oth" type="checkbox" name="oth" value="oth"/> Other
									<textarea id="texta1" cols="50" rows="4" placeholder="specify"></textarea>
								</li>
								<br>
								<li> <input type="checkbox"/> Acceptable <input type="checkbox"/> Not acceptable </li>
							</ul>
						</p>

						<?php
						include('imagetool/imagetool.html');
						?>

						<hr>
					</div>
				</div>
				
				<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-hicg','template-hicg');">Add new item</button></p>
			</fieldset>

		</fieldset>

	</form>
	<h2> Other Comments </h2>
  <textarea rows="10" cols="100" name="modissection" placeholder="Insert short report"></textarea>

	<!-- Images -->
	<h2> Other pictures not included in the form </h2>
	<?php
	include('imagetool/imagetool.html');
	?>

	<input id="noprint" type="button" value="Save page" style="position: center" onClick="printall()"/>
	<a id="noprint" href="hsassembly.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
