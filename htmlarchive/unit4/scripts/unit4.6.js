function change() {
  // gets the type of distribution to be shown
  var type = document.getElementById("type").value;

  // gets the html divs of the binomial and geometric functions
  var binom = document.getElementById("binom");
  var geom = document.getElementById("geom");

  // gets the borders around the select thing and at the bottom
  var border = document.getElementById("border");

  // clears the page
  if (type === "blank") {
    border.setAttribute("hidden", "hidden");
    binom.setAttribute("hidden", "hidden");
    geom.setAttribute("hidden", "hidden");
  }

  // inserts the binomial notes, clears the geometric notes, and adds the border
  else if (type === "b") {
    binom.removeAttribute("hidden");
    geom.setAttribute("hidden", "hidden");
    border.removeAttribute("hidden");
  }

  // inserts the geometric notes, clears the binomial notes, and adds the border
  else if (type === "g") {
    geom.removeAttribute("hidden");
    binom.setAttribute("hidden", "hidden");
    border.removeAttribute("hidden");
  }
}