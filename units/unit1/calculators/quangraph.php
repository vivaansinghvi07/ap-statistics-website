<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/calculators.php' ?>

<?php startblock('header')?>
  Graph Quantitative Data
<? endblock() ?>  

<?php startblock('scripts') ?>
  <script src = "scripts/quangraph.js"></script>
<?php endblock() ?>

<?php startblock('title')?>
  Graph Quantitative Data
<?php endblock() ?>

<?php startblock('settings') ?>
      <div class="mb-3">
        <label for="data-input" class="form-label">Data Input</label>
        <input class="form-control" id="data-input" aria-describedby="data-input-desc">
        <div id="data-input-desc" class="form-text">Enter your data here, separated by spaces and/or commas</div>
        <label style = "margin-top: 10px;" for="chart-type" class="form-label">Graph Type</label>
        <select id = "chart-type" class="form-select" aria-label="Default select example" onchange="addHistOption(); return false;">
          <option selected>Select the type of graph</option>
          <option value="1">Histogram</option>
          <option value="2">Dot Plot</option>
          <option value="3">Box Plot</option>
        </select>
        <div id = "binSettings">
          
        </div>
      </div>
      <button type="Submit" class="btn btn-primary" onclick="calculate();return false;">Graph</button>
<?php endblock() ?>

<?php startblock('output') ?>
  <div style = "margin: 50px; height: 40vw; width: auto" id="container"></div>
<?php endblock() ?>
