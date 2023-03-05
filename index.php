<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/calculators.php' ?>

<?php startblock('header')?>
  Statistics
<?php endblock() ?>

<?php startblock('title')?>
  <span style = "font-size: 60px;">Statistics Helper</span>
<?php endblock() ?>

<?php startblock('description') ?>
  <div style = "text-align: center" class = "notes">
    A website built for AP Statistics, with notes and calculators for each topic.
    <br>
    Built by <a href = "https://github.com/vivaansinghvi07" class = "notelink">Vivaan Singhvi</a>. Contact me at <a class = "notelink" href = "mailto: singhvi.vivaan@gmail.com?subject = Stats Website Feedback">singhvi.vivaan@gmail.com</a> if you have any concerns!
  </div>
<?php endblock() ?>

<?php startblock('output') ?>
    <ul class = "notes" style = "font-size: 30px;">
      <li><a class="pagelink" href="/units/unit1/unit1.php">Unit 1: One-Variable Data</a></li>
      <li><a class="pagelink" href="/units/unit2/unit2.php">Unit 2: More with Quantitative Data</a></li>
      <li><a class="pagelink" href="/units/unit3/unit3.php">Unit 3: Experimental Design</a></li>
      <li><a class="pagelink" href="/units/unit4/unit4.php">Unit 4: Probability</a></li>
      <li><a class="pagelink" href="/units/unit5/unit5.php">Unit 5: Sampling Distributions</a></li>
      <li><a class="pagelink" href="/units/unit6/unit6.php">Unit 6: Confidence Intervals</a></li>
      <li><a class="pagelink" href="/units/unit7/unit7.php">Unit 7: Hypothesis Testing</a></li>
    </ul>

    <hr class = "bottomborder">
<?php endblock() ?>