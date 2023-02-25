function change () {
    // gets the type of interval to run
    var type = document.getElementById("type").value;
    
    // gets the settings
    var propSettings = document.getElementById("prop-settings");
    var meanSettings = document.getElementById("mean-settings");

    // makes an array of settings
    var settings = [propSettings, meanSettings];

    // gets the index to skip
    var index = ["prop", "mean"].findIndex((t) => {
        if (t === type) {
            return true;
        }
    });

    // goes through the settings array and displaying if needed
    settings.forEach((element, i) => {
        if (i === index) {
            element.removeAttribute("hidden");
        }
        else {
            element.setAttribute("hidden", "hidden");
        }
    });



}