<div id="placeholder-align">
  <div id="template-align" style="display: none">
    <hr>
    <span>Connection between HIC in position <input id="printnumb2" type="number" style="width: 30px;"/> and <input id="printnumb2" type="number" style="width: 30px;"/></span> <br>
    <input id="x" type="checkbox" name="1" value="1"/> FPCs not aligned in x axis
    <br>
    <textarea id="textx" cols="50" rows="3" placeholder="comments"></textarea>
    <input id="z" type="checkbox" name="2" value="2"/> FPCs not aligned in z axis
    <br>
    <textarea id="textz" cols="50" rows="3" placeholder="comments"></textarea>
    <input id="oth" type="checkbox" name="4" value="4"/> Other
    <br>
     <textarea id="textoth" rows="3" cols="50" placeholder="describe"></textarea>
    <br>
    <ul>
      <li> Misalignment compensated with the bridge soldering: <input type="checkbox"/> Yes <input id="misal" type="checkbox"/> No <br>
        <textarea id="textmisal" cols="50" rows="3" placeholder="comments"></textarea>
      </li>
    </ul>
    <br>
    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
  </div>
</div>

<!--************************************************-->

<div id="placeholder-shorts">
  <div id="template-shorts" style="display: none">
    <hr>
    <span>Connection between HIC in position <input id="printnumb2" type="number" style="width: 30px;"/> and <input id="printnumb2" type="number" style="width: 30px;"/></span> <br>
    <input type="checkbox" name="1" value="1"/> Short disappered after rework
    <br>
    <input type="checkbox" name="2" value="2"/> Cannot remove the short
    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
 </div>
</div>

<!--************************************************-->

<div id="placeholder-bonds">
  <div id="template-bonds" style="display: none">
    <hr>
    <span>Module in position <input type="text" style="width: 80px"/> </span> <br>
    <span>Chip number <input type="text" style="width: 80px"/> </span> <br>
    <span>ALPIDE pad type: <input type="text" style="width: 100px"/> </span> <br>

    <img id="noprint" src="../img/chip.png" heigh="300px" width="600px" style="float: right; position: relative; bottom: 4em;"/>
    <input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
    <br>
    <input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
 </div>
</div>

<!-- ********************************************** -->
<div id="placeholder-fpc1">
  <div id="template-fpc1" style="display: none">
    <hr>
    <span>FPC of Module in position <input type="text" style="width: 80px"/> </span> <br>
    <input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
    <br>
    <input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
 </div>
</div>

<!--**************************************************-->
<div id="placeholder-bridge">
  <div id="template-bridge" style="display: none">
    <span>Connection between HIC in position <input id="printnumb2" type="number" style="width: 30px;"/> and <input id="printnumb2" type="number" style="width: 30px;"/></span> <br>
    <span>Bridge position in the field of view: <br> <input type="checkbox"/> Up <br> <input type="checkbox"/> Down</span><br>
    <br>
    <p> Damage type: <br>
    <input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
    <br>
    <input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
    </p>
    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
 </div>
</div>

<!-- *************************************************-->
<div id="placeholder-tlost">
  <div id="template-tlost" style="display: none">

    <hr>
    <span>Module position: <input type="text" style="width: 80px"/></span><br>
    <span>Resistance id (number): <input type="text" style="width: 80px"/></span><br>

    <input type="checkbox" name="1" value="1"/> Lost resistance may have caused shorts somewhere (to be tested)
    <br>

    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
 </div>
</div>

<!-- *************************************************-->
<div id="placeholder-modid">
  <div id="template-modid" style="display: none">
    <hr>
    <span>Module position: <input type="text" style="width: 80px"/></span><br>
    <span>Master: <input type="text" placeholder="0 or 8" style="width: 80px"/></span><br>

    <img id="noprint" src="../img/chip.png" heigh="200px" width="500px" style="float: right; position: relative; bottom: 4em;"/>

    <input id="wb1" type="checkbox" name="1" value="1"/> Damages to Chip_ID bonds
    <ul id="bonds1">
      <li><input type="checkbox"/> still working (to be tested) </li>
      <li><input type="checkbox"/> not working</li>
    </ul>

    <br>
    <input id="wb2" type="checkbox" name="2" value="2"/> Damages to power/ground bonds
    <ul id="bonds2">
      <li><input type="checkbox"/> still working (to be tested) </li>
      <li><input type="checkbox"/> not working</li>
    </ul>
    <br>
    <input id="wb3" type="checkbox" name="2" value="2"/> Other
    <ul id="bonds3">
      <li><textarea cols="50" rows="3" placeholder="specify"></textarea></li>
      <li><input type="checkbox"/> still working (to be tested) </li>
      <li><input type="checkbox"/> not working</li>
    </ul>
    <br>
    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
 </div>
</div>

<!--******************************************************-->
<div id="placeholder-fpc2">
  <div id="template-fpc2" style="display: none">
    <hr>
    <span>FPC of Module in position <input type="text" style="width: 80px"/> </span> <br>
    <input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
    <br>
    <input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
 </div>
</div>

<!-- ****************************************************-->
<div id="placeholder-idlost">
  <div id="template-idlost" style="display: none">

    <hr>
    <span>Module position: <input type="text" style="width: 80px"/></span><br>
    <span>Master: <input type="text" placeholder="0 or 8" style="width: 80px"/></span><br>
    <span>Resistance id (number): <input type="text" style="width: 80px"/></span><br>

    <input type="checkbox" name="1" value="1"/> Lost resistance may have caused shorts somewhere (to be tested)
    <br>

    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
 </div>
</div>

<!-- *************************************************** -->
<div id="placeholder-Rwrong">
  <div id="template-Rwrong" style="display: none">

    <img id="noprint" src="../img/chip.png" heigh="200px" width="500px" style="float: right; position: relative; bottom: -1.5em;"/>

    <hr>
    <span>Module position: <input type="text" style="width: 80px"/></span><br>
    <span>Master: <input type="text" placeholder="0 or 8" style="width: 80px"/></span><br>
    <span>Resistance id (number): <input type="text" style="width: 80px"/></span><br>

    <ul>
      <li> <input id="iwa" type="checkbox" name="1" value="1"/> Resistance resoldered without problems </li>
        <ul id="awa">
          <li><input type="checkbox"/> still working (to be tested) </li>
          <li><input type="checkbox"/> not working</li>
        </ul>
      <li> <input id="iwb" type="checkbox" name="1" value="1"/> Resistance resoldered damaging CHIP_ID wire-bonds
        <ul id="awb">
          <li><input type="checkbox"/> still working (to be tested) </li>
          <li><input type="checkbox"/> not working</li>
        </ul>
      </li>
      <li> <input id="ipwr" type="checkbox" name="1" value="1"/> Resistance resoldered damaging Power/ground wire-bonds
        <ul id="apwr">
          <li><input type="checkbox"/> still working (to be tested) </li>
          <li><input type="checkbox"/> not working</li>
        </ul>
      </li>

      <li> <input id="ioth" type="checkbox" name="1" value="1"/> Other
        <ul id="aoth">
          <li><textarea cols="50" rows="3" placeholder="specify"></textarea></li>
          <li><input type="checkbox"/> still working (to be tested) </li>
          <li><input type="checkbox"/> not working</li>
        </ul>
      </li>
    </ul>


    <br>

    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
 </div>
</div>

<!-- ************************************************ -->
<div id="placeholder-modid1">
  <div id="template-modid1" style="display: none">
    <hr>
    <span>Module position: <input type="text" style="width: 80px"/></span><br>
    <span>Master: <input type="text" placeholder="0 or 8" style="width: 80px"/></span><br>

    <img id="noprint" src="../img/chip.png" heigh="200px" width="500px" style="float: right; position: relative; bottom: 3em;"/>

    <input id="wb1" type="checkbox" name="1" value="1"/> Damages to Chip_ID bonds
    <ul id="bonds1">
      <li><input type="checkbox"/> still working (to be tested) </li>
      <li><input type="checkbox"/> not working</li>
    </ul>

    <br>
    <input id="wb2" type="checkbox" name="2" value="2"/> Damages to power/ground bonds
    <ul id="bonds2">
      <li><input type="checkbox"/> still working (to be tested) </li>
      <li><input type="checkbox"/> not working</li>
    </ul>
    <br>
    <input id="wb3" type="checkbox" name="2" value="2"/> Other
    <ul id="bonds3">
      <li><textarea cols="50" rows="3" placeholder="specify"></textarea></li>
      <li><input type="checkbox"/> still working (to be tested) </li>
      <li><input type="checkbox"/> not working</li>
    </ul>
    <br>
    <br>
    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
 </div>
</div>
<!-- ************************************************-->
<div id="placeholder-fpc">
  <div id="template-fpc" style="display: none">
    <hr>
    <span>FPC of Module in position <input type="text" style="width: 80px"/> </span> <br>
    <input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
    <br>
    <input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
 </div>
</div>

<!--****************************************************-->
<div id="placeholder-fpcext">
  <div id="template-fpcext" style="display: none">
    <hr>

    <img id="noprint" src="../img/chip.png" heigh="200px" width="500px" style="float: right; position: relative; bottom: .5em;"/>
    <span>Chip number <input type="text" style="width: 80px"/> </span> <br>
    <span>Bond type: <input type="text" style="width: 150px"/> </span> <br>

    <input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
    <br>
    <input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
 </div>
</div>
