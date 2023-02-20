function change() {
    // gets the type of operation being done
    var type = document.getElementById("type").value;

    // gets the settings
    var indepSettings = document.getElementById("indep-settings");
    var condSettings = document.getElementById("cond-settings");
    var orSettings = document.getElementById("or-settings");

    // clears the output
    document.getElementById("output").innerHTML = null;
    
    // creates an array for the settings and a corresponding array for the types
    var settings = new Array(indepSettings, condSettings, orSettings);
    var types = new Array("indep", "cond", "or");

    // sets the index that will be skipped based on what item is selected
    var index = types.findIndex(function(item) {
        return item === type;
    });

    // goes through each setting in the array of settings and performs hte necessary operation, either hidiing it or revealing it
    settings.forEach(function(setting, i) {
        if (i === index) {
            setting.removeAttribute("hidden");
        }
        else {
            setting.setAttribute("hidden", "hidden");
        }
    });
}

function orChange() {
    // gets the setting which will show if its not independent
    var setting = document.getElementById("or-indep");

    // if its checked, show it, else hide it
    if (document.getElementById("ind-check").checked) {
        setting.removeAttribute("hidden");
    }
    else {
        setting.setAttribute("hidden", "hidden");
    }
}

function calculate() {
    // gets the type to be analyzed
    var type = document.getElementById("type").value;

    // stores the output as a variable
    var output = document.getElementById("output");

    if (type === "blank") {
        output.innerHTML = "You must select an operation and enter its values!";
        return false;
    }
    else if (type === "indep") {
        calcIndep(output);
    }
    else if (type === "or") {
        calcOr(output);
    }
    else if (type === "cond") {
        calcCond(output);
    }
}

function calcIndep(output) {
    // gets the values for determining independence
    var agb = evalFraction(document.getElementById("indep-agb").value);
    var a = evalFraction(document.getElementById("indep-a").value);

    // checks for illegal input
    if (!a || !agb) {
        output.innerHTML = "Please enter input in the correct format - it must either be a number (0.234) or a fraction (3/13)! Probabilities of zero are not supported.";
        return false;
    }

    // makes sure neither is out of bounds
    if (agb > 1 || a > 1 || a < 0 || agb < 0) {
        output.innerHTML = "Please make sure your probabilities are between 0 and 1!";
        return false;
    }

    // gets the difference between the two
    var diff = Math.abs(agb - a);

    // determines if they are close enough
    var indep = diff < Math.max(a, agb) / 10;

    // prints the output
    output.innerHTML = "Because the probabilities of P(A | B) = " + agb.toFixed(4) + " and P(A) = " + a.toFixed(4) + " differ by " + diff.toFixed(4) + ", it can be determined that the probabilities are " + ((indep) ? "" : "not ") + "close enough for the variables to be considered indepedent.";
}

function calcOr(output) {
    // gets the probabilities
    var a = evalFraction(document.getElementById("or-a").value);
    var b = evalFraction(document.getElementById("or-b").value);

    // makes sure proper format is used
    if (!a || !b) {
        output.innerHTML = "Please enter data in the correct format and do not leave fields blank! Probabilities of zero are not supported.";
        return false;
    }

    // makes sure probabilities are within bounds
    else if (a > 1 || b > 1 || a < 0 || b < 0) {
        output.innerHTML = "Please enter probabilities that are between 0 and 1!";
        return false;
    }

    // if the data is not independent, you will need to get the union input
    if (document.getElementById("ind-check").checked) {
        // gets the value for a and b
        var anb = document.getElementById("or-anb").value;

        // makes sure proper format was used
        if (!anb) {
            output.innerHTML = "Please enter data in the correct format and do not leave fields blank!";
            return false;
        }

        anb = parseFloat(anb);

        // makes sure the probability is within bounds
        if (anb > 1 || anb < 0) {
            output.innerHTML = "Make sure all probabilities are between 0 and 1!";
            return false;
        }
    }
    else {
        var anb = a * b;
    }

    // gets the answer
    var ans = a + b - anb;

    // prints the output
    output.innerHTML = "P(A or B) = " + ans.toFixed(4);

}

function calcCond(output) {
    // gets input
    var anb = evalFraction(document.getElementById("cond-anb").value);
    var b = evalFraction(document.getElementById("cond-b").value);

    // makes sure format is correct
    if (!anb || !b) {
        output.innerHTML = "Please enter data in the correct format and do not leave fields blank! Probabilities of zero are not supported.";
        return false;
    }

    // makes sure probabilites are within correct bounds
    if (b < 0 || anb < 0 || b > 1 || anb > 1) {
        output.innerHTML = "Make sure all probabilities are between 0 and 1!";
        return false;
    }

    // prints output
    output.innerHTML = "P(A | B) = " + (anb / b).toFixed(4);
}

// creates a function that evaulates fractional or non fractional input - can't use eval due to security issues etc
function evalFraction(str) {
    try {
        // splits the string based on if there is a slash
        var num = str.split("/");

        // makes sure someone didnt put a lot of fractions
        if (num.length > 2) {
            return null;
        }
        
        // returns the deciaml value if it was a fraction
        else if (num.length === 2) {
            return parseFloat(num[0]) / parseFloat(num[1]);
        }

        // otherwise, returns the input
        else if (num.length === 1) {
            return parseFloat(num[0]);
        }

        // if nothing was entered just return null
        else {
            return null;
        }
    }
    
    // if someone entered letters, throw an error
    catch (error) {
        return null;
    }
}