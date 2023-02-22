var dataset;

function change() {
    // gets the type of distribution
    var type = document.getElementById("type").value;

    // gets and clears the output for the graph
    var container1 = document.getElementById("container1");
    container1.innerHTML = null;

    var output = document.getElementById("output");
    output.innerHTML = null;

    // gets the filename based on the type
    var filename = type + ".txt";

    // obtains the file and puts it into the dataset array - chatGPT wrote this
    fetch("/units/unit5/calculators/datasets/" + filename)
    .then(response => response.text())
    .then(data => {
      // copies the data onto the dataset variable
      dataset = data.split(/[\s\n]+/).map(parseFloat);
      
      // displays the graph
      displayGraphWithType(type, container1);
      
    })
    .catch(error => console.error(error));

}

function displayGraphWithType(type, container) {
    // declares bounds and steps for the graph based on the type being analyzed
    var graphSettings;
    if (type === "normal") {
      graphSettings = [-3, 3, 0.2];
    }
    else if (type === "skewed") {
      graphSettings = [-2, 7, 0.2];
    }
    else if (type === "uniform") {
      graphSettings = [0, 1, 0.1];
    }

    // assigns the settings to variables
    var [start, end, step] = graphSettings;

    console.log(dataset);

    // creates a layout for the graph based on plotly docs
    var trace = {
      x: dataset,
      type: 'histogram',
      marker: {
        color: "rgba(0, 120, 136, 0.7)",
        line: {
          color:  "rgba(0, 120, 136, 1)", 
          width: 1
        },
      },
      xbins: {
        start: start,
        end: end, 
        size: step
      },
    };

    // sets a space between bars and title
    var layout = {
      bargap: 0.05,
      yaxis: {
        title: "Count"
      }
    };

    // plots the graph
    Plotly.newPlot(container, [trace], layout);
}

function calculate() {
    // gets the type of distribution to look at
    var type = document.getElementById("type").value;
}