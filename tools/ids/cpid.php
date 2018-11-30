<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<select name="selectedcp" id="selectedcp">
	<option value="-" > - </option>
	<option value="OL-CP-ALC" > OL-CP-ALC- </option>
	<option value="ML-CP-ALC" > ML-CP-ALC- </option>
</select>

<script>
	$(document).ready(function() {
	// Construct URL object using current browser URL
	var url = new URL(document.location);

	// Get query parameters object
	var params = url.searchParams;

	// Get value of paper
	var opt = params.get("selectedcp");

	// Set it as the dropdown value
	$("#selectedcp").val(opt);
	if(!opt || (opt!="OL-CP-ALC" && opt!="ML-CP-ALC")) $("#selectedcp").val("-");
	});
</script>

<input name="cpidname" id="t1" type="text" placeholder="#" style="width: 110px" value="<?php echo (isset($_GET['cpidnum']) ? $_GET['cpidnum'] : '');?>"/>
