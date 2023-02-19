function change() {
  // gets the type that is selected
  var type = document.getElementById("type").value;

  // gets the binomial and geometric settings
  var binsettings = document.getElementById("bin-settings");
  var geosettings = document.getElementById("geo-settings");

  // clears the table and container and output
  document.getElementById("tbl").setAttribute("hidden", "hidden");
  document.getElementById("container").innerHTML = null;
  document.getElementById("output").innerHTML = null;

  // clears the settings
  if (type === "blank") {
    binsettings.setAttribute("hidden", "hidden");
    geosettings.setAttribute("hidden", "hidden");
  }

  // displays the binomial settings
  else if (type === "b") {
    geosettings.setAttribute("hidden", "hidden");
    binsettings.removeAttribute("hidden");
  }

  // displays the geometric settings
  else if (type === "g") {
    binsettings.setAttribute("hidden", "hidden");
    geosettings.removeAttribute("hidden");
  }
}

function calculate() {
  // gets the type of variables that is being analyzed
  var type = document.getElementById("type").value;

  // gets the output and clears it
  var output = document.getElementById("output");
  output.innerHTML = null;

  // gets the container and clears it
  var container = document.getElementById("container");
  container.innerHTML = null;

  // makes sure there is a value selected
  if (type === "blank") {
    output.innerHTML = "You must select a variable type!";
    return false;;
  }

  // processes the binomial
  else if (type === "b") {
    binomial(output, container);
    return false;
  }
  
  // processes the geometric
  else if (type === "g") {
	geometric(output, container);
	return false;
  }
}

function binomial(output, container) {
  // gets the data
  var n = document.getElementById("bin-n").value;
  var p = document.getElementById("bin-p").value;

  // makes sure nothing is blank
  if (!n || !p) {
    output.innerHTML = "Do not leave any fields blank!";
    return false;
  }

  // converts values to a number
  p = parseFloat(p);
  n = parseInt(n);

  // makes sure p is not out of its bounds
  if (p < 0 || p > 1) {
    output.innerHTML = "Your probability must be between 0 and 1!";
    return false;
  }

  // calculates values
  let stddev = Math.sqrt(p * (1-p) * n);
  let mean = n * p;

  // gets outputs and fills them with the values
  let sout = document.getElementById("stddev");
  let mout = document.getElementById("mean");
  sout.innerHTML = stddev.toFixed(3);
  mout.innerHTML = mean.toFixed(3);

  // displays the table
  let tbl = document.getElementById("tbl");
  tbl.removeAttribute("hidden");

  // calculates the binomial distribution
  var binEQ = ss.binomialDistribution(n, p);
  
  // makes arrays for the points
  var xValues = new Array();
  var yValues = new Array();

  // stores the start and end values
  var end = binEQ.length - 1;
  var start = (n * p) - (end - (n * p)) * (0.5 + p);

  // stores a value to get the end value later
  var getEnd = false;
  
  // turns the equation into x and y values
  for (let i = 0; i < binEQ.length; i++) {
    xValues.push(i);
    yValues.push(binEQ[i]);
  }

  // forms the layout for the graph
  var trace = {
    x: xValues,
    y: yValues,
    autobinx: false, 
    histnorm: "count",
    type: 'bar',
    marker: {
      color: "rgba(0, 120, 136, 0.7)",
      line: {
        color:  "rgba(0, 120, 136, 1)", 
        width: 1
      },
    },
    xbins: {
      size: 1
    },
  };

  // assigns titles to the graphs
  var layout =  {
    xaxis: {
      title: "Number of Successes",
      range: [start, end]
    },
    yaxis: {
      title: "Probability"
    } 
  }

  Plotly.newPlot(container, [trace], layout);
  
}

function geometric(output, container) {
	// gets the probability of a success
	var p = document.getElementById("geo-p").value;

	// makes sure a value is filled for the probability
	if (!p) {
		output.innerHTML = "Please fill all fields!";
		return false;
	}

	// converts the probability to a number
	p = parseFloat(p);

	// checks if the probability is within the bounds
	if (p > 1 || p < 0) {
		output.innerHTML = "The probability must be between 0 and 1!";
		return false;
	}

	// computes mean and stddev
	let mean = 1 / p;
	let stddev = Math.sqrt((1-p)/(p**2));

	// gets output and fills them with values
	let sout = document.getElementById("stddev");
	let mout = document.getElementById("mean");
	sout.innerHTML = stddev.toFixed(3);
	mout.innerHTML = mean.toFixed(3);

	// displays the table
	document.getElementById("tbl").removeAttribute("hidden");

	// creates an array that stores probabilities of each occurence - starts it off with the probability of success
	var probs = new Array();
	probs.push(p);

	// says how small the p has to be before the function stops
	var check = p / 100;

	// adds probabilities to the array until it is too small
	for (let i = 2; probs[i - 2] > check; i++) {
		probs.push(p * ((1-p)**(i-1)));
	} 

	// creates x and y value arrays for the plot
	var xValues = new Array();
	var yValues = new Array();

	// goes through every probability in the array and assigns corresponding x and y values to their respective arrays
	probs.forEach(function(probability, index) {
		xValues.push(index + 1);
		yValues.push(probability);
	});

	// forms the graph based on documentation
	var trace = {
		x: xValues,
		y: yValues,
		autobinx: false, 
		histnorm: "count",
		type: 'bar',
		marker: {
			color: "rgba(0, 120, 136, 0.7)",
			line: {
			color:  "rgba(0, 120, 136, 1)", 
			width: 1
			},
		},
		xbins: {
			size: 1
		},
	};

	// adds titles
	var layout =  {
		xaxis: {
		  title: "Number of Successes",
		},
		yaxis: {
		  title: "Probability"
		} 
	}

	// plots the graph
	Plotly.newPlot(container, [trace], layout);

	
}