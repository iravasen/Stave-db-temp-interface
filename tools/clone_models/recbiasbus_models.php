<div id="placeholder-pbdam">
  <div id="template-pbdam" style="display: none">
    <hr>
    <h4 style="color: red"> CROSS-CABLE PADS </h4>
    <p>
      <ul>
        <li> For HIC in position: <input id="printnumb2" type="number" placeholder="#" style="width: 60px"/> </li>
        <li> Description: <br>
          <textarea rows="3" cols="50" placeholder="describe"></textarea><br>
        </li>
      </ul>
    </p>

    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
  </div>
</div>

<!--************************************************-->
<div id="placeholder-cappad">
  <div id="template-cappad" style="display: none">
    <hr>
    <h4 style="color: red"> CAPACITOR PADS </h4>
    <p>
      <ul>
        <li>Close to HIC in position: <input id="printnumb2" type="number" placeholder="#" style="width: 60px"/> </li>
        <li> Description: <br>
          <textarea rows="3" cols="50" placeholder="describe"></textarea><br>
        </li>
      </ul>
    </p>
    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
  </div>
</div>

<!--*******************************************-->
<div id="placeholder-interline">
  <div id="template-interline" style="display: none">
    <ul>
      <li>Interrupted line for HIC in position: <input id="printnumb2" type="number" placeholder="#" style="width: 60px"/></li>
    </ul>

    <hr>
  </div>
</div>

<!-- ****************************************-->
<div id="placeholder-res">
  <div id="template-res" style="display: none">
    <ul>
      <li> For HIC in position: <input id="printnumb2" type="number" placeholder="#" style="width: 60px"/></li>
      <li> R [Ohm]: <input type="text" placeholder="R [Ohm]"/></li>
      <li> <textarea cols="50" rows="4" placeholder="description"></textarea> </li>

    </ul>


    <hr>
  </div>
</div>
<!-- ******************************************-->

<div id="placeholder-shorts">
  <div id="template-shorts" style="display: none">
    <ul>
      <li> For HIC in position: <input id="printnumb2" type="number" placeholder="#" style="width: 60px"/></li>
      <li> Describe: <br>
        <textarea rows="3" cols="100" placeholder="describe"></textarea>
      </li>
      <li> R [Ohm] wrt ground: <input type="text" placeholder="R [Ohm]"/></li>
      <li> R [Ohm] wrt another strip: <input type="text" placeholder="R [Ohm]"/> </li>

    </ul>

    <?php
    include('imagetool/imagetool.html');
    ?>


    <hr>
  </div>
</div>

<!--*****************************************-->
