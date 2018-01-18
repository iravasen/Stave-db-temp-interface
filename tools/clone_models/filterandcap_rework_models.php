<div id="placeholder-rew">
  <div id="template-rew" style="display: none">
    <hr>

    <span style="color: red; font-size: 14pt"> Component </span><br>
    <input type="checkbox"/> Power Bus termination pads on TOP layer of FB (capacitor side) <br>
    <input type="checkbox"/> Power Bus termination pads on BOTTOM layer of FB <br>
    <input type="checkbox"/> Bias Bus termination pads <br>
    <input type="checkbox"/> Capacitors on Filter Board <br>
    <input type="checkbox" id="check1"/> Capacitors on Power Bus <br>
    <input type="checkbox" id="check1"/> Capacitors on Bias Bus<br>
    <input type="checkbox" id="check2"/> Other <br>
    <span id="aoth"> <input style="width: 550px" type="text" placeholder="specify"/></span> <br>

    <!-- In case of capacitors -->
    <p id="par1">
       Close to HIC in position: <input id="printnumb2" type="number" placeholder="#" style="width: 60px"/>
    </p>

    <p> Description of the problem <br>
      <textarea rows="5" cols="100" placeholder="describe problem"></textarea>
    </p>

    <br>

    <p> Description of the activity performed on the component <br>
      <textarea rows="5" cols="100" placeholder="describe activity"></textarea>
    </p>

    <br>
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
