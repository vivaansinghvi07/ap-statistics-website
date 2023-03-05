<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/calculators.php' ?>

<?php startblock('header')?>
  Analyze Quantitative Data
<?php endblock() ?>

<?php startblock('scripts') ?>
  <script src = "scripts/quancalc.js"></script>
<?php endblock() ?>

<?php startblock('title')?>
  Analyze Quantitative Data
<?php endblock() ?>

<?php startblock('settings') ?>
      <div class="mb-3">
        <label for="data-input" class="form-label">Data Input</label>
        <input class="form-control" id="data-input" aria-describedby="data-input-desc">
        <div id="data-input-desc" class="form-text">Enter your data here, separated by spaces and/or commas</div>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="population" id="sampleOrPop">
        <label class="form-check-label" for="sampleOrPop">
          This is data for a population
        </label>
      </div>
      <button style = "margin-top: 20px;" type="Submit" class="btn btn-primary" onclick="calculate();return false;">Analyze</button>
<?php endblock() ?>

<?php startblock('output') ?>

    <table class="table" style="margin-bottom: 40px">
      <thead>
        <tr>
          <th scope="col" style="width:18vw">Minimum</th>
          <th scope="col" style="width:15vw">Q<sub>1</sub></th>
          <th scope="col" style="width:17vw">Median</th>
          <th scope="col" style="width:15vw">Q<sub>3</sub></th>
          <th scope="col" style="width:18vw">Maximum</th>
          <th scope="col" style="width:3vw">IQR</th>
        </tr>
      </thead>
      <tbody>
        <tr id="num5">

        </tr>
      </tbody>
    </table>

     <table class="table">
      <thead>
        <tr>
          <th scope="col" style="width:15vw">Mean</th>
          <th scope="col" style="width:15vw">Mode</th>
          <th scope="col" style="width:22vw">Standard Deviation</th>
          <th scope="col" style="width:15vw">Variance</th>
          <th scope="col" style="width:3vw">Range</th>
        </tr>
      </thead>
      <tbody>
        <tr id="others">

        </tr>
      </tbody>
    </table>

<?php endblock() ?>