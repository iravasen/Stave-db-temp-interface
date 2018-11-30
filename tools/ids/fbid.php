<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<select name="fbselected" id="fbselected">
	<option value="-"> - </option>
	<option value="OL-FB-UPPER"> OL-FB-UPPER- </option>
	<option value="OL-FB-LOWER"> OL-FB-LOWER- </option>
	<option value="ML-FB-UPPER"> ML-FB-UPPER- </option>
	<option value="ML-FB-LOWER"> ML-FB-LOWER- </option>
</select>

<script>
	$(document).ready(function() {
	// Construct URL object using current browser URL
	var url = new URL(document.location);

	// Get query parameters object
	var params = url.searchParams;

	// Get value of paper
	var opt = params.get("fbselected");

	// Set it as the dropdown value
	$("#fbselected").val(opt);
	if(!opt || (opt!="OL-FB-UPPER" && opt!="OL-FB-LOWER" && opt!="ML-FB-UPPER" && opt!="ML-FB-LOWER")) $("#fbselected").val("-");
	});
</script>

<input id="printnumb2" name="fbnumber" type="number" placeholder="XXXX" style="width: 70px" value="<?php echo (isset($_GET['fbidnum']) ? $_GET['fbidnum'] : '');?>"/> <span id="noprint"> (XXXX) </span>
