function evalProbability(str, output) {
    try {
        // splits the string based on if there is a slash
        var num = str.split("/");

        // makes sure someone didnt put a lot of fractions
        if (num.length > 2) {
            output.innerHTML = "Don't stack fractions!";
            return "q";
        }

        // checks if it was left blank
        else if (num[0] === "") {
            output.innerHTML  = "Please don't leave fields blank!";
            return "q";
        }

        else {
            // decimal value if fraction; number if just normal
            var out = num.length === 2 ? parseFloat(num[0]) / parseFloat(num[1]) : parseFloat(num[0]);
        
            // makes sure it is within bounds
            if (out < 0 || out > 1) {
                output.innerHTML = "Make sure probabilities are between 0 and 1!";
                return "q";
            }

            return out;

        }
    }
    
    // if someone entered letters, throw an error
    catch (error) {
        output.innerHTML = "You can only enter numbers!"
        return "q";
    }
}

function evalNumber(str, output) {
    try {
        // splits the string based on if there is a slash
        var num = str.split("/");

        // makes sure someone didnt put a lot of fractions
        if (num.length > 2) {
            output.innerHTML = "Don't stack fractions!";
            return "q";
        }

        // checks if it was left blank
        else if (num[0] === "") {
            output.innerHTML  = "Please don't leave fields blank!";
            return "q";
        }

        else {
            // decimal value if fraction; number if just normal
            var out = num.length === 2 ? parseFloat(num[0]) / parseFloat(num[1]) : parseFloat(num[0]);

            // returns the output
            return out;
        }
    }
    
    // if someone entered letters, throw an error
    catch (error) {
        output.innerHTML = "You can only enter numbers!"
        return "q";
    }
}

// function to plot graphs that has a normal curve, and area filled under it representing something you're calculating
function plotNormalGraphs(mu, sigma, container, lowerB, upperB) {

    // defines bounds for the graph
    let step = sigma * 4;
    let start = mu - step;
    let stop = mu + step;

    // defines arrays for points
    let xValues = new Array(), yValues = new Array();

    // populates the arrays with numbers
    for (let i = start; i < stop; i += step / 1000) {
        xValues.push(i);
        yValues.push(normalFunction(mu, sigma, i));
    }

    // layout for the backgruond graph based on documentation
    var background = {
        x: xValues,
        y: yValues,
        type: 'scatter',
        mode: 'lines',
        line: {
            color:  "rgba(0, 120, 136, 1)", 
        },
    };

    // limits the bounds
    lowerB = lowerB < start ? start : lowerB;
    upperB = upperB > stop ? stop : upperB;

    // creates arrays for teh foreground graph
    let newXValues = new Array(), newYValues = new Array();
    
    // populates the arrats up till the bounds
    for (let i = lowerB; i < upperB; i += step / 1000) {
        newXValues.push(i);
        newYValues.push(normalFunction(mu, sigma, i));
    }

    // creates foregound for the bounds
    var foreground = {
        x: newXValues,
        y: newYValues,
        type: 'scatter',
        mode: 'lines',
        fill: 'tozeroy',
        line: {
            color:  "rgba(0, 120, 136, 1)", 
        },
    };

    // layout for graph
    var layout = {
        title: "Visualization On a Normal Curve",
        yaxis: {
            showticklabels: false
        },
        showlegend: false
    };  

    // plots the graph
    Plotly.newPlot(container, [background, foreground], layout);
}

// loads MathJax for the id 
function loadMathJax(id) {
    MathJax.Hub.Queue(["Typeset", MathJax.Hub, id]);
}

// defines a function that calcuates the normal probability of something, for the graph. Source: https://en.wikipedia.org/wiki/Normal_distribution#Cumulative_distribution_function
function normalFunction(mu, sigma, x) {
    return (1 / (sigma * Math.sqrt(2 * Math.PI))) * Math.exp(-0.5 * (((x-mu) / sigma)**2));
}

// defines a function that is the area of a normal curve
function areaUnderNormal(mu, sigma, x) {
    let inp = (x - mu) / (sigma * Math.sqrt(2));
    return ss.errorFunction(inp) / 2 + 0.5;
}