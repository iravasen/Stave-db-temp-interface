<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<select name="fbrightselected" id="fbupsel">
	<option value="-"> - </option>
	<option value="OL-FB-UPPER"> OL-FB-UPPER- </option>
	<option value="ML-FB-UPPER"> ML-FB-UPPER- </option>
</select>

<script>
	$(document).ready(function() {
	// Construct URL object using current browser URL
	var url = new URL(document.location);

	// Get query parameters object
	var params = url.searchParams;

	// Get value of paper
	var opt = params.get("fbupsel");

	// Set it as the dropdown value
	$("#fbupsel").val(opt);
	if(!opt ||(opt!="OL-FB-UPPER" && opt!="ML-FB-UPPER")) $("#fbupsel").val("-");
	});
</script>

<input id="printnumb2" name="fbrightnumber" type="number" placeholder="XXXX" style="width: 60px" value="<?php echo (isset($_GET['fbupidnum']) ? $_GET['fbupidnum'] : '');?>"/><span id="noprint">(XXXX)</span>
