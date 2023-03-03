function change() {

  // function that returns the html for the options depending on the count entered
  let getHTML = function (n) {
    return '<label for = "var' + n + '" class = "form-label">Random Variable ' + n + '</label><div id = "var' + n + '" class="row g-3" style = "margin-bottom: 20px;"><div class="col"><input type="text" class="form-control" id = "m' + n + '" placeholder="Mean" aria-label="Mean"></div><div class="col"><input type="text" class="form-control" id = "std' + n + '" placeholder="Standard Deviation" aria-label="Standard Deviation"></div><div class="col"><input type="text" class="form-control" id = "scl' + n + '" placeholder="Scale Factor" aria-label="Scale Factor"></div><div class="col"><input type="text" class="form-control" id = "cnt' + n + '" placeholder="Count" aria-label="Count"></div></div>';
  };
  
  // gets the number of random variables
  var count = parseInt(document.getElementById("count").value);

  // gets the div in which the options are stored
  var options = document.getElementById("options");
  options.innerHTML = null;

  // clears the output
  document.getElementById("output").innerHTML = null;

  // hides the table
  document.getElementById("tbl").setAttribute("hidden", "hidden");

  // gets the border and hides it
  document.getElementById("border").setAttribute("hidden", "hidden");

  // gets the place where the options are stored
  for (let i = 1; i <= count; i++) {
    options.innerHTML += getHTML(i);
  }
}

function calculate() {
  // gets the number of random variables
  var count = parseInt(document.getElementById("count").value);

  // gets and clears the output
  var output = document.getElementById("output");
  output.innerHTML = null;

  // gets the border and hides it
  var border = document.getElementById("border");
  border.setAttribute("hidden", "hidden");

  // intializes the mean and variance
  var mean = 0;
  var variance = 0;

  // goes through each variable
  for (let i = 1; i <= count; i++) {

    // gets the data from the input for the variable
    let meanTemp = document.getElementById("m" + i).value;
    let stddevTemp = document.getElementById("std" + i).value;
    let scale = document.getElementById("scl" + i).value;
    let cnt = document.getElementById("cnt" + i).value;

    // makes sure all parameters are filled
    if (!cnt || !meanTemp || !scale || !stddevTemp) {
      output.innerHTML = "You must fill all fields!";
      return false;
    }

    // converts the input to numbers
    meanTemp = parseFloat(meanTemp);
    stddevTemp = parseFloat(stddevTemp);
    scale = parseInt(scale);
    cnt = parseInt(cnt);

    // adds to the mean
    mean += meanTemp * scale * cnt;

    // adds to the variance
    for (let j = 0; j < cnt; j++) {
      variance += Math.pow(stddevTemp * scale, 2);
    }
  }
  
  // sets the output values
  document.getElementById("mean").innerHTML = mean.toFixed(4);
  document.getElementById("stddev").innerHTML = (Math.sqrt(variance)).toFixed(4);

  // displays the table and bottom border
  document.getElementById("tbl").removeAttribute("hidden");
  border.removeAttribute("hidden");
  
}