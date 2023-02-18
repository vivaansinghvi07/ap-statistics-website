var tableStart = '<table class="table">\n<thead>\n<tr>\n<th scope="col" style="width:25vw">Line of Best Fit</th>\n<th scope="col" style="width:25vw">R</th>\n<th scope="col" style="width:5vw">R-Squared</th>\n</tr>\n</thead>\n<tbody>\n<tr>';
var tableEnd = "</tr>\n</tbody>\n</table>";

function calculate() {
  // function turns strings to numbers regardless of how much whitespace borders it
  function toNum(num) {
    return parseFloat(num.trim());
  }
  // gets the list of numbers, the container for the output, and type of the chart
  var xValues = document.getElementById("data-input-x").value.trim().split(/[\s,]+/).map(toNum);
  var yValues = document.getElementById("data-input-y").value.trim().split(/[\s,]+/).map(toNum);

  // gets and clears output locations
  var numbersOutput = document.querySelector("#output");
  var graphOutput = document.querySelector("#container");
  numbersOutput.innerHTML = null;
  graphOutput.innerHTML = null;

  // gets the type of graph to be plotted, if at all
  var type = document.getElementById("chart-type").value;

  // makes sure that the lengths of the x and y values match
  if (xValues.length != yValues.length) {
    numbersOutput.innerHTML = '<p class = "title" style="font-size: 40px; margin-top: 50px">Make sure you have the same amount of x-values and y-values!</p>';
    return false;
  }

  // stores points rather than lists of x and y values
  var data = new Array();
  for (let i = 0; i < xValues.length; i++) {
    data.push([xValues[i], yValues[i]]);
  }

  // calculates r, r squared, and regression line
  var r = ss.sampleCorrelation(xValues, yValues);
  var line = ss.linearRegression(data);
  var lineEQ = ss.linearRegressionLine(line);
  var rSquared = ss.rSquared(data, lineEQ);

  // constructs the output for the regression line
  var lineOut = "y = " + line.b.toFixed(4) + " + " + line.m.toFixed(4) + "x";

  // creates the table, using the html at the top
  numbersOutput.innerHTML = tableStart + "<td>" + lineOut + "</td>\n<td>" + r.toFixed(4) + "</td>\n<td>" + rSquared.toFixed(4) + "</td>\n" + tableEnd;

  if (type === "regression") {
    // finds where to begin and end the regression line
    let min = ss.min(xValues)
    let max = ss.max(xValues);
    var step = (max - min) / 10
    var start = min - step;
    var end = max + step;
    var startY = lineEQ(start);
    var endY = lineEQ(end);

    // layout for the points
    var pointTrace = {
      x: xValues,
      y: yValues,
      type: "scatter",
      mode: "markers",
      marker: {
        size: 10,
        color: "rgba(0, 120, 150, 1.0)"
      },
      name: "Points"
    }

    // layout for the line
    var lineTrace = {
      x: [start, end],
      y: [startY, endY],
      type: 'scatter',
      mode: 'lines',
      line: {
        color: "rgba(0, 120, 150, 0.5)"
      },
      name: "Regression Line"
    }

    // plots both, with the points on top of the line
    Plotly.newPlot(graphOutput, [lineTrace, pointTrace]);
    
  }

  else if (type === "residual") {

    // populates a residuals array using the previously determined regression line equation
    var yResiduals = new Array();
    for (let i = 0; i < xValues.length; i++) {
      // observed minus expected 
      yResiduals.push(yValues[i] - lineEQ(xValues[i]));
    }

    // layout for the x-values against the residuals
    var trace = {
      x: xValues,
      y: yResiduals,
      type: "scatter",
      mode: "markers",
      marker: {
        size: 10,
        color: "rgba(0, 120, 150, 1.0)"
      }
    }

    // plots the graph
    Plotly.newPlot(graphOutput, [trace]);
  }
}