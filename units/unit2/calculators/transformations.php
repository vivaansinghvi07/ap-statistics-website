<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/calculators.php' ?>

<?php startblock('header')?>
  Unit 2 Tools
<?php endblock() ?>

<?php startblock('scripts') ?>
  <script src = "scripts/transformations.js"></script>
<?php endblock() ?>

<?php startblock('title')?>
  Transform to Obtain Linearity
<?php endblock() ?>

<?php startblock('settings')?>
      <div class="mb-3">
        <label for="data-input-x" class="form-label">Explanatory Variable Data</label>
        <input class="form-control" id="data-input-x" aria-describedby="data-input-desc-x">
        <div id="data-input-desc-x" class="form-text">Enter your x-values here, separated by spaces and/or commas</div>
      </div>
      <div class="mb-3">
        <label for="data-input-y" class="form-label">Response Variable Data</label>
        <input class="form-control" id="data-input-y" aria-describedby="data-input-desc-y">
        <div id="data-input-desc-y" class="form-text">Enter your y-values here, separated by spaces and/or commas</div>
      </div>
      <select id = "trans-type" class="form-select" aria-label="Default select example">
        <option selected>Select the type of transformation (empty for none)</option>
        <option value="exp">Exponential Shift (x against log(y))</option>
        <option value="pow">Power Shift (log(x) against log(y))</option>
      </select>
      <button style = "margin-top: 20px" type="Submit" class="btn btn-primary" onclick="calculate();return false;">Calculate</button>
<?php endblock()?>

<?php startblock('output')?>
    <div id = "output">
      
    </div>

    <div style = "margin: 50px; height: 40vw; width: auto" id="container"></div>
<?php endblock()?>
