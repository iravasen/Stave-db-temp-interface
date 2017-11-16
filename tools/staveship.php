<!doctype html>
<html lang="en">
<head>
	<title>Stave shipment</title>

  <!--Include CSS file-->
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> <!--For the printer-->
	<link rel="stylesheet" type="text/css" href="../css/fieldstyle.css"/>

</head>

<body class="special">

  <a id="noprint" href="../START.php"><img src="../img/home.jpg" alt="Home" title="Home" width="100" height="100"/></a>
  <br><br><br>

  <h1>Stave shipment - Report</h1>

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

<h2> Report </h2>
<br>
<p> Stave ID: <input type="text" placeholder="Stave id"/> </p>
<p> Shipment date: <input type="text" placeholder="date"/> </p>
<br>


<form action="">
	<fieldset>
		<legend>Visible damages to stave when inserting in the transport box?</legend><br>
		<input type="checkbox" name="Yes" value="Yes"/> Yes, but don't affect functioning - <span> - Which damage? <input type="text" placeholder="Ins. type"/> </span>
		<br />
		<input type="checkbox" name="Yes" value="Yes"/> Yes, and affect functioning - <span> - Which damage? <input type="text" placeholder="Ins. type"/> </span>
		<br />
		<input type="checkbox" name="No" value="No"/> No
		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>

	<fieldset>
		<legend>Picture of the Stave inside the transport box before closing it?</legend><br>
		<?php
		include('imagetool/imagetool.html');
		?>
	</fieldset>

	<fieldset>
		<legend>Picture of the Stave inside the transport box before shipping it?</legend><br>
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

</body>
</html>
