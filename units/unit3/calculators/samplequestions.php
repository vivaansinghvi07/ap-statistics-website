
<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/calculators.php' ?>

<?php startblock('header')?>
  Unit 3 Tools
<?php endblock() ?>

<?php startblock('scripts') ?>
  <script src = "scripts/samplequestions.js"></script>
  <style>
    .question {
      max-height: 50vw;
      width: auto;
      border: 1px solid #000000;
      margin: 50px auto;
      display: block;
    }
  </style>  
<?php endblock() ?>

<?php startblock('title')?>
  Sample Questions
<?php endblock() ?>

<?php startblock('settings') ?>
      <select id = "num" class="form-select" aria-label="Default select example" onchange = "change(); return false;">
        <option selected value="blank">Select the question</option>
        <option value="q1">Sample Question 1</option>
        <option value="q2">Sample Question 2</option>
        <option value="q3">Sample Question 3</option>
      </select>
      <button style = "display: block; margin: 30px auto;" type="Submit" class="btn btn-primary" onclick="display();return false;">Show Answer</button>
<?php endblock() ?>

<?php startblock('output') ?>
    
    <div id="answer">
      
    </div>
    <div id="question">
      
    </div>
<?php endblock() ?>
