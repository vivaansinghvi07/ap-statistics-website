// defines a function that calcuates the normal probability of something - for the graph
function normalFunction(mu, sigma, x) {
    return (1 / (sigma * Math.sqrt(2))) * Math.exp(-0.5 * (((x-mu) / sigma)**2));
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
