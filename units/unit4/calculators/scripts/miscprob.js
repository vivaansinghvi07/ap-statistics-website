function change() {
    // gets the type of operation being done
    var type = document.getElementById("type").value;

    // gets the settings
    var indepSettings = document.getElementById("indep-settings");
    var condSettings = document.getElementById("cond-settings");
    var orSettings = document.getElementById("or-settings");

    // clears the output
    document.getElementById("output").innerHTML = null;
    
    // if nothing is selected, clear the settings
    var settings = new Array(indepSettings, condSettings, orSettings);

    // sets the index which will be skipped
    var index = (type === "indep") ? 0 : (type === "cond") ? 1 : (type === "or") ? 2 : 0;

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
    // code this
}

function calcOr(output) {
    // code this
}

function calcCond(output) {
    // code this 
}