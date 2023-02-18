function calculate() {

  // obtain data, the type of the graph, and the id for the contianer
  var input = document.getElementById("data-input").value;
  var type = document.getElementById("chart-type").value;
  var output = document.querySelector("#container");

  // clear whatever is in the output contiainer so it can be overwritten
  output.innerHTML = null;

  // splits into category: count pairs
  var stringers = input.split(",");

  // stores the things for input into the table
  var dataVals = new Array();
  for (let i = 0; i < stringers.length; i++) {
    // splits each pair into a category and a count
    let temp = stringers[i].split(":");

    // creates an array with the category and its count
    let push = new Array(temp[0], parseInt(temp[1].trim()));
    dataVals.push(push);
  }

  // initializes data according to the documentation on anychart
  var data = {
    header: ["Value", "Count"],
    rows: dataVals
  };
  var chart;
  // chooses the type of chart
  if (type === "1") {
    chart = anychart.bar();
    chart.data(data);
  }
  else if (type === "2") {
    chart = anychart.pie();
    chart.data(data);
  }
  // creates the chart
  chart.container("container");
  chart.draw();
} 