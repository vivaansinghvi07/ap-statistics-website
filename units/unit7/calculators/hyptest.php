<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/calculators.php' ?>

<?php startblock('header') ?>
    Hypothesis Tester
<?php endblock() ?>

<?php startblock('scripts') ?>
    <script src = "scripts/hyptest.js"></script>
<?php endblock() ?>

<?php startblock('title') ?>
    Run a Hypothesis Test 
<?php endblock() ?>

<?php startblock('description') ?>
    <div style = "text-align: center" class = "notes">Using this tool, you will be able to perform a rudimentary hypotehsis test. Proportions must always be between 0 and 1, so if you only have the count of success and the sample size, you must enter the probability of success as a fraction. When writing an answer down for a hypothesis test, remember to always add enough context.</div>
    <hr>
<?php endblock() ?>

<?php startblock('settings') ?>
      <select id = "type" class="form-select" aria-label="Default select example" onchange = "change(); return false;">
        <option selected value="blank">Select the type of variable you want to test</option>
        <option value="prop">Population Proportion</option>
        <option value="mean">Population Mean</option>
      </select>
      <div hidden = "hidden" id = "prop-settings">
        <div class="row g-3" style = "margin-top: 18px;">
          <div class="col">
            <input type="text" class="form-control" id = "prop-p" placeholder="Sample Proportion" aria-label= "Population Proportion">
          </div>
          <div class="col">
            <input type="text" class="form-control" id = "prop-n" placeholder="Sample Size" aria-label="Sample Size">
          </div>
          <div class="col">
            <input type="text" class="form-control" id = "prop-claim" placeholder="Claimed Proportion" aria-label="Claim">
          </div>
        </div>
        <div class="row g-3" style = "margin-top: 18px;">
          <div class="col">
            <input type="text" class="form-control" id = "prop-a" placeholder="Significance Level" aria-label="Significance Level">  
          </div>
          <div class = "col">
            <select id = "prop-operation" class="form-select" aria-label="Default select example">
              <option selected value="blank">Select your alternate hypothesis</option>
              <option value="lower">p < claim</option>
              <option value="greater">p > claim</option>
              <option value="between">p != claim</option>
            </select>
          </div>
        </div>      
      </div>
      <div hidden = "hidden" id = "mean-settings">
        <div class="row g-3" style = "margin-top: 18px;">
          <div class="col">
            <input type="text" class="form-control" id = "mean-mu" placeholder="Sample Mean" aria-label="Population Mean">
          </div>
          <div class="col">
            <input type="text" class="form-control" id = "mean-sigma" placeholder="Sample Standard Deviation" aria-label="Population Standard Deviation">
          </div>
          <div class="col">
            <input type="text" class="form-control" id = "mean-n" placeholder="Sample Size" aria-label="Sample Mean">
          </div>
          <div class="col">
            <input type="text" class="form-control" id = "mean-claim" placeholder="Claimed Mean" aria-label="Claim">
          </div>
        </div> 
        <div class = "row g-3" style = "margin-top: 18px;">
          <div class="col">
            <input type="text" class="form-control" id = "mean-a" placeholder="Significance Level" aria-label="Confidence Level">
          </div>
          <div class="col">
            <select id = "mean-operation" class="form-select" aria-label="Default select example">
              <option selected value="blank">Select your alternate hypothesis</option>
              <option value="lower">mu < claim</option>
              <option value="greater">mu > claim</option>
              <option value="between">mu != claim</option>
            </select>
          </div>
        </div>
      </div>
      <button style = "display: block; margin: 30px auto 0px;" type="Submit" class="btn btn-primary" onclick="calculate();return false;">Calculate</button>
<?php endblock()?>

<?php startblock('output') ?>

    <div class = "notes" id = "output" style = "font-size: 25px; text-align: center">
    
    </div>

    <div class = "notes">
      <div id = "state"></div>
      <br>
      <div id = "plan"></div>
      <br>
      <div class = "row">
        <div class = "column" id = "container" style = "width: 35wv; height: auto"></div>
        <div class = "column" id = "do"></div>
      </div>
      <br>
      <div id = "conclude"></div>
    </div>

    <hr class = "bottomborder" hidden = "hidden" id = "border">

<?php endblock() ?>