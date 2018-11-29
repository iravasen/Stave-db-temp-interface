<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<select name="selectedcity" id="sites-old">
					<option value="-"> - </option>
					<option value="A"> A- </option>
					<option value="B"> B- </option>
					<option value="D"> D- </option>
					<option value="F"> F- </option>
					<option value="T"> T- </option>
</select>

<select name="selectedhs" id="selhs-old">
	<option value="-"> - </option>
	<option value="OL-HS-L"> OL-HS-L- </option>
	<option value="OL-HS-U"> OL-HS-U- </option>
	<option value="ML-HS-L"> ML-HS-L- </option>
	<option value="ML-HS-U"> ML-HS-U- </option>
</select>

<script>
	//$(document).ready(function() {
	// Construct URL object using current browser URL
	var url = new URL(document.location);

	// Get query parameters object
	var params = url.searchParams;

	// Get value of paper
	var opt1 = params.get("sites");
	var opt2 = params.get("selhs");

	// Set it as the dropdown value
	$("#sites-old").val(opt1);
	$("#selhs-old").val(opt2);
	if(!opt1) $("#sites-old").val("-");
	if(!opt2) $("#selhs-old").val("-");
	//});
</script>

<input id="printnumb2" name="hsnumber" type="number" placeholder="XXX" style="width: 60px" value="<?php echo (isset($_GET['hsidnum-old']) ? $_GET['hsidnum-old'] : '');?>"/><span id="noprint">(XXX)</span>
