<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<select name="bbselected" id="bblselected">
	<option value="-"> - </option>
	<option value="OLBB-V07"> OLBB-V07- </option>
	<option value="MLBB-V07"> MLBB-V07- </option>
</select>

<script>
	$(document).ready(function() {
	// Construct URL object using current browser URL
	var url = new URL(document.location);

	// Get query parameters object
	var params = url.searchParams;

	// Get value of paper
	var opt = params.get("bblselected");

	// Set it as the dropdown value
	$("#bblselected").val(opt);
	if(!opt) $("#bblselected").val("-");
	});
</script>

<input id="printnumb2" name="bbnumber" type="number" placeholder="XXX" style="width: 50px" value="<?php echo (isset($_GET['bblidnum']) ? $_GET['bblidnum'] : '');?>"/><span id="noprint">(XXX)</span>
