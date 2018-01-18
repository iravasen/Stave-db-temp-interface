<div id="placeholder-align">
  <div id="template-align" style="display: none">
    <hr>

    <span style="color: red; font-size: 14pt"> Component </span><br>
    <input type="checkbox" id="check1"> Bridge <br>
    <input type="checkbox"> FPC extension <br>
    <input type="checkbox" id="check2"> MOD_ID resistor <br>
    <input type="checkbox" id="check3"> Termination resistor <br>

    <!--In case of a bridge-->
    <p id="p1">
      Connection between HIC in position <input id="printnumb2" type="number" style="width: 30px"/> and <input id="printnumb2" type="number" style="width: 30px"/>
    </p><br>

    <!--In case of a MOD_ID resistor-->
    <p id="p2">
      On HIC in position: <input id="printnumb2" type="number" placeholder="#" style="width: 40px"/> <br>
      On Master <input type="text" placeholder="0 or 8" style="width: 100px"/> <br>
    </p>

    <p id="p3">
      On HIC in position: <input id="printnumb2" type="number" placeholder="#" style="width: 50px"/> <br>
      On Chip number <input id="printnumb2" type="number" placeholder="#" style="width: 50px"/> <br>
    </p>

    <span> Description of the problem </span><br>
    <textarea rows="5" cols="100" placeholder="describe problem"></textarea>
    <br><br>

    <span> Description of the activity performed on the component </span><br>
    <textarea rows="5" cols="100" placeholder="describe activity"></textarea>
    <br><br>

    <ul>
      <li><input type="checkbox"/> It seems to work now (to be retested) </li>
      <li><input type="checkbox"/> No possibility to solve the problem </li>
    </ul>

    <?php
    include('../imagetool/imagetool.html');
    ?>


    <hr>
  </div>
</div>
