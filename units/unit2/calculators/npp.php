<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/calculators.php' ?>

<?php startblock('header')?>
  Normal Probability Plot
<?php endblock() ?>

<?php startblock('scripts') ?>
  <script src = "scripts/npp.js"></script>
<?php endblock() ?>

<?php startblock('title')?>
  Normal Probability Plot
<?php endblock() ?>

<?php startblock('settings') ?>
      <div class="mb-3">
        <label for="data-input" class="form-label">Data Input</label>
        <input class="form-control" id="data-input" aria-describedby="data-input-desc">
        <div id="data-input-desc" class="form-text">Enter your data here, separated by spaces and/or commas</div>
      </div>
      <button type="Submit" class="btn btn-primary" onclick="calculate();return false;">Graph</button>
<?php endblock() ?>

<?php startblock('output') ?>
    <div style = "margin: 50px; height: 40vw; width: auto" id="container"></div>
<?php endblock() ?>

