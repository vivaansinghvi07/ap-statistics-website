<?php require_once $_SERVER['DOCUMENT_ROOT'].'/libraries/template-inheritance/ti.php' ?><!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php startblock('unit') ?> <?php endblock() ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="/style.css" rel="stylesheet">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </head>
  <body>
    
    
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/index.php">AP Statistics Helper</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Units
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/units/unit1/unit1.php">Unit 1: One-Variable Data</a></li>
                <li><a class="dropdown-item" href="/units/unit2/unit2.php">Unit 2: More with Quantitative Data</a></li>
                <li><a class="dropdown-item" href="/units/unit3/unit3.php">Unit 3: Experimental Design</a></li>
                <li><a class="dropdown-item" href="/units/unit4/unit4.php">Unit 4: Probability</a></li>
                <li><a class="dropdown-item" href="/units/unit5/unit5.php">Unit 5: Sampling Distributions</a></li>
                <li><a class="dropdown-item" href="/units/unit6/unit6.php">Unit 6: Confidence Intervals</a></li>
                <li><a class="dropdown-item" href="/units/unit7/unit7.php">Unit 7: Hypothesis Testing</a></li>
                <li><a class="dropdown-item disabled">More coming soon!</a></li>
              </ul>
            </li>
            <li class = "nav-item">
              <a class="nav-link active" href = "/credits.php">Credits</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class = "title">
        <?php startblock('title') ?>
        <?php endblock()?>
    </header>
    <hr style = "margin-bottom: 30px;">
    
    <ul class = "notes">
        <?php startblock('notes') ?>
        <?php endblock()?>
    </ul>
    
    
    <hr class = "bottomborder">
    
  </body>
</html>