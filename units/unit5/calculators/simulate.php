<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/calculators.php' ?>

<?php startblock('header')?>
  Unit 5 Tools
<?php endblock() ?>

<?php startblock('scripts') ?>
  <script src = "scripts/simulate.js"></script>
<?php endblock() ?>

<?php startblock('title')?>
  Simulate a Sampling Distribution
<?php endblock() ?>

<?php startblock('description') ?>
    <div style = "text-align: center" class = "notes">In this calculator, you can simulate the creation of a sampling distribution! You are able to choose the sample size and have many samples are taken at a time! This tool samples with replacement</div>
    <hr>
<?php endblock() ?>

<?php startblock('settings') ?>
      <select id = "type" class="form-select" aria-label="Default select example" onchange = "change(); return false;">
        <option selected value="blank">Select the population distribution to sample from</option>
        <option value="normal">Normal Distribution</option>
        <option value="skewed">Skewed Distribution</option>
        <option value="uniform">Uniform Distribution</option>
      </select>
      <div hidden = "hidden" id = "settings" class="row g-3" style = "margin-top: 18px;">
        <div class="col">
          <input type="text" class="form-control" id = "n" placeholder="Sample Size" aria-label="Sample Size">
        </div>
        <div class="col">
          <input type="text" class="form-control" id = "cnt" placeholder="Sample Count" aria-label="Sample Count">
        </div>
      </div>
      <button style = "display: block; margin: 30px auto 0px;" type="Submit" class="btn btn-primary" onclick="calculate();return false;">Sample</button>
      <button style = "display: block; margin: 0px auto 30px; font-size: 15px" type="Submit" class="btn" onclick="clearSamples(); return false;">Clear</button>
<?php endblock() ?>

<?php startblock('output') ?>
    <div class = "notes" id = "output" style = "font-size: 25px; text-align: center">
      
    </div>
    
    <div class = "float-start" style = "margin-left: 45px; width: 40vw; height: auto" hidden = "hidden" id = "disp1">
      <label style = "font-size: 20px;" for = "container1">Population Distribution</label>
      <div id = "container1"></div>  
    </div>

    <div class = "float-end" style = "margin-right: 45px; width: 40vw; height: auto" hidden = "hidden" id = "disp2">
      <label style = "font-size: 20px;" for = "container2">Sample Distribution</label>
      <div id = "container2"></div>
    </div>

<?php endblock() ?>