function change() {
  var type = document.getElementById("num").value;
  var question = document.querySelector("#question");
  var answer = document.querySelector("#answer");
  answer.innerHTML = null;

  if (type === "blank") {
    question.innerHTML = null;
    answer.innerHTML = null;
  }
  else {
    question.innerHTML = '<img class = "question" src="../imgs/' + type + '-question.png">' + '<hr class="bottomborder">';
  }
}

function display() {
  var type = document.getElementById("num").value;
  var answer = document.querySelector("#answer");
  answer.innerHTML = '<img class = "question" src="../imgs/' + type + '-answer.png">';   
}