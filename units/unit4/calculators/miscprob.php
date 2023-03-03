<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/calculators.php' ?>

<?php startblock('header')?>
  Unit 4 Tools
<?php endblock() ?>

<?php startblock('scripts') ?>
  <script src = "scripts/miscprob.js"></script>
<?php endblock() ?>

<?php startblock('title')?>
  Miscellanous Probability Operations
<?php endblock() ?>

<?php startblock('description') ?>
    <div style = "text-align: center" class = "notes">This calculator is encouraged to be used with tabular data; for when you are given a two way table and want to conduct operations with it. Therefore, it allows you to enter data in fractional form if you need to. Regular numbers are still acceptable, such as decimals</div>
    <hr>
<?php endblock() ?>

<?php startblock('settings') ?>
      <select id = "type" class="form-select" aria-label="Default select example" onchange = "change(); return false;">
        <option selected value="blank">Select the type of operation:</option>
        <option value="cond">Calculate Conditional Probability: P(A | B) = P(A and B) / P(B)</option>
        <option value="indep">Calculate Independence: P(A | B) = P(A)</option>
        <option value="or">Calculate Union: P(A or B) = P(A) + P(B) - P(A and B)</option>
      </select>
      <div hidden = "hidden" id = "cond-settings" class="row g-3" style = "margin-top: 18px;">
        <div class="col">
          <input type="text" class="form-control" id = "cond-anb" placeholder="P(A and B)" aria-label="Probability of A and B">
        </div>
        <div class="col">
          <input type="text" class="form-control" id = "cond-b" placeholder="P(B)" aria-label="Probability of B">
        </div>
      </div>
      <div hidden = "hidden" id = "indep-settings">
        <div class="row g-3" style = "margin-top: 18px; margin-bottom: 20px;">
          <div class="col">
            <input type="text" class="form-control" id = "indep-agb" placeholder="P(A | B)" aria-label="Probability of A given B">
          </div>
          <div class="col">
            <input type="text" class="form-control" id = "indep-a" placeholder="P(A)" aria-label="Probability of A">
          </div>
        </div>
        <div style = "text-align: center">
          Note: This is not a definitive calculator; it is just an estimation and the true answer depends on several factors like sample size. Use this merely as a reference.
        </div>
      </div>
      <div hidden = "hidden" id = "or-settings">
        <div class="row g-3" style = "margin-top: 18px; margin-bottom: 20px;">
          <div class="col">
            <input type="text" class="form-control" id = "or-a" placeholder="P(A)" aria-label="Probability of A">
          </div>
          <div class="col">
            <input type="text" class="form-control" id = "or-b" placeholder="P(B)" aria-label="Probability of B">
          </div>
          <div id = "or-indep" hidden="hidden" class="col">
            <input type="text" class="form-control" id = "or-anb" placeholder="P(A and B)" aria-label="Probability of A and B">
          </div>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="ind-check" onchange="orChange(); return false;">
          <label class="form-check-label" for="ind-check">
            These variables are not independent
          </label>
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
      
    <div style = "margin: 50px; height: 40vw; width: auto" id="container"></div>

<?php endblock() ?>
