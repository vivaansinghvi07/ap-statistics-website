<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/calculators.php' ?>

<?php startblock('header')?>
  Random Number Generator
<?php endblock() ?>

<?php startblock('scripts') ?>
  <script src = "scripts/randomnum.js"></script>
<?php endblock() ?>

<?php startblock('title')?>
  Random Number Generator
<?php endblock() ?>

<?php startblock('settings')?>
      <div class="row g-3" style = "margin-top: 20px; margin-bottom: 20px;">
        <div class="col">
          <input type="text" class="form-control" id = "lower-bound" placeholder="Lower Bound (Inclusive)" aria-label="Lower Bound (Inclusive)">
        </div>
        <div class="col">
          <input type="text" class="form-control" id = "upper-bound" placeholder="Upper Bound (Exclusive)" aria-label="Upper Bound (Exclusive)">
        </div>
        <div class="col">
          <input type="text" class="form-control" id = "count" placeholder="Count" aria-label="Count">
        </div>
      </div>
      
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="population" id="replacement">
        <label class="form-check-label" for="replacement">
          Allow Replacement
        </label>
      </div>
      <button style = "margin-top: 20px;" type="Submit" class="btn btn-primary" onclick="calculate();return false;">Generate</button>
<?php endblock() ?>

<?php startblock('output') ?>
    <div id="output" class = "notes">
      
    </div>
<?php endblock() ?>
