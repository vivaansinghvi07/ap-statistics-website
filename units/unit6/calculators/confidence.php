<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/calculators.php' ?>

<?php startblock('header')?>
  Confidence Interval
<?php endblock() ?>

<?php startblock('scripts') ?>
  <script src = "scripts/confidence.js"></script>
<?php endblock() ?>

<?php startblock('title')?>
  Calculate a Confidence Interval
<?php endblock() ?>

<?php startblock('description') ?>
    <div style = "text-align: center" class = "notes">When analyzing proportions, please enter your sample proportion as a number frmo 0 to 1. Fractions are accepted, so you can fill in the values of X/n (representing \(\frac{X}{n}\)) in the input if you only have the number of successes \(X\). Please enter the confidence level as a decimal between 0 and 1 rather than a percent.</div>
    <hr>
<?php endblock() ?>

<?php startblock('settings') ?>
      <select id = "type" class="form-select" aria-label="Default select example" onchange = "change(); return false;">
        <option selected value="blank">Select the type of variable you want a confidence interval of</option>
        <option value="prop">Proportion</option>
        <option value="mean">Mean</option>
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
            <input type="text" class="form-control" id = "prop-c" placeholder="Confidence Level" aria-label="Confidence Level">
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
            <input type="text" class="form-control" id = "mean-c" placeholder="Confidence Level" aria-label="Confidence Level">
          </div>
        </div>
      </div>
      <button style = "display: block; margin: 30px auto 0px;" type="Submit" class="btn btn-primary" onclick="calculate();return false;">Calculate</button>
<?php endblock() ?>


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

<?php endblock() ?>>