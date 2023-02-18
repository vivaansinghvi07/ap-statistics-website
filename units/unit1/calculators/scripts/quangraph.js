function calculate() {
  // converts a string to a number, regardless of how much whitespace there is bordering the number
  function toNum(num) {
    return parseFloat(num.trim());
  }
  // gets the input, splits it by commas and spaces, and converts them to numbers
  var numbers = document.getElementById("data-input").value.trim().split(/[\s,]+/).map(toNum);

  // stores the output contiainer, type of graph, and clears the container
  var output = document.querySelector("#container");
  var type = document.getElementById("chart-type").value;
  output.innerHTML = null;

  // function for if the graph is a histogram
  if (type === "1") {
    // obtains what the width of the bin is
    var binWidth = parseFloat(document.getElementById("bin-setting").value);

    // initializes features of the graph based on the documentation
    var trace = {
      x: numbers,
      type: 'histogram',
      marker: {
        color: "rgba(0, 120, 136, 0.7)",
        line: {
          color:  "rgba(0, 120, 136, 1)", 
          width: 1
        },
      },
      xbins: {
        start: Math.min(numbers), 
        size: binWidth
      },
    };

    // sets a space between bars and title
    var layout = {
      bargap: 0.05,
      yaxis: {
        title: "Count"
      }
    };
    // plots the data
    var data = [trace];
    Plotly.newPlot(output, data, layout);
  }

  // function for if the graph is a dot plot
  else if (type === "2") {
    // initializes the things for the x values of the dots and y values of the counts
    var xvals = new Array();
    var yvals = new Array();

    // sorts the number
    numbers.sort(function(a, b){return a - b});

    // stores a value and starts the count
    let store = numbers[0];
    let count = 0;

    // goes through every number to make the values
    for (let i = 0; i < numbers.length; i++) {
      // if the number is the same as whats stored, add a dot above the current
      if (numbers[i] === store) {
        xvals.push(store)
        count++;
        yvals.push(count);
      }
      // otherwise, just make a new dot at a new x value
      else {
        store = numbers[i];
        xvals.push(store);
        count = 1;
        yvals.push(count);
      }
    }
    // sets up the layout of the graph 
    var trace = {
      x: xvals,
      y: yvals,
      mode: 'markers',
      type: 'scatter',
      marker: {
        size: 12
      }
    };
    var layout = {
      xaxis: {
        title: "Datum",
        range: [Math.min(numbers) - 1, Math.max(numbers) + 1],
      },
      yaxis: {
        title: "Count",
        range: [0, Math.max(yvals) + 1]
      }
    }

    // creates the graph
    var data = [trace];
    Plotly.newPlot(output, data, layout);
  }
  // if it is a box plot, just make the box plot as is shown in the documentation on plotly
  else if (type === "3") {
    var trace = {
      x: numbers,
      type: 'box',
      name: 'Data'
    };
    Plotly.newPlot(output, [trace]);
  }
} 

// if a histogram is selected, support an option where the person can select the width of the bins - gets called every time the option is switched
function addHistOption() {
  var type = document.getElementById("chart-type").value;
  var output = document.querySelector("#binSettings");

  // only happens if the type is a histogram
  if (type === "1") {
    output.innerHTML = '<label for="bin-setting" class="form-label" style = "margin-top: 20px">Bar Width</label>\n<input class="form-control" id="bin-setting" aria-describedby="bin-input-desc">\n<div id="bin-input-desc" class="form-text">Enter the width of the bars for your graph</div>';
  }
  else {
    output.innerHTML = null;
  }
}