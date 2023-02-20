function calculate() {
  // converts a string to a number, regardless of how much whitespace there is bordering the number
  function toNum(num) {
    return parseFloat(num.trim());
  }
  
  // obtains the data and splits it whenever there is either a space or a comma - idk regex lolll
  var numbers = document.getElementById("data-input").value.trim().split(/[\s,]+/).map(toNum);

  // gets the output to put the five number summary and also the output to put the other information
  var fiveNumOutput = document.querySelector("#num5");
  var others = document.querySelector("#others");

  // sorts the array numerically
  numbers.sort(function(a, b){return a - b});

  // gets the five-number summary + IQR
  var min = ss.minSorted(numbers);
  var q1 = ss.quantileSorted(numbers, 0.25);
  var med = ss.quantileSorted(numbers, .50);
  var q3 = ss.quantileSorted(numbers, .75);
  var max = ss.maxSorted(numbers);
  var IQR = q3 - q1;

  // outputs the values that are in the five number summary + IQR
  var outStr = "<td>" + String(min) + "</td>\n<td>" + String(q1) + "</td>\n<td>" + String(med) + "</td>\n<td>" + String(q3) + "</td>\n<td>" + String(max) + "</td>\n<td>" + IQR.toFixed(5); + "</td>";
  fiveNumOutput.innerHTML = outStr;

  // gets if the data is for a sample or population and declares variance and standard deviation
  var pop = document.getElementById("sampleOrPop");
  var vari;
  var stddev;
  // assigns values to standard dev and variance based on if its for a population or not
  if (pop.checked) {
    console.log("got here");
    vari = ss.variance(numbers);
    stddev = ss.standardDeviation(numbers);
    // adjust variance and deviation
  }
  else {
    vari = ss.sampleVariance(numbers);
    stddev = ss.sampleStandardDeviation(numbers);
  }

  // finds the other values to go in the summary
  var mean = ss.mean(numbers);
  var mode = ss.mode(numbers);
  var range = max - min;

  // prints the values into the table
  var outStr2 = "<td>" + String(mean.toFixed(5)) + "</td>\n<td>" + String(mode) + "</td>\n<td>" + String(stddev.toFixed(5)) + "</td>\n<td>" + String(vari.toFixed(5)) + "</td>\n<td>" + String(range) + "</td>";
  others.innerHTML = outStr2;
  
}