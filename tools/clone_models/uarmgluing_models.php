<div id="placeholder-hicdam">
  <div id="template-hicdam" style="display: none">
    <hr>
    <ul>
      <li> HIC in position: <input type="number" style="width: 60px"/> </li>
      <li> Close to/ On chip number: <input type="number" style="width: 70px"/> </li>
      <li> Describe the damage type <br>
        <textarea cols="100" rows="10" placeholder="Describe"></textarea>
      </li>
      <li> Does it affect HIC functioning? <br>
        <input type="checkbox"/> No <br>
        <input type="checkbox"/> Yes <br>
      </li>
    </ul>

    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
  </div>
</div>


<div id="template-uarm">
 <div id="placeh-uarm" style="display: none">
   <hr>

   <p> Module position: <input id="printnumb2" type="number" style="width: 40px"/> - U-arm conf.:

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
