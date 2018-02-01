<div id="placeholder-ccbbdam">
  <div id="template-ccbbdam" style="display: none">
    <hr>
    <p>
      <ul>
        <li> For HS: <input type="checkbox"/> Lower <input type="checkbox"/> Upper </li>
        <li> For HIC in position: <input id="printnumb2" type="number" style="width: 70px"/> </li>
        <li> Description: <br>
          <textarea rows="3" cols="50" placeholder="describe"></textarea><br>
        </li>
        <li> Result <br>
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

<!-- ********************************************************** -->
<div id="placeholder-bbpaddam">
  <div id="template-bbpaddam" style="display: none">
    <hr>
    <p>
      <ul>
        <li> For HS: <input type="checkbox"/> Lower <input type="checkbox"/> Upper </li>
        <li> For/Close to HIC in position: <input id="printnumb2" type="number" style="width: 70px"/> </li>
        <li> Damage type: <br>
          <input type="checkbox"/> Soldering pad for CC detached <br>
          <input type="checkbox"/> Melting of BB kapton layer <br>
          <input id="oth" type="checkbox"/> Other
          <textarea id="texta1" cols="50" rows="4" placeholder="Specify"> </textarea> <br>
        </li>
        <li> Result <br>
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

<!-- ********************************************************* -->
<div id="placeholder-ccpbdam">
  <div id="template-ccpbdam" style="display: none">
    <hr>
    <p>
      <ul>
        <li> For HS: <input type="checkbox"/> Lower <input type="checkbox"/> Upper </li>
        <li> For HIC in position: <input id="printnumb2" type="number" style="width: 70px"/> </li>
        <li> Damaged pad type <br>
          <input type="checkbox"/> AVDD <br>
          <input type="checkbox"/> DVDD <br>
          <input type="checkbox"/> AVSS <br>
          <input type="checkbox"/> DVSS
        </li>
        <li> Description: <br>
          <textarea rows="3" cols="50" placeholder="describe"></textarea><br>
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

<!-- **********************************************************-->

<div id="placeholder-pbpaddam">
  <div id="template-pbpaddam" style="display: none">
    <hr>
    <p>
      <ul>
        <li> For HS: <input type="checkbox"/> Lower <input type="checkbox"/> Upper </li>
        <li> For/Close to HIC in position: <input id="printnumb2" type="number" style="width: 70px"/> </li>
        <li> Damage type: <br>
          <input id="i1" type="checkbox"/> Soldering pad for CC detached <br>
          <p id="p1"> &nbsp &nbsp &nbsp &nbsp <input type="checkbox"/> AVDD <input type="checkbox"/> DVDD <input type="checkbox"/> AVSS <input type="checkbox"/> DVSS </p>

          <input type="checkbox"/> Melting of PB kapton layer <br>
          <input id="oth" type="checkbox"/> Other
          <textarea id="texta1" rows="5" cols="50" placeholder="Specify"></textarea>
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

<!-- ********************************************** -->
