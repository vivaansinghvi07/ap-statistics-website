<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/calculators.php' ?>

<?php startblock('header')?>
  Unit 4 Tools
<?php endblock() ?>

<?php startblock('scripts') ?>
  <script src = "scripts/combinevar.js"></script>
<?php endblock() ?>

<?php startblock('title')?>
  Combine and Scale Random Variables
<?php endblock() ?>

<?php startblock('description') ?>
    <div class = "notes" style = "text-align: center">
      For each random variable you have, use a row to enter its values. The first two options are its mean and standard deviation, which will need to be given already or be calculated. In the next option, the scale factor, you can enter a value by which you are scaling the variable. Note that scaling does not include combining (such as scaling a count of people by the price they each pay for their tickets). The last option is the count, which is how many of that same variable are being used. This is different than scaling. An example of this would be having multiple planes that you are considering, each of which are their own random variable. You can use scale factors and counts in the same row. For more reference, visit <a target = "_blank" class = "pagelink" href = "../notes/unit4.5.html">this notes page</a>.
    </div>
    <hr>
<?php endblock() ?>
    
<?php startblock('settings') ?>
      <label for = "count" class = "form-label">Number of Variables</label>
      <select style = "margin-bottom: 20px" id = "count" class="form-select" aria-label="Default select example" onchange = "change(); return false;">
        <option selected value="1" >1 </option>
        <option value="2" >2 </option>
        <option value="3" >3 </option>
        <option value="4" >4 </option>
        <option value="5" >5 </option>
        <option value="6" >6 </option>
        <option value="7" >7 </option>
        <option value="8" >8 </option>
        <option value="9" >9 </option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
      <div id = "options">
        <label for = "var1" class = "form-label">Random Variable 1</label>
        <div id = "var1" class="row g-3" style = "margin-bottom: 20px;">
          <div class="col">
            <input type="text" class="form-control" id = "m1" placeholder="Mean" aria-label="Mean">
          </div>
          <div class="col">
            <input type="text" class="form-control" id = "std1" placeholder="Standard Deviation" aria-label="Standard Deviation">
          </div>
          <div class="col">
            <input type="text" class="form-control" id = "scl1" placeholder="Scale Factor" aria-label="Scale Factor">
          </div>
          <div class="col">
            <input type="text" class="form-control" id = "cnt1" placeholder="Count" aria-label="Count">
          </div>
        </div>
      </div>
      <button style = "display: block; margin: 30px auto;" type="Submit" class="btn btn-primary" onclick="calculate();return false;">Calculate</button>
<?php endblock() ?>


<?php startblock('output') ?>
    <div class = "notes" id = "output" style = "font-size: 25px; text-align: center">
      
    </div>
    
    <table class="table" id = "tbl" hidden = "hidden">
      <thead>
        <tr>
          <th scope="col" style="width:40vw">Mean</th>
          <th scope="col" style="width:40vw">Standard Deviation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td id = "mean"></td>
          <td id = "stddev"></td>
        </tr>
      </tbody>
    </table>

<?php endblock() ?>
