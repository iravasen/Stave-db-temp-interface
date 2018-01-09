<div id="placeholder-shorts">
  <div id="template-shorts" style="display: none">
    <hr>
    <span>Close to HIC in position <input id="printnumb2" type="number" style="width: 70px"/> </span> <br>
    <input type="checkbox" name="1" value="1"/> Short disappeared after rework
    <br>
    <input type="checkbox" name="2" value="2"/> Cannot remove the short <br>
    <textarea cols="50" rows="4" placeholder="Describe"></textarea>
    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
 </div>
</div>

<!--*****************************************************-->
<div id="placeholder-pbheat">
  <div id="template-pbheat" style="display: none">
    <hr>
    <ul>
      <li>Close to HIC in position <input id="printnumb2" type="number" style="width: 70px"/> </li>
      <li> Problem: <br>
        <input type="checkbox" name="1" value="1"/> Damages to PB kapton layer
        <br>
        <input type="checkbox" name="2" value="2"/> Capacitor pad detached
        <br>
        <input id="oth" type="checkbox" name="3" value="3"/> Other
        <textarea id="texta1" cols="50" rows="4" placeholder="Describe"></textarea>
      </li>
      <li> Result: <br>
        <input type="checkbox" name="1" value="1"/> Damaged, but it works
        <br>
        <input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
        <br>
        <input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
      </li>
    </ul>

    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
 </div>
</div>

<!--*******************************************************-->

<div id="placeholder-bbshorts">
  <div id="template-bbshorts" style="display: none">
    <hr>
    <span>Close to HIC in position <input id="printnumb2" type="number" style="width: 70px"/> </span> <br>
    <input type="checkbox" name="1" value="1"/> Short disappered after rework
    <br>
    <input type="checkbox" name="2" value="2"/> Cannot remove the short <br>
    <textarea cols="50" rows="4" placeholder="Describe"></textarea>

    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
 </div>
</div>

<!-- ******************************************************-->

<div id="placeholder-bbheat">
  <div id="template-bbheat" style="display: none">
    <hr>
    <ul>
      <li>Close to HIC in position <input id="printnumb2" type="number" style="width: 70px"/> </li>
      <li> Problem: <br>
        <input type="checkbox" name="1" value="1"/> Damages to BB kapton layer
        <br>
        <input type="checkbox" name="2" value="2"/> Capacitor pad detached
        <br>
        <input id="oth" type="checkbox" name="3" value="3"/> Other
        <textarea id="texta1" cols="50" rows="4" placeholder="Describe"></textarea>
      </li>
      <li> Result: <br>
        <input type="checkbox" name="1" value="1"/> Damaged, but it works
        <br>
        <input type="checkbox" name="1" value="1"/> Damaged, but it still seems to work (to be tested)
        <br>
        <input type="checkbox" name="2" value="2"/> Damaged, and it doesn't work anymore
      </li>
    </ul>

    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
 </div>
</div>

<!--******************************************************-->

<div id="placeholder-fbshorts">
  <div id="template-fbshorts" style="display: none">
    <hr>
    <ul>
      <li> Line type: <input id="i3" type="checkbox"/> AVDD <input id="i3" type="checkbox"/> DVDD
        <p id="p3">
          Of HIC in position <input type="text" style="width: 80px"/> <br>
          In short with: <input type="checkbox"/> Ground <input type="checkbox"/> Another strip
        </p>
      </li>
      <li> Result: <br>
        <input type="checkbox" name="1" value="1"/> Short disappered after rework
        <br>
        <input type="checkbox" name="2" value="2"/> Cannot remove the short
      </li>
    </ul>
    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
 </div>
</div>

<!-- ****************************************************-->

<div id="placeholder-bridgedam">
  <div id="template-bridgedam" style="display: none">
    <ul>
      <li>Extension: <br>
        <input type="checkbox"/> TOP (only DVDD pads) <br>
        <input type="checkbox"/> BOTTOM (DVDD and AVDD pads)
      </li>
      <li>Damage type: <br>
        <input id="i1" type="checkbox"/> Some AVDD and/or DVDD pads detached <br>
        <span id="s1"> Number of pads: <input type="text" style="width: 90px"/> </span><br>
        <input type="checkbox"/> Ground pads detached <br>
        <input type="checkbox"/> Damages to bridge coverlay <br>
        <input id="oth" type="checkbox"/> Other
        <textarea id="texta1" cols="50" rows="4" placeholder="Describe"></textarea> <br>
      </li>
      <li> Result: <br>
        <input type="checkbox"/> Acceptable <br>
        <input type="checkbox"/> Not acceptable
      </li>
    </ul>

    <!-- Images -->
    <?php
    include('imagetool/imagetool.html');
    ?>
    <hr>
 </div>
</div>

<!-- ****************************************************-->

<div id="placeholder-bbfbshorts">
  <div id="template-bbfbshorts" style="display: none">
    <hr>
    <ul>
      <li> Line of HIC in position: <input id="printnumb2" type="number" style="width: 70px"/> <br>
          In short with: <input type="checkbox"/> Ground <input type="checkbox"/> Another strip
      </li>
      <li> Result: <br>
        <input type="checkbox" name="1" value="1"/> Short disappered after rework
        <br>
        <input type="checkbox" name="2" value="2"/> Cannot remove the short
      </li>
    </ul>
    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
 </div>
</div>

<!-- *************************************************-->

<div id="placeholder-bridgebbdam">
  <div id="template-bridgebbdam" style="display: none">
    <ul>
      <li>Damage type: <br>
        <input id="i1" type="checkbox"/> Some pads detached <br>
        <span id="s1"> Number of pads: <input type="text" style="width: 90px"/> </span><br>
        <input type="checkbox"/> Ground pads detached <br>
        <input type="checkbox"/> Damages to bridge coverlay <br>
        <input id="oth" type="checkbox"/> Other
        <textarea id="texta1" cols="50" rows="4" placeholder="Describe"></textarea> <br>
      </li>
      <li> Result: <br>
        <input type="checkbox"/> Acceptable <br>
        <input type="checkbox"/> Not acceptable
      </li>
    </ul>

    <!-- Images -->
    <?php
    include('imagetool/imagetool.html');
    ?>
    <hr>
 </div>
</div>
