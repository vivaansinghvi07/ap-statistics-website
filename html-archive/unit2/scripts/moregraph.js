function calculate() {
  // function turns strings to numbers regardless of how much whitespace borders it
  function toNum(num) {
    return parseFloat(num.trim());
  }
  // gets the list of numbers, the container for the output, and type of the chart
  var numbers = document.getElementById("data-input").value.trim().split(/[\s,]+/).map(toNum);
  var output = document.querySelector("#container");
  var type = document.getElementById("chart-type").value;
  if (type === "cumrelfreq") {
    // finds the number of numbers and makes an array for frequencies
    var count = numbers.length;
    var freqs = new Array();
    for (let i = 0; i < 1; i += 1 / count) {
      // pushs 1/n, 2/n, 3/n, etc - represents cumulative frquencies
      freqs.push(i);
    }
    
    // sorts the numbers
    numbers.sort(function(a, b){return a - b});
    var store = numbers[0];
    var xFinals = new Array();
    var yFinals = new Array();
    xFinals.push(store);
    yFinals.push(0);
    
    // eliminates duplicates, so that the chart flows better, while saving the highets frequency per number
    for (let i = 1; i < count; i++) {
      if (numbers[i] === store) {
        continue;
      }
      else {
        store = numbers[i];
        xFinals.push(store);
        yFinals.push(freqs[i]);
      }
    }
    
    // layout for scatter plot based on documentation
    var trace = {
      x: xFinals,
      y: yFinals,
      mode: 'lines',
      type: 'scatter'
    };
    var layout = {
      yaxis: {
        range: [0, 1.0]
      }
    };

    // outputs the graph
    Plotly.newPlot(output, [trace], layout);
  }
  else if (type === "density") {
    numbers.sort(function(a, b){return a - b});

    // gets the minimum and maximum values
    var min = ss.minSorted(numbers);
    var max = ss.maxSorted(numbers);

    // gets the density function
    var curve = ss.kernelDensityEstimation(numbers);
    var vals = new Array();
    var outs = new Array();

    // start and end points of the density curve
    var start = min - 0.75 * (max - min);
    var end = max + 0.75 * (max - min);

    // populates the curve with a lot of points between the end and the start
    for (let i = start; i < end; i += (end - start) / 1000) {
      vals.push(i);
      outs.push(curve(i));
    }

    // layout for the graph based on documentation
    var trace = {
      x: vals,
      y: outs,
      fill: 'tozeroy',
      type: 'scatter',
      mode: 'lines'
    };
    var layout = {
      yaxis: {
        title: "Probability"
      }
    }

    // plots the graph
    Plotly.newPlot(output, [trace], layout);
  }
}