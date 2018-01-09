<div id="placeholder-align">
  <div id="template-align" style="display: none">
    <hr>

    <span style="color: red; font-size: 14pt"> Component </span><br>
    <p>
      <strong> Half-Stave </strong>: <input type="checkbox"/> Left <input type="checkbox"/> Right <br>
      <strong>HIC in position</strong> <input id="printnumb2" type="number" placeholder="#" style="width: 60px"/>
    </p>

    <input type="checkbox" id="check1"> Cross-cables of PB <br>
    <input type="checkbox"> Cross-cable of BB <br>

    <!--In case of a bridge-->

    <p id="p1">
      Type: <input type="checkbox"/> AVDD <input type="checkbox"/> DVDD <input type="checkbox"/> AVSS <input type="checkbox"/> DVSS
    </p><br>

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
