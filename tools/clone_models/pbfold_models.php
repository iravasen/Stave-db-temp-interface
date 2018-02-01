<div id="placeholder-ccdam">
  <div id="template-ccdam" style="display: none">
    <hr>
    <p>
      <ul>
        <li> For HS: <input type="checkbox"/> Lower <input type="checkbox"/> Upper </li>
        <li> For HIC in position: <input id="printnumb2" type="number" style="width: 70px"/> </li>
        <li> CC type:
          <input type="checkbox"/> AVDD
          <input type="checkbox"/> DVDD
          <input type="checkbox"/> AVSS
          <input type="checkbox"/> DVSS
          <input type="checkbox"/> BIAS
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

<!-- ********************************************** -->
<div id="placeholder-hicdam">
  <div id="template-hicdam" style="display: none">
    <hr>
    <p>
      <ul>
        <li> For HS: <input type="checkbox"/> Lower <input type="checkbox"/> Upper </li>
        <li> HIC in position: <input id="printnumb2" type="number" style="width: 70px"/> </li>
        <li> Description: <br>
          <textarea rows="3" cols="50" placeholder="describe"></textarea><br>
        </li>
        <li> Result <br>
          <input type="checkbox"/> Acceptable (to be tested) <br>
          <input type="checkbox"/> Not acceptable, serious damage
        </li>
      </ul>
    </p>

    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
  </div>
</div>
