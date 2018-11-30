<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
OBHIC-
<select name="hicflavor" id="hicflavor">
					<option value="-"> - </option>
					<option value="AL"> AL </option>
					<option value="AR"> AR </option>
					<option value="BL"> BL </option>
					<option value="BR"> BR </option>
</select>


<script>
	$(document).ready(function() {
	// Construct URL object using current browser URL
	var url = new URL(document.location);

	// Get query parameters object
	var params = url.searchParams;

	// Get value of paper
	var opt = params.get("hicflavor");

	// Set it as the dropdown value
	$("#hicflavor").val(opt);
	if(!opt || (opt!="AL" && opt!="AR" && opt!="BL" && opt!="BR")) $("#hicflavor").val("-");
});
</script>

<input name="hicnumber" id="printnumb_text" type="text" placeholder="XXXXXX" style="width: 80px" value="<?php echo (isset($_GET['hicidnum']) ? $_GET['hicidnum'] : '');?>"/> <span id="noprint"> (XXXXXX) </span>
