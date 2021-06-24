var timeleft = 5;
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");

var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
    document.getElementById("countdown").innerHTML = "Finished";
    var x = document.getElementById("countdown").value;
    if(x = "Finished"){
      window.location.assign("http://localhost/PHP-TEST2/result.php");
      stopTime();
    }

  } else {
    document.getElementById("countdown").innerHTML = " Time Remaining: " + timeleft +" s";
  }
  timeleft -= 1;
}, 1000);

function stopTime(){
  clearInterval(downloadTimer);
}

function reLoad() {
  window.location.href = "http://localhost/PHP-TEST2/index.php";
}
function startGame(){
  window.location.href = "http://localhost/PHP-TEST2/question.php";
}
btn.onclick = function() {
  modal.style.display = "block";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

