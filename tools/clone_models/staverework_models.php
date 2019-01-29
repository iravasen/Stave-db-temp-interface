<div id="placeholder-dam">
  <div id="template-dam" style="display: none;">
    <hr>
    <p>
      <ul>
        <li> HS flavor: <br>
          <input type="checkbox"/> Lower <br>
          <input type="checkbox"/> Upper
        </li>
        <li> Damaged component: <br>
           <input id="i1" type="checkbox"/> HIC <br>
           <span id="s1">Position: <input type="text" style="width: 90px"/></span>
           <input type="checkbox"/> Space-Frame <br>
           <input type="checkbox"/> Cold-Plate <br>
           <input type="checkbox"/> PB and BB extensions <br>
           <input type="checkbox"/> FPC extension <br>
        </li>

        <li> Description: <br>
          <textarea rows="10" cols="50" placeholder="describe"></textarea><br>
        </li>
        <li> Result: <br>
          <input type="checkbox"/> Acceptable <br>
          <input type="checkbox"/> Not acceptable
        </li>
      </ul>
    </p>

    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
  </div>
</div>

<!-- ######################################### -->


<div id="template-uarm">
 <div id="placeh-uarm" style="display: none">
   <hr>

   <p> HS-<select><option>-</option><option>U</option><option>L</option></select> - Module: <input id="printnumb2" type="number" style="width: 40px"/> - U-arm conf.:

     <input type="checkbox" class="def" onClick="checks()"/> default |
     <input type="checkbox" class="def"/> DVDD (M8)
     <input type="checkbox" class="nodef"/> AVSS-DVSS (M8)
     <input type="checkbox" class="def"/> Back-Bias
     <input type="checkbox" class="nodef"/> AVDD
     <input type="checkbox" class="nodef"/> AVSS-DVSS (M0)
     <input type="checkbox" class="def"/> DVDD (M0)

   </p>

   <script type="text/javascript">

     	function checks(){
        var divext = document.getElementById("template-uarm-0");
     		var divint = divext.getElementsByTagName("div");

        for(j=0; j<divint.length; j++){
       		var checkboxes = divint[j].getElementsByClassName("def");
          var checkboxes_nodef = divint[j].getElementsByClassName("nodef")
          if(checkboxes[0].checked){//if "default" is checked
       			for(i=1; i<checkboxes.length; i++){
       				checkboxes[i].checked = true;
       			}
            for(k=0; k<checkboxes_nodef.length; k++){
              checkboxes_nodef[k].disabled = true;
            }
          }//end if
          else{
            for(i=1; i<checkboxes.length; i++){
       				checkboxes[i].checked = false;
       			}
            for(k=0; k<checkboxes_nodef.length; k++){
              checkboxes_nodef[k].disabled = false;
            }
          }
        }//end loop on divint elements
     	}//end function checks
 	</script>
   <hr>
 </div>
</div>
