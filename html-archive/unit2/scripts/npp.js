function calculate() {
  // turns a string into a float value
  function toNum(num) {
    return parseFloat(num.trim());
  }
  // gets the input and converts it to an array of numbers and the output container
  var numbers = document.getElementById("data-input").value.trim().split(/[\s,]+/).map(toNum);
  var output = document.querySelector("#container");

  // stores the count of numbers
  var count = numbers.length;

  // creates an array of percentiles that is the size of the number array
  var freqs = new Array();
  for (let i = 0; i < 1; i += 1 / count) {
    freqs.push(i);
  }

  // sorts the numbers
  numbers.sort(function(a, b){return a - b});

  // gets the standard deviation
  var sd = ss.sampleStandardDeviation(numbers);

  // gets the z score for each number using the gaussian inverse error function - frequency had to be adjusted to represent area away from the center, not the area from the left - everything adjusted according to simplestatistics documentation
  var temp = freqs.map(function(a){return (a - 0.5) * 2});
  var zScores = temp.map(function(a) {return ss.inverseErrorFunction(a) * Math.sqrt(2) * sd});

  // layout for the graph as stated by the documentation
  var trace = {
    x: numbers,
    y: zScores,
    mode: "markers",
    type: 'scatter',
    marker: {
      size: 10
    }
  };
  var layout = {
    xaxis: {
      title: "Data Value"
    },
    yaxis: {
      title: "Theoretical Z"
    },
  }

  // plots the graph
  Plotly.newPlot(output, [trace], layout);
}