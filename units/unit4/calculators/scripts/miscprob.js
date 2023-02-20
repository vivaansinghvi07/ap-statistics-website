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
    var agb = evalFraction(document.getElementById("indep-agb").value, output);
    var a = evalFraction(document.getElementById("indep-a").value, output);

    // checks if function needs to be quit
    if (agb === "q" || a === "q") {
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
    var a = evalFraction(document.getElementById("or-a").value, output);
    var b = evalFraction(document.getElementById("or-b").value, output);

    // checks if need to quit
    if (a === "q" || b === "q") {
        return false;
    }

    // if the data is not independent, you will need to get the union input
    if (document.getElementById("ind-check").checked) {
        // gets the value for a and b
        var anb = evalFraction(document.getElementById("or-anb").value, output);

        // checks if needs to quit
        if (anb === "q") {
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
    var anb = evalFraction(document.getElementById("cond-anb").value, output);
    var b = evalFraction(document.getElementById("cond-b").value, output);

    // check if the function needs to be exited based on quits
    if (anb === "q" || b === "q") {
        return false;
    }

    // prints output
    output.innerHTML = "P(A | B) = " + (anb / b).toFixed(4);
}

// creates a function that evaulates fractional or non fractional input - can't use eval due to security issues etc
function evalFraction(str, output) {
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