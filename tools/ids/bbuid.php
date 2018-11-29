<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<select name="bbselected" id="bbuselected">
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
	var opt = params.get("bbuselected");

	// Set it as the dropdown value
	$("#bbuselected").val(opt);
	if(!opt) $("#bbuselected").val("-");
	});
</script>

<input id="printnumb2" name="bbnumber" type="number" placeholder="XXX" style="width: 50px" value="<?php echo (isset($_GET['bbuidnum']) ? $_GET['bbuidnum'] : '');?>"/><span id="noprint">(XXX)</span>
