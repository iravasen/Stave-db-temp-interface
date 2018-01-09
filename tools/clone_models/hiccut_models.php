<div id="placeholder-bond">
  <div id="template-bond" style="display: none">
    <hr>
    <ul>
      <li> Chip number: <input id="printnumb2" type="number" style="width: 60px"/></li>
      <li> Bond type (only most critical): <br>
        <ul>
          <li>
            <input type="checkbox" name="mclk_p" value="mclk_p"/> MCLK_P
            <input type="checkbox" name="mclk_n" value="mclk_n"/> MCLK_N
          </li>
          <li>
            <input type="checkbox" name="por_dis" value="por_dis"/> POR_DIS
          </li>
          <li>
            <input type="checkbox" name="dctrl_p" value="dctrl_p"/> DCTRL_P
            <input type="checkbox" name="dctrl_n" value="dctrl_n"/> DCTRL_N
          </li>
          <li>
            <input type="checkbox" name="dclk_p" value="dclk_p"/> DCLK_P
            <input type="checkbox" name="dclk_n" value="dclk_n"/> DCLK_N
          </li>
          <li>
            <input type="checkbox" name="hsdata_p" value="hsdata_p"/> HSDATA_P
            <input type="checkbox" name="hsdata_n" value="hsdata_n"/> HSDATA_N
          </li>
          <li>
            <input type="checkbox" name="CTRL" value="CTRL"/> CTRL
          </li>
          <li>
            <input type="checkbox" name="BUSY" value="BUSY"/> BUSY
          </li>
          <li>
            <input type="checkbox" name="DATA" value="DATA"/> DATA
          </li>
          <li>
            <input type="checkbox" name="chipid" value="chipid"/> CHIP_ID
          </li>
        </ul>
      </li>
      <li> Damage type
        <ul>

          <li><input type="checkbox"/> One detached</li>
          <li><input type="checkbox"/> Two detached</li>
          <li><input type="checkbox"/> All detached </li>
        </ul>
      </li>
      <li> Does it affect HIC functioning?
        <ul>
          <li><input type="checkbox"/> Yes </li>
          <li><input type="checkbox"/> No </li>
        </ul>
      </li>
    </ul>
    <?php
    include('imagetool/imagetool.html');
    ?>


    <hr>
  </div>
</div>

<!--********************************************************-->

<div id="placeholder-bondrisk">
  <div id="template-bondrisk" style="display: none">
    <hr>
    <ul>
      <li> Chip number: <input id="printnumb2" type="number" style="width: 60px"/></li>
      <li> Bond type (only most critical): <br>
        <ul>
          <li>
            <input type="checkbox" name="mclk_p" value="mclk_p"/> MCLK_P
            <input type="checkbox" name="mclk_n" value="mclk_n"/> MCLK_N
          </li>
          <li>
            <input type="checkbox" name="por_dis" value="por_dis"/> POR_DIS
          </li>
          <li>
            <input type="checkbox" name="dctrl_p" value="dctrl_p"/> DCTRL_P
            <input type="checkbox" name="dctrl_n" value="dctrl_n"/> DCTRL_N
          </li>
          <li>
            <input type="checkbox" name="dclk_p" value="dclk_p"/> DCLK_P
            <input type="checkbox" name="dclk_n" value="dclk_n"/> DCLK_N
          </li>
          <li>
            <input type="checkbox" name="hsdata_p" value="hsdata_p"/> HSDATA_P
            <input type="checkbox" name="hsdata_n" value="hsdata_n"/> HSDATA_N
          </li>
          <li>
            <input type="checkbox" name="CTRL" value="CTRL"/> CTRL
          </li>
          <li>
            <input type="checkbox" name="BUSY" value="BUSY"/> BUSY
          </li>
          <li>
            <input type="checkbox" name="DATA" value="DATA"/> DATA
          </li>
          <li>
            <input type="checkbox" name="chipid" value="chipid"/> CHIP_ID
          </li>
        </ul>
      </li>
      <li> Description: <br>
         <textarea rows="5" cols="100" name="modissection" placeholder="comments"></textarea>
      </li>
      <li> Does it affect HIC functioning?
        <ul>
          <li><input type="checkbox"/> Yes </li>
          <li><input type="checkbox"/> No </li>
        </ul>
      </li>
    </ul>
    <?php
    include('imagetool/imagetool.html');
    ?>


    <hr>
  </div>
</div>
