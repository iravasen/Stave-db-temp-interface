<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<select name="hscity-l" id="siteshsl">
					<option value="-"> - </option>
					<option value="A"> A- </option>
					<option value="B"> B- </option>
					<option value="D"> D- </option>
					<option value="F"> F- </option>
					<option value="T"> T- </option>
</select>

<select name="hsflavor-l" id="selhsl">
	<option value="-"> - </option>
	<option value="OL-HS-L"> OL-HS-L- </option>
	<option value="ML-HS-L"> ML-HS-L- </option>
</select>

<script>
	$(document).ready(function() {
	// Construct URL object using current browser URL
	var url = new URL(document.location);

	// Get query parameters object
	var params = url.searchParams;

	// Get value of paper
	var opt1 = params.get("siteshsl");
	var opt2 = params.get("selhsl");

	// Set it as the dropdown value
	$("#siteshsl").val(opt1);
	$("#selhsl").val(opt2);

	if(!opt1) $("#siteshsl").val("-");
	if(!opt2) $("#selhsl").val("-");
	});
</script>

<input id="printnumb2" name="hsnumber-l" type="number" placeholder="XXX" style="width: 60px" value="<?php echo (isset($_GET['hslidnum']) ? $_GET['hslidnum'] : '');?>"/><span id="noprint">(XXX)</span>
