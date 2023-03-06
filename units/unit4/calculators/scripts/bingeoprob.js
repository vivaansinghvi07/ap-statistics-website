function change() {
  // gets the type that is selected
  var type = document.getElementById("type").value;

  // gets the binomial and geometric settings
  var binsettings = document.getElementById("bin-settings");
  var geosettings = document.getElementById("geo-settings");

  // clears the output
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

// adds an option for an upper bound when working with geometric probabilities
function geochange() {
  
  var method = document.getElementById("method").value;

  // gets the html things for the inputs of upper and lower bounds
  var upperBound = document.getElementById("upperBound");
  var lowerBound = document.getElementById("geo-k");

  // if you need values between, display the upper bound and change the count name to lower bound
  if (method === "between") {
    upperBound.removeAttribute("hidden");
    lowerBound.setAttribute("placeholder", "Lower Bound (Inclusive)");
  }

  // resets to defaults
  else {
    upperBound.setAttribute("hidden", "hidden");
    lowerBound.setAttribute("placeholder", "Count of Successes");
  }
  
}

function calculate() {
  // gets the type of variables that is being analyzed
  var type = document.getElementById("type").value;

  // gets the output and clears it
  var output = document.getElementById("output");
  output.innerHTML = null;
  
  if (type === "blank") {
    output.innerHTML = "You must select a variable type!";
    return;
  }
  else if (type === "b") {
    // gets lower and upper bounds
    let lb = document.getElementById("bin-lb").value;
    let ub = document.getElementById("bin-ub").value;

    // gets the trial count and probability of a success
    let n = document.getElementById("bin-n").value;
    let p = document.getElementById("bin-p").value;

    // makes sure nothing is empty
    if (!lb || !ub || !n || !p) {
      output.innerHTML = "You cannot leave a field blank!";
      return false;
    }

    // converts the values to numbers
    lb = parseInt(lb);
    ub = parseInt(ub);
    n = parseInt(n);
    p = parseFloat(p);
    
    // makes sure that the bounds are not illegal values (outside of 0-n)
    if (ub > n || lb < 0 || ub < 0 || lb > n) {
      output.innerHTML = "Your bounds are out of range! (They must be at least 0 and at most the number of trials)";
      return false;
    }

    // makes sure hte lower bound is smaller than the upper bound
    else if (lb > ub) {
      output.innerHTML = "You cannot have a lower bound that is larger than the upper bound!";
      return false;
    }

    // keeps input within 1000
    else if (n > 1000) {
      output.innerHTML = "Sorry, this does not support trial numbers greater than 1000!";
      return false;
    }

    // checks that the p value is legal
    else if (p > 1 || p < 0) {
      output.innerHTML = "The probability must be within the range of 0 to 1!";
      return false;
    }

    // function to approximate the logaraithm of a factorial, using Stirling's approximation
    // from https://stackoverflow.com/a/37715980
    let logFac = function(n) {
      return n === 0 ? 0 : (n + .5) * Math.log(n) - n + 0.9189385332046728 + 0.08333333333333333 / n - 0.002777777777777778 * Math.pow(n, -3);
    };
    
    // function that gets the binomial probability of something
    let getCoeff = function(k, n) {
      let logAns = logFac(n) - logFac(k) - logFac(n-k);
      return Math.exp(logAns);
    };

    // function that gets binomial probability
    let getBinom = function(k, n, p) {
      return Math.pow(p, k) * Math.pow(1 - p, n - k) * Math.floor(getCoeff(k, n));
    };

    // initializes the answer
    let ans = 0.0;

    // adds to the answer each binomial probability
    for (let k = lb; k <= ub; k++) {
      ans += getBinom(k, n, p);
    }

    // prints the output neatly
    output.innerHTML = "The probability that there will be between " + String(lb) + " and " + String(ub) + " successes with a probability of success of " + String(p) + " and trial count " + String(n) + " is " + ans.toFixed(4) + ".";
    
  }
  else if (type === "g") {
    // gets the type of probability operation that will be done
    var method = document.getElementById("method").value;

    // gets the input
    var p = document.getElementById("geo-p").value;
    var lb = document.getElementById("geo-k").value;

    // makes sure that the fields are filled
    if (!p || !lb) {
      output.innerHTML = "Please don't leave any field blank!";
      return false;
    }

    // converts the probability and bound to a float
    p = parseFloat(p);
    lb = parseInt(lb);

    // checks if the probability is out of the 0-1 range
    if (p > 1 || p < 0) {
      output.innerHTML = "The probability must be between 0 and 1!";
      return false;
    }
    
    // checks to see if there is a method selected
    if (method === "blank") {
      output.innerHTML = "You must select a probability operation!";
      return false;
    }

    else if (method === "between") {
      // gets the upper bound
      let ub = document.getElementById("geo-kupper").value;

      // makes sure it is filled
      if (!ub) {
        output.innerHTML = "Please don't leave any field blank!";
        return false;
      }

      // converts it to an integer
      ub = parseInt(ub);

      // makes sure it is at least the upper bound
      if (ub < lb) {
        output.innerHTML = "The upper bound must not be less than the lower bound!";
        return false;
      }

      // computes the answer
      let ans = (1 - Math.pow(1 - p, ub)) - (1 - Math.pow(1 - p, Math.max(lb - 1, 0)));

      // displays the answer
      output.innerHTML = "The probability that a chance process with a probability of success of " + String(p) + " will need to be repeated between " + String(lb) + " and " + String(ub) + (ub === 1 ? " time " : " times ") + "is " + ans.toFixed(4) + ".";
      return false;
    }

    // equals method
    else if (method === "equal") {
      // computes the answer
      var ans = lb === 0 ? 0.0 : (Math.pow(1 - p, lb - 1) * Math.pow(p, 1));

      // adjusts the answer output
      var desc = "exactly";
    }

    // greater than method - for when you want the probabiblity that it will take at least k tries
    else if (method === "greater") {
      // computes the answer 
      var ans = lb === 0 ? 1.0 : (Math.pow(1 - p, lb - 1));

      // adjusts the answer output
      var desc = "at least";
    }

    // less than method - for when you want the probability that it will take at most k tries
    else if (method === "less") {
      // computes the answer 
      var ans = lb === 0 ? 0.0 : (1 - Math.pow(1 - p, lb));

      // adjusts the answer output
      var desc = "at most";
    }

    output.innerHTML = "The probability that a chance process with a probability of success " + String(p) + " will need to be repeated " + desc + " " + String(lb) + (lb === 1 ? " time" : " times") + " until a success is observed is " + ans.toFixed(4) + ".";
    return false;
  }
  
}