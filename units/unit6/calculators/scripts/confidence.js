const stateTitle = "<div style=\"font-size: 28px;\">State:</div>";
const planTitle = "<div style=\"font-size: 28px;\">Plan:</div>";
const doTitle = "<div style=\"font-size: 28px;\">Do:</div>";
const concludeTitle = "<div style=\"font-size: 28px;\">Conclude:</div>";

function change() {
    // see script.js for documentation
    changeSettings(["prop", "mean"]);
    clearIDS(["state", "plan", "do", "conclude", "container"]);

    // hides the border
    document.getElementById("border").setAttribute("hidden", "hidden");
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

    if (type === "blank") {
        output.innerHTML = "Please select a type!";
        return false;
    }
    else if (type === "prop") {

        // gets values: p is the sample proportion, n is the sample size, and c is the confidence level
        var p = evalProbability(document.getElementById("prop-p").value, output);
        var n = evalNumber(document.getElementById("prop-n").value, output);
        var c = evalNumber(document.getElementById("prop-c").value, output);

        // checkls confidence level seperately because there is a unique error message I need to send
        if (c < 0 || c > 1) {
            output.innerHTML = "The confidence level should be entered as a decimal between 0 and 1!";
            return false;
        }

        // checks for quitting in the other values
        else if (p === "q" || c === "q" || n === "q") {
            return false;
        }

        // converts n to an integer
        n = parseInt(n);

        // calculates mean and standard deviation of the sampling distribution
        mu = p;
        sigma = Math.sqrt(p * (1-p) / n);

        // gets the critical value to be used in the interval
        let criticalValue = ss.inverseErrorFunction(c) * Math.sqrt(2);

        // calculates values for the interval
        lowerBound = mu - criticalValue * sigma;
        upperBound = mu + criticalValue * sigma;

        // prints the answer: 

        // prints the state part
        state.innerHTML = stateTitle + "We will be using a 1-sample z-interval to determine a 95% confidence interval for the [insert context here].";
        
        // calculates whether the large counts condition is met
        let largeCounts = n * p >= 10 && n * (1 - p) >= 10;


        // prints the plan part
        plan.innerHTML = planTitle + "Declaring Variables: <br>" + "&emsp;\\(\\hat{p} = \\text{[insert context here]} \\quad \\quad " +
                                                                   "\\mu_{\\hat{p}} = \\hat{p} = " + p.toFixed(3) + " \\quad \\quad " + 
                                                                   "\\sigma_{\\hat{p}} = \\sqrt{\\frac{\\hat{p}(1-\\hat{p})}{n}} = \\sqrt{\\frac{" + p.toFixed(3) + "(1 - " + p.toFixed(3) + ")}{" + String(n) + "}} = " + sigma.toFixed(3) + "\\)<br><br>" + 
                                     "Checking Conditions: <br>" + "&emsp;1. We assume the sample was taken randomly, if not explicitly stated<br>" + 
                                                                   "&emsp;2. We assume the population size is larger than " + String(10 * n) + "<br>" + 
                                                                   "&emsp;3. We need to check the Large Counts Condition: <br>" + "&emsp;&emsp;\\(n\\hat{p} \\ge 10 \\quad \\quad \\quad \\quad \\ \\ " + String(n) + "\\cdot" + p.toFixed(3) + " \\ge 10 \\quad \\quad " + (n * p).toFixed(3) + "\\ge 10\\)<br>" + 
                                                                                                                            "&emsp;&emsp;\\(n(1-\\hat{p}) \\ge 10 \\quad \\quad " + String(n) + "\\cdot" + (1-p).toFixed(3) + " \\ge 10 \\quad \\quad " + (n * (1 - p)).toFixed(3) + "\\ge 10\\)<br>" + 
                                                                      "&emsp;&emsp;The condition is " + (largeCounts ? "" : "not ") + "met.";

        // loads the mathjax
        loadMathJax("plan");

        // prints the do part
        doo.innerHTML = doTitle + "<br>\\(\\text{interval} = \\mu_\\hat{p} \\pm z^* \\cdot \\sigma_\\hat{p}\\)<br>" + 
                                  "<br>\\(\\text{area of tail} = \\frac{1 - c}{2} = \\frac{1 - " + String(c) + "}{2} = " + ((1 - c) / 2).toFixed(3) + "\\)<br>" +
                                  "<br>\\(z^* = P(z < \\text{area of tail}) = P(z < " + ((c - 1) / 2).toFixed(3) + ") = " + (-criticalValue).toFixed(3) + "\\)<br>" + 
                                  "<br>\\(\\mu_{\\hat{p}} = \\hat{p} = " + p.toFixed(3) + "\\)<br>" + 
                                  "<br>\\(\\sigma_{\\hat{p}} = \\sqrt{\\frac{\\hat{p}(1-\\hat{p})}{n}} = \\sqrt{\\frac{" + p.toFixed(3) + "(1 - " + p.toFixed(3) + ")}{" + String(n) + "}} = " + sigma.toFixed(3) + "\\)<br>" + 
                                  "<br>\\(\\text{interval} = " + p.toFixed(3) + " \\pm " + criticalValue.toFixed(3) + "\\cdot" + sigma.toFixed(3) + " = (" + lowerBound.toFixed(3) + ", " + upperBound.toFixed(3) + ")\\)<br>";

        // loads the mathjax
        loadMathJax("do");

        // prints the conclude part
        conclude.innerHTML = concludeTitle + "We are " + (c * 100) + "% confident that the true proportion of [insert context here] is between " + lowerBound.toFixed(3) + " and " + upperBound.toFixed(3) + ".";
    } 

    else if (type === "mean") {

        // gets the values - m is the sample mean, s is hte sample standard deviation, n is the sample size, c is the confidence level
        var m = evalNumber(document.getElementById("mean-mu").value, output);
        var s = evalNumber(document.getElementById("mean-sigma").value, output);
        var n = evalNumber(document.getElementById("mean-n").value, output);
        var c = evalNumber(document.getElementById("mean-c").value, output);

        // quits if anything is flagged for a quit
        [m, s, n, c].forEach((element) => {
            if (element === "q") {
                return false;
            }
        });

        // converts n to an integer if not already
        n = parseInt(n);

        // assigns the mean and standard deviation of the interval
        mu = m;
        sigma = s / Math.sqrt(n);

        // gets the critical value based on https://gist.github.com/benrasmusen/1261977
        let criticalValue = tdistr(n-1, (1-c)/2);
     
        // gets upper and lower bounds
        lowerBound = mu - sigma * criticalValue;
        upperBound = mu + sigma * criticalValue;

        // prints the answer:
        // prints the state part
        state.innerHTML = stateTitle + "We will be using a one-sample t-interval to determine a " + String(c*100) + "% confidence interval for the [insert context here]";

        // prints the plan part
        plan.innerHTML = planTitle + "Declaring Variables: <br>" + "&emsp;\\(\\overline{x} = \\text{[insert context here]} \\quad \\quad \\mu_{\\overline{x}} \\approx \\overline{x} = " + String(mu) + " \\quad \\quad \\sigma_{\\overline{x}} \\approx \\frac{\\s_x}{\\sqrt{n}} = \\frac{" + String(s) + "}{\\sqrt{" + String(n) + "}} = " + sigma.toFixed(3) + "\\) <br><br>" +
                                     "Checking Conditions: <br>" + "&emsp;1. The sample must be randomly chosen<br>" + 
                                                                   "&emsp;2. We assume the population size is greater than " + String(n * 10) + " (ten times the sample size)<br>" +
                                                                   "&emsp;3. The sample size is " + (n >= 30 ? "" : "not ") + "large enough to meet the Central Limit Theorem (must be at least 30)<br>";
        
        // loads the MathJax
        loadMathJax("plan");

        // prints the do part
        doo.innerHTML = doTitle + "<br>" + "\\(\\text{interval} = \\mu_\\overline{x} \\pm t^* \\cdot \\sigma_\\overline{x}\\)<br>" + 
                                       "<br>\\(\\text{area of tail} = \\frac{1-c}{2} = \\frac{1-" + String(c) + "}{2} = " + ((1-c)/2).toFixed(3) + "\\)<br>" + 
                                       "<br>\\(t^* = \\text{invT(area: " + ((1-c)/2).toFixed(3) + ", df: " + String(n-1) + ")} = " + criticalValue.toFixed(3) + "\\)<br>" + 
                                       "<br>\\(\\mu_\\overline{x} \\approx \\overline{x} = " + String(mu) + "\\)<br>" +
                                       "<br>\\(\\sigma_\\overline{x} \\approx \\frac{s_x}{n} = \\frac{" + String(s) + "}{\\sqrt{" + String(n) + "}} = " + sigma.toFixed(3) + "\\)<br>" + 
                                       "<br>\\(\\text{interval} = " + String(mu) + " \\pm " + criticalValue.toFixed(3) + "\\cdot" + sigma.toFixed(3) + " = (" + lowerBound.toFixed(3) + ", " + upperBound.toFixed(3) + ")\\)<br>";

        // loads the MathJax
        loadMathJax("do");

        // prints the conclude part
        conclude.innerHTML = concludeTitle + "We are " + String(c*100) + "% confident that the true value of [insert context here] is between " + lowerBound.toFixed(3) + " and " + upperBound.toFixed(3) + ".";


    }

    // documentation for the graph function in script.js
    plotNormalGraphs(mu, sigma, container, lowerBound, upperBound);

    // displays the border at the bottom
    border.removeAttribute("hidden");
}

