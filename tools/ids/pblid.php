<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<select name="pbselected" id="pblselected">
	<option value="-"> - </option>
	<option value="OLPB-V07"> OLPB-V07- </option>
	<option value="MLPB-V07"> MLPB-V07- </option>
</select>

<script>
	$(document).ready(function() {
	// Construct URL object using current browser URL
	var url = new URL(document.location);
	// Get query parameters object
	var params = url.searchParams;
	// Get value of paper
	var opt = params.get("pblselected");
	// Set it as the dropdown value
	$("#pblselected").val(opt);
	if(!opt || (opt!="OLPB-V07" && opt!="MLPB-V07")) $("#pblselected").val("-");
	});
</script>

<input id="printnumb2" name="pbnumber" type="number" placeholder="XXX" style="width: 50px" value="<?php echo (isset($_GET['pblidnum']) ? $_GET['pblidnum'] : '');?>"/> <span id="noprint">(XXX)</span>
