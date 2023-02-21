var dataset;

function change() {
    // gets the type of distribution
    var type = document.getElementById("type").value;

    // gets and clears the output for the graph
    var container1 = document.getElementById("container1");
    container1.innerHTML = null;

    var output = document.getElementById("output");
    output.innerHTML = null;

    // gets the filename based on the type
    var filename = type + ".txt";

    // obtains the file and puts it into the dataset array - chatGPT wrote this
    fetch("/units/unit5/calculators/datasets/" + filename)
    .then(response => response.text())
    .then(data => {
      dataset = data.split(/[\s\n]+/).map(parseFloat);
    })
    .catch(error => console.error(error));

}

function calculate() {
    // gets the type of distribution to look at
    var type = document.getElementById("type").value;
}