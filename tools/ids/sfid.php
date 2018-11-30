<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<select name="selectedsf" id="selectedsf">
	<option value="-"> - </option>
	<option value="OL-SF-ALC"> OL-SF-ALC- </option>
	<option value="ML-SF-ALC"> ML-SF-ALC- </option>
</select>

<script>
	$(document).ready(function() {
	// Construct URL object using current browser URL
	var url = new URL(document.location);

	// Get query parameters object
	var params = url.searchParams;

	// Get value of paper
	var opt = params.get("selectedsf");

	// Set it as the dropdown value
	$("#selectedsf").val(opt);
	if(!opt ||(opt!="OL-SF-ALC" && opt!="ML-SF-ALC")) $("#selectedsf").val("-");
	});
</script>

<input id="t1" name="sfnumber" type="text" placeholder="#" style="width: 130px" value="<?php echo (isset($_GET['sfidnum']) ? $_GET['sfidnum'] : '');?>"/>
