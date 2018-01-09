<div id="placeholder-rew">
  <div id="template-rew" style="display: none">
    <hr>

    <span style="color: red; font-size: 14pt"> Component </span><br>
    <input type="checkbox"> Power Bus termination pads on TOP layer of FB <br>
    <input type="checkbox"> Power Bus termination pads on BOTTOM layer of FB <br>
    <input type="checkbox"> Bias Bus termination pads <br>
    <input type="checkbox" id="check1"> Capacitors <br>

    <!-- In case of capacitors -->
    <p id="p1">
      Close to HIC in position: <input id="printnumb2" type="number" placeholder="#" style="width: 60px"/> <br>
    </p>

    <span> Description of the problem </span><br>
    <textarea rows="5" cols="100" placeholder="describe problem"></textarea>
    <br><br>

    <span> Description of the activity performed on the component </span><br>
    <textarea rows="5" cols="100" placeholder="describe activity"></textarea>
    <br><br>

    <input type="checkbox"/> It seems to work now (to be retested) <br>
    <input type="checkbox"/> No possibility to solve the problem

    <?php
    include('../imagetool/imagetool.html');
    ?>


    <hr>
  </div>
</div>
