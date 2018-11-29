<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<select name="stavecity" id="sites">
					<option value="-"> - </option>
					<option value="A"> A- </option>
					<option value="B"> B- </option>
					<option value="D"> D- </option>
					<option value="F"> F- </option>
					<option value="T"> T- </option>
</select>

<select id="selstv" name="selectedstave" >
	<option value="-"> - </option>
	<option value="OL-Stave"> OL-Stave- </option>
	<option value="ML-Stave"> ML-Stave- </option>
</select>

<script>
	$(document).ready(function() {
	// Construct URL object using current browser URL
	var url = new URL(document.location);

	// Get query parameters object
	var params = url.searchParams;

	// Get value of paper
	var opt1 = params.get("sites");
	var opt2 = params.get("selstv");

	// Set it as the dropdown value
	$("#sites").val(opt1);
	$("#selstv").val(opt2);
	if(!opt1) $("#sites").val("-");
	if(!opt2) $("#selstv").val("-");
	});
</script>

<input name="stavenumber" id="printnumb2" type="number" placeholder="XXX" style="width: 60px;" value="<?php echo (isset($_GET['stvidnum']) ? $_GET['stvidnum'] : '');?>"/><span id="noprint"> (XXX) </span>
