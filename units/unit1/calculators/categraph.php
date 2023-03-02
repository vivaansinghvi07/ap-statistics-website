<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/calculators.php' ?>

<?php startblock('header')?>
  Unit 1 Tools
<? endblock() ?>

<?php startblock('scripts') ?>
  <script src = "scripts/categraph.js"></script>
<?php endblock() ?>

<?php startblock('title')?>
  Analyze Categorical Data
<?php endblock() ?>

<?php startblock('settings') ?>
  <div class="mb-3">
    <label for="data-input" class="form-label">Data Input</label>
    <input class="form-control" id="data-input" aria-describedby="data-input-desc">
    <div id="data-input-desc" class="form-text">Enter your data here, in the format: "Value1: Count1, Value2: Count2"</div>
    <label style = "margin-top: 10px;" for="chart-type" class="form-label">Graph Type</label>
    <select id = "chart-type" class="form-select" aria-label="Default select example">
      <option selected>Select the type of graph</option>
      <option value="1">Bar Graph</option>
      <option value="2">Pie Chart</option>
    </select>
  </div>
  <button type="Submit" class="btn btn-primary" onclick="calculate();return false;">Graph</button>
<?php endblock() ?>

<?php startblock('output') ?>
  <div style = "margin: 50px; height: 20vw; width: auto" id="container"></div>
<?php endblock() ?>
