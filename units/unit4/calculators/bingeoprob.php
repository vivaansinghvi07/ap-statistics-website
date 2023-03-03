<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/calculators.php' ?>

<?php startblock('header')?>
  Unit 4 Tools
<?php endblock() ?>

<?php startblock('scripts') ?>
  <script src = "scripts/bingeoprob.js"></script>
<?php endblock() ?>

<?php startblock('title')?>
  Binomial and Geometric Probability Calculator
<?php endblock() ?>

<?php startblock('settings') ?>
      <select id = "type" class="form-select" aria-label="Default select example" onchange = "change(); return false;">
        <option selected value="blank">Select the type of variable:</option>
        <option value="b">Binomial Random Variable</option>
        <option value="g">Geometric Random Variable</option>
      </select>
      <div hidden = "hidden" id = "bin-settings" class="row g-3" style = "margin-top: 20px; margin-bottom: 20px;">
        <div class="col">
          <input type="text" class="form-control" id = "bin-n" placeholder="Number of Trials" aria-label="Number of Trials">
        </div>
        <div class="col">
          <input type="text" class="form-control" id = "bin-p" placeholder="Probability of Success" aria-label="Probability of Success">
        </div>
        <div class="col">
          <input type="text" class="form-control" id = "bin-lb" placeholder="Lower Bound (Inclusive)" aria-label="Lower Bound">
        </div>
        <div class="col">
          <input type="text" class="form-control" id = "bin-ub" placeholder="Upper Bound (Inclusive)" aria-label="Upper Bound">
        </div>
      </div>
      <div hidden = "hidden" id = "geo-settings">
        <div class="row g-3" style = "margin-top: 20px; margin-bottom: 20px;">
          <div class="col">
            <input type="text" class="form-control" id = "geo-p" placeholder="Probability of Success" aria-label="Probability of Success">
          </div>
          <div class="col">
            <input type="text" class="form-control" id = "geo-k" placeholder="Count of Successes" aria-label="Count of Success">
          </div>
          <div class="col" id = "upperBound" hidden = "hidden">
            <input type="text" class="form-control" id = "geo-kupper" placeholder="Upper Bound (Inclusive)" aria-label="Upper Bound">
          </div>
          <div class = "col">
            <select id = "method" class="form-select" aria-label="Default select example" onchange = "geochange(); return false;">
              <option selected value="blank">Select the probability operation to be done</option>
              <option value="less">Less than or equal to (at most)</option>
              <option value="greater">Greater than or equal to (at least)</option>
              <option value="equal">Equal to</option>
              <option value="between">Between</option>
            </select>
          </div>
        </div>
      </div>
      <button style = "display: block; margin: 30px auto;" type="Submit" class="btn btn-primary" onclick="calculate();return false;">Calculate</button>
<?php endblock() ?>


<?php startblock('output')?>    
    <div class = "notes" id = "output" style = "font-size: 25px; text-align: center">
      
    </div>
<?php endblock() ?>
