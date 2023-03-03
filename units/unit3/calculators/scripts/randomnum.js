function calculate() {
  // gets bounds and counts
  var lower = parseInt(document.getElementById("lower-bound").value.trim());
  var upper = parseInt(document.getElementById("upper-bound").value.trim());
  var count = parseInt(document.getElementById("count").value.trim());

  // checks if replacement is allowed
  var replacement = document.getElementById("replacement").checked;

  // gets output container and clears everything in it
  var output = document.querySelector("#output");
  output.innerHTML = null;

  // gets the border and clears it
  var border = document.getElementById('border');
  border.setAttribute("hidden", "hidden")

  // checks for an impossible case
  if (!replacement && upper - lower < count) {
    output.innerHTML = "Without replacement, you cannot have a count higher than that of the available numbers!";
    return false;
  }

  // if replacement is allowed just pick random numbers
  if (replacement) {
    for (let i = 0; i < count; i++) {
      output.innerHTML += String(randomNumber(lower, upper)) + "<br>";
    }
  }

  // otherwise you need to do something else
  else {
    // creates array of numbers
    var numbers = new Array();

    // does it as many times as the user wants
    for (let i = 0; i < count; i++) {
      // creates a temp number
      var temp = randomNumber(lower, upper);

      // keeps reassigning values until it is a unique number
      while (temp in numbers) {
        temp = randomNumber(lower, upper);
      } 

      // adds the number to the html and array
      numbers.push(temp);
      output.innerHTML += String(temp) + "<br>";
    }
  }

  // displays the border
  border.removeAttribute("hidden");
}

// generates a random number from min (inclusive) to max (exclusive)
function randomNumber(min, max) {
  return Math.floor(Math.random() * (max - min) + min);
}