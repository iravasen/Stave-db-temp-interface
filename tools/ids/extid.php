<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<select name="extflavor" id="upd">
  <option value="-"> - </option>
  <option value="UP">UP-</option>
  <option value="DOWN">DOWN-</option>
</select>

GS<input name="extlotnumber" type="text" placeholder="###" style="width: 26px" value="<?php echo (isset($_GET['extlotnum']) ? $_GET['extlotnum'] : '');?>"/>-
<select name="extcity" id="extcity">
  <option value="-"> - </option>
  <option value="A"> A- </option>
  <option value="B"> B- </option>
  <option value="D"> D- </option>
  <option value="F"> F- </option>
  <option value="T"> T- </option>
</select>

<script>
	$(document).ready(function() {
	// Construct URL object using current browser URL
	var url = new URL(document.location);

	// Get query parameters object
	var params = url.searchParams;

	// Get value of paper
	var opt1 = params.get("upd");
  var opt2 = params.get("extcity");

	// Set it as the dropdown value
	$("#upd").val(opt1);
  $("#extcity").val(opt2);

  if(!opt1) $("#upd").val("-");
  if(!opt2) $("#extcity").val("-");
	});
</script>


<input name="extnumber" type="text" placeholder="XXX" style="width: 50px" value="<?php echo (isset($_GET['extidnum']) ? $_GET['extidnum'] : '');?>"/><span id="noprint">(XXX)</span>
<span style="display: block; float: right; color: red;" id="noprint">
-> GS### can be found near the FireFly connectors, XXX is the same of the HS.
</span>
