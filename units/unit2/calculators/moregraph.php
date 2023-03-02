<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/calculators.php' ?>

<?php startblock('header')?>
  Unit 2 Tools
<?php endblock() ?>

<?php startblock('scripts') ?>
  <script src = "scripts/moregraph.js"></script>
<?php endblock() ?>

<?php startblock('title')?>
  More Quantitative Graphs
<?php endblock() ?>

<?php startblock('settings')?>
      <div class="mb-3">
        <label for="data-input" class="form-label">Data Input</label>
        <input class="form-control" id="data-input" aria-describedby="data-input-desc">
        <div id="data-input-desc" class="form-text">Enter your data here, separated by spaces and/or commas</div>
      </div>
      <select id = "chart-type" class="form-select" aria-label="Default select example">
        <option selected>Select the type of graph</option>
        <option value="cumrelfreq">Cumulative Relative Frequency</option>
        <option value="density">Density Curve</option>
      </select>
      <button style = "margin-top: 20px" type="Submit" class="btn btn-primary" onclick="calculate();return false;">Graph</button>
    </form>
<?php endblock() ?>

<?php startblock('output')?>
    <div style = "margin: 50px; height: 40vw; width: auto" id="container"></div>
<?php endblock() ?>
