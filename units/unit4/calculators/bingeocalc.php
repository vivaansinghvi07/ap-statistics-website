<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/calculators.php' ?>

<?php startblock('header')?>
  Unit 4 Tools
<?php endblock() ?>

<?php startblock('scripts') ?>
  <script src = "scripts/bingeocalc.js"></script>
<?php endblock() ?>

<?php startblock('title')?>
  Analyze Binomial and Geometric Variables
<?php endblock() ?>

<?php startblock('settings')?>
      <select id = "type" class="form-select" aria-label="Default select example" onchange = "change(); return false;">
        <option selected value="blank">Select the type of variable:</option>
        <option value="b">Binomial Random Variable</option>
        <option value="g">Geometric Random Variable</option>
      </select>
      <div hidden = "hidden" id = "bin-settings" class="row g-3" style = "margin-top: 20px; margin-bottom: 20px;">
        <div class="col">
          <input type="text" class="form-control" id = "bin-n" placeholder="Number of Trials" aria-label="Number of Trials">
        </div>
        <div class="col">
          <input type="text" class="form-control" id = "bin-p" placeholder="Probability of Success" aria-label="Probability of Success">
        </div>
      </div>
      <div hidden = "hidden" id = "geo-settings">
        <div class="row g-3" style = "margin-top: 20px; margin-bottom: 20px;">
          <div class="col">
            <input type="text" class="form-control" id = "geo-p" placeholder="Probability of Success" aria-label="Probability of Success">
          </div>
        </div>
      </div>
      <button style = "display: block; margin: 30px auto;" type="Submit" class="btn btn-primary" onclick="calculate();return false;">Calculate</button>
<?php endblock() ?>

<?php startblock('output') ?>
    <div class = "notes" id = "output" style = "font-size: 25px; text-align: center">
      
    </div>
    
    <table class="table" id = "tbl" hidden = "hidden">
      <thead>
        <tr>
          <th scope="col" style="width:40vw">Mean</th>
          <th scope="col" style="width:40vw">Standard Deviation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td id = "mean"></td>
          <td id = "stddev"></td>
        </tr>
      </tbody>
    </table>
      
    <div style = "margin: 50px; height: 40vw; width: auto" id="container"></div>

<?php endblock() ?>
