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
        }
        else if (operation === "lower") {
            p_value = areaUnderNormal(0, 1, z);
        }
        else {
            p_value = 2 * areaUnderNormal(0, 1, -Math.abs(z));
        }

        console.log(p_value);
    }
}