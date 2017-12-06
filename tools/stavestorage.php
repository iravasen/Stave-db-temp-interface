<!doctype html>
<html lang="en">
<head>
	<title>Stave storage</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

	<?php include('add/addscript.html');?>

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

  <h1>Stave storage - Report</h1>

	<fieldset>
		<legend style="color: red; font-size: 14pt;"> Activity name</legend>
			<p>
				<?php include('ids/stvid.html')?> storage
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
<p> Stave ID: <?php include('ids/stvid.html')?> </p>
<br>

<h2> Report </h2>
<br>
<form action="">
	<fieldset>
		<legend>Visible damages to Stave during storage period ?</legend><br>
		<input type="checkbox" name="No" value="No"/> No
		<br />
		<input id="check" type="checkbox" name="Yes" value="Yes"/> Yes

		<fieldset id="ifproblem">
			<div id="placeholder-storage">
				<div id="template-storage">
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
							<li> Result <br>
								 <input type="checkbox"/> Acceptable <br>
								 <input type="checkbox"/> Not acceptable
							</li>
						</ul>
					</p>

					<?php
					include('imagetool/imagetool.html');
					?>
					<p id="noprint"><button type="button" name="Remove item" onclick="Remove(this);">Remove item</button></p>
					<hr>
				</div>
			</div>
			<p id="noprint"><button type="button" name="Submit" onclick="Add('placeholder-storage','template-storage');">Add new item</button></p>
		</fieldset>

	</fieldset>

	<fieldset>
		<legend>Picture of the Stave in the storage room.</legend><br>
		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>

	<fieldset>
		<legend>Plot of the temperature trend during storage period</legend><br>
		<span> Max temperature: <input type="text" placeholder="max temp" style="width: 90px"/> °C</span> <br>
		<span> Min temperature: <input type="text" placeholder="min temp" style="width: 90px"/> °C</span>
		<br>
		<?php
		include('imagetool/imagetool.html');
		?>
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
<a id="noprint" href="stavestorage.php" style="text-decoration: none"> <input type="button" value="Reset form"/></a>

</body>
</html>
