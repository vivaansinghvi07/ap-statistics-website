<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/calculators.php' ?>

<?php startblock('header')?>
  Unit 5 Tools
<?php endblock() ?>

<?php startblock('scripts') ?>
  <script src = "scripts/samplingcalc.js"></script>
<?php endblock() ?>

<?php startblock('title')?>
  Calculate the Probability of a Sample
<?php endblock() ?>

<?php startblock('description') ?>
    <div style = "text-align: center" class = "notes">This tool determines the probability that a sample mean is above, below, or between certain values, given entered population distribution values. For the sake of easiness to read, in the options, we represent the bounds by the letters "a" and "b." In the operation selector, we represent the sample probability by "p-hat," and the sample mean as "x-bar." When entering proportions, we support the use of fractions if needed. You will need to add more context than is provided by the tool, as context is key to writing answers in statistics. Additionally, for proportions, if you want to find the chance that there are between a and b successes, you have to enter those as fractions divided by the sample size (you would enter a/n and b/n)</div>
    <hr>
<?php endblock() ?>

<?php startblock('settings') ?>
      <select id = "type" class="form-select" aria-label="Default select example" onchange = "change(); return false;">
        <option selected value="blank">Select the type of variable you are analyzing</option>
        <option value="prop">Sample Proportion</option>
        <option value="mean">Sample Mean</option>
      </select>
      <div hidden = "hidden" id = "prop-settings">
        <div class="row g-3" style = "margin-top: 18px;">
          <div class="col">
            <input type="text" class="form-control" id = "prop-p" placeholder="Population Proportion" aria-label= "Population Proportion">
          </div>
          <div class="col">
            <input type="text" class="form-control" id = "prop-n" placeholder="Sample Size" aria-label="Sample Size">
          </div>
        </div>
        <div class="row g-3" style = "margin-top: 18px;">
          <div class="col">
            <input type="text" class="form-control" id = "prop-phat-a" placeholder="Sample Proportion (a)" aria-label="Sample Proportion">
          </div>
          <div hidden = "hidden" class="col" id = "prop-extra-settings">
            <input type="text" class="form-control" id = "prop-phat-b" placeholder="Upper Bound (b)" aria-label="Sample Proportion Upper Bound">
          </div>
          <div class="col">
            <select id = "prop-operation" class="form-select" aria-label="Default select example" onchange = "propChange(); return false;">
              <option selected value="blank">Select the operation</option>
              <option value="greater">P(p-hat > a)</option>
              <option value="less">P(p-hat < a)</option>
              <option value="between">P(a < p-hat < b)</option>
            </select>
          </div>
        </div>
      </div>
      <div hidden = "hidden" id = "mean-settings">
        <div class="row g-3" style = "margin-top: 18px;">
          <div class="col">
            <input type="text" class="form-control" id = "mean-mu" placeholder="Population Mean" aria-label="Population Mean">
          </div>
          <div class="col">
            <input type="text" class="form-control" id = "mean-sigma" placeholder="Population Standard Deviation" aria-label="Population Standard Deviation">
          </div>
          <div class="col">
            <input type="text" class="form-control" id = "mean-n" placeholder="Sample Size" aria-label="Sample Mean">
          </div>
        </div>
        <div class = "row g-3" style = "margin-top: 18px;">
          <div class="col">
            <input type="text" class="form-control" id = "mean-xbar-a" placeholder="Sample Mean (a)" aria-label="Sample Mean">
          </div>
          <div class="col" hidden="hidden" id = "mean-extra-settings">
            <input type="text" class="form-control" id = "mean-xbar-b" placeholder="Upper Bound (b)" aria-label="Sample Mean Upper Bound">
          </div>
          <div class="col">
            <select id = "mean-operation" class="form-select" aria-label="Default select example" onchange = "meanChange(); return false;">
              <option selected value="blank">Select the operation</option>
              <option value="greater">P(x-bar > a)</option>
              <option value="less">P(x-bar < a)</option>
              <option value="between">P(a < x-bar < b)</option>
            </select>
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

<?php endblock() ?>