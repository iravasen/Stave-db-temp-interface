<form>
<fieldset>
<legend> Location </legend>
  <select name="Sites" id="Sites" >
    <option value="1"> - </option>
    <option value="2"> European Organization for Nuclear Research (CERN) </option>
    <option value="3">INFN e Laboratori Nazionali di Frascati, Frascati </option>
    <option value="4"> Lawrence Berkeley National Laboratory, Berkeley, California </option>
    <option value="5"> Nikhef, Nationaal Instituut voor subatomaire fysica, Amsterdam </option>
    <option value="6"> Sezione INFN, Turin  </option>
    <option value="7"> STFC Daresbury Laboratory, Daresbury </option>
  </select>
</fieldset>
</form>

<script>
	$(document).ready(function() {
	// Construct URL object using current browser URL
	var url = new URL(document.location);

	// Get query parameters object
	var params = url.searchParams;

	// Get value of paper
	var opt = params.get("loc");

	// Set it as the dropdown value
	$("#Sites").val(opt);
	});
</script>
