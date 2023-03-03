const stateTitle = "<div style=\"font-size: 28px;\">State:</div>";
const planTitle = "<div style=\"font-size: 28px;\">Plan:</div>";
const doTitle = "<div style=\"font-size: 28px;\">Do:</div>";
const concludeTitle = "<div style=\"font-size: 28px;\">Conclude:</div>";

function change() {
    // see script.js for documentation
    changeSettings(['mean', 'prop']);
    clearIDS(['state', 'plan' ,'do', 'conclude', 'container', 'output'])
}

function calculate() {
    // gets the type of variable being analyzed
    var type = document.getElementById("type").value;

    // gets the container in which the graph goes
    var container = document.getElementById("container");
    container.innerHTML = null;

    // gets the output for error messages
    var output = document.getElementById("output");
    output.innerHTML = null;

    // gets the border
    var border = document.getElementById("border");
    border.setAttribute("hidden", "hidden");

    // gets the containers for the state plan do conclude
    var spdc = new Array();
    var answerIds = ["state", "plan", "do", "conclude"];

    // fills array and also clears the answer divs
    answerIds.forEach((element) => {
        let s = document.getElementById(element);
        s.innerHTML = null;
        spdc.push(s);
    });

    // assigns array back to variables
    var [state, plan, doo, conclude] = spdc;

    // initializes variables to be used for graphing later on
    var mu, sigma, lowerBound, upperBound;
    var twoSided = false;

    if (type === "blank") {
        output.innerHTML = "Please select a variable!";
        return false
    }
    else if (type === "prop") {
        // gets the type of operation being done
        var operation = document.getElementById("prop-operation").value;

        // checks for no operation
        if (operation === "blank") {
            output.innerHTML = "Please choose an alternate hypothesis!";
            return false;
        }

        // gets values
        var phat = evalProbability(document.getElementById("prop-p").value, output);
        var claim = evalProbability(document.getElementById("prop-claim").value, output);
        var n = evalNumber(document.getElementById("prop-n").value, output);
        var alpha = evalNumber(document.getElementById("prop-a").value, output);

        // checks if any of them need to be quit
        [phat, claim, n, alpha].forEach((element) => {
            if (element === "q") {
                return false;
            }
        });

        // converts sample size to an integer
        n = parseInt(n);

        // finds the mean and standard deviation of the sampling distribution
        mu = claim;
        sigma = Math.sqrt(claim * (1-claim) / n);

        // gets z-score
        let z = (phat - claim) / (sigma);

        // gets the p value
        let p_value;
        if (operation === "greater") {
            p_value = 1 - areaUnderNormal(0, 1, z);

            // plots area from the sample p and up
            lowerBound = phat;
            upperBound = mu + 4 * sigma;
        }
        else if (operation === "lower") {
            p_value = areaUnderNormal(0, 1, z);

            // plots area from sample p and below
            upperBound = phat;
            lowerBound = mu - 4 * sigma;
        }
        else {
            p_value = 2 * areaUnderNormal(0, 1, -Math.abs(z));
            let diff = Math.abs(phat - mu);

            // sets bounds and sets two-sided to be true
            lowerBound = mu - diff;
            upperBound = mu + diff;
            twoSided = true;
        }

        // prints the answer
        state.innerHTML = stateTitle + "We will be using a one-sample z-test for proportions to determine the validity of the claim that [insert context here], using a significance level of \\(\\alpha = " + alpha.toFixed(2) + "\\).";

        // calculates whether the large counts condition is met
        let largeCounts = n * claim >= 10 && n * (1 - claim) >= 10;

        // prints the plan part
        plan.innerHTML = planTitle + "Declaring Variables: <br>" + "&emsp;\\(\\hat{p} = \\text{[insert context here]} = " + phat.toFixed(3) + " \\quad \\quad " +
                                                                   "\\mu_{\\hat{p}} = p_0 = " + claim.toFixed(3) + " \\quad \\quad " + 
                                                                   "\\sigma_{\\hat{p}} = \\sqrt{\\frac{{p_0}(1-{p_0})}{n}} = \\sqrt{\\frac{" + claim.toFixed(3) + "(1 - " + claim.toFixed(3) + ")}{" + String(n) + "}} = " + sigma.toFixed(3) + "\\)<br><br>" + 
                                     "Checking Conditions: <br>" + "&emsp;1. We assume the sample was taken randomly, if not explicitly stated<br>" + 
                                                                   "&emsp;2. We assume the population size is larger than " + String(10 * n) + "<br>" + 
                                                                   "&emsp;3. We need to check the Large Counts Condition: <br>" + "&emsp;&emsp;\\(n \\cdot p_0 \\ge 10 \\quad \\quad \\quad \\quad \\ \\ " + String(n) + "\\cdot" + claim.toFixed(3) + " \\ge 10 \\quad \\quad " + (n * claim).toFixed(3) + "\\ge 10\\)<br>" + 
                                                                                                                            "&emsp;&emsp;\\(n \\cdot (1-{p_0}) \\ge 10 \\quad \\quad " + String(n) + "\\cdot" + (1-claim).toFixed(3) + " \\ge 10 \\quad \\quad " + (n * (1 - claim)).toFixed(3) + "\\ge 10\\)<br>" + 
                                                                      "&emsp;&emsp;The condition is " + (largeCounts ? "" : "not ") + "met.";
                                                        

        // prints do part depending on type of operation
        if (operation === "between") {
            let operationSign = z > 0 ? "\\ge" : "\\le";
            doo.innerHTML = doTitle + "<br>\\(\\text{probability of sample} = P(\\hat{p} " + operationSign + " p_0) \\cdot 2\\)<br>" + 
                                      "<br>\\( = P(z " + operationSign + "\\frac{" + phat.toFixed(3) + " - " + claim.toFixed(3) + "}{" + sigma.toFixed(3) + "}) \\cdot 2\\)<br>" + 
                                      "<br>\\( = " + (p_value / 2).toFixed(3) + " \\cdot 2 = " + (p_value).toFixed(3) + "\\)<br>";
        }

        else {
            let operationSign = operation === "greater" ? "\\ge" : "\\le";
            doo.innerHTML = doTitle + "<br>\\(\\text{probability of sample} = P(\\hat{p} " + operationSign + " p_0)\\)<br>" + 
                                      "<br>\\( = P(z " + operationSign + "\\frac{" + phat.toFixed(3) + " - " + claim.toFixed(3) + "}{" + sigma.toFixed(3) + "})\\)<br>" + 
                                      "<br>\\( = " + p_value.toFixed(3) + "\\)<br>";
        }

        // loads mathjax for everything
        ["state", "plan", "do"].forEach((element) => {
            loadMathJax(element);
        })

        // prints the conclude part
        conclude.innerHTML = concludeTitle + "Because the calculated p-value of " + p_value.toFixed(3) + " is " + (p_value > alpha ? "greater than" : "less than") + " the signifiance level of " + alpha.toFixed(2) + ", we " + (p_value > alpha ? "fail to" : "") + " reject the null hypothesis that [insert context here]."; 
        
    }
    else if (type === "mean") {
        // gets the type of operation
        var operation = document.getElementById("mean-operation").value;

        // checks if operation is blank
        if (operation === "blank") {
            output.innerHTML = "Please choose an alternate hypothesis!";
            return false;
        }

        // gets values
        var xbar = evalNumber(document.getElementById("mean-mu").value, output);
        var s_x = evalNumber(document.getElementById("mean-sigma").value, output);
        var n = evalNumber(document.getElementById("mean-n").value, output);
        var alpha = evalProbability(document.getElementById("mean-a").value, output);
        var claim = evalNumber(document.getElementById("mean-claim").value, output);

        // checks if any need to be quitted
        [xbar, s_x, n, alpha, claim].forEach((element) => {
            if (element === "q") {
                return false;
            }
        });

        // converts n to an integer
        n = parseInt(n);

        // assigns values of the sampling distribution
        mu = claim;
        sigma = s_x / Math.sqrt(n);

        // finds the t-value
        let t = (xbar - mu) / (sigma);

        // gets the p_value - the tprob() function gives upper probabilities
        // also gets the bounds for the graph
        let p_value;
        if (operation === "lower") {
            p_value = 1 - tprob(n-1, t);

            // plots area from sample p and below
            upperBound = xbar;
            lowerBound = mu - 4 * sigma;
        }
        else if (operation === "greater") {
            p_value = tprob(n-1, t);

            // plots area from the sample p and up
            lowerBound = xbar;
            upperBound = mu + 4 * sigma;
        }
        else {
            p_value = 2 * tprob(n-1, Math.abs(t));
            let diff = Math.abs(xbar - mu);

            // sets bounds and sets two-sided to be true
            lowerBound = mu - diff;
            upperBound = mu + diff;
            twoSided = true;
        }

        
    }

    // plots the graph (differently if it's a two sided test)
    if (twoSided) {
        plotTwoSidedGraphs(mu, sigma, container, lowerBound, upperBound);
    }
    else {
        plotNormalGraphs(mu, sigma, container, lowerBound, upperBound);
    }

    // shows the border
    border.removeAttribute("hidden");
}

function plotTwoSidedGraphs(mu, sigma, container, lowerB, upperB) {

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

    // creates arrays for teh foreground graph
    let lowerXValues = new Array(), lowerYValues = new Array(), upperXValues = new Array(), upperYValues = new Array();
    
    // populates the arrays up till the lower bound
    for (let i = start; i < lowerB; i += step / 1000) {
        lowerXValues.push(i);
        lowerYValues.push(normalFunction(mu, sigma, i));
    }

    // populates the array from the upper bound to the end
    for (let i = upperB; i < stop; i += step / 1000) {
        upperXValues.push(i);
        upperYValues.push(normalFunction(mu, sigma, i));
    }

    // creates foregound for the bounds
    var foregroundLower = {
        x: lowerXValues,
        y: lowerYValues,
        type: 'scatter',
        mode: 'lines',
        fill: 'tozeroy',
        line: {
            color:  "rgba(0, 120, 136, 1)", 
        },
    };
    var foregroundUpper = {
        x: upperXValues,
        y: upperYValues,
        type: 'scatter',
        mode: 'lines',
        fill: 'tozeroy',
        line: {
            color:  "rgba(0, 120, 136, 1)", 
        },
    };

    // layout for graph
    var layout = {
        title: "Visualization On A Curve",
        yaxis: {
            showticklabels: false
        },
        showlegend: false
    };  

    // plots the graph
    Plotly.newPlot(container, [background, foregroundLower, foregroundUpper], layout);
}