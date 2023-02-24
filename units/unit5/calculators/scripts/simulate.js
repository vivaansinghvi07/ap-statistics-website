var dataset;
var samples;
var hr = '<hr style = "margin-top: 40px;">';

function change() {
	// clears the samples
	samples = new Array();

    // gets the type of distribution
    var type = document.getElementById("type").value;

    // gets and clears the output for the graphs
    var container1 = document.getElementById("container1");
	var container2 = document.getElementById("container2");
    container1.innerHTML = null;
	container2.innerHTML = null;

    // gets and clears the output
    var output = document.getElementById("output");
    output.innerHTML = null;

	// gets output containers and readies them for clearing / not clearing
	var disp1 = document.getElementById("disp1");
	var disp2 = document.getElementById("disp2");
	var settings = document.getElementById("settings");

	// creates an array of settings and goes through them, hiding if it is blank or showing if its not
	var settingsArray = [disp1, disp2, settings];
	settingsArray.forEach((setting) => {
		if (type === "blank") {
			setting.setAttribute("hidden", "hidden");
		}
		else {
			setting.removeAttribute("hidden");
		}
	});

    // gets the filename based on the type
    var filename = type + ".txt";

    // obtains the file and puts it into the dataset array - chatGPT wrote this
    fetch("/units/unit5/calculators/datasets/" + filename)
    .then(response => response.text())
    .then(data => {

      // copies the data onto the dataset variable
      dataset = data.split(/[\s\n]+/).map(parseFloat);
      
      // displays the graph
      displayGraph(type, container1, dataset);
      
    })
    .catch(error => console.error(error));

}

// displays graphs for both the population and the sampling distribution
function displayGraph(type, container, data) {
    // declares bounds and steps for the graph based on the type being analyzed
    var graphSettings;
    if (type === "normal") {
      graphSettings = [-3, 3, 0.2];
    }
    else if (type === "skewed") {
      graphSettings = [-2, 5, 0.2];
    }
    else if (type === "uniform") {
      graphSettings = [0, 1, 0.1];
    }

	// deals with if the sample is being used - we want smaller bins (checks if the object reference passed in is an alias of "samples"
	if (data === samples) {
		graphSettings[2] = 1 / (10 * Math.log10(samples.size));
	}

    // assigns the settings to variables
    var [start, end, step] = graphSettings;

    // creates a layout for the graph based on plotly docs
    var trace = {
      x: data,
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

	// gets the type being analyzed
	var type = document.getElementById("type").value;

	// gets output for printing error messages
	var output = document.getElementById("output");
	output.innerHTML = null;

    // gets input for sample size and count
	var n = document.getElementById("n").value;
	var count = document.getElementById("cnt").value;

	// declares the container where sample data goes
	var container2 = document.getElementById("container2");
	container2.innerHTML = null;

	// checks to see if there is a value left blank
	if (!n || !count) {
		output.innerHTML = "Please don't leave values blank!" + hr;
		return false;
	}

	// converts values to numbers
	n = parseInt(n);
	count = parseInt(count);

	// makes values within the range
	if (count > 50000) {
		output.innerHTML = "Please limit sample counts to 50000!" + hr;
		return false;
	}
	if (n > 1000) {
		output.innerHTML = "Please limit sample sizes to 1000!" + hr;
		return false;
	}

	// makes sure they are positive and above 0
	if (n <= 0 || count <= 0) {
		output.innerHTML = "Please enter only positiev integers!";
		return false;
	}

	// does the desired sample count
	for (let i = 0; i < count; i++) {
		// declares a sum to be used in the sample
		let sum = 0;

		// repeats the desired sample size and gets a random number from the dataset, adding to the sum
		for (let j = 0; j < n; j++) {
			sum += dataset[randInt(dataset.length)];
		}

		// gets the average and puts it in the sample
		let average = sum / n;
		samples.push(average);
	}

	// displays the graph
	displayGraph(type, container2, samples);
}

// clears the sample graph
function clearSamples() {
	samples = new Array();
	document.getElementById("container2").innerHTML = null;
}

// function to get a random number from 0 to cap (not including cap)
function randInt(cap) {
	return Math.floor(Math.random() * cap);
}