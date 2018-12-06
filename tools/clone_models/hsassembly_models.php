<!--<div id="template-pos">
 <div id="placeh-pos" style="display: none">
   <hr>

   <span> Position <input id="printnumb2" type="number" style="width: 40px"/>: </?php include('ids/hicid.html')?></span>

   <hr>
 </div>
</div>-->

<!-- *************************************************** -->
<div id="placeholder-hicg">
  <div id="template-hicg" style="display: none">
    <hr>
    <p>
      <ul>
        <li><strong>For HIC in position</strong>: <input id="printnumb2" type="number" style="width: 60px"/> </li>
        <li> Type of problem: <br>
          <input id="i1" type="checkbox"/> Shift wrt nominal position
            <span id="s1"> Shift along x: <input type="text" style="width: 70px"/> um</span> <br>
            <span id="s1"> Shift along y: <input type="text" style="width: 70px"/> um</span>
          <br />
          <input id="oth" type="checkbox" name="oth" value="oth"/> Other
          <textarea id="texta1" cols="50" rows="4" placeholder="specify"></textarea>
        </li>
        <br>
        <li> <input type="checkbox"/> Acceptable <input type="checkbox"/> Not acceptable </li>
      </ul>
    </p>

    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
  </div>
</div>

<!--******************************************************-->
<div id="placeholder-cappad">
  <div id="template-cappad" style="display: none">
    <hr>
    <p>
      <ul>
        <li><strong>For HIC in position</strong>: <input id="printnumb2" type="number" style="width: 60px"/> </li>
        <li> Type of problem: <br>
          <input type="checkbox" name="1" value="1"/> Glue too dense
          <br />
          <input type="checkbox" name="No" value="No"/> Glue too liquid
          <br />
          <input type="checkbox" name="No" value="No"/> Glue accidentally touched with fingers
          <br />
          <input type="checkbox" name="No" value="No"/> Glue uniformity on the Cold-Plate
          <br />
          <input type="checkbox"/> Parylene detached from CP
          <br />
          <input id="oth" type="checkbox" name="oth" value="oth"/> Other
          <textarea id="texta1" cols="50" rows="4" placeholder="specify"></textarea>
        </li>
        <li> Solution adopted: <br>
          <textarea rows="3" cols="50" placeholder="describe solution"></textarea><br>
        </li>
        <li> <input type="checkbox"/> Solved <input type="checkbox"/> Not solved </li>
      </ul>
    </p>
    <?php
    include('imagetool/imagetool.html');
    ?>

    <hr>
  </div>
</div>
