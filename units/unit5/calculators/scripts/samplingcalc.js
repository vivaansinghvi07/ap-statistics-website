var stateTitle = "<div style=\"font-size: 28px;\">State:</div>";
var planTitle = "<div style=\"font-size: 28px;\">Plan:</div>";
var doTitle = "<div style=\"font-size: 28px;\">Do:</div>";
var concludeTitle = "<div style=\"font-size: 28px;\">Conclude:</div>";


// defines a function that calcuates the normal probability of something, for the graph. Source: https://en.wikipedia.org/wiki/Normal_distribution#Cumulative_distribution_function
function normalFunction(mu, sigma, x) {
    return (1 / (sigma * Math.sqrt(2 * Math.PI))) * Math.exp(-0.5 * (((x-mu) / sigma)**2));
}

// defines a function that is the area of a normal curve
function areaUnderNormal(mu, sigma, x) {
    let inp = (x - mu) / (sigma * Math.sqrt(2));
    return ss.errorFunction(inp) / 2 + 0.5;
}

function change() {
    // gets the type of variable being analyzed
    var type = document.getElementById("type").value;
    
    // gets the index of the setting to show
    var index = ["mean", "prop"].findIndex((item) => {
        if (item === type) {
            return true;
        }
    });

    // settings pages for the mean and proportion tests
    var meanSettings = document.getElementById("mean-settings");
    var propSettings = document.getElementById("prop-settings");

    // creates an array of settings
    var settings = [meanSettings, propSettings];

    // goes through each setting and only unhiding the one that is chosen by the type
    settings.forEach((setting, i) => {
        if (i === index) {
            setting.removeAttribute("hidden");
        }
        else {
            setting.setAttribute("hidden", "hidden")
        }
    });
}

// adds the upper bound for the proportions
function propChange() {
    // var for the extra settings
    var extraSetting = document.getElementById("prop-extra-settings");

    // var for the prop lower bound (change name)
    var propLower = document.getElementById("prop-phat-a");

    // checks if the type of operation is between, and changes settings page accordingly
    if (document.getElementById("prop-operation").value === "between") {
        extraSetting.removeAttribute("hidden");
        propLower.setAttribute("placeholder", "Lower Bound (a)");
    }
    else {
        extraSetting.setAttribute("hidden", "hidden");
        propLower.setAttribute("placeholder", "Sample Proportion (a)");
    }
}

// adds the upper bound for the means
function meanChange() {
    // gets the extra setting
    var extraSetting = document.getElementById("mean-extra-settings");

    // gets the var for the mean lower bound
    var meanLower = document.getElementById("mean-xbar-a");

    // if it's between, display the other bound as well
    if (document.getElementById("mean-operation").value === "between") {
        extraSetting.removeAttribute("hidden");
        meanLower.setAttribute("placeholder", "Lower Bound (a)");
    }
    else {
        extraSetting.setAttribute("hidden", "hidden");
        meanLower.setAttribute("placeholder", "Mean Proportion (a)");
    }
}

function calculate() {
    // gets the output and clears it
    var output = document.getElementById("output");
    output.innerHTML = null;

    // gets the outputs for the parts of the answer:

    // makes an empty array and makes an array of the ids
    var spdc = new Array();
    var ids = ["state", "plan", "do", "conclude"];
    ids.forEach((id) => {
        spdc.push(document.getElementById(id));
    });

    // goes through each part and clears it
    spdc.forEach((element) => {
        element.innerHTML = null;
    });

    // converts the array into variables
    var [state, plan, doo, conclude] = spdc;

    // gets the container where the graph goes
    var container = document.getElementById("container");
    container.innerHTML = null;

    // hides the border
    var border = document.querySelector("#bottomborder");
    border.setAttribute("hidden", "hidden");

    // gets the type of variabl 
    var type = document.getElementById("type").value;

    // initializes values for the sample dist mean and sample dist standard deviation
    var sampleMu, sampleSigma;

    // initializes values for the bounds
    var lowerbound, upperbound;

    // makes sure a type is selected
    if (type === "blank") {
        output.innerHTML = "Please select a variable type!";
        return false;
    }

    else if (type === "mean") {
        // gets input 
        let popMu = evalNumber(document.getElementById("mean-mu").value, output);
        let popSigma = evalNumber(document.getElementById("mean-sigma").value, output);
        let n = evalNumber(document.getElementById("mean-n").value, output);

        // checks if we need to quit
        if (popMu === "q" || popSigma === "q" || n === "q") {
            return false;
        }

        // calculates the sample distribution params based on the input
        sampleMu = popMu;
        sampleSigma = popSigma / Math.sqrt(n);

        // gets the type of operation being done
        let operation = document.getElementById("mean-operation").value;

        // makes sure an operation is selected
        if (operation === "blank") {
            output.innerHTML = "Please select an operation!";
            return false;
        }
        
        
        else if (operation === "between") { 
            // gets the bounds
            a = evalNumber(document.getElementById("mean-xbar-a").value, output);
            b = evalNumber(document.getElementById("mean-xbar-b").value, output);

            // checks if need to quit
            if (a === "q" || b === "q") {
                return false;
            }

            // checks bounds
            else if (b < a) {
                output.innerHTML = "The upper bound must not be smaller than the lower bound!";
                return false;
            }

            // sets bounds for graph
            lowerbound = a;
            upperbound = b;

            // gets the probability
            let answer = areaUnderNormal(sampleMu, sampleSigma, b) - areaUnderNormal(sampleMu, sampleSigma, a);

            // fills in the "state" part 
            state.innerHTML = stateTitle + "Using a sampling distribution for means, we need to calculate the probability that a sample mean " + 
                                           "from a sample size of " + String(n) + " will be between the values of " + String(a) + " and " + String(b) + 
                                           " given the population mean " + String(popMu) + " and the population standard deviation " + String(popSigma) + ".";

            // fills in the mathematical method used
            doo.innerHTML = doTitle + "<br>\\(P(" + a + " \\lt \\overline{x} \\lt" + b + ")\\) <br>" + 
                                      "<br>\\(= P(\\overline{x} \\lt" + String(b) + ") - P(\\overline{x} \\lt" + String(a) + ")\\)<br>" +
                                      "<br>\\(= P(z < \\frac{" + String(upperbound) + " - \\mu_{\\overline{x}}}{\\sigma_{\\overline{x}}}) - " + 
                                      "P(z < \\frac{" + String(lowerbound) + " - \\mu_{\\overline{x}}}{\\sigma_{\\overline{x}}})\\)<br>" + 
                                      "<br>\\(= P(z < \\frac{" + String(upperbound) + " - " + String(sampleMu) + "}{" + sampleSigma.toFixed(3) + "}) - " + 
                                      "P(z < \\frac{" + String(lowerbound) + " - " + String(sampleMu) + "}{" + sampleSigma.toFixed(3) + "})\\)<br>" +
                                      "<br>\\(= " + answer.toFixed(3) + "\\)";

            // loads the latex within the math
            loadMathJax("do");

            // fills in the conclusion
            conclude.innerHTML = concludeTitle + "Therefore, we can conclude that based on the given population mean and standard deviation, " + 
            "the probability that a sample of size " + String(n) + " will have a mean value between " + String(lowerbound) + " and " + String(upperbound) + " units is " + answer.toFixed(3) + ".";
            
        }

        else {
            // gets the bound
            a = evalNumber(document.getElementById("mean-xbar-a").value, output);
            
            // checks for quit
            if (a === "q") {
                return false;
            }

            // declares values for lowerbound and upperbound
            lowerbound = sampleMu - sampleSigma * 10;
            upperbound = sampleMu + sampleSigma * 10;

            // assigns either the lowerbound or the upperbound to be a, depending on the type of operation
            if (operation === "greater") {
                lowerbound = a;
            }
            else {
                upperbound = a;
            }

            // gets the probability
            let answer = areaUnderNormal(sampleMu, sampleSigma, upperbound) - areaUnderNormal(sampleMu, sampleSigma, lowerbound);

            // fills in the answer
            state.innerHTML = stateTitle + "Using a sampling distribution for means, we need to calculate the probability that a sample mean " + 
            "from a sample size of " + String(n) + " will be " + operation + " than " + String(a) + " given the population mean " + String(popMu) + 
            " and the population standard deviation " + String(popSigma) + ".";

            let operationString = (operation === "greater" ? "\\gt" : "\\lt");
            // fills in the process
            doo.innerHTML = doTitle + "<br> \\(P(\\overline{x} " + operationString + String(a) + ")\\)<br>" + 
                                       "<br> \\(= P(z " + operationString + " \\frac{" + String(a) + " - " + String(sampleMu) + "}{" + sampleSigma.toFixed(3) + "})\\)<br>" + 
                                       "<br> \\(= " + answer.toFixed(3) + "\\)";

            //loads the MathJax
            loadMathJax("do");

            conclude.innerHTML = concludeTitle + "Therefore, we can conclude that the probability that a sample mean from the given parameters" + 
                                                 "(fill these out when you answer a question; I'm too lazy though) will be " + operation + " than " +
                                                 String(a) + " is " + answer.toFixed(3) + ".";
        }

        // fills the plan section
        plan.innerHTML = planTitle + "Declaring Variables: <br>" + "\\(\\overline{x} = \\text{sample mean} \\quad \\quad \\mu_{\\overline{x}} = 10 \\quad \\quad \\sigma_{\\overline{x}} = \\frac{\\sigma}{\\sqrt{n}} = \\frac{" + String(popSigma) + "}{\\sqrt{" + String(n) + "}} = " + sampleSigma.toFixed(3) + "\\) <br><br>" + 
                            "Checking Conditions: <br>" + 
                            "1. If not stated, we need to assume the sample is chosen randomly <br>" + 
                            "2. The sample is " + ((n >= 30) ? "" : "not ") + "large enough to meet the Central Limit Theorem <br>" + 
                            "3. The population has to be greater than " + String(10 * n) + " (if the problem does not explicitly state the population, make an assumption. <br>";
        
        // loads the MathJax
        loadMathJax("plan");
    }

    else if (type === "prop") {
        // gets input
        let popProp = evalProbability(document.getElementById("prop-p").value, output);
        let n = evalNumber(document.getElementById("prop-n").value, output);

        // checks if need to quit
        if (popProp === "q" || n === "q") {
            return false;
        }
        
        // calculates the parameters
        sampleMu = popProp;
        sampleSigma = Math.sqrt(popProp * (1 - popProp) / n);
    }

    // plots the graph
    plotGraphs(sampleMu, sampleSigma, container, lowerbound, upperbound);

}

function plotGraphs(mu, sigma, container, lowerB, upperB) {

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
            title: "Probability"
        },
        showlegend: false
    };  

    // plots the graph
    Plotly.newPlot(container, [background, foreground], layout);
}

function loadMathJax(id) {
    MathJax.Hub.Queue(["Typeset", MathJax.Hub, id]);
}
