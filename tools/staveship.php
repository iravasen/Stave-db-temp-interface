<!doctype html>
<html lang="en">
<head>
	<title>Stave shipment</title>

	<meta http-equiv="Cache-control" content="no-cache">

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>


	<style>
		span#s1{
			display: none;
		}

		input#i1:checked ~ span#s1 {
			display: block;
		}

	</style>

	<!-- To print the page with a default name -->
	<script type="text/javascript">
		function printall(){
			document.title = document.getElementsByName("stavecity")[0].value +
												document.getElementsByName("selectedstave")[0].value +
												document.getElementsByName("stavenumber")[0].value +
												"_shipment_report";
			window.print();
			document.title = "Stave shipment";
		}
	</script>

	<?php include('add/addscript.html');?>

	<!--For cloning objects -->
	<?php include('clone_models/staveship_models.php');?>


</head>

<body class="special">

  <a id="noprint" href="../START.php" style="text-decoration: none"> <input style=" font-size: 17pt" type="button" value="HOME page"/></a>
  <br><br><br>

  <h1>Stave shipment - Report</h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
		<p>
			<?php include('ids/stvid.html')?> shipment
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
			End: <input type="date" required="required"/> <span> (approximate arrival date at CERN) </span>
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
		<p> Stave ID: <?php include('ids/stvid.html')?>  </p>
</fieldset>

<br>

<h2> Report </h2>
<br>

<form action="">
	<fieldset>
		<legend>Visible damages to stave when inserting it in the transport box?</legend><br>

		<input type="checkbox" name="No" value="No"/> No
		<br />
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<div id="placeholder-ship-0">
				<div id="template-ship-0">
					<hr>
					<p>
						<ul>
							<li> HS flavor: <br>
								<input type="checkbox"/> L <br>
								<input type="checkbox"/> R
							</li>
							<li> Damaged component: <br>
								 <input id="i1" type="checkbox"/> HIC <br>
								 <span id="s1">Position: <input type="text" style="width: 90px"/></span>
								 <input type="checkbox"/> Space-Frame <br>
								 <input type="checkbox"/> Cold-Plate <br>
								 <input type="checkbox"/> PB and BB extensions <br>
								 <input type="checkbox"/> FPC extension <br>
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
			<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-ship','template-ship');">Add new item</button></p>
		</fieldset>
	</fieldset>
	<br>
	<fieldset>
		<legend>Picture of the Stave inside the transport box before closing it.</legend><br>
		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>
	<br>
	<fieldset>
		<legend>Picture of the transport box before shipping it.</legend><br>
		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>

</form>

<h2> Other comments </h2>
<textarea rows="10" cols="100" name="modissection" placeholder="comments"></textarea>

<!-- Images -->
<h2> Other pictures not included in the form </h2>
<?php
include('imagetool/imagetool.html');
?>

<input id="noprint" type="button" value="Save page" style="position: center" onClick="printall()"/>
<a id="noprint" href="staveship.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>
</body>
</html>
