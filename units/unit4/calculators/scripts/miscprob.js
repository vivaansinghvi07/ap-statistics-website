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

    settings.forEach(function(setting, i) {
        if (i === index) {
            setting.removeAttribute("hidden");
        }
        else {
            setting.setAttribute("hidden", "hidden");
        }
    });
}

