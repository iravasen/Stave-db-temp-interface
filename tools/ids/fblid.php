<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<select name="fbleftselected" id="fblowsel">
	<option value="-"> - </option>
	<option value="OL-FB-LOWER"> OL-FB-LOWER- </option>
	<option value="ML-FB-LOWER"> ML-FB-LOWER- </option>
</select>

<script>
	$(document).ready(function() {
	// Construct URL object using current browser URL
	var url = new URL(document.location);

	// Get query parameters object
	var params = url.searchParams;

	// Get value of paper
	var opt = params.get("fblowsel");

	// Set it as the dropdown value
	$("#fblowsel").val(opt);
	if(!opt ||(opt!="OL-FB-LOWER" && opt!="ML-FB-LOWER")) $("#fblowsel").val("-");
	});
</script>

<input id="printnumb2" name="fbleftnumber" type="number" placeholder="XXXX" style="width: 60px" value="<?php echo (isset($_GET['fblowidnum']) ? $_GET['fblowidnum'] : '');?>"/><span id="noprint">(XXXX)</span>
