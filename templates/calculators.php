<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php startblock('title')?><?php endblock()?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="/style.css" rel="stylesheet">
    <script src="https://cdn.anychart.com/releases/8.0.0/js/anychart-base.min.js"></script>
    <?php startblock('scripts')?><?php endblock()?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-MML-AM_CHTML"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script src = "/script.js"></script>
    <script src="https://cdn.plot.ly/plotly-2.18.0.min.js"></script>
    <script src = "/libraries/statistics-distributions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src='https://unpkg.com/simple-statistics@7.8.0/dist/simple-statistics.min.js'></script>
    <style>
      .question {
        max-height: 50vw;
        width: auto;
        border: 1px solid #000000;
        margin: 50px auto;
        display: block;
      }
    </style>
  </head>
  <body>
    
    
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/index.html">AP Statistics Helper</a>
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
                <li><a class="dropdown-item" href="../../unit1/unit1.html">Unit 1</a></li>
                <li><a class="dropdown-item" href="../../unit2/unit2.html">Unit 2</a></li>
                <li><a class="dropdown-item" href="../../unit3/unit3.html">Unit 3</a></li>
                <li><a class="dropdown-item" href="../../unit4/unit4.html">Unit 4</a></li>
                <li><a class="dropdown-item" href="../../unit5/unit5.html">Unit 5</a></li>
                <li><a class="dropdown-item" href="../../unit6/unit6.html">Unit 6</a></li>
                <li><a class="dropdown-item" href="../../unit7/unit7.html">Unit 7</a></li>
                <li><a class="dropdown-item" href="../../unit8/unit8.html">Unit 8</a></li>
                <li><a class="dropdown-item" href="../../unit9/unit9.html">Unit 9</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class = "title">
      <?php startblock('title')?><?php endblock() ?>
    </header>
    <hr>

    <div style = "text-align: center" class = "notes">When analyzing proportions, please enter your sample proportion as a number frmo 0 to 1. Fractions are accepted, so you can fill in the values of X/n (representing \(\frac{X}{n}\)) in the input if you only have the number of successes \(X\). Please enter the confidence level as a decimal between 0 and 1 rather than a percent.</div>
    <hr>

    <form action = "" class = "data-inp">
      <?php startblock('settings')?><?php endblock() ?>
    </form>
    <hr style = "margin-bottom: 40px">

    <?php startblock('output')?><?php endblock() ?>

    <hr class = "bottomborder" hidden = "hidden" id = "border">

  </body>
</html>