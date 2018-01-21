<div id="placeholder-dam">
  <div id="template-dam" style="display: none;">
    <hr>
    <p>
      <ul>
        <li> HS flavor: <br>
          <input type="checkbox"/> L <br>
          <input type="checkbox"/> R
        </li>
        <li> Damaged component: <br>
           <input id="i1" type="checkbox"/> HIC <br>
           <span id="s1">Position: <input type="text" style="width: 90px"/></span>
           <input type="checkbox"/> Space-Frame <br>
           <input type="checkbox"/> Cold-Plate <br>
           <input type="checkbox"/> PB and BB extensions <br>
           <input type="checkbox"/> FPC extension <br>
        </li>

        <li> Description: <br>
          <textarea rows="10" cols="50" placeholder="describe"></textarea><br>
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
