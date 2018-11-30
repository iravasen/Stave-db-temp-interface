<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<select name="hscity-r" id="siteshsr">
					<option value="-"> - </option>
					<option value="A"> A- </option>
					<option value="B"> B- </option>
					<option value="D"> D- </option>
					<option value="F"> F- </option>
					<option value="T"> T- </option>
</select>

<select name="hsflavor-r" id="selhsr">
	<option value="-"> - </option>
	<option value="OL-HS-U"> OL-HS-U- </option>
	<option value="ML-HS-U"> ML-HS-U- </option>
</select>

<script>
	$(document).ready(function() {
	// Construct URL object using current browser URL
	var url = new URL(document.location);

	// Get query parameters object
	var params = url.searchParams;

	// Get value of paper
	var opt1 = params.get("siteshsr");
	var opt2 = params.get("selhsr");

	// Set it as the dropdown value
	$("#siteshsr").val(opt1);
	$("#selhsr").val(opt2);

	if(!opt1 || (opt1!="-" && opt1!="A"&& opt1!="B" && opt1!="D" && opt1!="T" && opt1!="F")) $("#siteshsr").val("-");
	if(!opt2 || (opt2!="OL-HS-U" && opt2!="ML-HS-U")) $("#selhsr").val("-");
	});
</script>

<input id="printnumb2" name="hsnumber-r" type="number" placeholder="XXX" style="width: 60px" value="<?php echo (isset($_GET['hsridnum']) ? $_GET['hsridnum'] : '');?>"/><span id="noprint">(XXX)</span>
